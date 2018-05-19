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
        $data['siswa']=$this->m_arh->getSiswa()->num_rows();
        $data['siswi']=$this->m_arh->getSiswi()->num_rows();
        $this->load->view('admin/dasboard',$data);        
    }

    public function add()
    {
        $data['jk']=$this->uri->segment(3);
        $data['id']=$this->m_arh->id();
        $data['get']=$this->m_arh->get($data['jk'])->result();
        $data['cek']=$this->m_arh->get($data['jk'])->num_rows();
        $this->load->view('admin/tambahmurid', $data);        
    }

    function add_action()
    {
        $data = array('id_siswa' => $this->input->post('id'), 
                    'nib'   =>  $this->input->post('nib'),
                    'nama'  =>  $this->input->post('nama'),
                    'jk'    =>  $this->input->post('jk'),
                    'angkatan'=> $this->input->post('angkatan'),
                    'jenjang'=> $this->input->post('jenjang')
    );
    $this->db->insert('t_siswa', $data);
    
    redirect('admin/add/'.$this->input->post('jk').'/');
    
    }

}

/* End of file Admin.php */
