<?php

require_once 'database.php';

class Contact{
    static function select(){
        global $conn;
        $sql = "SELECT * FROM tb_bullsaranghae";
        $result = $conn->query($sql);
        $arr = array();

        if ($result->num_rows > 0){
            while($row = mysqli_fetch_assoc($result)) {
                foreach ($row as $key => $value){
                    $arr[$key][] = $value;
                }
            }
        }
        return $arr;
    }
    static function insert($Id, $CURRENT_JOB, $NAME, $ADRESS, $Status, $PHONE_NUMBER) {
        global $conn;
        $sql = "INSERT INTO`tb_bullsaranghae`(Id, CURRENT_JOB, NAME, ADRESS, Status, PHONE_NUMBER) VALUES(?,?,?,?,?,?)";
        $stnt = $conn->prepare($sql);
        $stnt->bind_param("sss", $Id, $CURRENT_JOB, $NAME, $ADRESS, $Status, $PHONENUMBER);
        $stnt->execute();
        $result = $stnt->affected_rows > 0 ? true : false;
        return $result;
    }
    static function update($Id, $CURRENT_JOB, $NAME, $ADRESS, $Status, $PHONE_NUMBER) {
        global $conn;
        $sql = "UPDATE tb_bullsaranghae SET CURRENT_JOB = ?, NAME = ?, ADRESS = ?, Status = ?, PHONE_NUMBER = ? WHERE Id = ?";
        $stnt = $conn->prepare($sql);
        $stnt->bind_param("ssssss", $CURRENT_JOB, $NAME, $ADRESS, $Status, $PHONE_NUMBER, $Id);
        $stnt->execute();
        $result = $stnt->affected_rows > 0 ? true : false;
        return $result;
    }
    static function delete($Id) {
        global $conn;
        $sql = "DELETE FROM tb_bullsaranghae WHERE Id = ?";
        $stnt = $conn->prepare($sql);
        $stnt->bind_param("s", $Id);
        $stnt->execute();
        $result = $stnt->affected_rows > 0 ? true : false;
        return $result;
    }
}