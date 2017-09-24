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
class Model_Agent extends CI_Model {
   public function getAllAgent() 
            {
                $sql = $this->db->get('agent');
                foreach ($sql->result() as $row)
                    {
                        $data[] = $row;
                    }
                    return $data;
            }
}
