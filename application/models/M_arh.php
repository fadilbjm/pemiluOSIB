<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_arh extends CI_Model {

    function get($data)
    {
        $where = array('jk' => $data);
        return $query = $this->db->get_where('t_siswa',$where);
    }

    function getSiswa()
    {
        return $query=$this->db->get_where('t_siswa', array('jk'=>'l'));
        
    }
    function getSiswi()
    {
        return $query=$this->db->get_where('t_siswa', array('jk'=>'p'));
        
    }

}

/* End of file Models.php */
