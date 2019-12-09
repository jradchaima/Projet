
       
<?php
                    include 'produit/classes/produit.class.php';
                    $produit = new Produit;
                    $listProduits = $produit->readAllProduct();
                    $data =$listProduits->fetchAll();
                    foreach($data as $produitData):
                    ?>
         
       
    <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; widht:300px" align="center">
                        <figure>
                        <h6> <?= $produitData['pid'] ?></h6>
                        <img src="<?php echo $produitData['fichier']; ?>" class="img-responsive" class="img-fluid" style="border-radius:50px 50px 50px 50px" />
                        <a href="<?php echo $produitData['fichier']; ?>" class="link-preview" data-lightbox="portfolio"title="Preview"><i class="ion ion-eye"></i></a>
                        </figure>
                        
                         <h2 class="text-info"><?php echo $produitData['nom']; ?></h2>

                        <h4 class="text-danger"> <?php echo $produitData['prix']; ?> DT</h4>
                        <p> <strong>Descritpion:</strong>
                        <?php echo $produitData['description']; ?>
                        </p>
                       
                        
<h4>Quantite</h4><input type="text" name="quantity" value="1" class="form-control" style="width:200px" />
                        <input type="submit" name="ajouter au panier" style="margin-top:5px;" class="btn btn-success" value="Ajouter au panier" />
                       

                        <br>
                        <a href='produit/edit.php?pid=<?= $produitData['pid'] ?>' class="btn btn-outline-warning">Editer</a>&nbsp;&nbsp;
                                <a href='produit/delete.php?pid=<?= $produitData['pid'] ?>' class="btn btn-outline-danger">Supprimer</a>
                        </div>
                        <?php endforeach  ?>
          
