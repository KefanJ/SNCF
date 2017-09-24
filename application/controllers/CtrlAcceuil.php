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
            {
                $this->load->model('Model_Activiter');
                $data['titre'] = 'Les activités';
                  $data['LesAtiviters'] = $this->Model_Activiter->getAllActiviter();
                      $this->load->view('V_Activiter',$data); 
                   
                $this->load->model('Model_Formation');
                $data['titre'] = 'Les formations';
                  $data['LesFormations'] = $this->Model_Formation->getAllFormation(); 
                      $this->load->view('V_Formation',$data); 
                      
                      $this->load->model('Model_Agent');
                $data['titre'] = 'Les agents';
                  $data['LesAgents'] = $this->Model_Agent->getAllAgent(); 
                      $this->load->view('V_Agent',$data); 
            }
      public function afficherLesFormations()
            {
                $lol = $this->uri->segments(3);
                $this->load->model('Model_Formation');
                $data['titre'] = 'Les formations';
                  $data['LesFormations'] = $this->Model_Formation->getAllFormation($lol); 
                      $this->load->view('V_Formation',$data); 
                  
            }  
            public function afficherLesAgents()
            {
                $lol = $this->uri->segments(4);
                $this->load->model('Model_Agent');
                $data['titre'] = 'Les agents';
                  $data['LesAgents'] = $this->Model_Formation->getAllAgent($lol); 
                      $this->load->view('V_Agent',$data); 
                  
            }     
    
}
