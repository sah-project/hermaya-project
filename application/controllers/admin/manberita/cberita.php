<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cberita  extends CI_Controller {

   public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/model_berita');
        $this->load->library('form_validation');

    }

   public function index(){
        $data = array (
            'sheader' => 'admin/ext/sheader',
            'header' => 'admin/vmenu/header',
            'content' => 'admin/pages/index',
            'footer'=> 'admin/vfooter/footer',
            'sfooter'=> 'admin/ext/sfooter',     
        );
        $this->load->view("admin/index", $data);
    }

    public function simpanberita (){          


        if (!empty($_POST)) {   
            $data = array(
                'tanggal' => $this->security->xss_clean($this->input->post('tanggal')),
                'judul' =>$this->security->xss_clean($this->input->post('judul')),
                'konten' =>$this->input->post('konten'),
                );
            $action = $this->model_berita->simpan_berita($data);
                if ($action==true) {
                    redirect('admin');
                } else {
                    echo "something wrong";
                }  
        } else {    
          redirect('master');
        } 
    }

       public function show_berita(){
        $data = array (
            'fetch_data' => $this->model_berita->fetch_data(),
            'sheader' => 'admin/ext/sheader',
            'header' => 'admin/vmenu/header',
            'content' => 'admin/pages/berita/show',
            'footer'=> 'admin/vfooter/footer',
            'sfooter'=> 'admin/ext/sfooter',     
        );
        $this->load->view("dashboard/index", $data);
    }

    

}
