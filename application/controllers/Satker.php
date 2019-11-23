<?php
class Satker extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }

    $this->load->model('Model_Satker');
  }
 
  function index(){
    //Allowing akses to staff only
    if($this->session->userdata('level')==='4'){
      // Jumlah Anggota
        // $anggota          = $this->Model_Satker->getProfilepusstrahan();
        // $anggotasatker    = $anggota->num_rows();

        // $kegiatan          = $this->Model_Satker->getKegiatanpusstrahan();
        // $detailkegiatan    = $kegiatan->num_rows();

        $realisasipusstrahan          = $this->Model_Satker->Pusstrahan_Count();
        $realisasi    = $realisasipusstrahan->row_array();

        // $paktapusstrahan          = $this->Model_Satker->allpakta_Count();
        // $pakta    = $paktapusstrahan->row_array();

        $data = array(
            // 'jml_anggota'      => $anggotasatker,
            // 'jml_kegiatan'      => $detailkegiatan,
            'jml_realisasi'      => $realisasi['TotalItemsOrdered'],
            // 'jml_pakta'      => $pakta['TotalItemsOrdered'],
        );

      $data['kegiatanstrahan'] = $this->Model_Satker->getKegiatanpusstrahan2(); 
      // $data['anggotastrahan'] = $this->Model_Satker->getAllpusstrahan(); 
      $this->load->view('pusstrahan/dashboard_view', $data);
    }else{
        echo "Access Denied";
    }
  }
 
  // function pusalpalhan(){
  //   //Allowing akses to staff only
  //   if($this->session->userdata('level')==='5'){
  //     $this->load->view('pusalpalhan/dashboard_view');
  //   }else{
  //       echo "Access Denied";
  //   }
  // }
 
  // function pusiptek(){
  //   //Allowing akses to staff only
  //   if($this->session->userdata('level')==='6'){
  //     $this->load->view('pusiptek/dashboard_view');
  //   }else{
  //       echo "Access Denied";
  //   }
  // }
 
  // function pussumdahan(){
  //   //Allowing akses to staff only
  //   if($this->session->userdata('level')==='7'){
  //     $this->load->view('pussumdahan/dashboard_view');
  //   }else{
  //       echo "Access Denied";
  //   }
  // }
 
  // function ses(){
  //   //Allowing akses to staff only
  //   if($this->session->userdata('level')==='8'){
  //     $this->load->view('ses/dashboard_view');
  //   }else{
  //       echo "Access Denied";
  //   }
  // } 
}