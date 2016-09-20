<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	/*
	 * Method untuk meload view form
	 */
    public function index()
    {
        $this->load->view('welcome_message');
    }

    /*
     * Method untuk menghandle action ketika form disubmit
     */
    public function save()
	{
		//mengembalikan (return) nilai atau variable status & message ke client side
		echo json_encode(array('status'=> TRUE, 'message' => 'Form sudah diisi dengan lengkap dan benar'));
	}

}

/* application/controllers/Welcome.php */
