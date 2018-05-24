<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_arh extends CI_Model {

    function id()
    {
        $query=$this->db->get('t_siswa');
        return $query;
    }

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

    function getHead()
    {
        $where=array('posisi'=>"ketua");
        return $query = $this->db->get_where('t_kandidat',$where);
    }

    function getVice()
    {
        $where=array('posisi'=>"wakil");
        return $query = $this->db->get_where('t_kandidat',$where);
    }

    function delCan($id)
    {
        $where=array('id_kandidat'=>$id);
        return $query=$this->db->get_where('t_kandidat',$where);
    }

    function pemilu()
    {
        
        return $query=$this->db->get('t_pemilu');
    }

    function kanl()
    {
         return $query=$this->db->query('SELECT name FROM t_kandidat WHERE "jk"="p"');
    }
    function kanp()
    {
         return $query=$this->db->query('SELECT name FROM t_kandidat WHERE "jk"="p"');
    }

}

/* End of file Models.php */
