$(document).ready(function() {

    //var IDs = [];
    //$("form").find("button").each(function(){ IDs.push(this.id); });
    //console.log(IDs);

    //var button = $('button').val();
    //console.log(button);

    $('#button53').off().click(function(){
        //e.preventDefault();

        var UId = $("#UId").val();
        var id_evento = $("#id_evento").val();
        var azione = $("#azione").val();
        
        //var sessione = "<?php echo $_SESSION['categoria'];?>"
        //console.log(sess)

        //console.log(UId)
        //console.log(id_evento)
        //console.log(azione)

        $.ajax({

            url: "php/events/action_event.php",
            method: 'POST',
            data: "UId=" + UId + "&id_evento=" + id_evento + "&azione=" + azione,
            dataType: "html",
            success: function(data) {
                //response = data
                //alert(data);
                console.log(data)
                if(azione=='partecipa'){
                    $.ajax({
                        url: "php/events/check_partecipazione.php",
                        method: 'POST',
                        data: "UId=" + UId + "&id_evento=" + id_evento,
                        dataType: "html",
                        success:function($eventi) {
                            console.log('partecipa')
                            $('#button53').load('html/events/non_partecipa_button.php')
                            $('#button53').children('button').setAttribute('id','button53')
                        }
                    })
                }else{
                    $.ajax({
                        url: "php/events/check_partecipazione.php",
                        method: 'POST',
                        data: "UId=" + UId + "&id_evento=" + id_evento,
                        dataType: "html",
                        success:function(id_evento) {
                            console.log('non partecipa')
                            $('#form53').load('html/events/partecipa_button.php')
                            $('#button53').children('button').attr('id','button53')
                        }
                    })
                }
                //console.log(response)
            }
        })

    })

})