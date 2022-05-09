jQuery(document).ready(function () {
    // e.preventDefault();
    student_all()
    jQuery('#save').click(function () {
        student_add();
    });
    jQuery('#update').click(function () { 
        student_update();
    });
});


// Show All Student
function student_all(){
    $.ajax({
        url: "operation.php",
        type: "POST",
        data: {
            checker : 'students',
        },
        success: function (response) {
            $('.show-table').html(response);
        }
    });
}


// Add Student
function student_add(){

    // Get Value From Index Page
    var studentName = $('#studentName').val();
    var studentEmail = $('#studentEmail').val();
    var studentPhone = $('#studentPhone').val();
    var studentAddress = $('#studentAddress').val();
    var studentId = $('#studentId').val();

    $.ajax({
        'url': "operation.php",
        'type': "POST",
        'data': {
            studentName    : studentName,
            studentEmail   : studentEmail,
            studentPhone   : studentPhone,
            studentAddress : studentAddress,
            studentId : studentId,
            checker        : 'insert',
        },
        success: function (response) {
            $('#message').html(response).fadeIn();
            $('#message').html(response).fadeOut(3000);
            student_all();
        }

    });
}

function student_edit($student_id){
    $.ajax({
        type: "POST",
        url: "operation.php",
        data: {
            student_id : $student_id,
            checker: 'edit',
        },
        dataType: "json",
        success: function (response) {
            $('#studentName').val(response.student_name);
            $('#studentEmail').val(response.student_email);
            $('#studentPhone').val(response.student_phone);
            $('#studentAddress').val(response.student_address);
            $('#studentId').val(response.student_id);
        }
    });
}




// Update Student
function student_update(){

    var studentName = $('#studentName').val();
    var studentEmail = $('#studentEmail').val();
    var studentPhone = $('#studentPhone').val();
    var studentAddress = $('#studentAddress').val();
    var studentId = $('#studentId').val();

    $.ajax({
        'url': "operation.php",
        'type': "POST",
        'data': {
            studentName    : studentName,
            studentEmail   : studentEmail,
            studentPhone   : studentPhone,
            studentAddress : studentAddress,
            studentId      : studentId,
            checker        : 'update',
        },
        success: function (response) {
            $('#message').html(response).fadeIn();
            $('#message').html(response).fadeOut(3000);
            student_all();
        }

    });
}


function student_delete($student_id){
    $.ajax({
        type: "POST",
        url: "operation.php",
        data: {
            student_id : $student_id,
            checker: 'delete',
        },
        success: function (response) {
            $('#message').html(response).fadeIn();
            $('#message').html(response).fadeOut(3000);
            student_all();
            $('.modal').modal('dispose');
        }
    });
}

