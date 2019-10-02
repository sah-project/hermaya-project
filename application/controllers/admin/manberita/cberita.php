<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cberita  extends CI_Controller {

   public function __construct()
    {
        parent::__construct();
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
        $this->load->view("dashboard/index", $data);
    }

    public function simpanberita (){          
        if (!empty($_POST)) {   

            $master = array(
                'tanggal' => $this->security->xss_clean($this->input->post('tanggal')),
                'judul' =>$this->security->xss_clean($this->input->post('judul')),
                'konten' =>$this->security->xss_clean($this->input->post('konten')),
                );
            $action = $this->berita_model->save_master($master);
                if ($action==true) {
                    redirect('master');
                } else {
                    echo "something wrong";
                }  
        } else {    
          redirect('master');
        } 
    }

}
