<?php
class Categorie extends CI_Controller
{
    public function index()
    {

        $this->load->Model('Model_Ville');
        $data['titre']="votre nom";
        
    }
    public function AfficherLesVilles()
    {
        $idVilles = $_GET['idVille'];
        $model = $this->load->model('Model_Ville');
        $data ['LesRegions'] = $this->Model_Region->getRegions($idVille);

        $this->load->view('AfficherLesVilles');
    }


}

?>