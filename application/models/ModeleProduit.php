<?php 

class ModeleProduit extends CI_Model {

public function __construct() {
    $this->load->database();
}

public function insererUnProduit($pDonneesAInserer)
{
    return $this->db->insert('produit', $pDonneesAInserer);
} //insererUnProduit

}