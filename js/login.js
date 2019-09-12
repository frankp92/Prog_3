$(document).ready(function() {

    $('#submit').click(function(){
        
        var email = $("#email").val();
        var password = $("#password").val();

        var response = '';
        $.ajax({

            url: "php/query_login.php",
            method: 'POST',
            data: "email=" + email + "&password=" + password,
            dataType: "html",
            success: function(data) {
                
                var risultato = JSON.parse(data);
                if(risultato[0]=='Login fallito!'){
                    
                    window.location.href='https://localhost/Smartlab2.0/error.php'

                }else{

                    console.log(risultato);
                    window.alert('Benvenuto!');
                    window.location.href='https://localhost/Smartlab2.0/index.php'

                }
            }
        })
    })
})

