<?php

/*
 * Created by PhpStorm.
 * User: Ben
 * Date: 03/02/2016
 * Time: 18:06
 */
class Data_model extends CI_Model
{

//    function getAll()
//    {
//        $q = $this->db->query("SELECT * FROM data");
//        if ($q->num_rows() > 0) {
//            foreach ($q->result() as $row) {
//                $data[] = $row;
//            }
//            return $data;
//        }
//    }

//    function getAll()
//    {
//        $q = $this->db->get('data');
//        if ($q->num_rows() > 0) {
//            foreach ($q->result() as $row) {
//                $data[] = $row;
//            }
//            return $data;
//        }
//    }

//function getAll() {
//    $this->db->select('title, content');
//    $q = $this->db->get('data');
//
//    if ($q->num_rows() > 0) {
//            foreach ($q->result() as $row) {
//                $data[] = $row;
//            }
//            return $data;
//        }
//}

//function getAll() {
//    $sql = "SELECT title, author, content FROM data WHERE id = ? AND author = ?";
//    $q = $this->db->query($sql, array('3', 'tom dick'));
//
//    if ($q->num_rows() > 0) {
//            foreach ($q->result() as $row) {
//                $data[] = $row;
//            }
//            return $data;
//        }
//
//}

function getAll() {
    $this->db->select('title, content');
    $this->db->from('data');
    $this->db->where('id', 3);

    $q = $this->db->get();
    if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
}
}
