jQuery(document).ready(function () {
    // e.preventDefault();
    jQuery('#save').click(function () {
        student_add();
    });
    jQuery('#update').click(function () { 
        student_update();
    });
});

// Add Student
function student_add(){
    $.ajax({
        'url': "operation.php",
        'type': "POST",
        'data': {
            checker : 'insert',
        },
        success: function (response) {
            $('#message').html(response);
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
            $('#message').html(response);
        }
    });
}
