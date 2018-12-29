<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function signin()
    {
        $this->load->view('admin/pages/signin_view', array());
    }

    public function home()
    {
        $this->load->view('admin/pages/home_view', array());
    }
}