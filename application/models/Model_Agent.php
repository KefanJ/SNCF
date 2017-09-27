<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model_Agent
 *
 * @author user
 */
class Model_Agent extends CI_Controller {
   public function GetAllAgent($numformation) 
            {
       // Il faut donc passer en paramètre de la fonction le numéro de la formation
              
       // Cette requête n'est pas bonne
       // il faut récupérer les agents inscrits à la formation
      //$sql = $this->db->query("select * from agent");
       
       $sql = $this->db->query("select nom, prenom from agent,inscription where agent.code = inscription.codeagent and numeroformation = '".$numformation."'");
      return $sql -> result();
            }
}
