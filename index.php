<?php
  include($_SERVER['DOCUMENT_ROOT'].'/tacocat/includes/header.php');
  include($_SERVER['DOCUMENT_ROOT'].'/tacocat/includes/topnav.php');
?>

<body>
  <div class="header-container home">
    <div class="header-tabs">
      <p id="infra-tab" class="tab">
        IT-Infrastruktur
      </p>
      <p id="secur-tab" class="tab">
        IT-Sicherheit
      </p>
      <p id="suppo-tab" class="tab">
        Support
      </p>
      <p id="cloud-tab" class="tab">
        Cloud-Services
      </p>
      <p id="softw-tab" class="tab">
        Software-Entwicklung
      </p>
    </div>
    <div class="show-tab">
      <div>
        <h3>Warum Tacocat?</h3>
        <p>
          Wir sind Ihr moderner IT-Dienstleister mit Standorten in ganz Deutschland. Unser Portfolio reicht von dem Aufbau einer
          leistungsstarken Infrastruktur bis hin zu individuellen Software-Lösungen.
        </p>
        <a href="#headline" class="go-to-content">Jetzt entdecken!</a>
      </div>
    </div>
    <div class="show-tab hide infra-tab">
      <div>
        <h3>IT-Infrastruktur</h3>
        <p>
          Eine gute und zuverlässige Infrastruktur ist das Rückgrat einer jeden Firma.
          Wir optimieren diese nach Ihren Anforderungen und helfen bei der Instandhaltung.
        </p>
        <a href="/tacocat/pages/infrastruktur.php"  class="go-to-content">Jetzt entdecken!</a>
      </div>
    </div>
    <div class="show-tab hide secur-tab">
      <div>
        <h3>IT-Sicherheit</h3>
        <p>
          Mit wachsender Komplexität kommen neue Gefahren für Ihre Daten und Systeme. Schützen
          Sie sich vor Angriffen mithilfe neuester Technologie und unsrem Know-How.
        </p>
        <a href="/tacocat/pages/sicherheit.php"  class="go-to-content">Jetzt entdecken!</a>
      </div>
    </div>
    <div class="show-tab hide suppo-tab">
      <div>
        <h3>Support</h3>
        <p>
          Läuft mal etwas nicht nach Plan? Kein Grund zu verzweifeln, unsere Service-Mitarbeiter
          helfen schnell und unkompliziert weiter.
        </p>
        <a href="/tacocat/pages/support.php"  class="go-to-content">Jetzt entdecken!</a>
      </div>
    </div>
    <div class="show-tab hide cloud-tab">
      <div>
        <h3>Cloud-Services</h3>
        <p>
          Cloud-Lösungen ergänzen zunehmend die eigene IT-Infrastruktur und sind eine zentrale Voraussetzung der Digitalisierung.
        </p>
        <a href="/tacocat/pages/support.php"  class="go-to-content">Jetzt entdecken!</a>
      </div>
    </div>
    <div class="show-tab hide softw-tab">
      <div>
        <h3>Software-Entwicklung</h3>
        <p>
          Zur passenden Hardware gehört natürlich die entsprechende Software. Sprechen Sie mit uns über maßgeschneiderte
          Lösungen - anwenderfreundlich und stabil.
        </p>
        <a href="/tacocat/pages/software.php"  class="go-to-content">Jetzt entdecken!</a>
      </div>
    </div>
  </div>

  <div class="container center content">
    <h1 id="headline">Ihr IT-Dienstleister am Puls der Zeit!</h1>

    <p class="inner">
      Die Aufgaben und Herausforderungen, mit denen sich Unternehmen im IT-Bereich konfrontiert sehen, werden immer komplexer und vielseitiger.
      Gut, wenn man hierbei einen Partner an der Hand hat, der sich mit umfassenden Dienstleistungen um Ihre IT-Infrastruktur kümmert.
      Wir bei Tacocat betrachten jede Firma als individuelles Konstrukt, für das wir genauso individuelle Konzepte und Lösungen finden wollen.
      Deshalb bieten wir Ihnen EDV- und IT-Services, die passgenau auf die Bedürfnisse Ihres Unternehmens zugeschnitten sind.
    </p><br />
    <p class="inner">
      Unsere IT-Dienstleistungen sind dabei so vielfältig wie die Anforderungen unserer Kunden.
       Wir können bereits in der Planungsphase Ihres IT-Projektes eingreifen und Ihnen als Berater
       bei allen Entscheidungen und Fragen zur Seite stehen. Dabei profitieren Sie von unserem Expertenwissen und der
       Erfahrung aus mehr als 10 Jahren im IT-Consulting.
    </p>

    <div class="landing-content">
      <div class="content-block">
        <i class="fa fa-wrench"></i>
        <h3>Voll kreativ</h3>
        <p>
          Wir strotzen nur so vor Ideen. Brauchen Sie Unterstützung
          bei der Konzeption Ihrer Projekte? Kommen Sie einfach auf uns zu,
          wir helfen Ihnen gerne.
        </p>
      </div>

      <div class="content-block">
        <i class="fa fa-rocket"></i>
        <h3>Rasend schnell</h3>
        <p>
          Verlassen Sie sich als Bestandskunde auf unseren 24-Stunden-Notfallservice. Rufen Sie uns an oder nutzen Sie unser
          komfortables Kontaktformular, wir machen uns direkt ans Werk.
        </p>
      </div>

      <div class="content-block">
        <i class="fa fa-suitcase"></i>
        <h3>Ausgesprochen kompetent</h3>
        <p>
          Wir setzen auf Wissen und Erfahrung - für jedes Thema haben wir den richtigen
          Ansprechpartner. Halbe Sachen sind nicht mal halb gut genug!
        </p>
      </div>
    </div>

  </div>
  <?php include($_SERVER['DOCUMENT_ROOT'].'/tacocat/includes/footer.php'); ?>
</body>
</html
