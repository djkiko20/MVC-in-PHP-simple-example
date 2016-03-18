<?php header('Content-Type: text/html; charset=utf-8');
include 'connection.php';

//Hristian
function getFakulteti(){
    global $conn;

    $sql="SELECT * FROM tbl_fakulteti";
    $query = $conn->prepare($sql);
    $query->execute();
    $row = $query -> fetchAll();

    return $row;
}

function insertStudent($podatoci){
    global $conn;

    $errors = array();  // array to hold validation errors
    $data = array();        // array to pass back data

    // validate the variables ========
    if (empty($podatoci['fakultet']))
        $errors['fakultet'] = 'Fakultet e zadolzitelno pole!';

    if (empty($podatoci['tip']))
        $errors['tip'] = 'Tip e zadolzitelno pole!';

    if (empty($podatoci['ime']))
        $errors['ime'] = 'Ime e zadolzitelno pole!';

    if (empty($podatoci['prezime']))
        $errors['prezime'] = 'Prezime e zadolzitelno pole!';

    if (empty($podatoci['godina']))
        $errors['godina'] = 'Godina e zadolzitelno pole!';

    if (empty($podatoci['username']))
        $errors['username'] = 'Korisnicko ime e zadolzitelno pole!';

    if (empty($podatoci['password']))
        $errors['password'] = 'Lozinka e zadolzitelno pole!';
    // return a response ==============

    // response if there are errors
    if ( ! empty($errors)) {
        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {
        // if there are no errors, insert user in db and return a message
        //Get values from form
        $fakultet = $podatoci['fakultet'];
        $tip = $podatoci['tip'];
        $ime = $podatoci['ime'];
        $prezime = $podatoci['prezime'];
        $godina = $podatoci['godina'];
        $username = $podatoci['username'];
        $password = $podatoci['password'];

        //insert in db
        //prepare and bind
        $stmt = $conn->prepare("INSERT INTO tbl_studenti (id_fakultet, ime, prezime, godina) VALUES (?, ?, ?, ?)");
        //$stmt->bind_param($facebookID, $profileName, $about, $name, $email, $blogTitle, $blogURL, $themeID);
        $stmt->bindParam(1, $fakultet);
        $stmt->bindParam(2, $ime);
        $stmt->bindParam(3, $prezime);
        $stmt->bindParam(4, $godina);
        $status = $stmt->execute();
        $last_id = $conn->lastInsertId();

        if($status){
            $stmt1 = $conn->prepare("INSERT INTO tbl_login (id_korisnik, username, password, role) VALUES (?, ?, ?, ?)");
            //$stmt->bind_param($facebookID, $profileName, $about, $name, $email, $blogTitle, $blogURL, $themeID);
            $stmt1->bindParam(1, $last_id);
            $stmt1->bindParam(2, $username);
            $stmt1->bindParam(3, $password);
            $stmt1->bindParam(4, $tip);
            $status1 = $stmt1->execute();

            if($status1){
                // if there are no errors, return a message
                $data['success'] = true;
                $data['message'] = 'Registration successful!';
            }
        }else{
            // if there are errors, return a message
            $data['success'] = false;
            $data['message'] = 'Registration unsuccessful!';
        }
    }

    // return all our data
    $podatoci = json_encode($data);

    return $podatoci;
}

function insertProfessor($podatoci){
    global $conn;

    $errors = array();  // array to hold validation errors
    $data = array();        // array to pass back data

    // validate the variables ========
    if (empty($podatoci['fakultet']))
        $errors['fakultet'] = 'Fakultet e zadolzitelno pole!';

    if (empty($podatoci['tip']))
        $errors['tip'] = 'Tip e zadolzitelno pole!';

    if (empty($podatoci['ime']))
        $errors['ime'] = 'Ime e zadolzitelno pole!';

    if (empty($podatoci['prezime']))
        $errors['prezime'] = 'Prezime e zadolzitelno pole!';

    if (empty($podatoci['plata']))
        $errors['plata'] = 'Godina e zadolzitelno pole!';

    if (empty($podatoci['username']))
        $errors['username'] = 'Korisnicko ime e zadolzitelno pole!';

    if (empty($podatoci['password']))
        $errors['password'] = 'Lozinka e zadolzitelno pole!';
    // return a response ==============

    // response if there are errors
    if ( ! empty($errors)) {
        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {
        // if there are no errors, insert user in db and return a message
        //Get values from form
        $fakultet = $podatoci['fakultet'];
        $tip = $podatoci['tip'];
        $ime = $podatoci['ime'];
        $prezime = $podatoci['prezime'];
        $plata = $podatoci['plata'];
        $username = $podatoci['username'];
        $password = $podatoci['password'];

        //insert in db
        //prepare and bind
        $stmt = $conn->prepare("INSERT INTO tbl_profesori (id_fakultet, ime, prezime, plata) VALUES (?, ?, ?, ?)");
        //$stmt->bind_param($facebookID, $profileName, $about, $name, $email, $blogTitle, $blogURL, $themeID);
        $stmt->bindParam(1, $fakultet);
        $stmt->bindParam(2, $ime);
        $stmt->bindParam(3, $prezime);
        $stmt->bindParam(4, $plata);
        $status = $stmt->execute();
        $last_id = $conn->lastInsertId();

        if($status){
            $stmt1 = $conn->prepare("INSERT INTO tbl_login (id_korisnik, username, password, role) VALUES (?, ?, ?, ?)");
            //$stmt->bind_param($facebookID, $profileName, $about, $name, $email, $blogTitle, $blogURL, $themeID);
            $stmt1->bindParam(1, $last_id);
            $stmt1->bindParam(2, $username);
            $stmt1->bindParam(3, $password);
            $stmt1->bindParam(4, $tip);
            $status1 = $stmt1->execute();

            if($status1){
                // if there are no errors, return a message
                $data['success'] = true;
                $data['message'] = 'Registration successful!';
            }
        }else{
            // if there are errors, return a message
            $data['success'] = false;
            $data['message'] = 'Registration unsuccessful!';
        }
    }

    // return all our data
    $podatoci = json_encode($data);

    return $podatoci;
}

function loginUser($podatoci){
    global $conn;

    $sql="SELECT * FROM tbl_login WHERE username = '".$podatoci['username']."' AND password = '".$podatoci['password']."'";
    $query = $conn->prepare($sql);
    $query->execute();
    $count = $query->rowCount();
    $row = $query -> fetchAll();

    if($count != 0){
        return $row;
    }else{
        return null;
    }
}

function getAllProfessors(){
    global $conn;

    $sql="SELECT * FROM tbl_profesori";
    $query = $conn->prepare($sql);
    $query->execute();
    $row = $query -> fetchAll();

    return $row;
}

function getAllStudents(){
    global $conn;

    $sql="SELECT * FROM tbl_studenti";
    $query = $conn->prepare($sql);
    $query->execute();
    $row = $query -> fetchAll();

    return $row;
}
