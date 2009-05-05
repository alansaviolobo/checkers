<?php
class Order_m extends Model
{
    function _construct()
    {
    }
    function index()
    {
    }
    function order_delete($id)
    {
        $this->db->where('id', $id);
        if ($this->db->delete('check_order'))
        $this->session->set_userdata('message', 'Order item successfully deleted');
    }
    function order_list()
    {
        $query = $this->db->get('check_order');
        return $query->result_array();
    }
    function order_add()
    {
        if ($this->input->xss_clean($this->input->post('ddl_table_no')))
        {
            $ordered_by = $this->input->xss_clean($this->input->post('ddl_table_no'));
        }
        else
        {
            $ordered_by = $this->input->xss_clean($this->input->post('ddl_room_no'));
        }
        $identify_item = '';
        $cost = 0;
        $query = $this->db->get('check_menu');
        $quantity = 0;
        foreach ($query->result_array() as $row)
        {
            if ($this->input->xss_clean($this->input->post('ddl_'.$row['section'])))
            $identify_item = $this->input->xss_clean($this->input->post('ddl_'.$row['section']));
            if ($identify_item == $row['name'])
            {
                $cost = $row['cost'];
            }
        }

        $order_list = $this->db->get_where('check_order', array ('ordered_by'=>$ordered_by, 'item_name'=>$identify_item));
        $quantity_get = $this->input->xss_clean($this->input->post('txt_quantity'));

        $row_new = $order_list->result_array();
        $quantity_prev = 0;
        $cost_prev = 0;
        $id = 0;
        foreach ($row_new as $r_n)
        {
            $cost_prev = $r_n['cost'];
            $quantity_prev = $r_n['quantity'];
            $id = $r_n['id'];
        }

        if ($row_new == null)
        {
            $data = array ('item_name'=>$identify_item,
            'quantity'=>$quantity_get,
            'cost'=>$cost*intval($quantity_get),
            'ordered_by'=>$ordered_by);
            $this->db->insert('check_order', $data);
        }
        else
        {
            $quantity_new = intval($quantity_get)+intval($quantity_prev);
            $cost_new = $cost*$quantity_new;

            $data = array ('quantity'=>$quantity_new, 'cost'=>$cost_new);

            $this->db->where('id', $r_n['id']);
            $this->db->update('check_order', $data);
        }
    }
    function order_update()
    {
    }
    function order_bill()
    {
        $query = $this->db->get_where('check_order', array ('ordered_by'=>$this->input->xss_clean($this->input->post('ddl_bill_dropdown'))));
        return $query->result_array();
    }
    function order_check()
    {
        $query = $this->db->get('check_order');
        return $query->result_array();
    }
    function get_order_by()
    {
        $query = $this->db->get_where('check_order', array ('ordered_by'=>$this->input->xss_clean($this->input->post('ddl_bill_dropdown'))));
        return $query->result_array();
    }
    function create_bill()
    {
        $query = $this->db->get_where('check_order', array ('ordered_by'=>$this->session->userdata('ord_by')));

        $query2 = $this->db->get('check_bill');
        $result = $query2->result_array();
        $query2_row = $query2->last_row('$result');
        if ($query2_row == null)
        {
            $bill_number = 1;
        }
        else
        {
            $bill_number = $query2_row['bill_number']+1;
        }
        $subtotal = intval($this->session->userdata('sub_total'));
        $discount = floatval(get_cookie('discount'));
        $discount = $subtotal*($discount/100);
        $new_discount = $subtotal-$discount;
        $subtotal = $new_discount;
        $tax = floatval(get_cookie('tax'));
        $tax = $subtotal*($tax/100);
        $total = $subtotal+$tax;
        foreach ($query->result_array() as $row)
        {
            $data = array (
            'bill_number'=>$bill_number,
            'dated'=>date('y-m-d'),
            'item_name'=>$row['item_name'],
            'quantity'=>$row['quantity'],
            'cost'=>$row['cost'],
            'sub_total'=>$this->session->userdata('sub_total'),
            'discount'=>get_cookie('discount'),
            'tax'=>get_cookie('tax'),
            'total'=>$total);

            $this->db->insert('check_bill', $data);
        }

            $this->session->set_userdata('bill_number',$bill_number);
        return $query->result_array();
    }

    function bill_details()
    {
      $query = $this->db->get_where('check_bill', array ('bill_number'=>$this->session->userdata('bill_number')));
      return $query->result_array();
    }
}
?>
