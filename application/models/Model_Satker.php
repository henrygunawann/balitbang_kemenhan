<?php
class Model_Satker extends CI_Model{
    public function getProfile($where= ''){
        return $this->db->query("select * from user_profile $where;");
    } 

    // public function getProfilepusstrahan(){    
    //     $query  = "SELECT * FROM user_profile
    //                     WHERE satker_id = '2'
    //             ";
    //     return $this->db->query($query);        
    // }


    public function getKegiatanpusstrahan(){    
        $query  = "SELECT * FROM `d_kmpnen` WHERE KDGIAT = '1378'
                ";
        return $this->db->query($query);        
    }

    // public function getAllpusstrahan() {
    //      $this->db->select('*');
    //      $this->db->from('user_profile');
    //      $this->db->where('satker_id','2');
    //      $query = $this->db->get();
    //      return $query->result();
    // }

    public function getKegiatanpusstrahan2(){    
         $this->db->select('*');
         $this->db->from('d_kmpnen');
         $this->db->where('KDGIAT','1378');
         $query = $this->db->get();
         return $query->result();    
    }

    function Pusstrahan_Count(){    
        $query  = "SELECT SUM(`SPP_INI`) AS TotalItemsOrdered FROM d_spp WHERE `KDGIAT`= '1378'
                ";
        return $this->db->query($query);        
    }

    // public function allpakta_Count(){    
    //     $query  = "SELECT SUM(`paktaintegritas_uang`) AS TotalItemsOrdered  FROM program_paktaintegritaskdgiat WHERE `KDGIAT`= '1378'
    //             ";
    //     return $this->db->query($query);        
    // }
    
}