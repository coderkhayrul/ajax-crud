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
