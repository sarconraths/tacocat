<?php
  include($_SERVER['DOCUMENT_ROOT'].'/tacocat/includes/header.php');
  include($_SERVER['DOCUMENT_ROOT'].'/tacocat/includes/topnav.php');
  include($_SERVER['DOCUMENT_ROOT'].'/tacocat/employeeCount.php');
?>
<div class="content-noheader center container">
  <h1>Professionelle Hilfe - schnell und unkompliziert</h1>

  <h3>Wir sind für Sie da</h3>
  <p>
    Support wird bei uns groß geschrieben. Unsere bestens geschulten Mitarbeiter sind
    24 Stunden am Tag erreichbar und kümmern sich um Ihre Anliegen rund um Server,
    Software usw. Geben Sie die Verantwortung aus der Hand. Unsere Experten überwachen Ihre Server und Systeme rund um die Uhr.
  </p>

<?php echo "Unsere ".$employeeCount." Mitarbeiter an ".$cityCount." Standorten ($cities) beraten Sie gerne.";
?>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'].'/tacocat/includes/footer.php'); ?>
