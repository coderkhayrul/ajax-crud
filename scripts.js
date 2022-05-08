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
    var studnetName = $('#studnetName').val();
    var studnetEmail = $('#studnetEmail').val();
    var studnetPhone = $('#studnetPhone').val();
    var studentAddress = $('#studentAddress').val();

    $.ajax({
        'url': "operation.php",
        'type': "POST",
        'data': {
            studnetName    : studnetName,
            studnetEmail   : studnetEmail,
            studnetPhone   : studnetPhone,
            studentAddress : studentAddress,
            checker        : 'insert',
        },
        success: function (response) {
            $('#message').html(response).fadeIn();
            $('#message').html(response).fadeOut(5000);
            student_all();
        }

    });
}

// Update Student
function student_update(){
    $.ajax({
        url: "operation.php",
        type: "POST",
        data: {
            checker : 'update',
        },
        success: function (response) {
            $('#message').html(response).fadeIn();
            $('#message').html(response).fadeOut(5000);
        }
    });
}


