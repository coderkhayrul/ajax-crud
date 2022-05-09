<?php include "./db.php";

$check = $_POST['checker'];

$check();


function students() {
    global $con;

    $commend = "SELECT * FROM student";
    $students = $con->query($commend);
    $allData = "";
    $allData .= "<table class='table' border='2px'>
    <thead class='text-light'>
        <tr>
            <th scope='col'>#</th>
            <th scope='col'>Name</th>
            <th scope='col'>Email</th>
            <th scope='col'>Phone</th>
            <th scope='col'>Address</th>
            <th scope='col'>Action</th>
        </tr>
    </thead><tbody>";
    $sl = 1;
    foreach ($students as $student) {
        $allData .= "<tr>
            <th scope='row'>". $sl++ ."</th>
            <td>". $student['student_name'] ."</td>
            <td>". $student['student_email'] ."</td>
            <td>". $student['student_phone'] ."</td>
            <td>". $student['student_address'] ."</td>
            <td>
                <button class='btn btn-primary btn-sm'><i class='fas fa-edit'></i></button>
                <button class='btn btn-danger btn-sm'><i class='fas fa-trash'></i></button>
            </td>
        </tr>";
    }
    $allData .= "</tbody></table>";
    echo $allData;

}

// Student Insert
function insert(){
    global $con;
    $studentName = $_POST['studentName'];
    $studentEmail = $_POST['studentEmail'];
    $studentPhone = $_POST['studentPhone'];
    $studentAddress = $_POST['studentAddress'];

    // Insert Validation Check
    if (empty($studentName) || empty($studentEmail) || empty($studentPhone) || empty($studentAddress)) {
        echo '<div class="alert alert-danger">Fill the All fields !</div>';
    }else {

        // Student Insert Query
        $commend = "INSERT INTO student(student_name, student_email, student_phone, student_address) 
        VALUES('$studentName','$studentEmail','$studentPhone', '$studentAddress')";
        $data = $con->query($commend);
        
        // Student Insert Check
        if ($data) {
            echo '<div class="alert alert-success">Student Created Success</div>';
        }else{
            echo '<div class="alert alert-danger">Student Created Failed!</div>';
        }
    }
}




// student Update
function update(){
    echo '<div class="alert alert-success">Student Updated</div>';

}