<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('category');
        $this->load->model('page');
        $this->load->model('product');
        
        // Contact
        $this->load->model('contact');
        $this->load->library('form_validation');
        // Set form validation rules
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('phone', 'phone', 'required');
        $this->form_validation->set_rules('message', 'message', 'required|min_length[20]');

        if ($this->form_validation->run()) {
            $data = array(
                'name' => $this->input->post('name'),
                'phone' => $this->input->post('phone'),
                'message' => strip_tags($this->input->post('message'))
            );
            $messageId = $this->contact->send($data);
            if ($messageId) {
                redirect(base_url(uri_string()));
            } else {
                exit('Error occured');
            }
        }
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
		$categories = $this->category->getCategories();
		/**
		 * @param $filter array
		 * @param $offset int
		 * @param $limit int
		 */
        $products = $this->product->getProducts(array('show_home_page' => 1), 0, 10);
        $context = array(
			'categories' => $categories,
			'products' => $products,
        );
        $this->load->view('dashboard/pages/home_view', $context);
    }

    public function about()
    {
        $categories = $this->category->getCategories();
        $pageData = current($this->page->getPageBySlug('about'));
        $context = array(
            'categories' => $categories,
            'pageData' => $pageData,
        );
        $this->load->view('dashboard/pages/about_view', $context);
    }

    public function contact()
    {
        // Load dependencies
        $this->load->model('contact');
        $this->load->library('form_validation');
        // Set form validation rules
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('phone', 'phone', 'required');
        $this->form_validation->set_rules('message', 'message', 'required|min_length[20]');

        if ($this->form_validation->run()) {
            $data = array(
                'name' => $this->input->post('name'),
                'phone' => $this->input->post('phone'),
                'message' => strip_tags($this->input->post('message'))
            );
            $messageId = $this->contact->send($data);
            if ($messageId) {
                redirect('/contact');
            } else {
                exit('Error occured');
            }
        }

        $categories = $this->category->getCategories();
        $pageData = current($this->page->getPageBySlug('contact'));
        $context = array(
            'categories' => $categories,
            'pageData' => $pageData,
        );
        $this->load->view('dashboard/pages/contact_view', $context);
	}
	
	public function category($categoryId)
	{
        $context = array();
        $categories = $this->category->getCategories();
        $products = $this->category->getProductsByCategoryId($categoryId);
        
        
        $context = array(
            'categories' => $categories,
            'products' => $products
        );
        $this->load->view('dashboard/pages/category_view', $context);
    
    }
	public function products($productId)
	{
        $categories = $this->category->getCategories();
        $productData = $this->product->getProductById($productId);
        $pageData = current($this->page->getPageBySlug('contact'));
        if(empty($productData)) {
            die();
        }
        $context = array(
            'categories' => $categories,
            'pageData' => $pageData,
            'productData' => $productData[0]
        );
        $this->load->view('dashboard/pages/product_view', $context);
    }
    
    public function error404()
    {
        $this->load->view('dashboard/pages/error404_view');
    }
}
