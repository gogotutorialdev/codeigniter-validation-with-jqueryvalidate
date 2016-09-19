<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function save()
	{
		echo json_encode(array('status'=> TRUE, 'message' => 'Form sudah diisi dengan lengkap dan benar'));
	}

}

/* application/controllers/Welcome.php */
