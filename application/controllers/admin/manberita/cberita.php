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
            'fetch_data' => $this->model_berita->fetch_data(),
            'sheader' => 'admin/ext/sheader',
            'sheader_datatable' => 'admin/ext/sheader-datatable',
            'header' => 'admin/vmenu/header',
            'content' => 'admin/pages/index',
            'footer'=> 'admin/vfooter/footer',
            'sfooter'=> 'admin/ext/sfooter',     
            'sfooter_datatable'=> 'admin/ext/sfooter-datatable',
        );
        $this->load->view("admin/index", $data);
    }

    public function simpanberita (){          
        if (!empty($_POST)) {   
            $data = array(
                'tanggal' => $this->security->xss_clean($this->input->post('tanggal')),
                'judul' =>$this->security->xss_clean($this->input->post('judul')),
                'konten' =>$this->input->post('konten'),
                'image' =>$_FILES['image']['name'],
                );
            $action = $this->model_berita->simpan_berita($data);
                if ($action==true) {
                    $this->image = $this->_uploadImage();
                    redirect('admin/manage-berita');
                } else {
                    echo "something wrong";
                }  
        } else {    
          redirect('master');
        } 
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/berita/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $_FILES['image']['name'];
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        if( ! $this->upload->initialize($config)){
                    $error = array('error' => $this->upload->display_errors());
                    echo "Error";
                }

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());
       //return "default.jpg";
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


    public function hps_berita($id)
    {
        if (!isset($id)) show_404();
        if ($this->model_berita->hps_berita($id)) {
            redirect(site_url('admin/manage-berita'));
        }
    }


}
