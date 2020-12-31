<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	 function __construct()
    {
        parent::__construct();
        // $this->load->model('Dashboard_model');
        $this->load->library('form_validation');
        $this->load->library(array('ion_auth', 'form_validation'));
    }

    public function index()
    {
        if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		// else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		// {
		// 	// redirect them to the home page because they must be an administrator to view this
		// 	redirect('list_nasabah', 'refresh');
		// }
		else
		{
			// set the flash data error message if there is one
        $this->template->load('template','v_dashboard');
    }
}

   
    public function laporan_pdf(){

    $data = array(
        "dataku" => array(
            "nama" => "Laporan Bulanan",
            "Author" => "Hardiyana"
        )
    );

    $this->load->library('pdf');

    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "dayly_report.pdf";
    $this->pdf->load_view('laporan_pdf', $data);
}

}
