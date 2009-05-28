<?php
if(isset($_POST['discount']) && isset($_POST['tax']))
{
	$this->session->set_userdata('discount',$this->input->xss_clean($this->input->post('discount')));
	$this->session->set_userdata('tax',$this->input->xss_clean($this->input->post('tax')));
}
?>