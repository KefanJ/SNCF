<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CtrlFormation
 *
 * @author user
 */
class CtrlFormation extends CI_Controller {
     public function index()
            {
         $lol = $this->uri->segments(3);
                $this->load->model('Model_Formation');
                 
                $data['titre'] = 'Les formations';
                
                  $data['LesFormations'] = $this->Model_Formation->getAllFormation($lol);
                    
                      
                      $this->load->view('V_Formation',$data); 
                  
            }
}
