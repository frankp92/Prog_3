<form><!-- form per la registrazione dello studente -->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="example-text-input">Nome</label>  
      <input class="form-control" type="text" name="nome" placeholder="Nome" id='nome' required>    
    </div>
    <div class="form-group col-md-6">
      <label for="example-text-input">Cognome</label>  
      <input class="form-control" type="text" name="cognome" placeholder="Cognome" id='cognome' required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputAddress">Indirizzo</label>
      <input type="text" class="form-control" name="indirizzo" placeholder="Indirizzo" id='indirizzo' required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputNumber">Telefono</label>
      <input type="text" class="form-control" name="telefono" placeholder="Telefono" id='telefono' required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputText">Codice fiscale</label>
      <input type="text" class="form-control" name="codice_fiscale" placeholder="Codice fiscale" id='codice_fiscale' maxlenght="16" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputText">Titolo di studio</label>
      <input type="text" class="form-control" name="titolo" placeholder="Titolo di studio" id='titolo' required>
    </div>
  </div>

  
  <div class="form-row">    
    <div class="form-group col-md-6">
        <label for="inputState">Tipo di corso</label>
        <select id="tipo_corso" class="form-control" name="tipo_corso" required>
          <option>Triennale</option>
          <option>Magistrale</option>
        </select>
      </div>
      <div class="form-group col-md-6">
      <label for="inputText">Corso</label>
      <input type="text" class="form-control" name="corso" placeholder="Corso" id='corso' required>
    </div>  
  </div>
  <div class="form-row">    
    <div class="form-group col-md-6">
      <label for="inputText">Anno corso</label>
      <input type="text" class="form-control" name="anno_corso" placeholder="Anno corso" id='anno_corso' required>
    </div>
    </div>


  <div class="form-row">      
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Email" id='email' required>            
    </div>          
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password" id='password' required>
    </div>
  </div>
  <input type="hidden" name='categoria' value='studente'>
  <button type="submit" name="submit" class="btn btn-primary" id='submit'>Invio</button>
</form>
<script src='js/form_studente.js'></script>