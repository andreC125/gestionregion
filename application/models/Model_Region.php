<?php
class Model_Region extends CI_Model
{
    public function GetAllRegion()
    {
        $sql =$this->db->select('nomVille','scoreVille')->from('ville')->where('');
        foreach($res->result() as $row)
        {
            $tab[] = $row;
        }
        return $tab;
    }
}

?>