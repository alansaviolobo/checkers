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

    function login($data)
    {
        $query = $this->db->get_where('user', $data);

        if ($query->result_array() == null)
        {
            return 0;
        }
        else
        {
            foreach ($query->result_array() as $row)
            {
                $user_info = array ('username'=>$row['username'],
                'designation'=>$row['designation'],
                'order'=>$row['order_manage'],
                'menu'=>$row['menu_manage'],
                'database'=>$row['database_manage'],
                'report'=>$row['report_manage'],
                'user'=>$row['user_manage']);
            }
            return $user_info;
        }

        return $query->result_array();
    }

    function waiters_list()
    {
        $query = $this->db->get_where('user', array ('designation'=>'Waiter'));
        return $query->result_array();
    }

    function user_list()
    {
        return $this->db->get('user')->result_array();
    }

    function user_list_user($username)
    {
        return $this->db->get_where('user', array ('username'=>$username))->row();
    }

    function user_delete($username)
    {
        $this->db->where('username', $username);
        if ($this->db->delete('user'))
        {
            return 'User Deleted Successfully.';
        }
    }

    function user_update($username, $data)
    {
        $this->db->where('username', $username);
        if ($this->db->update('user', $data))
        {
            return 'User Updated Successfully.';
        }
    }

    function user_add($username, $data)
    {
        $query_user = $this->db->get_where('user', array ('username'=>$username))->row();
        if ($query_user == null)
        {
            if ($this->db->insert('user', $data));
            {
                return 'User Added Successfully.';
            }
        }
        else
        {
            return 'The Username Already Exists.';
        }
    }
}
?>
