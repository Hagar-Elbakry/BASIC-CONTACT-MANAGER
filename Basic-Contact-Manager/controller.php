<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' ) {
    if(isset($_POST['submit'])) {
        $name = $_POST['name'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $email = $_POST['email'] ?? '';

        $errors = [];

        $success;

        if($name == '' || $phone == '' || $email == '') {
            $errors[] = "Please Fill All Field<br>";
        } else {
            if(!preg_match("/^([a-zA-Z ]+)$/", $name)) {
                $errors[] = "Invalid Name! Only Letters and spaces are allowed<br>";
            } 
            if(!preg_match("/^\d{3}-\d{3}-\d{3}-\d{2}$/", $phone)) {
                $errors[] = "Invalid Phone Number! Enter one like 010-123-456-78<br>";
            }

            if(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9]+\.[a-zA-z]{2,}$/", $email)) {
            $errors[] = "Invalid Email! Please enter a valid email address like example@domain.com<br>";
            } 
        }

        if(empty($errors)) {
            $data = json_decode(file_get_contents("contact.json"),true) ?? [] ;
            $data[] = array('Name' => $name, "Phone" => $phone, "Email" => $email);
            file_put_contents("contact.json", json_encode($data));
            $success = "Added Successfully<br>";
        }
    } else if(isset($_POST['search'])) {
        $name = $_POST['Searched_name'] ?? '';
        $res;
        $error;
        if($name == '' ) {
            $error = "Please Enter a Name<br>";
        } else if(!preg_match("/^([a-zA-Z ]+)$/", $name)) {
            $error = "Invalid Name! Only Letters and spaces are allowed<br>";
        } else {
            $data = json_decode(file_get_contents("contact.json"),true) ?? [] ;
                foreach($data as $raw) {
                    if($raw['Name'] == $name) {
                        $res = $raw['Name'] . " " . $raw['Phone'] . " " . $raw['Email'] . "<br>";
                        break;
                    }
                }

                if(!isset($res)) {
                    $res = '';
                }
        }
    }
}