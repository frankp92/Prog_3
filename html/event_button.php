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
      <form method="POST" action="db/insert/insert_event.php">
        <div class="form-group col-md-6">
        <label for="example-text-input">Titolo</label>  
        <input class="form-control" type="text" name="titolo" required>    
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descrizione</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descrizione"></textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="example-date-input">Data</label>
                <input class="form-control" type="text" name="inizio" placeholder="gg-mm-aaaa">
                </div>
            <div class="form-group col-md-6">
                <label for="example-date-input">Ora di inizio</label>
                <input class="form-control" type="text" name="orario" placeholder="hh-mm">
            </div>    
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="example-text-input">Durata</label>  
            <input class="form-control" type="text" name="durata" required>    
        </div>
        <div class="form-group col-md-6">
            <label for="example-text-input">Posti</label>  
            <input class="form-control" type="text" name="posti" required>
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputState">Visibilità evento</label>
        <select id="inputState" class="form-control" name="privacy">
          <option selected>Pubblico</option>
          <option>Privato</option>
        </select>
      </div>
        <div class="form-group col-md-6">
              <label for="example-text-input">Tag</label>  
              <input class="form-control" type="text" name="tag" required>
          </div>
      </div>
      <input type="hidden" class="form-control" name="UId" value="<?php echo $_SESSION['UId']; ?>">
      <button type="submit" class="btn btn-primary" name="submit">Crea</button>
      </form>  
      </div>
    </div>
  </div>
</div>