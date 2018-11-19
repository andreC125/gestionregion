<?php
class Model_Ville extends CI_Model
{


public function getAllVille()
{
    $sql = $this->db->get('ville');
    foreach ($sql->result()as $row)
    {
        $data[] =$row;
    }
    return $data;
}


}

?>