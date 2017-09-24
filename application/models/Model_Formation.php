<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model_Formation
 *
 * @author user
 */
class Model_Formation extends CI_Model {
     public function getAllFormation()
             {
                $sql = $this->db->get('formation');
                foreach ($sql->result() as $row)
                    {
                        $data[] = $row;
                    }
                    return $data;
             }
}
