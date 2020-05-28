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
        $libros = $this->ml->findAll();
        $rating = null;
        foreach ($libros as $l){
            $rating[] = $this->ml->getRating($l->id);
        }
        $data['libros'] = $libros;
        $data['rating'] = $rating;
        //print_r($rating);
		$this->load->view('bookstore/index', $data);
    }
    
    public function test(){
        $this->load->view('bookstore/test');
    }

    public function addBook(){
        $this->load->view('bookstore/crud');
    }

    public function rateBook(){
        //$this->load->view('bookstore/test');
        $data['book_id'] = base64_decode($_POST['id']);
        $data['rating'] = $_POST['rating'];
        echo $this->ml->bookRating($data);
    }

    public function insert(){
        
         /*****  NOTA *****/
        /* Es importante que el input file se llame 'userfile' para que la libreria upload funcione */

        /* De esta forma obtenemos la extensión de la imagen para no perderlo */
        $img = explode('.' , $_FILES['userfile']['name']);
        $format = end($img);
        $hash = bin2hex(random_bytes(16));
        $data['title'] = $_POST['title'];
        $data['author'] = $_POST['author'];
        $data['description'] = $_POST['description'];
        /* Es importante especificar los datos de formatos permitidos, así como renombrar el logo para no generar sobreescritura de datos */
        $config['upload_path']          = './storage/images/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 2048;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $config['file_name']            = $hash.'.'.$format;
        $this->load->library('upload', $config);
        $data['img']  = $hash.'.'.$format;
        
        /* Si la imagen presenta un error al momento de subirla al servidor, debemos mostrar un mensaje de error */
        if(!$this->upload->do_upload()){
            echo 0;
         /* Si no hubo problemas al subir la imagen, procedemos a insertar los datos en la base de datos */
         }else{
             if (!isset($_POST['key'])){
                 echo $this->ml->dataEntry($data);
             }else{
                 echo $this->ml->updateData($_POST['key'], $data);
             }
         }
        
        //print_r($_POST);
        //print_r($_FILES);
        //echo $this->ml->dataEntry($data);
    }

}