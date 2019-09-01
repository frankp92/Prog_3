<form method="POST" action="php/projects/non_partecipa_project.php">
    <input type="hidden" class="form-control" name="UId" value="<?php echo $_SESSION['UId']; ?>">
    <input type="hidden" class="form-control" name="IDprogetto" value="<?php echo $progetto['IDprogetto']; ?>">
    <button type="submit" class="btn btn-primary" name="submit">Non partecipa</button>
</form>