<?php
class Menu_m extends Model
{
    function _construct()
    {

    }

    function index()
    {

    }

    function menu_list()
    {
        $query = $this->db->select('section, name')->order_by('section, name')->get('menu');
        return $query->result_array();
    }

    function menu_list_source($source_type, $limit, $offset)
    {
        $query = $this->db->get_where('menu', array ('section'=>$source_type), $limit, $offset);
        return $query->result_array();
    }

    function menu_list_source_count($source_type)
    {
        $this->db->where( array ('section'=>$source_type));
        $this->db->from('menu');
        return $this->db->count_all_results();
    }

    function menu_add($source_type, $name, $cost)
    {
        $query_menu = $this->db->get_where('menu', array ('name'=>$name))->row();
        if ($query_menu == null)
        {
            $data = array ('name'=>$name, 'cost'=>$cost, 'section'=>$source_type);
            if ($this->db->insert('menu', $data))
            {
                if ($source_type == 'Bar')
                {
                    $this->_assign_libraries();
                    $check = $this->ticket_m->menu_purchase_insert($name, 0);
                }
                return "Item Added Successfully.";
            }
        }
        else
        {
            return 'Item Already Exists.';
        }
    }

    function menu_list_menu($name)
    {
        return $this->db->get_where('menu', array ('name'=>$name))->row();
    }

    function menu_update($name, $source_type, $new_name, $cost)
    {
        $query_menu = $this->db->get_where('menu', array ('name'=>$new_name))->row();
        if ($query_menu == null)
        {
            $data = array ('name'=>$new_name, 'cost'=>$cost, 'section'=>$source_type);
            $this->db->where('name', $name);
            if ($this->db->update('menu', $data))
            {
                return "Item Updated Successfully.";
            }
        }
        else
        {
            return 'Item Already Exists.';
        }
    }

    function menu_delete($name)
    {
        $this->db->where('name', $name);
        if ($this->db->delete('menu'))
        {
            return "Item Deleted Successfully.";
        }
    }
}
?>
