<?php header('Content-Type: text/html; charset=utf-8');

include 'model.php';

//Hristian
function registration($post){
    if($post != null){ // Ako e index.php/register povikana so POST metoda
        $argumenti = $post;
        insertUser($post);
    }else{ // Ako e index.php/register povikana bez POST metoda
        $fakulteti = getFakulteti();
        include 'views/register.php';
    }
}

function insertUser($post){
    if($post['tip'] == '1'){ // insertProfessor
        $podatoci = insertProfessor($post);
        $data = json_decode($podatoci, true);

        if($data['success']){
            include 'views/success.php';
        }else{
            include 'views/error.php';
        }
        //echo 'call model -> insertProfessor();';
    }elseif($post['tip'] == '2'){ // insertStudent
        $podatoci = insertStudent($post);
        $data = json_decode($podatoci, true);

        if($data['success']){
            include 'views/success.php';
        }else{
            include 'views/error.php';
        }
        //echo 'call model -> insertStudent();';
    }
}

function login($post){
    if($post != null){ // Ako e index.php/login povikana so POST metoda
        $back_data = loginUser($post);
        if($back_data != null){
            $tip = $back_data[0]['role'];
            $username = $back_data[0]['username'];
            include 'views/welcome.php';
        }else{
            $count = 0;
            include 'views/error.php';
        }
    }else{ // Ako e index.php/login povikana bez POST metoda
        include 'views/login.php';
    }
}

function getAllUsers(){
    $professors = getAllProfessors();
    $students = getAllStudents();

    include 'views/list.php';
}