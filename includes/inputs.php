<?php
require_once('includes/messages.php');

if(isset($_SESSION['message'])){        
    messageSuccess();
}
?>

<div class="card card-body ">
    <form action="save.php" method="POST">
        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Task Title" 
                   autofocus required>
        </div>

        <div class="form-group">
            <textarea name="descripcion" rows="2" placeholder="task description" class="form-control" 
                      required></textarea>
        </div>

        <input type="submit" class="btn btn-success btn-block" name="save" value="Guardar">
    </form>
</div>
