<?php include "./db.php";

$check = $_POST['checker'];

$check();

// Get All Student
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
                <button onclick='student_edit(". $student['student_id'] .")' class='btn btn-primary btn-sm'><i class='fas fa-edit'></i></button>
                <button data-bs-toggle='modal' data-bs-target='#deletModel". $student['student_id'] ."' class='btn btn-danger btn-sm'><i class='fas fa-trash'></i></button>
            </td>
        </tr>
        <div class='modal fade' id='deletModel". $student['student_id'] ."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
            <h5 class='modal-title' id='exampleModalLabel'>Are You Went To Delete?</h5>
            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>
            Student Delete
            </div>
            <div class='modal-footer'>
            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
            <button onclick='student_delete(". $student['student_id'] .")' type='button' class='btn btn-danger'>Delete</button>
            </div>
        </div>
        </div>
    </div>";
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
    $studentId = $_POST['studentId'];

    if (empty($studentId)) {
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
    }else {
        echo '<div class="alert alert-danger">Student Created Failed!</div>';
    }
    
}

// Student Edit
function edit(){
    global $con;
    $student_id = $_POST['student_id'];
    $commend = "SELECT * FROM student WHERE student_id = $student_id";
    $students = $con->query($commend);
    $data = "";
    foreach ($students as $student){
        $data = $student;
    }
    echo json_encode($data);
}


// Student Update
function update(){
    global $con;
    $studentName = $_POST['studentName'];
    $studentEmail = $_POST['studentEmail'];
    $studentPhone = $_POST['studentPhone'];
    $studentAddress = $_POST['studentAddress'];
    $studentId = $_POST['studentId'];

    // Insert Validation Check
    if (empty($studentId)) {
        echo '<div class="alert alert-danger">Student Can Not Be Updated!</div>';
    }else {
        
        if (empty($studentName) || empty($studentEmail) || empty($studentPhone) || empty($studentAddress)) {
            echo '<div class="alert alert-danger">Data Not In Filled!</div>';
        }else {
            // Student Insert Query
            $commend = "UPDATE student SET student_name = '$studentName', student_email = '$studentEmail', student_phone = '$studentPhone', student_address = '$studentAddress' WHERE student_id = '$studentId'";
            $data = $con->query($commend);
            
            // Student Update Check
            if ($data) {
                echo '<div class="alert alert-success">Student Update Success</div>';
            }else{
                echo '<div class="alert alert-danger">Student Update Failed!</div>';
            }
        }
    }

}

// Student Delete
function delete(){
    global $con;
    $student_id = $_POST['student_id'];

    $commend = "DELETE FROM student WHERE student_id = '$student_id'";
    $student = $con->query($commend);

    if ($student) {
        echo '<div class="alert alert-success">Student Deleted</div>';
    }else{
        echo '<div class="alert alert-danger">Student Deleted Failed</div>';
    }

}