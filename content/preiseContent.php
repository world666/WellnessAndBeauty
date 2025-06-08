<!-- Hero Section -->
<section class="hero_impressum" style="padding-bottom: 40px;" id="home">
  
</section>

<section class="container my-5" id="preise">
    <h1 class="mb-4">Preise</h1>

    <?php
    // Path to the CSV file
    $filename = "preise.csv";

    // Check if file exists
    if (!file_exists($filename)) {
        echo "<div class='alert alert-danger'>File not found.</div>";
        exit;
    }

    // Open and read CSV file
    if (($handle = fopen($filename, "r")) !== false) {
        echo "<div class='table-responsive'>";
        echo "<table class='table table-bordered table-striped table-hover'>";

        $isHeader = true;

        while (($data = fgetcsv($handle, 1000, ";")) !== false) {
            echo "<tr>";

            foreach ($data as $cell) {
                if ($isHeader) {
                    echo "<th>" . htmlspecialchars($cell) . "</th>";
                } else {
                    echo "<td>" . htmlspecialchars($cell) . "</td>";
                }
            }

            echo "</tr>";
            $isHeader = false;
        }

        echo "</table>";
        echo "</div>";
        fclose($handle);
    } else {
        echo "<div class='alert alert-warning'>Failed to open the file.</div>";
    }
    ?>
</section>