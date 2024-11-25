<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <title>The Gregory-Lebiniz Series Emporium</title>
</head>

<body>

</body>

</html>

<body>
  <!-- Header start -->
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title">The Gregory-Lebiniz Series Emporium</span>
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer"></div>
        <!-- Navigation. We hide it in small screens. -->
        <nav class="mdl-navigation mdl-layout--large-screen-only">
          <a class="mdl-navigation__link" href="index.html">Main Page</a>
        </nav>
      </div>
    </header>
    <div class="mdl-layout__drawer">
      <span class="mdl-layout-title">Navigation</span>
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="index.html">Main Page</a>
      </nav>
    </div>
    <main class="mdl-layout__content">
      <div class="page-content">
        <center>
          <?php
          $Temp = "";
          $result = 0;
          if (isset($_POST['YourNumber'])) {
            $Temp = $_POST['YourNumber'];
          }

          if ($Temp > 0 and $Temp <= 9999999) {
            while ($Temp >= 0) {
              $result = $result + ((-1) ** $Temp / (2 * $Temp + 1)) * 4;
              $Temp = $Temp - 1;
            }
            echo "<h4>$result</h4>";
          } else {
            echo "<h4>Invalid_Number</h4>";
          }

          ?>
        </center>
      </div>
    </main>
  </div>
</body>

</html>