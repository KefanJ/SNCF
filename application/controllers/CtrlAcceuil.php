<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CrtlAcceuil
 *
 * @author user
 */
class CtrlAcceuil extends CI_Controller {
    public function index()
            { $data['titre'] = 'Les activités';
                $this->load->model('Model_Activiter');
                  $data['LesAtiviters'] = $this->Model_Activiter->GetAllActiviter();
                      $this->load->view('V_Activiter',$data); 
               
            }
      public function afficherLesFormations()
            {
                $numero = $this->uri->segment(3);
                $this->load->model('Model_Formation');
                
                  $data['LesFormations'] = $this->Model_Formation->GetAllFormation( $numero); 
                      $this->load->view('V_Formation',$data); 
                  
            }  
            public function afficherLesAgents()
            {
                // Ici tu récupères pas le numéro de l'agent mais bien le numéro de la formation
                //$lAgent = $this->uri->segment(4);
                
                // DONC
                // dans l'URL le numéro de la formation se trouve en 3ème position et non en 4ème position
                // Dans l'ordre c'est 1) le controlleur ; 2) la méthode 3) le paramètre
                $numFormation = $this->uri->segment(3);
                
                
                $this->load->model('Model_Agent');
                $data['titre'] = 'Les agents';
                // Une erreur ici tu as mis Model_Formation au lieu de Model_Agent
                // Ce n'est pas l'agent que tu passes en paramètre mais bien le numéro de la formation
                  //$data['LesAgents'] = $this->Model_Agent->GetAllAgent($lAgent); 
                
                
                
                $data['LesAgents'] = $this->Model_Agent->GetAllAgent($numFormation); 
                      $this->load->view('V_Agent',$data); 
                  
            }     
    
}
