<?php
class Administrateur extends CI_Controller 
{
    public function __construct()

    {
 
       parent::__construct();
 
       $this->load->helper('url');
          
       $this->load->model('ModeleProduit'); // chargement modèle, obligatoire
  
    } // __construct


    public function ajouterUnProduitHTML5()
    {
        $this->load->helper('form');
        $DonneesInjectees['TitreDeLaPage'] = 'Ajouter un produit';

        if ($this->input->post('boutonAjouter'))
        {
            $DonneesAInserer = array (
                'cLibelle' => $this->input->post('txtLibelle'),
            );
            $this->ModeleProduit->insererUnProduit($DonneesAInserer);
            $this->load->helper('url');
            $this->load->view('administrateur/insertionReussie');
        }
        else
        {
            $this->load->view('administrateur/ajouterUnProduitHTML5', $DonneesInjectees);
        }
    } // function
}