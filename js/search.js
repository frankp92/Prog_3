$('#ricerca').keyup( function(){

    var search = $('#ricerca').val();

    if(search != ''){

        $.ajax({

            url:'php/events/search.php',
            method: 'GET',
            data:'ricerca='+search,
            success:function(data){
                $('#risultati_ricerca').html(data);
            }
    
        })

    }

})