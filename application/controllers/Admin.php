<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    
/*     public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('akses')!="admin"){
            
            redirect('login');
            
        }
    }
 */    

    function index()
    {
        $this->load->view('admin/dasboard');        
    }

}

/* End of file Admin.php */
