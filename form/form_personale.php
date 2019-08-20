<form method="POST" action=<?php echo htmlspecialchars("db/insert/insert_personale.php") ?>>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="example-text-input">Nome</label>  
      <input class="form-control" type="text" name="nome" placeholder="Nome" required>    
    </div>
    <div class="form-group col-md-6">
      <label for="example-text-input">Cognome</label>  
      <input class="form-control" type="text" name="cognome" placeholder="Cognome" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputAddress">Indirizzo</label>
      <input type="text" class="form-control" name="indirizzo" placeholder="Indirizzo" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputNumber">Telefono</label>
      <input type="text" class="form-control" name="telefono" placeholder="Telefono" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputText">Codice fiscale</label>
      <input type="text" class="form-control" name="codice_fiscale" placeholder="Codice fiscale" maxlenght="16" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputText">Titolo di studio</label>
      <input type="text" class="form-control" name="titolo" placeholder="Titolo di studio" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputText">Professione</label>
      <input type="text" class="form-control" name="professione" placeholder="Professione" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputText">Specializzazione</label>
      <input type="text" class="form-control" name="specializzazione" placeholder="Specializzazione" required>
    </div>
  </div>

  <div class="form-row">      
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Email" required>            
    </div>          
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password" required>
    </div>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Invio</button>
</form>