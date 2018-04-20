<?php

class register {

    //put your code here

    protected $connection;

    public function __construct() {
        $host_name = 'localhost';
        $user_name = 'root';
        $password = '';
        $db_name = 'db_reg_quiz3';
        $this->connection = mysqli_connect($host_name, $user_name, $password, $db_name);

        if (!$this->connection) {
            die('Connection Fail' . mysqli_error($this->connection));
        }
    }

    public function save_info($data) {
        $sql = "INSERT INTO tbl_person (fname, lname, 	email, contact, address) "
                . "VALUES('$data[fname]', '$data[lname]', '$data[email]', '$data[contact]', '$data[address]')";

        if (mysqli_query($this->connection, $sql)) {
            $message = "Info Saved Successfully";
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->connection));
        }
    }

    public function select_all_info() {
        $sql = "SELECT * FROM tbl_person ORDER BY id DESC";

        if (mysqli_query($this->connection, $sql)) {
            $query_result = mysqli_query($this->connection, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->connection));
        }
    }

    public function select_info_by_id($id) {
        $sql = "SELECT * FROM tbl_person WHERE id = '$id'";

        if (mysqli_query($this->connection, $sql)) {
            $query_result = mysqli_query($this->connection, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->connection));
        }
    }

    public function update_info($data, $id) {
        $sql = "UPDATE tbl_person SET fname = '$data[fname]', lname = '$data[lname]', email = '$data[email]', contact = '$data[contact]', address = '$data[address]' WHERE id = '$id'";
        if (mysqli_query($this->connection, $sql)) {
            header('Location: registration.php');
        } else {
            die('Query problem' . mysqli_error($this->connection));
        }
    }

    public function delete_info($id) {
        $sql = "DELETE FROM tbl_person WHERE id = '$id'";

        if (mysqli_query($this->connection, $sql)) {
            $message = 'Info deleted Successfully';
            header('Location: registration.php');
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->connection));
        }
    }

}
