<?php
class Kabalitbang extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }

    $this->load->model('Model_Kabalitbang');
  }
 
  function index(){
    //Allowing akses to kabalitbang only
    if($this->session->userdata('level')==='2'){
      // Jumlah PAGU
        // $pagu            = $this->Model_Kabalitbang->getPaguAnggaran();
        // $paguanggaran    = $pagu->row_array();

        // $anggota            = $this->Model_Kabalitbang->getProfile();
        // $anggotabalitbang    = $anggota->num_rows();


        // $pakta              = $this->Model_Kabalitbang->allpakta_Count();
        // $paktabalitbang     = $pakta->row_array();

        $realisasi          = $this->Model_Kabalitbang->allrealisasi_Count();
        $realisasibalitbang = $realisasi->row_array();

        $data = array(
/*            'jml_pagu'      => $paguanggaran['pagu_anggaran_program_modalutama'],
            'jml_pakta'     => $paktabalitbang['TotalItemsOrdered'],*/
            'jml_realisasi' => $realisasibalitbang['TotalItemsOrdered'],
        );
      $this->load->view('kabalitbang/dashboard_view', $data);
    }else{
        echo "Access Denied";
    }
 
  }
 
  // function kabalitbang(){
  //   //Allowing akses to kabalitbang only
  //   if($this->session->userdata('level')==='2'){
  //     $this->load->view('kabalitbang/dashboard_view');
  //   }else{
  //       echo "Access Denied";
  //   }
  // }
 
}