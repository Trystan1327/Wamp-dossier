<form action="http://localhost/ci/index.php/ajoutProduits/modifier" method="post"> 

<input type="hidden" name="pro_id" value="<?php echo set_value('pro_id',$produit->pro_id); ?>"> 

    <div class="form-group">
        <label for="pro_ref">Référence</label>
        <input type="text" name="pro_ref" id="pro_ref" class="form-control" value="<?php echo set_value('pro_ref',$produit->pro_ref); ?>">
    </div>     
    
    <div class="form-group">
        <label> Catégorie* :</label>
        <input class="form-control mb-3" type="text" name="pro_cat_id"placeholder="Catégorie de votre produit"
        value="<?php echo set_value('pro-cat-id',$produit->pro_cat_id); ?>"> 
    </div>  

    <div class="form-group">
        <label for="pro_libelle">Libellé</label>
        <input type="text" name="pro_libelle" id="pro_libelle" class="form-control" value="<?php echo set_value('pro_libelle',$produit->pro_libelle); ?>">
    </div>   

    <div class="form-group">
        <label>Déscription :</label>
        <textarea class="form-control mb-3"  name="pro_description"
        placeholder="Déscription de votre article" rows="2" value="<?php echo set_value('pro_description',$produit->pro_description); ?>" ></textarea>
    </div>  

    <div class="form-group">
        <label>Prix* :</label>
        <input type="text" class="form-control mb-3"
        placeholder="Indiquer le prix" name="pro_prix" value="<?php echo set_value('pro_prix',$produit->pro_prix); ?>"/>
    </div>

    <div class="form-group">
        <label>Stock* :</label>
        <input type="text" class="form-control mb-3" 
        placeholder="Enregistrez la quantité de votre  marchandises " 
        name="pro_stock" value="<?php echo set_value('pro_stock',$produit->pro_stock); ?>"/> 
    </div>

    <div class="form-group">
        <label>Couleur :</label>
        <input type="text" class="form-control mb-3" 
        placeholder="Donner la couleur de votre produit " name="pro_couleur" value="<?php echo set_value('pro_couleur',$produit->pro_couleur); ?>"/>
    </div>

    <div class="form-group">
        <p> Produit bloqué ?</p>
                    <input type="radio" name="pro_bloque"
                    id="contactchoice1" value="<?php echo set_value('pro_bloque',$produit->pro_bloque); ?>" >
                    <label for="contactchoice1">Oui</label>

                    <input  type="radio" name="pro_bloque" 
                    id="contactchoice2" value="<?php echo set_value('pro_bloque',$produit->pro_bloque); ?>">
                    <label for="contactchoice2">Non</label>
    </form>

    <div class="form-group">
                    <label for="example-datetime-local-input" class="col-form-label mb-1">Date de modification</label>
                    <input class="form-control mb-3" type="date" name="pro_d_modif"value="<?php echo set_value('pro_d_modif',$produit->pro_d_modif); ?>" >
                    <input type="file" class="form-control-file mb-2" name="pro_photo" >
    </div>

    <button type="submit" class="btn btn-dark">Modifier</button>  
    </form>    