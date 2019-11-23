<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
//load Spout Library
require_once APPPATH.'third_party/Spout/Autoloader/autoload.php';
 
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;
use Box\Spout\Common\Type;

class Subsatker extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }

    $this->load->model('Model_Subsatker');
    $this->load->model('User_fotokegiatan_model');
  }
 
  public function index(){
    //Allowing akses to staff only
    if($this->session->userdata('level')==='9'){
      $this->load->view('subpusstrahan/dashboard_view');
    }else{
        echo "Access Denied";
    }
  }

  function inputdatakmpnen(){
      if($this->session->userdata('level')==='9'){
          //ketika button submit diklik
          if ($this->input->post('submit', TRUE) == 'upload')
          {
              $config['upload_path']      = './temp_doc/'; //siapkan path untuk upload file
              $config['allowed_types']    = 'xlsx'; //siapkan format file
              $config['file_name']        = 'doc'.time(); //rename file yang diupload
          
              $this->load->library('upload', $config);
          
              if ($this->upload->do_upload('excel'))
              {
                  //fetch data upload
                  $file   = $this->upload->data();
          
                  $reader = ReaderEntityFactory::createXLSXReader(); //set Type file xlsx
                  $reader->setShouldFormatDates(true); //set date must be before open file
                  $reader->open('temp_doc/'.$file['file_name']); //open file xlsx

                  //looping pembacaat sheet dalam file        
                  foreach ($reader->getSheetIterator() as $sheet)
                  {
                      $numRow = 1;

                      //siapkan variabel array kosong untuk menampung variabel array data
                      $save   = array();

                      //looping pembacaan row dalam sheet
                      foreach ($sheet->getRowIterator() as $row)
                      {
                        $value = $row->toArray();
                        
                        if ($numRow > 1)
                        {
                            $data = array(
                                'THANG'              => $value[0],
                                'KDJENDOK'           => $value[1],
                                'KDSATKER'           => $value[2],
                                'KDDEPT'             => $value[3],
                                'KDUNIT'             => $value[4],
                                'KDPROGRAM'          => $value[5],
                                'KDGIAT'             =>  $value[6],
                                'KDOUTPUT'           =>  $value[7],
                                'KDLOKASI'           =>  $value[8],
                                'KDKABKOTA'          =>  $value[9],
                                'KDDEKON'            =>  $value[10],
                                'KDSOUTPUT'          =>  $value[11],
                                'KDKMPNEN'           =>  $value[12],
                                'KDBIAYA'            =>  $value[13],
                                'KDSBIAYA'           =>  $value[14],
                                'URKMPNEN'           =>  $value[15],
                                'KDTEMA'             =>  $value[16],
                                'RPHPLS1'            =>  $value[17],
                                'RPHPLS2'            =>  $value[18],
                                'RPHPLS3'            =>  $value[19],
                                'RPHMIN1'            =>  $value[20],
                                'THANGAWAL'          =>  date($value[21].'-01-01'),
                                'THANGAKHIR'         =>  date($value[22].'-01-01'),
                                'INDEKSKALI'         =>  $value[23],
                                'KDIB'               =>  $value[24],
                                'INDEKSOUT'          =>  $value[25],
                                'KDDIPA'             =>  $value[26],
                                '_NullFlags'         =>  $value[27],
                                'tgl_input'          =>  date('Y-m-d')
                            );

                            //tambahkan array $data ke $save
                            array_push($save, $data);
                        }
                        
                        $numRow++;
                      }
                      // die();
                      //simpan data ke database
                      $this->Model_Subsatker->simpanImportKmpnen($save);

                      //tutup spout reader
                      $reader->close();

                      //hapus file yang sudah diupload
                      unlink('./temp_doc/'.$file['file_name']);

                      //tampilkan pesan success dan redirect ulang ke index controller import
                      echo    '<script type="text/javascript">
                                  alert(\'Data berhasil disimpan\');
                                  window.location.replace("'.base_url().'subsatker/inputdatakmpnen");
                              </script>';
                  }
              }
              else
              {
                  echo "Error :".$this->upload->display_errors(); //tampilkan pesan error jika file gagal diupload
              }
          }

          $this->load->view('subpusstrahan/importkmpnen');
      }else{
        echo "Access Denied";
      }
  }

  function inputdatakontrak(){
    if($this->session->userdata('level')==='9'){
        //ketika button submit diklik
        if ($this->input->post('submit', TRUE) == 'upload')
        {
            $config['upload_path']      = './temp_doc/'; //siapkan path untuk upload file
            $config['allowed_types']    = 'xlsx'; //siapkan format file
            $config['file_name']        = 'doc'.time(); //rename file yang diupload
        
            $this->load->library('upload', $config);
        
            if ($this->upload->do_upload('excel'))
            {
                //fetch data upload
                $file   = $this->upload->data();
        
                $reader = ReaderEntityFactory::createXLSXReader(); //set Type file xlsx
                $reader->setShouldFormatDates(true); //set date must be before open file
                $reader->open('temp_doc/'.$file['file_name']); //open file xlsx

                //looping pembacaat sheet dalam file        
                foreach ($reader->getSheetIterator() as $sheet)
                {
                    $numRow = 1;

                    //siapkan variabel array kosong untuk menampung variabel array data
                    $save   = array();

                    //looping pembacaan row dalam sheet
                    foreach ($sheet->getRowIterator() as $row)
                    {
                      $value = $row->toArray();
                      
                      if ($numRow > 1)
                      {
                          $data = array(
                              'NO_KON'           => $value[0],
                              'TG_KON'           => date("Y-m-d",strtotime($value[1])),
                              'KDSA'             => $value[2],
                              'KDJD'             => $value[3],
                              'KDBAG'            => $value[4],
                              'KDUNIT'           => $value[5],
                              'KDKOTAMA'         =>  $value[6],
                              'KDSATKER'         =>  $value[7],
                              'KDFUNGSI'         =>  $value[8],
                              'KDSFUNG'          =>  $value[9],
                              'KDPROGRAM'        =>  $value[10],
                              'KDGIAT'           =>  $value[11],
                              'KDOUTPUT'         =>  $value[12],
                              'KDURAIAN'         =>  $value[13],
                              'KDMAK'            =>  $value[14],
                              'SKOP_INI'         =>  $value[15],
                              'KDSOUTPUT'        =>  $value[16],
                              'KDKMPNEN'         =>  $value[17],
                              'KDSKMPNEN'        =>  $value[18],
                              'KDSMAK'           =>  $value[19],
                              'URAIAN'           =>  $value[20],
                              'NO_URUT'          =>  $value[21],
                              'FLAG'             =>  $value[22],
                              'KDDIPA'           =>  $value[23],
                              'REV'              =>  $value[24],
                              'tgl_input'        =>  date('Y-m-d')
                          );

                          //tambahkan array $data ke $save
                          array_push($save, $data);
                      }
                      
                      $numRow++;
                    }
                    // die();
                    //simpan data ke database
                    $this->Model_Subsatker->simpanImportKontrak($save);

                    //tutup spout reader
                    $reader->close();

                    //hapus file yang sudah diupload
                    unlink('./temp_doc/'.$file['file_name']);

                    //tampilkan pesan success dan redirect ulang ke index controller import
                    echo    '<script type="text/javascript">
                                alert(\'Data berhasil disimpan\');
                                window.location.replace("'.base_url().'subsatker/inputdatakontrak");
                            </script>';
                }
            }
            else
            {
                echo "Error :".$this->upload->display_errors(); //tampilkan pesan error jika file gagal diupload
            }
        }

        $this->load->view('subpusstrahan/importkontrak');
    }else{
      echo "Access Denied";
    }
  }

  function inputdataku42(){
    if($this->session->userdata('level')==='9'){
        //ketika button submit diklik
        if ($this->input->post('submit', TRUE) == 'upload')
        {
            $config['upload_path']      = './temp_doc/'; //siapkan path untuk upload file
            $config['allowed_types']    = 'xlsx'; //siapkan format file
            $config['file_name']        = 'doc'.time(); //rename file yang diupload
        
            $this->load->library('upload', $config);
        
            if ($this->upload->do_upload('excel'))
            {
                //fetch data upload
                $file   = $this->upload->data();
        
                $reader = ReaderEntityFactory::createXLSXReader(); //set Type file xlsx
                $reader->setShouldFormatDates(true); //set date must be before open file
                $reader->open('temp_doc/'.$file['file_name']); //open file xlsx
                
                //looping pembacaat sheet dalam file        
                foreach ($reader->getSheetIterator() as $sheet)
                {
                    $numRow = 1;

                    //siapkan variabel array kosong untuk menampung variabel array data
                    $save   = array();

                    //looping pembacaan row dalam sheet
                    foreach ($sheet->getRowIterator() as $row)
                    {
                      $value = $row->toArray();
                      
                      if ($numRow > 1)
                      {
                          $data = array(
                              'NO_KU'           => $value[0],
                              'TG_KU'           => date("Y-m-d",strtotime($value[1])),
                              'KDSA'             => $value[2],
                              'KDJD'             => $value[3],
                              'KDBAG'            => $value[4],
                              'KDUNIT'           => $value[5],
                              'KDKOTAMA'         =>  $value[6],
                              'KDSATKER'         =>  $value[7],
                              'KDFUNGSI'         =>  $value[8],
                              'KDSFUNG'          =>  $value[9],
                              'KDPROGRAM'        =>  $value[10],
                              'KDGIAT'           =>  $value[11],
                              'KDOUTPUT'         =>  $value[12],
                              'KDURAIAN'         =>  $value[13],
                              'KDMAK'            =>  $value[14],
                              'KU_INI'           =>  $value[15],
                              'KDSOUTPUT'        =>  $value[16],
                              'KDKMPNEN'         =>  $value[17],
                              'KDSKMPNEN'        =>  $value[18],
                              'KDSMAK'           =>  $value[19],
                              'URAIAN'           =>  $value[20],
                              'NO_URUT'          =>  $value[21],
                              'FLAG'             =>  $value[22],
                              'KDDIPA'           =>  $value[23],
                              'REV'              =>  $value[24],
                              'tgl_input'        =>  date('Y-m-d')
                          );

                          //tambahkan array $data ke $save
                          array_push($save, $data);
                      }
                      
                      $numRow++;
                    }
                    // var_dump($save);
                    // die();
                    //simpan data ke database
                    $this->Model_Subsatker->simpanImportKu42($save);

                    //tutup spout reader
                    $reader->close();

                    //hapus file yang sudah diupload
                    unlink('./temp_doc/'.$file['file_name']);

                    //tampilkan pesan success dan redirect ulang ke index controller import
                    echo    '<script type="text/javascript">
                                alert(\'Data berhasil disimpan\');
                                window.location.replace("'.base_url().'subsatker/inputdataku42");
                            </script>';
                }
            }
            else
            {
                echo "Error :".$this->upload->display_errors(); //tampilkan pesan error jika file gagal diupload
            }
        }

        $this->load->view('subpusstrahan/importku42');
    }else{
      echo "Access Denied";
    }
  }

  function inputdataoutput(){
    if($this->session->userdata('level')==='9'){
        //ketika button submit diklik
        if ($this->input->post('submit', TRUE) == 'upload')
        {
            $config['upload_path']      = './temp_doc/'; //siapkan path untuk upload file
            $config['allowed_types']    = 'xlsx'; //siapkan format file
            $config['file_name']        = 'doc'.time(); //rename file yang diupload
        
            $this->load->library('upload', $config);
        
            if ($this->upload->do_upload('excel'))
            {
                //fetch data upload
                $file   = $this->upload->data();
        
                $reader = ReaderEntityFactory::createXLSXReader(); //set Type file xlsx
                $reader->setShouldFormatDates(true); //set date must be before open file
                $reader->open('temp_doc/'.$file['file_name']); //open file xlsx
                
                //looping pembacaat sheet dalam file        
                foreach ($reader->getSheetIterator() as $sheet)
                {
                    $numRow = 1;

                    //siapkan variabel array kosong untuk menampung variabel array data
                    $save   = array();

                    //looping pembacaan row dalam sheet
                    foreach ($sheet->getRowIterator() as $row)
                    {
                      $value = $row->toArray();
                      
                      if ($numRow > 1)
                      {
                          $data = array(
                              'THANG'          => $value[0],
                              'KDJENDOK'       => $value[1],
                              'KDSATKER'       => $value[2],
                              'KDDEPT'         => $value[3],
                              'KDUNIT'         => $value[4],
                              'KDPROGRAM'      => $value[5],
                              'KDGIAT'         =>  $value[6],
                              'KDOUTPUT'       =>  $value[7],
                              'KDLOKASI'       =>  $value[8],
                              'KDKABKOTA'      =>  $value[9],
                              'KDDEKON'        =>  $value[10],
                              'VOLMIN1'        =>  $value[11],
                              'VOL'            =>  $value[12],
                              'VOLPLS1'        =>  $value[13],
                              'VOLPLS2'        =>  $value[14],
                              'VOLPLS3'        =>  $value[15],
                              'VOLSBK'         =>  $value[16],
                              'RPHMIN1'        =>  $value[17],
                              'RPHPLS1'        =>  $value[18],
                              'RPHPLS2'        =>  $value[19],
                              'RPHPLS3'        =>  $value[20],
                              'SBKKET'         =>  $value[21],
                              'SBKMIN1'        =>  $value[22],
                              'KDSB'           =>  $value[23],
                              'KDJOUTPUT'      =>  $value[24],
                              'THANGAWAL'      =>   date($value[25].'-01-01'),
                              'THANGAKHIR'     =>   date($value[26].'-01-01'),
                              'KDTEMA'         =>   $value[27],
                              'KDIB'           =>   $value[28],
                              'KDAUTO'         =>   $value[29],
                              'KDMULTI'        =>   $value[30],
                              'KDDIPA'         =>   $value[31],
                              '_NullFlags'     =>   $value[32],
                              'tgl_input'      =>  date('Y-m-d')
                          );

                          //tambahkan array $data ke $save
                          array_push($save, $data);
                      }
                      
                      $numRow++;
                    }
                    // var_dump($save);
                    // die();
                    //simpan data ke database
                    $this->Model_Subsatker->simpanImportOutput($save);

                    //tutup spout reader
                    $reader->close();

                    //hapus file yang sudah diupload
                    unlink('./temp_doc/'.$file['file_name']);

                    //tampilkan pesan success dan redirect ulang ke index controller import
                    echo    '<script type="text/javascript">
                                alert(\'Data berhasil disimpan\');
                                window.location.replace("'.base_url().'subsatker/inputdataoutput");
                            </script>';
                }
            }
            else
            {
                echo "Error :".$this->upload->display_errors(); //tampilkan pesan error jika file gagal diupload
            }
        }

        $this->load->view('subpusstrahan/importoutput');
    }else{
      echo "Access Denied";
    }
  }
  
  function inputdatapppa(){
    if($this->session->userdata('level')==='9'){
        //ketika button submit diklik
        if ($this->input->post('submit', TRUE) == 'upload')
        {
            $config['upload_path']      = './temp_doc/'; //siapkan path untuk upload file
            $config['allowed_types']    = 'xlsx'; //siapkan format file
            $config['file_name']        = 'doc'.time(); //rename file yang diupload
        
            $this->load->library('upload', $config);
        
            if ($this->upload->do_upload('excel'))
            {
                //fetch data upload
                $file   = $this->upload->data();
        
                $reader = ReaderEntityFactory::createXLSXReader(); //set Type file xlsx
                $reader->setShouldFormatDates(true); //set date must be before open file
                $reader->open('temp_doc/'.$file['file_name']); //open file xlsx
                
                //looping pembacaat sheet dalam file        
                foreach ($reader->getSheetIterator() as $sheet)
                {
                    $numRow = 1;

                    //siapkan variabel array kosong untuk menampung variabel array data
                    $save   = array();

                    //looping pembacaan row dalam sheet
                    foreach ($sheet->getRowIterator() as $row)
                    {
                      $value = $row->toArray();
                      
                      if ($numRow > 1)
                      {
                          $data = array(
                              'THANG'          => $value[0],
                              'KDJD'       => $value[1],
                              'KDSA'       => $value[2],
                              'KDDEPT'         => $value[3],
                              'KDUNIT'         => $value[4],
                              'KDKOTAMA'      => $value[5],
                              'KDSATKER'         =>  $value[6],
                              'KDFUNGSI'       =>  $value[7],
                              'KDSFUNG'       =>  $value[8],
                              'KDPROGRAM'      =>  $value[9],
                              'KDGIAT'        =>  $value[10],
                              'KDOUTPUT'        =>  $value[11],
                              'KDSOUTPUT'            =>  $value[12],
                              'KDKMPNEN'        =>  $value[13],
                              'KDMAK'        =>  $value[14],
                              'JUMLAH'        =>  $value[15],
                              'NMITEM'         =>  $value[16],
                              'URAIAN'        =>  $value[17],
                              'KDDIPA'        =>  $value[18],
                              'KODESAT'        =>  $value[19],
                              '_NullFlags'     =>   $value[20],
                              'tgl_input'      =>  date('Y-m-d')
                          );

                          //tambahkan array $data ke $save
                          array_push($save, $data);
                      }
                      
                      $numRow++;
                    }
                    // var_dump($save);
                    // die();
                    //simpan data ke database
                    $this->Model_Subsatker->simpanImportPPPA($save);

                    //tutup spout reader
                    $reader->close();

                    //hapus file yang sudah diupload
                    unlink('./temp_doc/'.$file['file_name']);

                    //tampilkan pesan success dan redirect ulang ke index controller import
                    echo    '<script type="text/javascript">
                                alert(\'Data berhasil disimpan\');
                                window.location.replace("'.base_url().'subsatker/inputdatapppa");
                            </script>';
                }
            }
            else
            {
                echo "Error :".$this->upload->display_errors(); //tampilkan pesan error jika file gagal diupload
            }
        }

        $this->load->view('subpusstrahan/importpppa');
    }else{
      echo "Access Denied";
    }
  }

  function inputdatarevpppa(){
    if($this->session->userdata('level')==='9'){
        //ketika button submit diklik
        if ($this->input->post('submit', TRUE) == 'upload')
        {
            $config['upload_path']      = './temp_doc/'; //siapkan path untuk upload file
            $config['allowed_types']    = 'xlsx'; //siapkan format file
            $config['file_name']        = 'doc'.time(); //rename file yang diupload
        
            $this->load->library('upload', $config);
        
            if ($this->upload->do_upload('excel'))
            {
                //fetch data upload
                $file   = $this->upload->data();
        
                $reader = ReaderEntityFactory::createXLSXReader(); //set Type file xlsx
                $reader->setShouldFormatDates(true); //set date must be before open file
                $reader->open('temp_doc/'.$file['file_name']); //open file xlsx
                
                //looping pembacaat sheet dalam file        
                foreach ($reader->getSheetIterator() as $sheet)
                {
                    $numRow = 1;

                    //siapkan variabel array kosong untuk menampung variabel array data
                    $save   = array();

                    //looping pembacaan row dalam sheet
                    foreach ($sheet->getRowIterator() as $row)
                    {
                      $value = $row->toArray();
                      
                      if ($numRow > 1)
                      {
                          $data = array(
                              'THANG'          => $value[0],
                              'KDJD'           => $value[1],
                              'KDSA'           => $value[2],
                              'KDDEPT'         => $value[3],
                              'KDUNIT'         => $value[4],
                              'KDKOTAMA'       => $value[5],
                              'KDSATKER'       =>  $value[6],
                              'KDFUNGSI'       =>  $value[7],
                              'KDSFUNG'        =>  $value[8],
                              'KDPROGRAM'      =>  $value[9],
                              'KDGIAT'         =>  $value[10],
                              'KDOUTPUT'       =>  $value[11],
                              'KDUSOUTPUT'     =>  $value[12],
                              'KDKMPNEN'       =>  $value[13],
                              'KDSKMPNEN'      =>  $value[14],
                              'KDMAK'          =>  $value[15],
                              'KDSMAK'         =>  $value[16],
                              'JUMLAH'         =>  $value[17],
                              'URAIAN'         =>  $value[18],
                              'TGLREV'         =>  date("Y-m-d",strtotime($value[19])),
                              'NO_URUT'        =>   $value[20],
                              'KDSOUTPUT'      =>  $value[21],
                              'KDDIPA'         =>  $value[22],
                              '_NullFlags'     =>  $value[23],
                              'tgl_input'      =>  date('Y-m-d')
                          );

                          //tambahkan array $data ke $save
                          array_push($save, $data);
                      }
                      
                      $numRow++;
                    }
                    // var_dump($save);
                    // die();
                    //simpan data ke database
                    $this->Model_Subsatker->simpanImportRevPPPA($save);

                    //tutup spout reader
                    $reader->close();

                    //hapus file yang sudah diupload
                    unlink('./temp_doc/'.$file['file_name']);

                    //tampilkan pesan success dan redirect ulang ke index controller import
                    echo    '<script type="text/javascript">
                                alert(\'Data berhasil disimpan\');
                                window.location.replace("'.base_url().'subsatker/inputdatarevpppa");
                            </script>';
                }
            }
            else
            {
                echo "Error :".$this->upload->display_errors(); //tampilkan pesan error jika file gagal diupload
            }
        }

        $this->load->view('subpusstrahan/importrevpppa');
    }else{
      echo "Access Denied";
    }
  }

  function inputdatarevspp(){
    if($this->session->userdata('level')==='9'){
        //ketika button submit diklik
        if ($this->input->post('submit', TRUE) == 'upload')
        {
            $config['upload_path']      = './temp_doc/'; //siapkan path untuk upload file
            $config['allowed_types']    = 'xlsx'; //siapkan format file
            $config['file_name']        = 'doc'.time(); //rename file yang diupload
        
            $this->load->library('upload', $config);
        
            if ($this->upload->do_upload('excel'))
            {
                //fetch data upload
                $file   = $this->upload->data();
        
                $reader = ReaderEntityFactory::createXLSXReader(); //set Type file xlsx
                $reader->setShouldFormatDates(true); //set date must be before open file
                $reader->open('temp_doc/'.$file['file_name']); //open file xlsx
                
                //looping pembacaat sheet dalam file        
                foreach ($reader->getSheetIterator() as $sheet)
                {
                    $numRow = 1;

                    //siapkan variabel array kosong untuk menampung variabel array data
                    $save   = array();

                    //looping pembacaan row dalam sheet
                    foreach ($sheet->getRowIterator() as $row)
                    {
                      $value = $row->toArray();
                      
                      if ($numRow > 1)
                      {
                          $data = array(
                              'NO_SPP'          => $value[0],
                              'TG_SPP'           =>  date("Y-m-d",strtotime($value[1])), //time to string
                              'KDSA'           => $value[2],
                              'KDJD'         => $value[3],
                              'KDBAG'         => $value[4],
                              'KDUNIT'       => $value[5],
                              'KDKOTAMA'       =>  $value[6],
                              'KDSATKER'       =>  $value[7],
                              'KDFUNGSI'        =>  $value[8],
                              'KDSFUNG'      =>  $value[9],
                              'KDPROGRAM'         =>  $value[10],
                              'KDGIAT'       =>  $value[11],
                              'KDOUTPUT'     =>  $value[12],
                              'KDMAK'       =>  $value[13],
                              'SPP_INI'      =>  $value[14],
                              'KDSOUTPUT'          =>  $value[15],
                              'KDKMPNEN'         =>  $value[16],
                              'KDSKMPNEN'         =>  $value[17],
                              'KDSMAK'         =>  $value[18],
                              'URAIAN'         =>  $value[19],
                              'NO_URUT'        =>   $value[20],
                              'FLAG'      =>  $value[21],
                              'NO_SKOP'         =>  $value[22],
                              'NO_BK'     =>  $value[23],
                              'TG_BK'  =>  date("Y-m-d",strtotime($value[24])), //time to string
                              'NO_NPB'  =>  $value[25],
                              'UNTUK'  =>  $value[26],
                              'KDDIPA'  =>  $value[27],
                              'KDURAIAN'  =>  $value[28],
                              'NO_KON'  =>  $value[29],
                              'SPP_LALU'  =>  $value[30],
                              'tgl_input'      =>  date('Y-m-d')
                          );

                          //tambahkan array $data ke $save
                          array_push($save, $data);
                      }
                      
                      $numRow++;
                    }
                    // var_dump($save);
                    // die();
                    //simpan data ke database
                    $this->Model_Subsatker->simpanImportRevSPP($save);

                    //tutup spout reader
                    $reader->close();

                    //hapus file yang sudah diupload
                    unlink('./temp_doc/'.$file['file_name']);

                    //tampilkan pesan success dan redirect ulang ke index controller import
                    echo    '<script type="text/javascript">
                                alert(\'Data berhasil disimpan\');
                                window.location.replace("'.base_url().'subsatker/inputdatarevspp");
                            </script>';
                }
            }
            else
            {
                echo "Error :".$this->upload->display_errors(); //tampilkan pesan error jika file gagal diupload
            }
        }

        $this->load->view('subpusstrahan/importrevspp');
    }else{
      echo "Access Denied";
    }
  }

  function inputdataskop(){
    if($this->session->userdata('level')==='9'){
        //ketika button submit diklik
        if ($this->input->post('submit', TRUE) == 'upload')
        {
            $config['upload_path']      = './temp_doc/'; //siapkan path untuk upload file
            $config['allowed_types']    = 'xlsx'; //siapkan format file
            $config['file_name']        = 'doc'.time(); //rename file yang diupload
        
            $this->load->library('upload', $config);
        
            if ($this->upload->do_upload('excel'))
            {
                //fetch data upload
                $file   = $this->upload->data();
        
                $reader = ReaderEntityFactory::createXLSXReader(); //set Type file xlsx
                $reader->setShouldFormatDates(true); //set date must be before open file
                $reader->open('temp_doc/'.$file['file_name']); //open file xlsx
                
                //looping pembacaat sheet dalam file        
                foreach ($reader->getSheetIterator() as $sheet)
                {
                    $numRow = 1;

                    //siapkan variabel array kosong untuk menampung variabel array data
                    $save   = array();

                    //looping pembacaan row dalam sheet
                    foreach ($sheet->getRowIterator() as $row)
                    {
                      $value = $row->toArray();
                      
                      if ($numRow > 1)
                      {
                          $data = array(
                              'NO_KOP'          => $value[0],
                              'TG_KOP'           =>  date("Y-m-d",strtotime($value[1])), //time to string
                              'KDSA'           => $value[2],
                              'KDJD'         => $value[3],
                              'KDBAG'         => $value[4],
                              'KDUNIT'       => $value[5],
                              'KDKOTAMA'       =>  $value[6],
                              'KDSATKER'       =>  $value[7],
                              'KDFUNGSI'        =>  $value[8],
                              'KDSFUNG'      =>  $value[9],
                              'KDPROGRAM'         =>  $value[10],
                              'KDGIAT'       =>  $value[11],
                              'KDOUTPUT'     =>  $value[12],
                              'KDURAIAN'       =>  $value[13],
                              'KDMAK'      =>  $value[14],
                              'SKOP_INI'          =>  $value[15],
                              'KDSOUTPUT'         =>  $value[16],
                              'KDKMPNEN'         =>  $value[17],
                              'KDSKMPNEN'         =>  $value[18],
                              'KDSMAK'         =>  $value[19],
                              'URAIAN'        =>   $value[20],
                              'NO_URUT'      =>  $value[21],
                              'FLAG'         =>  $value[22],
                              'KDDIPA'     =>  $value[23],
                              'REV'  =>  $value[24], //time to string
                              'tgl_input'      =>  date('Y-m-d')
                          );

                          //tambahkan array $data ke $save
                          array_push($save, $data);
                      }
                      
                      $numRow++;
                    }
                    // var_dump($save);
                    // die();
                    //simpan data ke database
                    $this->Model_Subsatker->simpanImportSKOP($save);

                    //tutup spout reader
                    $reader->close();

                    //hapus file yang sudah diupload
                    unlink('./temp_doc/'.$file['file_name']);

                    //tampilkan pesan success dan redirect ulang ke index controller import
                    echo    '<script type="text/javascript">
                                alert(\'Data berhasil disimpan\');
                                window.location.replace("'.base_url().'subsatker/inputdataskop");
                            </script>';
                }
            }
            else
            {
                echo "Error :".$this->upload->display_errors(); //tampilkan pesan error jika file gagal diupload
            }
        }

        $this->load->view('subpusstrahan/importskop');
    }else{
      echo "Access Denied";
    }
  }

  function inputdatasoutput(){
    if($this->session->userdata('level')==='9'){
        //ketika button submit diklik
        if ($this->input->post('submit', TRUE) == 'upload')
        {
            $config['upload_path']      = './temp_doc/'; //siapkan path untuk upload file
            $config['allowed_types']    = 'xlsx'; //siapkan format file
            $config['file_name']        = 'doc'.time(); //rename file yang diupload
        
            $this->load->library('upload', $config);
        
            if ($this->upload->do_upload('excel'))
            {
                //fetch data upload
                $file   = $this->upload->data();
        
                $reader = ReaderEntityFactory::createXLSXReader(); //set Type file xlsx
                $reader->setShouldFormatDates(true); //set date must be before open file
                $reader->open('temp_doc/'.$file['file_name']); //open file xlsx
                
                //looping pembacaat sheet dalam file        
                foreach ($reader->getSheetIterator() as $sheet)
                {
                    $numRow = 1;

                    //siapkan variabel array kosong untuk menampung variabel array data
                    $save   = array();

                    //looping pembacaan row dalam sheet
                    foreach ($sheet->getRowIterator() as $row)
                    {
                      $value = $row->toArray();
                      
                      if ($numRow > 1)
                      {
                          $data = array(
                              'THANG'          => $value[0],
                              'KDJENDOK'       =>  $value[1], //time to string
                              'KDSATKER'       => $value[2],
                              'KDDEPT'         => $value[3],
                              'KDUNIT'         => $value[4],
                              'KDPROGRAM'      => $value[5],
                              'KDGIAT'         =>  $value[6],
                              'KDOUTPUT'       =>  $value[7],
                              'KDLOKASI'       =>  $value[8],
                              'KDKABKOTA'      =>  $value[9],
                              'KDDEKON'        =>  $value[10],
                              'KDSOUTPUT'      =>  $value[11],
                              'URSOUTPUT'      =>  $value[12],
                              'SBMKVOL'        =>  $value[13],
                              'SBMKSAT'        =>  $value[14],
                              'SBMKMIN1'       =>  $value[15],
                              'SBMKKET'        =>  $value[16],
                              'KDSB'           =>  $value[17],
                              'VOLSOUT'        =>  $value[18],
                              'KDIB'           =>  $value[19],
                              'KDDIPA'         =>   $value[20],
                              '_NullFlags'     =>  $value[21],
                              'tgl_input'      =>  date('Y-m-d')
                          );

                          //tambahkan array $data ke $save
                          array_push($save, $data);
                      }
                      
                      $numRow++;
                    }
                    // var_dump($save);
                    // die();
                    //simpan data ke database
                    $this->Model_Subsatker->simpanImportSoutput($save);

                    //tutup spout reader
                    $reader->close();

                    //hapus file yang sudah diupload
                    unlink('./temp_doc/'.$file['file_name']);

                    //tampilkan pesan success dan redirect ulang ke index controller import
                    echo    '<script type="text/javascript">
                                alert(\'Data berhasil disimpan\');
                                window.location.replace("'.base_url().'subsatker/inputdatasoutput");
                            </script>';
                }
            }
            else
            {
                echo "Error :".$this->upload->display_errors(); //tampilkan pesan error jika file gagal diupload
            }
        }

        $this->load->view('subpusstrahan/importsoutput');
    }else{
      echo "Access Denied";
    }
  }

  function inputdataspp(){
    if($this->session->userdata('level')==='9'){
        //ketika button submit diklik
        if ($this->input->post('submit', TRUE) == 'upload')
        {
            $config['upload_path']      = './temp_doc/'; //siapkan path untuk upload file
            $config['allowed_types']    = 'xlsx'; //siapkan format file
            $config['file_name']        = 'doc'.time(); //rename file yang diupload
        
            $this->load->library('upload', $config);
        
            if ($this->upload->do_upload('excel'))
            {
                //fetch data upload
                $file   = $this->upload->data();
        
                $reader = ReaderEntityFactory::createXLSXReader(); //set Type file xlsx
                $reader->setShouldFormatDates(true); //set date must be before open file
                $reader->open('temp_doc/'.$file['file_name']); //open file xlsx
                
                //looping pembacaat sheet dalam file        
                foreach ($reader->getSheetIterator() as $sheet)
                {
                    $numRow = 1;

                    //siapkan variabel array kosong untuk menampung variabel array data
                    $save   = array();

                    //looping pembacaan row dalam sheet
                    foreach ($sheet->getRowIterator() as $row)
                    {
                      $value = $row->toArray();
                      
                      if ($numRow > 1)
                      {
                          $data = array(
                              'NO_SPP'          => $value[0],
                              'TG_SPP'          =>  date("Y-m-d",strtotime($value[1])), //time to string
                              'KDSA'            => $value[2],
                              'KDJD'            => $value[3],
                              'KDBAG'           => $value[4],
                              'KDUNIT'          => $value[5],
                              'KDKOTAMA'        =>  $value[6],
                              'KDSATKER'        =>  $value[7],
                              'KDFUNGSI'        =>  $value[8],
                              'KDSFUNG'         =>  $value[9],
                              'KDPROGRAM'       =>  $value[10],
                              'KDGIAT'          =>  $value[11],
                              'KDOUTPUT'        =>  $value[12],
                              'KDURAIAN'        =>  $value[13],
                              'KDMAK'           =>  $value[14],
                              'SPP_INI'         =>  $value[15],
                              'KDSOUTPUT'       =>  $value[16],
                              'KDKMPNEN'        =>  $value[17],
                              'KDSKMPNEN'       =>  $value[18],
                              'KDSMAK'          =>  $value[19],
                              'URAIAN'          =>   $value[20],
                              'NO_URUT'         =>  $value[21],
                              'FLAG'            =>  $value[22],
                              'NO_SKOP'         =>  $value[23],
                              'NO_BK'           =>  $value[24],
                              'TG_BK'           =>  date("Y-m-d",strtotime($value[25])),
                              'NO_NPB'          =>  $value[26],
                              'UNTUK'           =>  $value[27],
                              'KDDIPA'          =>  $value[28],
                              'NO_KON'          =>  $value[29],
                              'SPP_LALU'        =>  $value[30],
                              'tgl_input'       =>  date('Y-m-d')
                          );

                          //tambahkan array $data ke $save
                          array_push($save, $data);
                      }
                      
                      $numRow++;
                    }
                    // var_dump($save);
                    // die();
                    //simpan data ke database
                    $this->Model_Subsatker->simpanImportSPP($save);

                    //tutup spout reader
                    $reader->close();

                    //hapus file yang sudah diupload
                    unlink('./temp_doc/'.$file['file_name']);

                    //tampilkan pesan success dan redirect ulang ke index controller import
                    echo    '<script type="text/javascript">
                                alert(\'Data berhasil disimpan\');
                                window.location.replace("'.base_url().'subsatker/inputdataspp");
                            </script>';
                }
            }
            else
            {
                echo "Error :".$this->upload->display_errors(); //tampilkan pesan error jika file gagal diupload
            }
        }

        $this->load->view('subpusstrahan/importspp');
    }else{
      echo "Access Denied";
    }
  }

  function inputdatatepa(){
    if($this->session->userdata('level')==='9'){
        //ketika button submit diklik
        if ($this->input->post('submit', TRUE) == 'upload')
        {
            $config['upload_path']      = './temp_doc/'; //siapkan path untuk upload file
            $config['allowed_types']    = 'xlsx'; //siapkan format file
            $config['file_name']        = 'doc'.time(); //rename file yang diupload
        
            $this->load->library('upload', $config);
        
            if ($this->upload->do_upload('excel'))
            {
                //fetch data upload
                $file   = $this->upload->data();
        
                $reader = ReaderEntityFactory::createXLSXReader(); //set Type file xlsx
                $reader->setShouldFormatDates(true); //set date must be before open file
                $reader->open('temp_doc/'.$file['file_name']); //open file xlsx
                
                //looping pembacaat sheet dalam file        
                foreach ($reader->getSheetIterator() as $sheet)
                {
                    $numRow = 1;

                    //siapkan variabel array kosong untuk menampung variabel array data
                    $save   = array();

                    //looping pembacaan row dalam sheet
                    foreach ($sheet->getRowIterator() as $row)
                    {
                      $value = $row->toArray();
                      
                      if ($numRow > 1)
                      {
                          $data = array(
                              'TG_TEPA'          => date("Y-m-d",strtotime($value[0])),
                              'KDSA'             =>  $value[1], //time to string
                              'KDJD'             => $value[2],
                              'KDBAG'            => $value[3],
                              'KDUNIT'           => $value[4],
                              'KDKOTAMA'         => $value[5],
                              'KDSATKER'         =>  $value[6],
                              'KDFUNGSI'         =>  $value[7],
                              'KDSFUNG'          =>  $value[8],
                              'KDPROGRAM'        =>  $value[9],
                              'KDGIAT'           =>  $value[10],
                              'KDOUTPUT'         =>  $value[11],
                              'KDURAIAN'         =>  $value[12],
                              'KDMAK'            =>  $value[13],
                              'TEPA_INI'         =>  $value[14],
                              'KDSOUTPUT'        =>  $value[15],
                              'URAIAN'           =>  $value[16],
                              'NO_URUT'          =>  $value[17],
                              'FLAG'             =>  $value[18],
                              'KDDIPA'           =>  $value[19],
                              'PAGU'             =>  $value[20],
                              'KD_ADA'           =>  $value[21],
                              'KD_JNS'           =>  $value[22],
                              'KD_TAHAPAN'       =>  $value[23],
                              'KDSDANA'          =>  $value[24],
                              'KD_STR'           =>  $value[25],
                              'KDKMPNEN'         =>  $value[26],
                              'tgl_input'        =>  date('Y-m-d')
                          );

                          //tambahkan array $data ke $save
                          array_push($save, $data);
                      }
                      
                      $numRow++;
                    }
                    // var_dump($save);
                    // die();
                    //simpan data ke database
                    $this->Model_Subsatker->simpanImportTEPA($save);

                    //tutup spout reader
                    $reader->close();

                    //hapus file yang sudah diupload
                    unlink('./temp_doc/'.$file['file_name']);

                    //tampilkan pesan success dan redirect ulang ke index controller import
                    echo    '<script type="text/javascript">
                                alert(\'Data berhasil disimpan\');
                                window.location.replace("'.base_url().'subsatker/inputdatatepa");
                            </script>';
                }
            }
            else
            {
                echo "Error :".$this->upload->display_errors(); //tampilkan pesan error jika file gagal diupload
            }
        }

        $this->load->view('subpusstrahan/importtepa');
    }else{
      echo "Access Denied";
    }
  }

  function inputdatatoutput(){
    if($this->session->userdata('level')==='9'){
        //ketika button submit diklik
        if ($this->input->post('submit', TRUE) == 'upload')
        {
            $config['upload_path']      = './temp_doc/'; //siapkan path untuk upload file
            $config['allowed_types']    = 'xlsx'; //siapkan format file
            $config['file_name']        = 'doc'.time(); //rename file yang diupload
        
            $this->load->library('upload', $config);
        
            if ($this->upload->do_upload('excel'))
            {
                //fetch data upload
                $file   = $this->upload->data();
        
                $reader = ReaderEntityFactory::createXLSXReader(); //set Type file xlsx
                $reader->setShouldFormatDates(true); //set date must be before open file
                $reader->open('temp_doc/'.$file['file_name']); //open file xlsx
                
                //looping pembacaat sheet dalam file        
                foreach ($reader->getSheetIterator() as $sheet)
                {
                    $numRow = 1;

                    //siapkan variabel array kosong untuk menampung variabel array data
                    $save   = array();

                    //looping pembacaan row dalam sheet
                    foreach ($sheet->getRowIterator() as $row)
                    {
                      $value = $row->toArray();
                      
                      if ($numRow > 1)
                      {
                          $data = array(
                              'KDGIAT'          => date("Y-m-d",strtotime($value[0])),
                              'KDOUTPUT'        =>  $value[1], //time to string
                              'NMOUTPUT'        => $value[2],
                              'SAT'             => $value[3],
                              'KDSUM'           => $value[4],
                              'THNAWAL'         => $value[5],
                              'THNAKHIR'        =>  $value[6],
                              'KDMULTI'         =>  $value[7],
                              'KDJNSOUT'        =>  $value[8],
                              'KDIKK'           =>  $value[9],
                              'KDTEMA'          =>  $value[10],
                              'KDCTTOUT'        =>  $value[11],
                              'tgl_input'       =>  date('Y-m-d')
                          );

                          //tambahkan array $data ke $save
                          array_push($save, $data);
                      }
                      
                      $numRow++;
                    }
                    // var_dump($save);
                    // die();
                    //simpan data ke database
                    $this->Model_Subsatker->simpanImportTOutput($save);

                    //tutup spout reader
                    $reader->close();

                    //hapus file yang sudah diupload
                    unlink('./temp_doc/'.$file['file_name']);

                    //tampilkan pesan success dan redirect ulang ke index controller import
                    echo    '<script type="text/javascript">
                                alert(\'Data berhasil disimpan\');
                                window.location.replace("'.base_url().'subsatker/inputdatatoutput");
                            </script>';
                }
            }
            else
            {
                echo "Error :".$this->upload->display_errors(); //tampilkan pesan error jika file gagal diupload
            }
        }

        $this->load->view('subpusstrahan/importtoutput');
    }else{
      echo "Access Denied";
    }
  }

  function tampil_t_output() {
    $data['dataT_Output'] = $this->Model_Subsatker->select_all();
    $this->load->view('subpusstrahan/showtable/showT_Output.php', $data);
  }
  
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