<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Mika
 * Date: 12/08/13
 * Time: 09:48
 * To change this template use File | Settings | File Templates.
 */

class Get_db extends CI_Model {

    function getAll(){
        $query = $this->db->query("SELECT * FROM test");
        return $query->result();

    }
}