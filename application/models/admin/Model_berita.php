<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_berita extends CI_Model
{
    private $_table = "berita";


    public function save_master($master)
    {
        $this->db->set($data);  
        $this->db->insert($this->_table, $master);
        return true;
    }

    function fetch_data()  
      {  
           $query = $this->db->query("select * from berita");
           return $query; 
      }  

    function simpan_berita($data)
     {
        $this->db->set($data);  
        $this->db->insert($this->_table, $data);
        return true;
     }



     private function _uploadImage()
    {
        $config['upload_path']          = './upload/product/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->product_id;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        if( ! $this->upload->initialize($config)){
                    $error = array('error' => $this->upload->display_errors());
                    echo "Error";
                }

        $this->load->library('upload', $config);

        //   var_dump($config);
        // exit;

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        print_r($this->upload->display_errors());
       //return "default.jpg";
    }

  
}   
?>