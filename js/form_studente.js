$(document).ready(function() {

    $('#submit').click(function(e){
        e.preventDefault()
        var nome = $("#nome").val();
        var cognome = $("#cognome").val();
        var indirizzo = $("#indirizzo").val();
        var telefono = $("#telefono").val();
        var codice_fiscale = $("#codice_fiscale").val();
        var titolo = $("#titolo").val();
        var tipo_corso = $("#tipo_corso").val();
        var corso = $("#corso").val();
        var anno_corso = $("#anno_corso").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var categoria = 'studente'

        var response = '';
        $.ajax({

            url: "php/insert/insert_utente.php",
            method: 'POST',
            data: "nome=" + nome + "&cognome=" + cognome + "&indirizzo=" + indirizzo + "&telefono=" + telefono + "&codice_fiscale=" + codice_fiscale + "&titolo=" + titolo + "&tipo_corso=" + tipo_corso + "&corso=" + corso + "&anno_corso=" + anno_corso + "&email=" + email + "&password=" + password + "&categoria=" + categoria,
            dataType: "html",
            success: function(data) {
                response = data
                console.log(response)
                alert('Registrazione avvenuta con successo!');
                window.location.href='https://localhost/Smartlab2.0/index.php'
            }
        })

    })

})