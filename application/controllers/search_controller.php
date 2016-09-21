<?php
/**
 * Created by PhpStorm.
 * User: zhangzhaoying
 * Date: 20/09/2016
 * Time: 10:38 PM
 */
class search_controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('search');
    }

    function searchNumOfClaims() {
        $occupation = $_GET['occupation'];
        $result = $this->search->searchNumOfClaims($occupation);
        $data = json_encode($result);
        echo $data;
    }

    function searchData() {
        $occupation = $_GET['occupation'];
        $result = $this->search->searchData($occupation);
        $data = json_encode($result);
        echo $data;
    }
}