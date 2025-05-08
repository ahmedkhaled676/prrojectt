<?php

abstract class User
{
    public $id;
    public $name;
    public $email;
    public $password;
    public $phone;
    public $created_at;
    public $updated_at;

    function __construct($id, $name, $email, $password, $phone, $created_at, $updated_at)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    public static function login($email, $password)
    {
        require_once('config.php');
        $conn = new mysqli(DB_HOST, DB_USER_NAME, DB_USER_PASSWORD, DB_NAME);

        if ($conn->connect_error) {
            die("فشل الاتصال: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        $user = null;

        if ($arr = $result->fetch_assoc()) {
            switch (strtolower($arr["role"])) {
                case 'subscriber':
                    $user = new Subscriber($arr["id"], $arr["name"], $arr["email"], $arr["password"], $arr["phone"], $arr["created_at"], $arr["updated_at"]);
                    break;
                case 'admin':
                    $user = new Admin($arr["id"], $arr["name"], $arr["email"], $arr["password"], $arr["phone"], $arr["created_at"], $arr["updated_at"]);
                    break;
            }
        }

        $stmt->close();
        $conn->close();

        return $user;
    }
}


class Subscriber extends User
{
    public $role = "subscriber";

    public static function register($name, $email, $password, $phone)
    {
        require_once('config.php');
        $conn = new mysqli(DB_HOST, DB_USER_NAME, DB_USER_PASSWORD, DB_NAME);

        if ($conn->connect_error) {
            die("فشل الاتصال: " . $conn->connect_error);
        }

        // استخدام prepared statement
        $stmt = $conn->prepare("INSERT INTO users (name, email, password, phone, role) VALUES (?, ?, ?, ?, 'subscriber')");
        $stmt->bind_param("ssss", $name, $email, $password, $phone);
        $result = $stmt->execute();

        $stmt->close();
        $conn->close();

        return $result;
    }
}


class Admin extends User
{
    public $role = "admin";

    public function get_all_users()
    {
        require_once('config.php');
        $conn = new mysqli(DB_HOST, DB_USER_NAME, DB_USER_PASSWORD, DB_NAME);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $users = [];
        $qry = "SELECT * FROM users ORDER BY created_at DESC";
        $result = $conn->query($qry);

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
        }

        $conn->close();
        return $users;
    }
}

