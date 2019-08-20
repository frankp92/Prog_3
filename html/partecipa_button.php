<form method="POST" action="db/partecipa.php">
    <input type="hidden" class="form-control" name="UId" value="<?php echo $_SESSION['UId']; ?>">
    <input type="hidden" class="form-control" name="id_evento" value="<?php echo $eventi['IDevento']; ?>">
    <button type="submit" class="btn btn-primary" name="submit">Partecipa</button>
</form>