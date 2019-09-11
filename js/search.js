$(document).ready(function() {
    
    $('#ricerca').keyup( function(){

        var search = $('#ricerca').val();

        if(search != ''){

            $.ajax({

                url:'php/events/search.php',
                method: 'GET',
                data:'ricerca='+search,
                success:function(data){

                    console.log(data);
                    var arrTitolo = JSON.parse(data);
                    console.log(arrTitolo);

                    for(i=0; i<arrTitolo.length; i++){

                        var tit = document.createElement('a');
                        tit.setAttribute('id', 'p_search');
                        tit.setAttribute('href', 'http://localhost/Smartlab2.0/search.php?ricerca='+arrTitolo[i].Titolo);
                        var textTit= document.createTextNode(arrTitolo[i].Titolo);
                        tit.appendChild(textTit);
                        var bre = document.createElement('br');                   
                        document.getElementById('risultati_ricerca').appendChild(tit);
                        document.getElementById('risultati_ricerca').appendChild(bre);
                        console.log(arrTitolo[i].Titolo);

                    }

                }
            
            })

        }

    })
})