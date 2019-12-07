
<?php
include 'dbconnect.class.php';
function creationPanier(){
   if (!isset($_SESSION['panier'])){
      $_SESSION['panier']=array();
      $_SESSION['panier']['cid'] = array();
      $_SESSION['panier']['pid'] = array();
      $_SESSION['panier']['quant'] = array();
      $_SESSION['panier']['prix'] = array();
      $_SESSION['panier']['status'] = array();
      $_SESSION['panier']['verrou']=false;
   }
   return true;
}

function isVerrouille(){
    if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou'])
    return true;
    else
    return false;
 }

//ajouter un produit
function ajouterArticle($codeprod,$quantProduit,$prixProduit)
{
 if (creationPanier() && !isVerrouille())
    {
       $positionProduit = array_search($codeprod,  $_SESSION['panier']['cid']);
 
       if ($positionProduit !== false)
       {
          $_SESSION['panier']['quant'][$positionProduit] += $quantProduit ;
       }
       else
       {
          array_push( $_SESSION['panier']['cid'],$codeprod);
          array_push( $_SESSION['panier']['pid'],$quantProduit);
          array_push( $_SESSION['panier']['prix'],$prixProduit);
       }
    }
    else
    echo "Un problème est survenu veuillez contacter l'administrateur du site.";
 }
 //supression d'un produit
 function supprimerArticle($codeprod){
    if (creationPanier() && !isVerrouille())
    {
       $tmp=array();
       $tmp['cid'] = array();
       $tmp['quant'] = array();
       $tmp['prix'] = array();
       $tmp['status'] = array();
       $tmp['verrou'] = $_SESSION['panier']['verrou'];
 
       for($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++)
       {
          if ($_SESSION['panier']['libelleProduit'][$i] !== $libelleProduit)
          {
             array_push( $tmp['libelleProduit'],$_SESSION['panier']['libelleProduit'][$i]);
             array_push( $tmp['qteProduit'],$_SESSION['panier']['qteProduit'][$i]);
             array_push( $tmp['prixProduit'],$_SESSION['panier']['prixProduit'][$i]);
          }
 
       }
       $_SESSION['panier'] =  $tmp;
       unset($tmp);
    }
    else
    echo "Un problème est survenu veuillez contacter l'administrateur du site.";
 }
 //mise a jour de quantite
 function modifierQTeArticle($codeprod,$quantProduit){
    if (creationPanier() && !isVerrouille())
    {
       if ($quantProduit > 0)
       {
          $positionProduit = array_search($$codeprod,  $_SESSION['panier']['cid']);
 
          if ($positionProduit !== false)
          {
             $_SESSION['panier']['quant'][$positionProduit] = $quantProduit ;
          }
       }
       else
       supprimerArticle($codeprod);
    }
    else
    echo "Un problème est survenu veuillez contacter l'administrateur du site.";
 }
 //calcul prix total
 function MontantGlobal(){
    $total=0;
    for($i = 0; $i < count($_SESSION['panier']['lcid']); $i++)
    {
       $total += $_SESSION['panier']['quant'][$i] * $_SESSION['panier']['prix'][$i];
    }
    return $total;
 }
 //supression d'un panier
 function supprimePanier(){
    unset($_SESSION['panier']);
 }

 function compterArticles()
 {
    if (isset($_SESSION['panier']))
    return count($_SESSION['panier']['cid']);
    else
    return 0;
 
 }
 
 ?>
