<?php
// application/controllers/Produits.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produits extends CI_Controller 
{

    public function liste()
    { 
      //$aViewHeader = ["title" => "Liste des produits"];
      
  

         // Charge la librairie 'database'
    $this->load->database();

    // Exécute la requête 
    $results = $this->db->query("SELECT  * FROM produits");  

    // Récupération des résultats    
    $aListe = $results->result();   

    // Ajoute des résultats de la requête au tableau des variables à transmettre à la vue   
    
    $this->load->view('header');
    
    $aView["liste_produits"] = $aListe;
    $this->load->view('liste', $aView);
    $this->load->view('footer');
    

    }
  
}






?>