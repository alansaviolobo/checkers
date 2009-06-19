<?php
class Ticket_m extends Model
{
    function _construct()
    {
        parent::Model();
    }

    function ticket_list()
    {
        return $this->db->get('ticket')->result_array();
    }

    function menu_purchase_insert($menu, $quantity)
    {
    	$q=0;
        $prev = $this->db->get_where('ticket', array ('menu'=>$menu, 'dated'=>date('y-m-d')))->row();
        if ($prev != null)
        {
            $data = array ('quantity'=>$prev->quantity+$quantity, 'total'=>$prev->total+$quantity);
            $this->db->where( array ('menu'=>$menu, 'dated'=>date('y-m-d')));
            if ($this->db->update('ticket', $data))
            {
                return 'Quantity Added Successfully';
            }
        }
        else
        {
        	$prev = $this->db->get_where('ticket', array ('menu'=>$menu,))->last_row();
			if($prev != null)
			{
				$q = $prev->total;
			}
            $data = array ('menu'=>$menu, 'carry'=>$q, 'quantity'=>$quantity, 'dated'=>date('y-m-d'), 'total'=>$quantity+$q);

            if ($this->db->insert('ticket', $data))
            {
                return 'Quantity Added Successfully';
            }
        }
    }
}
?>
