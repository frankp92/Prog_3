<script>
  function myFunction() {
      var x = document.getElementById("inputState").value;
      console.log(x)
      if (x == "professore") {
        $(function(){
        $("#includedContent").load("form/form_professore.php"); 
      });
      }
      if (x == "docente"){
        $(function(){
        $("#includedContent").load("form/form_docente.php"); 
      });
      }
      if (x == "studente"){
        $(function(){
        $("#includedContent").load("form/form_studente.php"); 
      });
      }
      if (x == "personale"){
        $(function(){
        $("#includedContent").load("form/form_personale.php"); 
      });
      }
      if (x == "esterno"){
        $(function(){
        $("#includedContent").load("form/form_utente.php"); 
      });
      }
      if (x == "default"){
        $(function(){
        location.reload(); 
      });
      }
  }
</script>

<div class="container">
  <h1>Registrazione</h1>
  <form>
    <div class="form-row">
      <div class="form-group col-md-3">
        <label for="inputState">Scegli il tipo di account</label>
        <select id="inputState" class="form-control" onchange="myFunction()">
          <option value="default">-</option>
          <option value="professore">Professore</option>
          <option value="docente">Docente non strutturato</option>
          <option value="studente">Studente</option>
          <option value="personale">Personale tecnico</option>
          <option value="esterno">Utente esterno</option>
        </select>
      </div>
    </div>  
  </form>
</div>
<div class="container"id="page-container">
<div id="content-wrap">
<div class="container" id="includedContent"></div></div></div>



