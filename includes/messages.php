<?php

function setMessage($msj, $typeColor){
  $_SESSION['message'] = $msj;
  $_SESSION['message_type'] = $typeColor;
}

function messageDisplay(){
?>
  <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
    <?= $_SESSION['message']?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php
session_unset();
}
?>
