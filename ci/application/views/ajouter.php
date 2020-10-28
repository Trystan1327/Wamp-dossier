<form action="http://localhost/ci/index.php/ajoutProduits/ajouter" method="post"> 

<?php  echo  form_open ();  ?>


                    <?php
                    echo form_error('pro_ref','<div id="red">','</div>') ;
                    ?>
                    <label class="mt-2"> Référence* :</label>
                    <input class="form-control mb-3 " type="text" name="pro_ref" 
                    placeholder="Entrez votre référence produit">
                    
                    <?php echo form_error('pro_cat_id','<div id="red">','</div>'); ?>
                    <label id="blue"> Catégorie* :</label>
                    <input class="form-control mb-3" type="text" name="pro_cat_id" 
                    placeholder="Catégorie de votre produit">
                    

                    <?php echo form_error('pro_libelle','<div id="red">','</div>'); ?>
                    <label> Libellé* :</label>
                    <input class="form-control mb-3" type="text" name="pro_libelle" 
                    placeholder="Libellé">

                    <?php echo form_error('pro_description','<div id="red">','</div>'); ?>
                    <label>Déscription :</label>
                    <textarea class="form-control mb-3"  name="pro_description"
                    placeholder="Déscription de votre article" rows="2" ></textarea>
                    
                    
                    <?php echo form_error('pro_prix','<div id="red">','</div>'); ?>
                    <label>Prix* :</label>
                    <input type="text" class="form-control mb-3"
                    placeholder="Indiquer le prix" name="pro_prix"/>
                    
                    <?php echo form_error('pro_stock','<div id="red">','</div>'); ?>
                    <label>Stock* :</label>
                    <input type="text" class="form-control mb-3" 
                    placeholder="Enregistrez la quantité de votre  marchandises " 
                    name="pro_stock"/> 
                    
                    <?php echo form_error('pro_couleur','<div id="red">','</div>'); ?>
                    <label>Couleur :</label>
                    <input type="text" class="form-control mb-3" 
                    placeholder="Donner la couleur de votre produit " name="pro_couleur"/> 
                    
                    
                    <?php echo form_error('pro_bloque','<div id="red">','</div>'); ?>
                    <p> Produit bloqué ?</p>
                    <input type="radio" name="pro_bloque"
                    id="contactchoice1" value="option1" >
                    <label for="contactchoice1">Oui</label>

                    <input  type="radio" name="pro_bloque" 
                    id="contactchoice2" value="option2">
                    <label for="contactchoice2">Non</label>
                    
                    <hr>

                    <?php echo form_error('pro_d_ajout','<div id="red">','</div>'); ?>
                    <label for="example-datetime-local-input" class="col-form-label mb-1">Date d'ajout*</label>
                    <input class="form-control mb-3" type="date" name="pro_d_ajout" >
                    
                    
                    
                    <label for="example-datetime-local-input" class="col-form-label mb-1">Date de modification</label>
                    <input class="form-control mb-3" type="date" name="pro_d_modif" >
                    <input type="file" class="form-control-file mb-2" name="pro_photo" >
                    
                    <button type="submit" class="btn btn-primary mb-2">Ajouter</button>
                
                    
                
                
                
                
</form>

