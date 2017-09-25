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
                $lAgent = $this->uri->segment(4);
                $this->load->model('Model_Agent');
                $data['titre'] = 'Les agents';
                  $data['LesAgents'] = $this->Model_Formation->GetAllAgent($lAgent); 
                      $this->load->view('V_Agent',$data); 
                  
            }     
    
}
