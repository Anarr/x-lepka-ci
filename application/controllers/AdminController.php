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
        $this->load->model('contact');
        $this->load->library('session');
    }

    public function signin()
    {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

            if ($email == XEMAIL && $password == XPASS) {
                $this->session->set_userdata(array('isLoggedIn' => true));
                redirect(base_url() . 'xadmin/home');
            } else {
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
            redirect(base_url() . 'xadmin/pages');
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

    public function messages()
    {
        // check if authenticated user or not
        $this->isAuthenticated();
        $context['messages'] = $this->contact->getMessages();
        $this->load->view('admin/pages/messages_view', $context);
    }

    public function productsAdd()
    {
        // check if authenticated user or not
        $this->isAuthenticated();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->load->library('form_validation');
            // Set form validation rules
            $this->form_validation->set_rules('category_id', 'Category_id', 'required');
            $this->form_validation->set_rules('title', 'Title', 'required|min_length[3]');
            $this->form_validation->set_rules('description', 'Description', 'required|min_length[10]');
            $this->form_validation->set_rules('price', 'Price', 'required');
            if (empty($_FILES['photo']['name']))
            {
                $this->form_validation->set_rules('photo', 'Photo', 'required');
            }
            if ($this->form_validation->run()) {

                $config['upload_path']          = __DIR__ . '/../../uploads/products/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 10000;
                // $config['max_width']            = 2048;
                // $config['max_height']           = 1536;
                $this->load->library('upload', $config);
                
                $showHomePage = ($this->input->post('show_home_page') == 'on') ? 1 : 0;
                
                if ( ! $this->upload->do_upload('photo'))
                {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);exit;
                }
                else
                {
                    $data = array('upload_data' => $this->upload->data());
                }
                
                $data = array(
                    'category_id' => $this->input->post('category_id'),
                    'title' => $this->input->post('title'),
                    'price' => floatval($this->input->post('price')),
                    'photo' => $_FILES['photo']['name'],
                    'description' => $this->input->post('description'),
                    'show_home_page' => $showHomePage
                );
                // $this->upload->do_upload('photo');
                $this->product->add($data);
                redirect(base_url() . 'xadmin/products');
            }
        }
        $context['categories'] = $this->category->getCategories();
        $this->load->view('admin/pages/products_add_view', $context);
    }

    public function changeProduct($productId = 0)
    {
        $productInfo = current($this->product->getAllProducts($productId));
        $productInfo->checked = ($productInfo->show_home_page == 1) ? 'checked' : '';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->load->library('form_validation');
            // Set form validation rules
            $this->form_validation->set_rules('category_id', 'Category_id', 'required');
            $this->form_validation->set_rules('title', 'Title', 'required|min_length[3]');
            $this->form_validation->set_rules('description', 'Description', 'required|min_length[10]');
            $this->form_validation->set_rules('price', 'Price', 'required');
            if ($this->form_validation->run()) {
                $config['upload_path']          = __DIR__ . '/../../uploads/products/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 10000;
                // $config['max_width']            = 2048;
                // $config['max_height']           = 1536;
                $this->load->library('upload', $config);
                
                $showHomePage = ($this->input->post('show_home_page') == 'on') ? 1 : 0;
                $fileName = $productInfo->photo;
                if (isset($_FILES['photo']['name'])){
                    if ( ! $this->upload->do_upload('photo'))
                    {
                        $error = array('error' => $this->upload->display_errors());
                    }
                    else
                    {
                        $fileName = $_FILES['photo']['name'];
                        $data = array('upload_data' => $this->upload->data());
                    }
                }

                
                $data = array(
                    'category_id' => $this->input->post('category_id'),
                    'title' => $this->input->post('title'),
                    'price' => floatval($this->input->post('price')),
                    'photo' => $fileName,
                    'description' => $this->input->post('description'),
                    'show_home_page' => $showHomePage
                );
                $this->product->change($data, $productId);
                redirect(base_url() . 'xadmin/products/'.$productId.'/edit');
            }
        }

        $context['product'] = $productInfo;
        $context['categories'] = $this->category->getCategories();
        $this->load->view('admin/pages/products_edit_view', $context);
    }
    public function removeProduct($productId = 0)
    {
        if ($productId > 0) {
            $this->product->remove($productId);
            redirect(base_url() . 'xadmin/products');
        }
    }

    private function isAuthenticated()
    {
        if (!$this->session->userdata('isLoggedIn')) {
            redirect(base_url() . 'xadmin');
        }
    }
}
