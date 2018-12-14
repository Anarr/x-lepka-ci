<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('category');
        $this->load->model('page');
		$this->load->model('product');
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
        $categories = $this->category->getCategories();
        $pageData = current($this->page->getPageBySlug('contact'));
        $context = array(
            'categories' => $categories,
            'pageData' => $pageData,
        );
        $this->load->view('dashboard/pages/contact_view', $context);
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
}
