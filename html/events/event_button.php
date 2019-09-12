<!-- bottone per la creazione degli eventi -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Crea evento
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Creazione evento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
        <div class="form-group col-md-6">
        <label for="example-text-input">Titolo</label>  
        <input class="form-control title" type="text" name="titolo" id='titolo' required>    
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descrizione</label>
            <textarea class="form-control" rows="3" id='descrizione' name="descrizione"></textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="example-date-input">Data</label>
                <input class="form-control" type="date" name="data" max="2040-12-31" min="2000-01-01" id='data'>
                </div>
            <div class="form-group col-md-6">
                <label for="example-date-input">Ora di inizio</label>
                <input class="form-control" type="time" name="ora" max="23:59" min="00:00" id='ora'>
            </div>    
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="example-text-input">Durata</label>  
            <input class="form-control" type="text" name="durata" id='durata' required>    
        </div>
        <div class="form-group col-md-6">
            <label for="example-text-input">Posti</label>  
            <input class="form-control" type="text" name="posti" id='posti' required>
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputState">Visibilità evento</label>
        <select id='privacy' class="form-control" name="privacy">
          <option selected>Pubblico</option>
          <option>Privato</option>
        </select>
      </div>
        <div class="form-group col-md-6">
              <label for="example-text-input">Tag</label>  
              <input class="form-control" type="text" name="tag" id='tag' required>
          </div>
      </div>
      <input type="hidden" class="form-control" name="UId" id='UId' value="<?php echo $_SESSION['UId']; ?>">
      <button type="submit" class="btn btn-primary" name="submit" id ='submit'>Crea</button>
      </form> <!-- script per effettuare una chiamata ajax alla creazione di un evento-->
      <script src='js/event_create.js'></script> 
      </div>
    </div>
  </div>
</div>