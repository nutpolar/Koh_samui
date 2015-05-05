<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class login extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
//        if ($this->session->userdata('username') != "") {
//            redirect('admin');
//        }
        //$this->load->library('session');
        // Your own constructor code
        $this->load->model('login_m');
    }

    public function index() {
        $this->load->view('login');
    }

    public function check_login() {

        $get = $this->login_m->check_login($_POST);
//        if (count($get) == 0) {
//            echo 'No';
//            redirect('login');
        if (count($get) == 0) {
            echo "<script>
            alert('Username or Password Invalid');
            window.location.replace('../login');
            </script>";
        } else {
            echo "<script>
            alert('Welcome Admin');
            window.location.replace('../admin');
            </script>";
        }
    }

    public function logout() {
        
        $sess_array = array(
            'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $this->session->sess_destroy();
        redirect('login');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */