<?php
  // include($doc_root + '/includes/logo.php');
  include($_SERVER['DOCUMENT_ROOT'].'/tacocat/includes/header.php');
  include($_SERVER['DOCUMENT_ROOT'].'/tacocat/includes/topnav.php');
?>

<img src="../images/contact.jpg" class="header" />

<div class="container content">

<div id="contact-form">
  <h1 id="headline">Der direkte Draht zu uns!</h1>
  <form method="post" action="success.php">

    <div class="input-field">
      <label for="firstname">Vorname</label>
      <input type="text" name="firstname" id="firstname" />
    </div>
    <div class="input-field">
      <label for="lastname">Nachname</label>
      <input type="text" name="lastname" id="lastname" />
    </div>
    <div class="input-field">
      <label for="comp">Firma</label>
      <input type="text" name="comp" id="comp" />
    </div>
    <br />
    <div class="input-field">
      <label for="phone">Telefon</label>
      <input type="text" name="phone" id="phone" />
    </div>
    <div class="input-field">
      <label for="mail-1">E-Mail</label>
      <input type="text" name="mail-1" id="mail-1" />
    </div>
    <div class="input-field">
      <label for="mail-2">E-Mail bestätigen</label>
      <input type="text" name="mail-2" id="mail-2" />
    </div>
    <br />
    <div class="input-field full">
      <label for="Nachricht">Ihre Nachricht an uns</label>
      <textarea rows="8" name="message"></textarea>
    </div>
    <button type="submit" id="submit" name="submit">Absenden</button>

  </form>
</div>
</div>


<?php include($_SERVER['DOCUMENT_ROOT'].'/tacocat/includes/footer.php'); ?>
