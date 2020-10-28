<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ajoutProduits extends CI_Controller 
{
    public function ajouter()
    {
            // Chargement des assistants 'form' et 'url'
    $this->load->helper('form', 'url'); 

        // Chargement de la librairie 'database'
    $this->load->database(); 
    $this->load->library('form_validation'); 


    if ($this->input->post()) 
       { // 2ème appel de la page: traitement du formulaire

            $data = $this->input->post();
            $this->form_validation->set_rules("pro_ref", "Référence", "required", array("required" => "La %s est obligatoire.") );
            $this->form_validation->set_rules("pro_cat_id", "Catégorie", "required", array("required" => "La %s est obligatoire.") );
            $this->form_validation->set_rules("pro_libelle", "Libelle", "required", array("required" => "Le %s est obligatoire.") );
            $this->form_validation->set_rules("pro_description", "Description", "required", array("required" => "Rentrer une %s") );
            $this->form_validation->set_rules("pro_prix", "Prix", "required", array("required" => "Le %s n'est pas renseigner") );
            $this->form_validation->set_rules("pro_stock", "Stock", "required", array("required" => "Le %s est obligatoire.") );
            $this->form_validation->set_rules("pro_d_ajout", "date", "required", array("required" => "La %s doit être renseigné.") );
            $this->form_validation->set_rules("pro_couleur", "Couleur", "required", array("required" => "La %s doit être indiquer.") );
            $this->form_validation->set_rules("pro_bloque", "Bloqué", "required", array("required" => "Le %s doit être Séléctionner") );
            if ($this->form_validation->run() == FALSE)
            { 
               // Echec de la validation, on réaffiche la vue formulaire 
            $this->load->view('header');
            $this->load->view('ajouter');
            $this->load->view('footer');
            }
            else
            {
            $this->db->insert('produits', $data);
            redirect("ajoutProduits/ajouter");
            }
        } 
        else 
       { // 1er appel de la page: affichage du formulaire
        $this->load->view('header');
        $this->load->view('ajouter');
        $this->load->view('footer');

        } // -- ajouter()

    }



    /*-------------------------------------------------------------------------
******************* /Modifier un produit / *****************
-----------------------------------------------------------------------*/



public function modifier($pro_id)
{
    // Chargement des assistants 'form' et 'url'
    $this->load->helper('form', 'url'); 

    // Chargement de la librairie 'database'
    $this->load->database();  

    // Chargement de la librairie form_validation
    $this->load->library('form_validation'); 

    // Requête de sélection de l'enregistrement souhaité, ici le produit 7 
    $produit = $this->db->query("SELECT * FROM produits WHERE pro_id= ?", $pro_id);
    $aView["produit"] = $produit->row(); // première ligne du résultat

        if ($this->input->post()) 
        { // 2ème appel de la page: traitement du formulaire

            $data = $this->input->post();

            // Définition des filtres, ici une valeur doit avoir été saisie pour le champ 'pro_ref'
            $this->form_validation->set_rules('pro_ref', 'Référence', 'required');

                if ($this->form_validation->run() == FALSE)
                { // Echec de la validation, on réaffiche la vue formulaire 
                    $this->load->view('modifier', $aView);
                }
                else
                { // La validation a réussi, nos valeurs sont bonnes, on peut modifier en base  

                    /* Utilisation de la méthode where() toujours 
                    * avant select(), insert() ou update()
                    * dans cette configuration sur plusieurs lignes 
                    */  
                    $this->db->where('pro_id', $pro_id);
                    $this->db->update('produits', $data);

                    redirect("ajoutProduits/modifier");
                }
        } 
        else 
            { // 1er appel de la page: affichage du formulaire             
                $this->load->view('modifier', $aView);
            }
    } // -- modifier()
}














?>


