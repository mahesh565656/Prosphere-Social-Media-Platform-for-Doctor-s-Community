<?php

$email = $_SESSION['email'];
$sql = "SELECT * FROM usertable WHERE email='$email'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);






?>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <?php include "Components/sidebar.php"; ?>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <?php include "Components/navbar.php"; ?>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          
        </div>
      </div>
    </div>
  </div>
</body>