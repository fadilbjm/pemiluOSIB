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
        $data['siswa']=$this->models->getSiswa();
        $data['siswi']=$this->models->getSiswa();
        $this->load->view('admin/dasboard',$data);        
    }

}

/* End of file Admin.php */
