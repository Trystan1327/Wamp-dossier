



                    <table class="table table-striped table-hover table-bordered text-center  ">
                    <tr class="table-secondary table-success">
                        <th class="w-25 border border-dark">Photo</th>
                        <th class="border border-dark">ID</th>
                        <th class="border border-dark">Réference</th>
                        <th class="border border-dark">Libellé</th>
                        <th class="border border-dark">Prix</th>
                        <th class="border border-dark">Stock</th>
                        <th class="border border-dark">Couleur</th>
                        <th class="border border-dark">Ajout</th>
                        <th class="border border-dark">Modif</th>
                        <th class="border border-dark">Bloqué</th>
                    </tr>   

<?php 
foreach ($liste_produits as $row) 
{
    echo '<tr class="bg-default">';
    echo '<td class="table-warning "><img src="public/images/produits/png/'.$row->pro_id.'.png" class="img-fluid" alt="Image responsive"></td>';
    echo "<td class='align-middle'>".$row->pro_id."</td>";
    echo "<td class='align-middle'>".$row->pro_ref."</td>";?>
    <td  class="table-warning align-middle font-weight-bold text-uppercase"><a href="<?php echo site_url("ajoutProduits/modifier/".$produits->id); ?>" title='.$row->pro_libelle.'><u class=" text-danger">'.$row->pro_libelle.'</a></td>
    <?php
    echo "<td class='align-middle'>".$row->pro_prix."</td>";
    echo "<td class='align-middle'>".$row->pro_stock."</td>";
    echo "<td class='align-middle'>".$row->pro_couleur."</td>";
    echo "<td class='align-middle'>".$row->pro_d_ajout."</td>";
    echo "<td class='align-middle'>".$row->pro_d_modif."</td>";
    $bloque = "";
        if(($row->pro_bloque)==1)
        {
            $bloque="bloqué";
            echo '<td class="align-middle"><p class="bg-danger  text-white">'.$bloque."</p></td>";
        }
        else
        {
            echo "<td>".$bloque."</td>";
        }
        
    echo "</tr>";
}

?>
</table>