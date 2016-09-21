<?php
/**
 * Created by PhpStorm.
 * User: zhangzhaoying
 * Date: 20/09/2016
 * Time: 10:39 PM
 */

class search extends CI_Model
{
    public function searchNumOfClaims($occupation){
        $sql='SELECT DISTINCT * FROM number_of_injury_by_occupation where occupation = ?';
        $query=$this->db->query($sql, array($occupation));
        return $query->result_array();
    }

    public function searchData($occupation){
        $sql='SELECT * FROM number_of_injury_by_occupation where occupation = ?';
        $query=$this->db->query($sql, array($occupation));
        return $query->result_array();
    }
}