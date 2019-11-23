<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('login_model');
  }
 
  function index(){
    $this->load->view('login_view');
  }
 
  function auth(){
    $username    = $this->input->post('username',TRUE);
    $password = md5($this->input->post('password',TRUE));
    $validate = $this->login_model->validate($username,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        // $name  = $data['user_name'];
        $username = $data['username'];
        $level = $data['level'];
        $sesdata = array(
            // 'username'  => $name,
            'username'  => $username,
            'level'     => $level,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($level === '1'){
            redirect('page');
 
        // access login for kabalitbang
        }elseif($level === '2'){
            redirect('kabalitbang');
 
 
        // access login for balitbang
        }elseif($level === '3'){
            redirect('page/balitbang');
 
        // access login for pusstrahan
        }elseif($level === '4'){
            redirect('satker');
 
        // access login for pusalpalhan
/*        }elseif($level === '5'){
            redirect('satker/pusalpalhan');
 
        // access login for pusiptek
        }elseif($level === '6'){
            redirect('satker/pusiptek');
 
        // access login for pussumdahan
        }elseif($level === '7'){
            redirect('satker/pussumdahan');
 
        // access login for ses
        }elseif($level === '8'){
            redirect('satker/ses');*/
 
        // access login for subpusstrahan
        }elseif($level === '9'){
            redirect('subsatker');
 
        // access login for subpusalpalhan
        // }elseif($level === '10'){
        //     redirect('subsatker/subpusalpalhan');

        // // access login for subpusiptek
        // }elseif($level === '11'){
        //     redirect('subsatker/subpusiptek');
 
 
        // // access login for subpussumdahan
        // }elseif($level === '12'){
        //     redirect('subsatker/subpussumdahan');
 
        // // access login for subses
        // }else{
        //     redirect('subsatker/subses');
        // }
        }
    }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('login');
    }
  }
 
  function logout(){
      $this->session->sess_destroy();
      redirect('login');
  }
 
}