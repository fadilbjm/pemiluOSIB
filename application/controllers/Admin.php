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
        $this->load->model('m_arh');
        $data['siswa']=$this->m_arh->getSiswa()->num_rows();
        $data['siswi']=$this->m_arh->getSiswa()->num_rows();
        $this->load->view('admin/dasboard',$data);        
    }

}

/* End of file Admin.php */
