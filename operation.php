<?php include "./db.php";

$check = $_POST['checker'];

$check();

// Student Insert
function insert(){
    global $con;
    $studnetName = $_POST['studnetName'];
    $studnetEmail = $_POST['studnetEmail'];
    $studnetPhone = $_POST['studnetPhone'];
    $studentAddress = $_POST['studentAddress'];
    
    if (empty($studnetName) || empty($studnetEmail || empty($studnetPhone || empty($studnetAddress)))) {
        echo '<div class="alert alert-danger">Fill the All fields !</div>';
    }else {
        $commend = "INSERT INTO student(studnet_name, studnet_email, studnet_phone, studnet_address) 
        VALUES('$studnetName','$studnetEmail','$studnetPhone', '$studentAddress')";
        $data = $con->query($commend);
        
        // Sent Notification
        if ($data) {
            echo '<div class="alert alert-success">Student Created Success</div>';
        }else{
            echo '<div class="alert alert-danger">Student Created Failed!</div>';
        }
    }
}

// Studnet Update
function update(){
    echo '<div class="alert alert-success">Student Updated</div>';

}