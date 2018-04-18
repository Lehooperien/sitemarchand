<h2><?php echo $TitreDeLaPage ?></h2>

<?php

echo form_open('administrateur/ajouterUnProduitHTML5');

echo form_label("Libelle du produit",'lblProduit');
echo form_input('txtProduit', '',array('pattern' => '[a-zA-A]*', 'required'=>'required', 'libelle' => 'Saisir des lettres uniquement' )).'<BR>';

echo form_submit('boutonAjouter', 'Ajouter un produit').'<BR>';

echo form_close();

?>
