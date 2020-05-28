<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_libro extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    public function __construct(){
        parent::__construct();
        $this->load->model('M_libro', 'ml');
        $this->load->helper('url');
    }

	public function index()
	{
        $data['libros'] = $this->ml->findAll();
		$this->load->view('bookstore/index', $data);
    }
    
    public function test(){
        $this->load->view('bookstore/test');
    }

    public function addBook(){
        $this->load->view('bookstore/test');
    }

    public function rateBook(){
        //$this->load->view('bookstore/test');
        $data['book_id'] = base64_decode($_POST['id']);
        $data['rating'] = $_POST['rating'];
        echo $this->ml->bookRating($data);
    }

    public function insert(){
        $hash = bin2hex(random_bytes(16));
        $data['title'] = 'Rebelión en la granja';
        $data['author'] = 'George Orwell';
        $data['description'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices consectetur varius. Aliquam felis ex, facilisis ultrices mauris at, gravida sollicitudin ipsum. Nam tristique hendrerit laoreet. Maecenas vel elementum lectus. Ut quis varius augue, sit amet ultrices augue. Cras vel rutrum felis. Etiam velit dolor, lacinia at odio suscipit, consectetur rutrum libero. Cras ante nibh, suscipit et tellus viverra, tristique placerat massa.';
        echo $this->ml->dataEntry($data);
    }

}