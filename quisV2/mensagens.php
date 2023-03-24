<?php
$msg = $_GET['msg'] ?? "";
if($msg == ""){
  $msg = "Bem vindo!";
}

if($msg == "inserido"){
   $msg = "Quiz cadastrado com sucesso!";
}

?>

<div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100">

  <!-- Then put toasts within -->
  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="https://png.vector.me/files/images/2/8/287808/warning_icon_preview" class="rounded me-2" alt="...">
      <strong class="me-auto">Aviso importante</strong>
      
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
    <?php echo $msg?>
    </div>
  </div>
</div>