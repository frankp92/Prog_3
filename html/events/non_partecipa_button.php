<form method="POST" action="php/events/action_event.php">
    <input type="hidden" class="form-control" name="UId" value="<?php echo $_SESSION['UId']; ?>">
    <input type="hidden" class="form-control" name="id_evento" value="<?php echo $eventi['IDevento']; ?>">
    <input type="hidden" class="form-control" name="azione" value="non_partecipa">
    <button type="submit" class="btn btn-primary" name="submit">Non partecipa</button>
</form>