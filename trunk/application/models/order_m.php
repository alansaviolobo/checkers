<?php
class Order_m extends Model
{
    function _construct()
    {
    }

    function orders_list()
    {
        $this->db->select('*');
        $this->db->from('orders');
        $this->db->where_in('status', 'open');
        $this->db->like('source', $this->session->userdata('source_type'), 'after');
        $this->db->order_by('source', 'asc');

        return $this->db->get()->result_array();
    }

    function orders_list_source($source)
    {
        $this->db->where('source', $source);
        $this->db->where_in('status', 'open');

        return $this->db->get('orders')->result_array();
    }

    function new_order($menu, $source, $quantity)
    {
        $query_bill = $this->db->get_where('bill', array ('source'=>$source, 'paid'=>'print'))->row();
        if ($query_bill == null)
        {
            $query_menu = $this->db->get_where('menu', array ('name'=>$menu))->row();
            $query_ticket = $this->db->get_where('ticket', array ('menu'=>$menu))->last_row();

            $this->db->where('source', $source);
            $this->db->where('menu', $menu);
            $this->db->where_in('status', 'open');

            $orders = $this->db->get('orders')->row();

            if ($query_menu->section == 'Bar')
            {
                if ($query_ticket != null)
                {
                    if ($query_ticket->total == 0)
                    {
                        return 'Alert. No Quantity To Add. menus Remaining, 0';
                    }
                    else if ($query_ticket->total <= 7 && $query_ticket->total > 0)
                    {
                        $this->new_order_details($query_menu, $query_ticket, $orders, $menu, $source, $quantity);
                        return $message = 'Alert. Quantity Remaining, '.$quantity;
                    }
                    else if ($query_ticket->total > 7)
                    {
                        $this->new_order_details($query_menu, $query_ticket, $orders, $menu, $source, $quantity);
                    }
                    else if ($quantity > $query_ticket->total)
                    {
                        return 'Alert. There Is No Enough Quantity Remaining.';
                    }
                }
				else
				{
					return 'No Items Purchased For '.$menu;
				}
            }
            else if ($query_menu->section == 'Beverages' || $query_menu->section == 'Food')
            {
                $this->new_order_details($query_menu, $query_ticket, $orders, $menu, $source, $quantity);
            }
        }
        else
        {
            return 'Bill Already Printed. Please Close the Bill and start new one.';
        }

    }

    function new_order_details($query_menu, $query_ticket, $orders, $menu, $source, $quantity)
    {
        if ($orders == null)
        {
            $status = 'open';
            $data = array ('menu'=>$menu, 'quantity'=>$quantity, 'cost'=>intval($query_menu->cost)*intval($quantity),
            'source'=>$source, 'status'=>$status);
            $this->db->insert('orders', $data);
        }
        else
        {
            $quantity_new = intval($quantity)+intval($orders->quantity);
            $data = array ('quantity'=>$quantity_new,
            'cost'=>intval($query_menu->cost)*intval($quantity_new));

            $this->db->where('id', $orders->id);
            $this->db->update('orders', $data);
        }

        if ($query_menu->section == 'Bar')
        {
            $data = array ('total'=>intval($query_ticket->total)-intval($quantity));
            $this->db->where('menu', $menu);
            $this->db->update('ticket', $data);
        }
    }

    function order_delete($id)
    {
        $query_order = $this->db->get_where('orders', array ('id'=>$id))->row();
        $query_menu = $this->db->get_where('menu', array ('name'=>$query_order->menu))->row();
        $query_ticket = $this->db->get_where('ticket', array ('menu'=>$query_order->menu))->last_row();

        if ($query_menu != null && $query_ticket != null && $query_menu->section == 'Bar')
        {
            $data = array ('total'=>intval($query_ticket->total)+intval($query_order->quantity));
            $this->db->where('menu', $query_order->menu);
            $this->db->update('ticket', $data);
        }

        $this->db->where('id', $id);
        if ($this->db->delete('orders'))
        {
            return 'Order Item Deleted Successfully.';
        }
        return $message;
    }

    function create_bill($discount, $tax, $waiter, $source, $name)
    {
        $this->db->where('source', $source);
        $this->db->where_in('status', 'open');
        $query_order = $this->db->get('orders')->result_array();

        $query_menu = $this->db->get('menu')->result_array();

        $query_bill = $this->db->get_where('bill', array ('source'=>$source, 'paid'=>'print'))->row();
        if ($query_bill == null)
        {
            $subtotal = intval($this->session->userdata('subtotal'));
            $discount = $subtotal*($discount/100);
            $subtotal = $subtotal-$discount;
            $tax = $subtotal*($tax/100);
            $total = $subtotal+$tax;
            $beverages = 0;
            $bar = 0;
            $food = 0;
            foreach ($query_order as $q_o)
            {
                foreach ($query_menu as $q_m)
                {
                    if ($q_o['menu'] === $q_m['name'])
                    {
                        switch($q_m['section'])
                        {
                            case 'Beverages':
                                $beverages = $beverages+intval($q_o['cost']);
                                break;
                            case 'Bar':
                                $bar = $bar+intval($q_o['cost']);
                                break;
                            case 'Food':
                                $food = $food+intval($q_o['cost']);
                                break;
                        }
                    }
                }
            }

            $data = array (
            'dated'=>date('y-m-d'),
            'beverages'=>$beverages,
            'bar'=>$bar,
            'food'=>$food,
            'subtotal'=>$this->session->userdata('subtotal'),
            'discount'=>$discount,
            'tax'=>$tax,
            'total'=>$total,
            'paid'=>'print',
            'name'=>$name,
            'waiter'=>$waiter,
            'source'=>$source);

            $this->db->insert('bill', $data);
        }

        return $query_order;
    }

    function bill_details($source)
    {
        $data = array ('source'=>$source, 'paid'=>'print');
        return $this->db->get_where('bill', $data)->row();
    }

    function close_bill($source, $paid)
    {
        $data = array ('status'=>'close');
        $this->db->where( array ('source'=>$source, 'status'=>'open'));
        $this->db->update('orders', $data);
        unset ($data);

        $data = array ('paid'=>$paid);
        $this->db->where( array ('source'=>$source, 'paid'=>'print'));
        $this->db->update('bill', $data);

        return "Bill Closed Successfully.";
    }
}
?>
