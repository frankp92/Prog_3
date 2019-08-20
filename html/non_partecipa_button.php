<form method="POST" action="db/non_partecipa.php">
    <input type="hidden" class="form-control" name="UId" value="<?php echo $_SESSION['UId']; ?>">
    <input type="hidden" class="form-control" name="id_evento" value="<?php echo $eventi['IDevento']; ?>">
    <button type="submit" class="btn btn-primary" name="submit">Non partecipa</button>
</form>