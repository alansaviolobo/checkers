<?php
class Report_c extends Controller
{
    function _construct()
    {
        parent::Controller();
        $this->load->dbutil();
    }

    function index()
    {
        $this->report_load('');
    }

    function report_load($message)
    {
        $content['title'] = "Report";
        $content['section_menu'] = 'misc/top_menu';
        $content['section_content'] = 'report/report';
        $content['message'] = $message;
        $this->load->vars($content);
        $this->load->view('template/template_all');
    }

    function main()
    {
        if ( isset ($_POST['btn_daily']))
        {
            $query = $this->report_m->report_daily();
            $this->create_report($query, 'Daily');
        }
        if ( isset ($_POST['btn_create_report']))
        {
            $report_type = $this->input->xss_clean($this->input->post('ddl_report_type'));
			$f = explode("/",$this->input->xss_clean($this->input->post('txt_from_date')));
			$t = explode("/", $this->input->xss_clean($this->input->post('txt_to_date')));
			$from = $f[2].'-'.$f[1].'-'.$f[0];
			$to = $date = $t[2].'-'.$t[1].'-'.$t[0];
			
            if ($report_type == 'Bills')
            {
                $query = $this->report_m->bills($from,$to);
                $this->create_report($query, 'Bills');
            }
            else if ($report_type == 'Sales')
            {
                $query = $this->report_m->sales($from,$to);
                $this->create_report($query, 'Sales');
            }
        }
    }

    function create_report($query, $type)
    {
        $file = fopen('c:\\temp\\'.date('d-m-y').'-'.$type.'.csv', "w");

        foreach ($query as $line)
        {
            fputcsv($file, split(',', $line));
        }

        fclose($file);
        force_download(date('d-m-Y').'.csv', file_get_contents('c:\\temp\\'.date('d-m-y').'-'.$type.'.csv'));
        $this->report_load('Report Successfully Created.');
    }
}
?>
