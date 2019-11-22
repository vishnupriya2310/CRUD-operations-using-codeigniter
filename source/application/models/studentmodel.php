<?php
class studentmodel extends CI_Model{
function __construct() {
parent::__construct();
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function displayrecords()
{
	$query=$this->db->query("select * from students");
	return $query->result();
        //echo json_encode($get);
	}
}

 
 ?>