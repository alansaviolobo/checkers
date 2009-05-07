<?php

class Menu_m extends Model
{
	function _construct()
	{
		parent::Model();
	}

	function index()
	{

	}

	function menu_add()
	{
		$data = array(
            'name'=>$this->input->xss_clean($this->input->post('txt_name')),
            'quantity'=>$this->input->xss_clean($this->input->post('txt_quantity')),
            'cost'=>$this->input->xss_clean($this->input->post('txt_cost')),
            'section'=>$this->input->xss_clean($this->input->post('ddl_section'))
        );

        if($this->db->insert('check_menu',$data))
		$this->session->set_userdata('message', 'Menu item successfully added');
	}

	function menu_list($limit, $offset)
	{
        $query = $this->db->get('check_menu',$limit, $offset);		
        return $query->result_array();
	}
	
	function menu_list_all()
	{
		$query = $this->db->get('check_menu');
		return $query->result_array();
	}

	function menu_item($id)
	{
		$query = $this->db->where('id',$id)->get('check_menu');
		return $query->result_array();
	}

	function menu_update()
	{
		$data = array(
            'name'=>$this->input->xss_clean($this->input->post('txt_name')),
            'quantity'=>$this->input->xss_clean($this->input->post('txt_quantity')),
            'cost'=>$this->input->xss_clean($this->input->post('txt_cost')),
            'section'=>$this->input->xss_clean($this->input->post('ddl_section'))
        );

        $this->db->where('id',$this->input->xss_clean($this->input->post('txt_id')));
        if($this->db->update('check_menu',$data))
		$this->session->set_userdata('message', 'Menu item successfully updated');
	}

	function menu_delete($id)
	{
		$this->db->where('id',$id);
        if($this->db->delete('check_menu'))
		$this->session->set_userdata('message', 'Menu item successfully deleted');
	}

	function menu_categories()
	{
		$query = $this->db->query('select distinct section from check_menu');
        $categories = $query->result_array();
        return $categories;
	}       
	
	function menu_count()
	{
		return $this->db->count_all('check_menu');
	}          
}

?>