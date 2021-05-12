<?php

include "dbconfig.php";

$errors = [];
$data = [];

if (empty($_POST['id'])) {
    $errors['id'] = 'id is required.';
}

if (empty($_POST['surname'])) {
    $errors['surname'] = 'surname is required.';
}

if (empty($_POST['name'])) {
    $errors['name'] = 'name is required.';
}

if (empty($_POST['fathername'])) {
    $errors['fathername'] = 'fathername is required.';
}
if (inputCheck(($_POST['id']),'/^\d{7}$/') == 0) {
    $errors['id'] = 'id is required.';
}

if (inputCheck(($_POST['surname']),'/^[Α-Ω]/') == 0) {
    $errors['surname'] = 'surname is not capital greek.';
}

if (inputCheck(($_POST['name']),'/^[Α-Ω]/') == 0) {
    $errors['name'] = 'name is not capital greek.';
}

if (inputCheck(($_POST['fathername']),'/^[Α-Ω]/') == 0) {
    $errors['fathername'] = 'fathername is not capital greek.';
}
 else {
    $id = $_POST['id'];
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $fathername = $_POST['fathername'];
    $query = $_POST['query'];

    $result = studentCheck($DB_con, $id,$surname,$name,$fathername);
    if($result)
    {   
        
        if(($result-> rowCount()) > 0)
        {
            while ($row = $result->fetch())
            {
                $data['success'] = true;
                $data['mark1'] = ($row['mark1']);
                $data['mark2'] = ($row['mark2']);
                $data['mark3'] = ($row['mark3']);
                $data['mark4'] = ($row['mark4']);
                $data['mark5'] = ($row['mark5']);
                $data['mark6'] = ($row['mark6']);
                    
            }
                       
        }
        else
        {
            $errors['query'] = 'Wrong query';
        }
    }
}

if (!empty($errors)) {
        $data['success'] = false;
        $data['errors'] = $errors;
        
}

echo json_encode($data);


function studentCheck($pdo, $id,$surname,$name,$fathername) {
    $stmt = $pdo->prepare("SELECT * FROM students WHERE id=? and surname=? and name=? and fathername=?");
    $stmt->execute([$id,$surname,$name,$fathername]); 
    return $stmt;
};

function inputCheck($str, $pattern) {
    return preg_match($pattern, $str); 
};


?>
