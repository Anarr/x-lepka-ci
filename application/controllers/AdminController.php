<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('category');
        $this->load->library('session');
    }

    public function signin()
    {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
            
            if ($email == XEMAIL && $password == XPASS) {
                $this->session->set_userdata(array('isLoggedIn' => TRUE));
                redirect(base_url() . 'xadmin/home');
            } else{
                echo "<p>>Invalid email or password</p>";
            }
        }
        $this->load->view('admin/pages/signin_view', array());
    }

    public function signout()
    {
        $this->session->sess_destroy();
        redirect(base_url() . 'xadmin');
    }

    public function home()
    {
        // check if authenticated user or not
        $this->isAuthenticated();
        $this->load->view('admin/pages/home_view', array());
    }
    public function pages()
    {
        // check if authenticated user or not
        $this->isAuthenticated();
        $this->load->view('admin/pages/pages_view', array());
    }
    public function categories()
    {
        // check if authenticated user or not
        $this->isAuthenticated();
        if (!empty($_POST['name'])) {
            $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
            $this->category->add(array('name' => $name));
            redirect('/xadmin/categories');
        }
        $context['categories'] = $this->category->getCategories();
        $this->load->view('admin/pages/categories_view', $context);
    }
    public function products()
    {
        // check if authenticated user or not
        $this->isAuthenticated();
        $this->load->view('admin/pages/products_view', array());
    }
    public function productsAdd()
    {
        // check if authenticated user or not
        $this->isAuthenticated();
        $this->load->view('admin/pages/products_add_view', array());
    }

    private function isAuthenticated()
    {
        if (!$this->session->userdata('isLoggedIn')) {
            redirect(base_url() .'xadmin');
        }
    }
}
