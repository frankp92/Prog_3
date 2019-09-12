$(document).ready(function() {

    $('#submit').click(function(e){
        
        e.preventDefault()
        var nome = $("#nome").val();
        var cognome = $("#cognome").val();
        var indirizzo = $("#indirizzo").val();
        var telefono = $("#telefono").val();
        var codice_fiscale = $("#codice_fiscale").val();
        var titolo = $("#titolo").val();
        var dipartimento = $("#dipartimento").val();
        var profilo = $("#profilo").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var categoria = 'professore'


        var response = '';
        $.ajax({

            url: "php/insert/insert_utente.php",
            method: 'POST',
            data: "nome=" + nome + "&cognome=" + cognome + "&indirizzo=" + indirizzo + "&telefono=" + telefono + "&codice_fiscale=" + codice_fiscale + "&titolo=" + titolo + "&dipartimento=" + dipartimento + "&profilo=" + profilo + "&email=" + email + "&password=" + password + "&categoria=" + categoria,
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