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
        $this->load->model('product');
        $this->load->model('page');
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
                echo "<p style='text-align: center;margin:0;'>Invalid email or password</p>";
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

        if (!empty($_POST['title']) && !empty($_POST['description'])) {
            $data['title'] = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
            $data['description'] = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
            $this->page->change($data, 'about');
            redirect(base_url(). 'xadmin/pages');
        }

        $context['pageInfo'] = $this->page->getPageBySlug('about');
        $this->load->view('admin/pages/pages_view', $context);
    }
    public function categories()
    {
        // check if authenticated user or not
        $this->isAuthenticated();
        if (!empty($_POST['name'])) {
            $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
            $this->category->add(array('name' => $name));
            redirect(base_url() . 'xadmin/categories');
        }
        $context['categories'] = $this->category->getCategories();
        $context['categoryInfo']['name'] = '';
        $this->load->view('admin/pages/categories_view', $context);
    }

    public function changeCategory($categoryId = 0)
    {
        $context['categories'] = $this->category->getCategories();
        $context['categoryInfo'] = current($this->category->getCategoryById($categoryId));
        if (!empty($_POST['name'])) {
            $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
            $this->category->change(array('name' => $name), $categoryId);
            redirect(base_url() . 'xadmin/categories');
        }
        $this->load->view('admin/pages/categories_view', $context);
        // redirect(base_url() . 'xadmin/categories');
    }
    public function removeCategory($categoryId = 0)
    {
        if ($categoryId > 0) {
            $this->category->remove($categoryId);
            redirect(base_url() . 'xadmin/categories');
        }
    }

    public function products()
    {
        // check if authenticated user or not
        $this->isAuthenticated();
        $context['products'] = $this->product->getAllProducts();
        $this->load->view('admin/pages/products_view', $context);
    }
    public function productsAdd()
    {
        // check if authenticated user or not
        // $this->isAuthenticated();
        $this->load->view('admin/pages/products_add_view', array());
    }
<<<<<<< HEAD

    public function changeProduct($productId = 0)
    {
        echo $productId;
    }
    public function removeProduct($productId = 0)
    {
        if ($productId > 0) {
            $this->product->remove($productId);
            redirect(base_url() . 'xadmin/products');
        }
    }

=======
    public function productsEdit()
    {
        // check if authenticated user or not
        // $this->isAuthenticated();
        $this->load->view('admin/pages/products_edit_view', array());
    }
>>>>>>> 059f7c306054528f6e6def68bcab69e5c7578e4d
    private function isAuthenticated()
    {
        if (!$this->session->userdata('isLoggedIn')) {
            redirect(base_url() .'xadmin');
        }
    }
}
