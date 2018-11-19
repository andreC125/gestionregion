<?php
class Model_Region extends CI_Model
{


public function getAllRegion()
{
    $sql = $this->db->get('region');
    foreach ($sql->result()as $row)
    {
        $data[] =$row;
    }
    return $data;
}


}

?>