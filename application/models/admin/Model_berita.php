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

    // function fetch_data()  
    //   {  
    //        $query = $this->db->query("select * from tcode");
    //        return $query; 
    //   }  

    function simpan_berita($data)
     {
        $this->db->set($data);  
        $this->db->insert($this->_table, $data);
        return true;
     }
  
}   
?>