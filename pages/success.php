<?php
  include($_SERVER['DOCUMENT_ROOT'].'/tacocat/includes/header.php');
  include($_SERVER['DOCUMENT_ROOT'].'/tacocat/includes/topnav.php');
?>

<div class="center container content-noheader success-message">

<h1>Vielen Dank für Ihre Anfrage</h1>
<p>
  <?php if(!empty($_POST['message'])){
    echo "<strong>Ihre Nachricht: </strong>"; 
    echo $_POST['message'];
  }; ?>
</p>
<p>
  Wir werden uns schnellstmöglich mit Ihnen in Verbindung setzen.
</p>
</div>

<?php
  include($_SERVER['DOCUMENT_ROOT'].'/tacocat/includes/footer.php');
?>
