$(document).ready(function() {

    $('#submit').click(function(/*e*/){
        //e.preventDefault()
        var Data_di_creazione = $("#Data_di_creazione").val();
        var Titolo = $("#Titolo").val();
        var Descrizione = $("#Descrizione").val();
        var Tipologia = $("#Tipologia").val();
        var Durata = $("#Durata").val();
        var Posizioni_aperte = $("#Posizioni_aperte").val();
        var Privacy = $("#Privacy").val();
        var UId = $("#UId").val();
        var tag = $("#tag").val();
        
        var response = '';
        $.ajax({

            url: "php/projects/insert_project.php",
            method: 'POST',
            data: "Data_di_creazione=" + Data_di_creazione + "&Titolo=" + Titolo + "&Descrizione=" + Descrizione + "&Tipologia=" + Tipologia + "&Durata=" + Durata + "&Posizioni_aperte=" + Posizioni_aperte + "&Privacy=" + Privacy + "&UId=" + UId + "&tag=" + tag,
            dataType: "html",
            success: function(data) {
                response = data
                console.log(response)
                alert('Progetto creato con successo!');
                window.location.href='https://localhost/Smartlab2.0/project.php'
            }
        })

    })

})

