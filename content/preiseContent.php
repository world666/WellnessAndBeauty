<!-- Hero Section -->
<section class="hero_small" style="padding-bottom: 40px;" id="home">
  
</section>

<section class="container my-5" id="preise">
  <h1 class="mb-4">Preise</h1>

  <?php
  $filename = "preise.txt";


  if (!file_exists($filename)) {
      echo "<div class='alert alert-danger'>Datei nicht gefunden.</div>";
      exit;
  }

  if (($handle = fopen($filename, "r")) !== false) {
      $inTable = false;

      while (($line = fgets($handle)) !== false) {
          $line = trim($line);
          if (empty($line)) continue;

          // Kategorie
          if (strpos($line, "#") === 0) {
              // Schließen Sie die vorherige Tabelle und die Schaltfläche
              if ($inTable) {
                  echo "</tbody></table></div>"; // table-wrapper
                  echo '<div class="text-end mt-3">';
                  echo '<a href="https://api.whatsapp.com/send/?phone=17664265727&amp;text&amp;type=phone_number&amp;app_absent=0" class="btn btn-primary btn-lg" target="_blank">Termin vereinbaren</a>';
                  echo '</div>';
                  echo '</div>'; // .col-12
                  echo '</div>'; // .row
                  $inTable = false;
              }

              // Eine neue Tabelle beginnen
              $category = htmlspecialchars(ltrim($line, "#"));

              echo '<div class="row mb-4">';
              echo '<div class="col-12">';
              echo "<h2 class='mb-3'>$category</h2>";
              echo '<div class="table-wrapper" style="overflow-x: auto; width: 100%;">';
              echo '<table class="table table-bordered table-hover fixed-width-table" style="width: 100%; table-layout: fixed;">';
              echo '<thead>';
              echo '<tr class="text-muted fw-light">';
              echo '<th>Leistung</th>';
              echo '<th>Dauer</th>';
              echo '<th>Preis</th>';
              echo '</tr>';
              echo '</thead>';
              echo '<tbody>';
              $inTable = true;
              continue;
          }

          // Zeilendaten
          $data = str_getcsv($line, ";");

          $behandlung   = htmlspecialchars($data[0] ?? "");
          $beschreibung = "";
          $dauer        = "";
          $preis        = "";

          if (count($data) === 4) {
              $beschreibung = htmlspecialchars($data[1]);
              $dauer        = htmlspecialchars($data[2]);
              $preis        = htmlspecialchars($data[3]);
          } elseif (count($data) === 3) {
              $dauer = htmlspecialchars($data[1]);
              $preis = htmlspecialchars($data[2]);
          } elseif (count($data) === 2) {
              $dauer = htmlspecialchars($data[1]);
          }

          $leistung = "<strong>$behandlung</strong>";
          if (!empty($beschreibung)) {
              $leistung .= "<br><small class='text-muted'>$beschreibung</small>";
          }

          echo "<tr>";
          echo "<td>$leistung</td>";
          echo "<td>$dauer</td>";
          echo "<td>$preis</td>";
          echo "</tr>";
      }

      // Schließen Sie die letzte Tabelle
      if ($inTable) {
          echo "</tbody></table></div>";
          echo '<div class="text-end mt-3">';
          echo '<a href="https://api.whatsapp.com/send/?phone=17664265727&amp;text&amp;type=phone_number&amp;app_absent=0" class="btn btn-primary btn-lg" target="_blank">Termin vereinbaren</a>';
          echo '</div>';
          echo '</div>'; // .col-12
          echo '</div>'; // .row
      }

      fclose($handle);
  } else {
      echo "<div class='alert alert-warning'>Fehler beim Öffnen der Datei.</div>";
  }
  ?>
</section>


