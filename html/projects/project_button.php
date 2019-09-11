<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Crea progetto
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Creazione progetto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
        <div class="form-group col-md-6">
        <label for="example-text-input">Titolo</label>  
        <input class="form-control title" type="text" name="Titolo" id='Titolo' required>    
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descrizione</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Descrizione" id='Descrizione'></textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="example-date-input">Data di creazione</label>
                <input class="form-control" type="date" name="Data_di_creazione" max="2040-12-31" min="2000-01-01" id='Data_di_creazione'>
                </div>
        <div class="form-group col-md-6">
        <label for="inputState">Tipologia</label>
        <select id="Tipologia" class="form-control" name="Tipologia">
          <option selected>Tesi</option>
          <option>Tirocinio</option>
          <option>Lavoro</option>
        </select>
      </div>   
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="example-text-input">Durata</label>  
            <input class="form-control" type="text" name="Durata" id='Durata' required>    
        </div>
        <div class="form-group col-md-6">
            <label for="example-text-input">Posizioni aperte</label>  
            <input class="form-control" type="text" name="Posizioni_aperte" id='Posizioni_aperte' required>
        </div>
        </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputState">Privacy</label>
        <select id="Privacy" class="form-control" name="Privacy">
          <option selected>Pubblico</option>
          <option>Privato</option>
        </select>
      </div>
        <div class="form-group col-md-6">
              <label for="example-text-input">Tag</label>  
              <input class="form-control" type="text" name="tag" id='tag' required>
        </div>
      </div>
      <input type="hidden" class="form-control" name="UId" value="<?php echo $_SESSION['UId']; ?>" id='UId'>
      <button type="submit" class="btn btn-primary" name="submit" id='submit'>Crea</button>
    </form>
    <script src='js/project_create.js'></script>  
    </div>
    </div>
  </div>
</div>