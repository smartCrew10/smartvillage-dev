<?php 
class Page extends CI_Controller {
    
    public function index()
    {
        $this->load->view('header');
        $this->load->view('body');
        $this->load->view('footer');
    }
}
?>
