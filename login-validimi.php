<?php
include_once 'config/DataBase.php';

class Validimi
{
  
    public $db;
    public $rows;

    public function __construct()
    {
        $this->db = new DataBase();
    }

    public function validimi()
    {

        if (isset($_POST['butoniLogIn'])) {
            if (empty($_POST['email']) || empty($_POST['password'])) {
                echo "<script> alert('Fill all fields!')</script>";
            } else {

                $sql = "SELECT  email, password, roli  FROM users where email = '" . $_POST['email'] . "' and password = '" . $_POST['password'] . "'";

                $result = $this->db->pdo->query($sql);

                $rows = $result->fetchAll();

                if (empty($rows)) {
                    echo '<script> alert("Incorrect Username or Password!")</script>';
                } else {
                    foreach ($rows as $row) {
                        $_SESSION['loggedin'] = true;
                        $_SESSION['email'] = $_POST['email'];
                        $_SESSION['role'] = $row['roli'];

                    }
                }
            }
        }
    }
}