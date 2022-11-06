<?php

function setConnection() {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "secf";
    $conn = new mysqli($servername, $username, $password, $database);
    
    if ($conn->connect_error) 
    {    die("Connection failed: " . $conn->connect_error);
    }

    else {
        return $conn;
    }
}

function setUser($data) {

    $conn = setConnection();

    $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, gender, dob, address,
                                email, uname, password) 
                                        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssssss", $data['firstname'], $data['lastname'], $data['gender'], $data['dob'],
                                            $data['address'], $data['email'],$data['uname'],$data['password']);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

function setTour($data) {

    $conn = setConnection();

    $stmt = $conn->prepare("INSERT INTO tournamentd (tname, ttype, sname, faname, tvanue, 
    tdate, tstime, tetime, tstatus) 
                                        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssssss", $data['tname'], $data['ttype'], $data['sname'], $data['faname'],
            $data['tvanue'], $data['tdate'] , $data['tstime'], $data['tetime'], $data['tstatus']);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

 






function getProfileByID($profileId) {

    $conn = setConnection();
    $sql = "SELECT * FROM users WHERE id = '".$profileId."'";
    $stmt =  $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->get_result();

    if ($row->num_rows > 0) {
        $result = $row->fetch_assoc();
        return $result;
    }

    return false;
}

function getAllData($tableName) {

    $conn = setConnection();
    $sql = "SELECT * FROM ".$tableName."";
    $stmt =  $conn->prepare($sql);
    $stmt->execute();
    $result = [];
    $row = $stmt->get_result();

    if ($row->num_rows > 0) {
        while($value = $row->fetch_assoc()) {

            $result[] = $value;
        }
        return $result;
    }

    return false;    
}





function updateProfile($profileId, $fname, $lname, $gender, $dob, $address, $email) {

    $conn = setConnection();

    $stmt = $conn->prepare("UPDATE users SET firstname = ?,  lastname = ?, gender = ?, dob = ?, address = ?,
                                email = ? WHERE id = ?");

    $stmt->bind_param("sssssss", $fname, $lname, $gender, $dob, $address, $email, $profileId);
    $stmt->execute();
    $stmt->close();
    $conn->close();

}


function updatePass($profileId, $password) {

    $conn = setConnection();

    $stmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");

    $stmt->bind_param("ss", $password, $profileId);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}




function searchByTitle($search,$table) {

    $conn = setConnection();
    $sql = "SELECT * FROM ".$table." WHERE title = '".$search."'";
    $stmt =  $conn->prepare($sql);
    $stmt->execute();
    $result = [];
    $row = $stmt->get_result();

    if ($row->num_rows > 0) {
        while($value = $row->fetch_assoc()) {

            $result[] = $value;
        }
        return $result;
    }
    return false;
 
}




function loginValidate($uname, $password) {

    $conn = setConnection();
    $sql = "SELECT id FROM users WHERE uname = '".$uname."' AND password = '".$password."'";
    $stmt =  $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->get_result();

    if ($row->num_rows > 0) {
        $result = $row->fetch_assoc();
        return $result['id'];
    }

    return false;
}

function getOldPass($profileId) {

    $conn = setConnection();
    $sql = "SELECT password FROM users WHERE id = '".$profileId."'";
    $stmt =  $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->get_result();
    $result = $row->fetch_assoc();
    return $result['password']; 
}

?>