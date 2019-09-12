<form method="GET" action="php/projects/delete_project.php"><!-- bottone per la cancellazione dei progetti -->
    <input type="hidden" class="form-control" name="IDprogetto" value="<?php echo $progetto['IDprogetto']; ?>">
    <button type="submit" class="btn btn-primary" name="submit">Cancella progetto</button>
</form>