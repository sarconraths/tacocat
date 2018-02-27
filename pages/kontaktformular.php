<?php
  // include($doc_root + '/includes/logo.php');
  include($_SERVER['DOCUMENT_ROOT'].'/tacocat/includes/header.php');
  include($_SERVER['DOCUMENT_ROOT'].'/tacocat/includes/topnav.php');
?>

<img src="../images/contact.jpg" class="header" />

<div class="container content">

<div id="contact-form">
  <h1 id="headline">Der direkte Draht zu uns!</h1>
  <form action="" method="POST">

    <div class="input-field">
      <label for="firstname">Vorname</label>
      <input type="text" name="firstname" id="firstname" />
    </div>
    <div class="input-field">
      <label for="lastname">Nachname</label>
      <input type="text" name="nachname" id="nachname" />
    </div>
    <div class="input-field">
      <label for="firma">Firma</label>
      <input type="text" name="firma" id="firma" />
    </div>
    <br />
    <div class="input-field">
      <label for="telefon">Telefon</label>
      <input type="text" name="telefon" id="telefon" />
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
      <textarea rows="8"></textarea>
    </div>
    <button type="submit" id="submit">Absenden</button>

  </form>
</div>
