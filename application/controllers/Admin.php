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

    public function candidate()
    {
        $data['datak']=$this->m_arh->getHead(); // untuk kandidat ketua
        $data['dataw']=$this->m_arh->getVice(); // untuk kandidat wakil
        $this->load->view('admin/datakandidat', $data);
        
    }

    function addCandidate()
    {
        $id=date("ymdhis");
        $url=$this->foto();
        $data=array(
            'id_kandidat'=> $id,
            'nama_kandidat'=>$this->input->post('nama'),
            'posisi'    =>  $this->input->post('posisi'),
            'foto'  => $url,
            'jk'    =>  $this->input->post('jk')
        );
        $this->db->insert('t_kandidat', $data);
        
        redirect('admin/candidate');
        
    }

    private function foto()
    {
        $tipe=explode(".",$_FILES['img']['name']);
        $tipe=$tipe[count($tipe)-1];
        $url="aset/img/kandidat/".uniqid(rand()).'.'.$tipe;
        if (is_uploaded_file($_FILES['img']['tmp_name'])) 
            if(move_uploaded_file($_FILES['img']['tmp_name'],$url))
            return $url;
        return "";
        
    }

    function delCandidate()
    {
        $id=$this->uri->segment(3);
        $data['1']=$this->m_arh->delCan($id)->result();
        foreach ($data['1'] as $key ) {
            unlink($key->foto);

        }
        $this->db->delete('t_kandidat',array('id_kandidat'=>$id));
        
        redirect('admin/Candidate');
        
        
    }
}

/* End of file Admin.php */
