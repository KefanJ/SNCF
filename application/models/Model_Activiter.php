<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model_Activiter
 *
 * @author user
 */
class Model_Activiter extends CI_Model {
    public function getAllActiviter() 
            {
                $sql = $this->db->get('activite');
                foreach ($sql->result() as $row)
                    {
                        $data[] = $row;
                    }
                    return $data;
            }
}
