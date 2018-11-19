<?php
class Model_Ville extends CI_Model
{
    public function GetAllVille()
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