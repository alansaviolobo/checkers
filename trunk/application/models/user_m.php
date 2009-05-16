<?php
class User_m extends Model
{
    function _construct()
    {
        parent::Model();
    }

    function index()
    {

    }
	
	function get_waiter_list()
	{
		$query = $this->db->get_where('check_user',array('designation'=>'Waiter'));
		return $query->result_array();
	}
	
	function user_login()
	{
		$query = $this->db->get_where('check_user',array('username' =>$this->input->xss_clean($this->input->post('txt_username')),'password'=>$this->input->xss_clean($this->input->post('txt_password'))));
		
		if($query->result_array() == null)
		{			
			$this->session->set_userdata('message','Check Username and Password');
			return 0;
		}
		else
		{
			foreach($query->result_array() as $row)
			{
				$user_info = array('username'=>$row['username'],
				'designation'=>$row['designation'],
				'order'=>$row['order_manage'],
				'menu'=>$row['menu_manage'],
				'database'=>$row['database_manage'],
				'report'=>$row['report_manage'],
				'user'=>$row['user_manage']);
				
				$this->session->set_userdata('user_info',$user_info);
			}
			return 1;
		}
		
		return $query->result_array();
	}	

    function user_add()
    {
        $data = array (
        'name'=>$this->input->xss_clean($this->input->post('txt_name')),
        'username'=>$this->input->xss_clean($this->input->post('txt_username')),
        'password'=>$this->input->xss_clean($this->input->post('txt_password')),
        'designation'=>$this->input->xss_clean($this->input->post('ddl_designation')),
        'order_manage'=>$this->input->xss_clean($this->input->post('chk_order')),
        'menu_manage'=>$this->input->xss_clean($this->input->post('chk_menu')),
        'database_manage'=>$this->input->xss_clean($this->input->post('chk_database')),
        'report_manage'=>$this->input->xss_clean($this->input->post('chk_report')),
        'user_manage'=>$this->input->xss_clean($this->input->post('chk_user'))
        );

        if ($this->db->insert('check_user',$data))
        $this->session->set_userdata('message', 'User successfully added');
    }
	
	function user_list($limit, $offset)
	{		
        $query = $this->db->get('check_user',$limit, $offset);		
        return $query->result_array();
	}
	
	function user_single($id)
	{
		$query = $this->db->where('id',$id)->get('check_user');   
		return $query->result_array();
	}
	
	function user_update()
	{
		$data = array (
        'name'=>$this->input->xss_clean($this->input->post('txt_name')),
        'username'=>$this->input->xss_clean($this->input->post('txt_username')),
        'password'=>$this->input->xss_clean($this->input->post('txt_password')),
        'designation'=>$this->input->xss_clean($this->input->post('ddl_designation')),
        'order_manage'=>$this->input->xss_clean($this->input->post('chk_order')),
        'menu_manage'=>$this->input->xss_clean($this->input->post('chk_menu')),
        'database_manage'=>$this->input->xss_clean($this->input->post('chk_database')),
        'report_manage'=>$this->input->xss_clean($this->input->post('chk_report')),
        'user_manage'=>$this->input->xss_clean($this->input->post('chk_user'))
        );
		
		$this->db->where('id',$this->input->xss_clean($this->input->post('txt_id')));
        if($this->db->update('check_user',$data))
		$this->session->set_userdata('message', 'User successfully updated');
	}
	
	function user_delete($id)
	{
		$this->db->where('id',$id);
        if($this->db->delete('check_user'))
		$this->session->set_userdata('message', 'User successfully deleted');
	}
	
	function user_count()
	{
		return $this->db->count_all('check_user');
	}
}
?>
