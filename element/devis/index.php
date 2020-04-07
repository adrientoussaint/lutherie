<?php
require('facturePDF.php');
// #1 initialise les informations de base
var_dump($_POST["val"]);
// adresse de l'entreprise qui émet la facture
$adresse = "Woove\n50 rue Georges Clemenceau\n54600 Villers-les-Nancy\n\ncontact@woove.fr\n(+33) 3 89 68 27 54";
// adresse du client
$adresseClient = "Robert Meinard\n3 place de Clichy\n88154 Nancy le port";
// initialise l'objet facturePDF
$pdf = new facturePDF($adresse, null, "Woove - 50 rue Georges Clémenceau - 54600 Villers-les-Nancy - contact@woove.fr - (+33) 3 89 68 27 54\nLes produits livrés demeurent la propriété exclusive de notre entreprise jusqu'au paiement complet de la présente facture.\nRCS : 245-532-578- NANCY / TVA Intracomunautaire : FR 02 4578 1455 5578 3254 / SIRET 887 547 259 974 125");
// défini le logo
$pdf->setLogo('logo.png', 25, 10);
// entete des produits
$pdf->productHeaderAddRow('Produit', 100, 'L');
$pdf->productHeaderAddRow('Référence', 40, 'C');
// $pdf->productHeaderAddRow('Prix HT', 25, 'C');
// $pdf->productHeaderAddRow('QTE', 15, 'C');
$pdf->productHeaderAddRow('Prix HT', 50, 'R');
// entete des totaux
$pdf->totalHeaderAddRow(40, 'L');
$pdf->totalHeaderAddRow(30, 'R');
// element personnalisé
$pdf->elementAdd('', 'traitEnteteProduit', 'content');
$pdf->elementAdd('', 'traitBas', 'footer');

// #2 Créer une facture
//
// numéro de facture, date, texte avant le numéro de page
$pdf->initFacture("Facture n° ".$_POST["val"]["nb"], date('d-m-Y'), "Page ");
// produit
foreach($_POST["val"]["products"] as $key => $value){
    $pdf->productAdd(array($key, 'C22M9', $value, null, null));
}

// ligne des totaux
$pdf->totalAdd(array('Total HT', $_POST["val"]["total"]));
$tva = $_POST["val"]["total"]*0.2;
$pdf->totalAdd(array('TVA', $tva));
$pdf->totalAdd(array('Total TTC', $_POST["val"]["total"]+$tva));

// #3 Importe le gabarit
//
require('gabarit0.php');

// #4 Finalisation
// construit le PDF
$pdf->buildPDF();
// télécharge le fichier
$pdf->Output('F','../../pdf/'.$_POST['val']['ref'].'.pdf');
?>