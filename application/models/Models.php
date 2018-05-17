<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Models extends CI_Model {

    function getSiswa()
    {
        return $query=$this->db->where('t_siswa', array('jk'=>'l'));
        
    }
    function getSiswi()
    {
        return $query=$this->db->where('t_siswa', array('jk'=>'p'));
        
    }

}

/* End of file Models.php */
