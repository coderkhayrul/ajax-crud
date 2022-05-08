<?php include "./db.php";

$check = $_POST['checker'];

$check();

// Student Insert
function insert(){
    echo '<div class="alert alert-success">Student Created</div>';
}

// Studnet Update
function update(){
    echo '<div class="alert alert-success">Student Updated</div>';

}