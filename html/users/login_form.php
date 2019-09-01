<!-- Login Form--> 
<div class="container"> 
  <h1>Accedi</h1>
  <form method="POST" action="php/query_login.php">
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email" required>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password" required>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Invio</button>
  </form>   
</div>
<!--End Login Form-->  