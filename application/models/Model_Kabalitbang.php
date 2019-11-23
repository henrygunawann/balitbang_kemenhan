<?php
class Model_Kabalitbang extends CI_Model{
 
  // 	public function getPaguAnggaran(){
		// $query  = "SELECT pagu_anggaran_program_modalutama FROM program_modal_utama WHERE id_program_modalutama = '3'
	 //              ";
  //       return $this->db->query($query);      
  //   }
 
    public function getProfile($where= ''){
        return $this->db->query("select * from user_profile $where;");
    } 
    
    public function allrealisasi_Count(){    
        $query  = "SELECT SUM(`SPP_INI`) AS TotalItemsOrdered FROM d_spp
                ";
        return $this->db->query($query);        
    }

    // public function allpakta_Count(){    
    //     $query  = "SELECT SUM(`paktaintegritas_uang`) AS TotalItemsOrdered FROM program_paktaintegritas
    //             ";
    //     return $this->db->query($query);        
    // }
}