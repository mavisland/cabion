<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anasayfa extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/starter');
    }
}
