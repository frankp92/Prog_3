<form method="POST" action="php/projects/non_partecipa_project.php">
    <input type="hidden" class="form-control" name="UId" value="<?php $_SESSION['UId']; ?>">
    <input type="hidden" class="form-control" name="IDprogetto" value="<?php echo $progetto['IDprogetto']; ?>">
    <input type="hidden" class="form-control" name="Tipologia" value="<?php echo $progetto['Tipologia']; ?>">
    <input type="hidden" class="form-control" name="IDcoordinatore" value="<?php echo $progetto['IDcoordinatore']; ?>">
    <button type="submit" class="btn btn-primary" name="submit">Non partecipa</button>
</form>