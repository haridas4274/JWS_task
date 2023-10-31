<?php

$db = new mysqli('localhost', 'root', '', 'jws_task');

if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}

// Global configs
$base_url=(isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

// oops
class crud{

    function insert($table, $data){
        global $db;

        $sql = "INSERT INTO `".$table."` (";

        foreach($data as $key => $value){
            $sql .= $key.", ";
        }

        $sql = substr($sql, 0, -2);

        $sql .= ") VALUES (";

        foreach($data as $key => $value){
            $new_value = $db->real_escape_string($value);
            $sql .= "'".$new_value."', ";
        }

        $sql = substr($sql, 0, -2);

        $sql .= ")";

        if($db->query($sql)){
            return $db->insert_id;
        } else{
            return $db->error;
        }

        
    }

    function update($table, $data, $id, $debug=false){
        global $db;

        $sql = "UPDATE `".$table."` SET ";

        foreach($data as $key => $value){
            $new_value = $db->real_escape_string($value);
            $sql .= $key."='".$new_value."', ";
        }

        $sql = substr($sql, 0, -2);

        $sql .= " WHERE ".$id;

        if($debug){
            return $sql;
        }

        $db->query($sql);

        return $db->affected_rows;

    }

    function delete($table, $id){
        global $db;

        $sql = "DELETE FROM `".$table."` WHERE id=".$id;

        $db->query($sql);

        return $db->affected_rows;

    }

    function deleteWhere($table, $where){
        global $db;

        $sql = "DELETE FROM `".$table."` WHERE ".$where;

        $db->query($sql);

        return $db->affected_rows;

    }

    function deleteData($table,$id){
        global $db;
        $sql = "DELETE FROM `".$table."` WHERE ".$id;
        $db->query($sql);
        return $db->affected_rows;
    }

    function select($table, $coloums, $where=1, $debug=false){
        global $db;

        //return $coloums;
        if($coloums=="" || $coloums=="ALL"  || $coloums=="*"){
            $cols = "*";
        } else {
            $cols = $coloums; //implode(", ", $coloums);
        }

        $sql = "SELECT ".$cols." FROM `".$table."` WHERE ".$where;

        if($debug){
            return $sql;
        }

        $result = $db->query($sql);

        return $result->fetch_assoc();

    }

    function select_unique($table, $coloum, $where=1, $debug=false){
        global $db;

        $sql = "SELECT DISTINCT ".$coloum." FROM `".$table."` WHERE ".$where;

        if($debug){
            return $sql;
        }

        $result = $db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);

    }

    function selectAll($table, $coloums='ALL', $where=1, $limit='', $offset='', $order='', $debug=false){
        global $db;

        if($coloums=="ALL"){
            $cols = "*";
        } else {
            $cols = $coloums; //$cols = implode(", ", $coloums);
        }

        if($limit!='' && $offset!=''){
            $limit = ' LIMIT ' . $limit.", ".$offset;
        }
        else{
            $limit = $limit.$offset;
        }           


        $sql = "SELECT ".$cols." FROM `".$table."` WHERE ".$where ." ".$limit. " " . $order;

        if($debug){
            return $sql;
        }

        $result = $db->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);

    }

    function count($table, $where){
        global $db;

        $sql = "SELECT * FROM `".$table."` WHERE ".$where;

        $result = $db->query($sql);

        return $result->num_rows;

    }

    function selectAllJoin($table, $coloums, $where, $limit, $offset, $order, $join){
        global $db;

        if($coloums=="ALL"){
            $cols = "*";
        } else {
            $cols = implode(", ", $coloums);
        }

        if($limit!='' && $offset!=''){
            $limit = ' LIMIT ' . $limit.", ".$offset;
        }
        else{
            $limit = $limit.$offset;
        }

        $sql = "SELECT ".$cols." FROM `".$table."` ".$join." WHERE ".$where ." ".$limit. " " . $order;

        $result = $db->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);

    }

    function query($sql, $debug=false){
        global $db;

        if($debug){
            return $sql;
        }

        $result = $db->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);

    }

    function message($type, $msg, $url){
        if($type=="success"){
            $css = "alert-success";
        } else if($type=="error"){
            $css = "alert-danger";
        } else if($type=="warning"){
            $css = "alert-warning";
        } else if($type=="info"){
            $css = "alert-info";
        }

        $msgId = "msg".rand(1, 1000);

        $msg = '<div class="alert '.$css.' alert-dismissible fade show" role="alert">
            <strong>'.ucfirst($type).'</strong> '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';

        if($url!=""){

            $_SESSION[$msgId] = $msg;
            header("Location: ".$url."?msg=".$msgId);

        } else {
            echo $msg;
        }


    }

    function getmessage($msgId){
        
        if(isset($_SESSION[$msgId]) && $_SESSION[$msgId]!=""){
            echo $_SESSION[$msgId];
            $_SESSION[$msgId] = "";
            unset($_SESSION[$msgId]);            
        }

    }

}


?>

