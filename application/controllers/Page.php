<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }
 
  function index(){
    //Allowing akses to admin only
      if($this->session->userdata('level')==='1'){
          $this->load->view('admin/dashboard_view');
      }else{
          echo "Access Denied";
      }
 
  }
 
  // function kabalitbang(){
  //   Allowing akses to staff only
  //   if($this->session->userdata('level')==='2'){
  //     $this->load->view('kabalitbang/dashboard_view');
  //   }else{
  //       echo "Access Denied";
  //   }
  // }
  
  function balitbang(){
    //Allowing akses to staff only
    if($this->session->userdata('level')==='3'){
      $this->load->view('balitbang/dashboard_view');
    }else{
        echo "Access Denied";
    }
  }
 
  // function pusstrahan(){
  //   //Allowing akses to staff only
  //   if($this->session->userdata('level')==='4'){
  //     $this->load->view('pusstrahan/dashboard_view');
  //   }else{
  //       echo "Access Denied";
  //   }
  // }
 
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
 
  // function subpusstrahan(){
  //   //Allowing akses to staff only
  //   if($this->session->userdata('level')==='9'){
  //     $this->load->view('subpusstrahan/dashboard_view');
  //   }else{
  //       echo "Access Denied";
  //   }
  // }
 
  // function subpusalpalhan(){
  //   //Allowing akses to staff only
  //   if($this->session->userdata('level')==='10'){
  //     $this->load->view('subpusalpalhan/dashboard_view');
  //   }else{
  //       echo "Access Denied";
  //   }
  // }
 
  // function subpusiptek(){
  //   //Allowing akses to staff only
  //   if($this->session->userdata('level')==='11'){
  //     $this->load->view('subpusiptek/dashboard_view');
  //   }else{
  //       echo "Access Denied";
  //   }
  // }
 
  // function subpussumdahan(){
  //   //Allowing akses to staff only
  //   if($this->session->userdata('level')==='12'){
  //     $this->load->view('subpussumdahan/dashboard_view');
  //   }else{
  //       echo "Access Denied";
  //   }
  // }
 
  // function subses(){
  //   //Allowing akses to author only
  //   if($this->session->userdata('level')==='13'){
  //     $this->load->view('subses/dashboard_view');
  //   }else{
  //       echo "Access Denied";
  //   }
  // }
 
}