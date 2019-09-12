<form method="GET" action="php/events/delete_event.php"><!-- bottone per la cancellazione degli eventi -->
    <input type="hidden" class="form-control" name="id_evento" value="<?php echo $eventi['IDevento']; ?>">
    <button type="submit" class="btn btn-primary" name="submit">Cancella evento</button>
</form>