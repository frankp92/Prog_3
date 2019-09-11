$(document).ready(function() {

    $('#submit').click(function(/*e*/){
        //e.preventDefault()
        
        var email = $("#email").val();
        var password = $("#password").val();

        var response = '';
        $.ajax({

            url: "php/query_login.php",
            method: 'POST',
            data: "email=" + email + "&password=" + password,
            dataType: "html",
            success: function(data) {
                response = data
                console.log(response)
                window.location.href='https://localhost/Smartlab2.0/index.php'
            }
        })

    })

})

