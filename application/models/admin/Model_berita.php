<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_berita extends CI_Model
{
    private $_table = "berita";


    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save_master($master)
    {
        $this->db->set($data);  
        $this->db->insert($this->_table, $master);
        return true;
    }

    public function fetch_data()  
      {  
           $query = $this->db->query("select * from berita");
           return $query; 
      }  

  public  function simpan_berita($data)
     {
        $this->db->set($data);  
        $this->db->insert($this->_table, $data);
        return true;
     }

   public function hps_berita($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id" => $id));
    }

    private function _deleteImage($id)
    {

        $berita = $this->getById($id);
        // echo $berita->image;
        // exit();
        if ($berita->image != "default.jpg") {
            $filename = $berita->image;
            return array_map('unlink', glob(FCPATH."upload/berita/$filename"));
        }
    }
  
}   
?>