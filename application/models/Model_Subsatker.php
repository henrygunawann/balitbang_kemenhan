<?php
class Model_Subsatker extends CI_Model{

    function __construct() {
        parent::__construct();
    }

    function user(){
        return $this->db->query("select * from user_akses");
    }

    function simpanImportKmpnen($data = array())
    {
        $jumlah = count($data);
 
        if ($jumlah > 0)
        {
            $this->db->insert_batch('d_kmpnen', $data);
        }
    }

    function simpanImportKontrak($data = array())
    {
        $jumlah = count($data);
 
        if ($jumlah > 0)
        {
            $this->db->insert_batch('d_kontrak', $data);
        }
    }

    function simpanImportKu42($data = array())
    {
        $jumlah = count($data);
 
        if ($jumlah > 0)
        {
            $this->db->insert_batch('d_ku42', $data);
        }
    }
    
    function simpanImportOutput($data = array())
    {
        $jumlah = count($data);
 
        if ($jumlah > 0)
        {
            $this->db->insert_batch('d_output', $data);
        }
    }

    function simpanImportPPPA($data = array())
    {
        $jumlah = count($data);
 
        if ($jumlah > 0)
        {
            $this->db->insert_batch('d_pppa', $data);
        }
    }
    
    function simpanImportRevPPPA($data = array())
    {
        $jumlah = count($data);
 
        if ($jumlah > 0)
        {
            $this->db->insert_batch('d_revpppa', $data);
        }
    }

    function simpanImportRevSPP($data = array())
    {
        $jumlah = count($data);
 
        if ($jumlah > 0)
        {
            $this->db->insert_batch('d_revspp', $data);
        }
    }
    function simpanImportSKOP($data = array())
    {
        $jumlah = count($data);
 
        if ($jumlah > 0)
        {
            $this->db->insert_batch('d_skop', $data);
        }
    }
    function simpanImportSoutput($data = array())
    {
        $jumlah = count($data);
 
        if ($jumlah > 0)
        {
            $this->db->insert_batch('d_soutput', $data);
        }
    }
    function simpanImportSPP($data = array())
    {
        $jumlah = count($data);
 
        if ($jumlah > 0)
        {
            $this->db->insert_batch('d_spp', $data);
        }
    }
    function simpanImportTEPA($data = array())
    {
        $jumlah = count($data);
 
        if ($jumlah > 0)
        {
            $this->db->insert_batch('d_tepa', $data);
        }
    }
    function simpanImportTOutput($data = array())
    {
        $jumlah = count($data);
 
        if ($jumlah > 0)
        {
            $this->db->insert_batch('t_output', $data);
        }
    }

    function select_t_output() {
        $sql = "SELECT * FROM t_output";

        $data = $this->db->query($sql);

        return $data->result();
    }
    
    function total_t_output() {
        $data = $this->db->get('t_output');

        return $data->num_rows();
    }
}