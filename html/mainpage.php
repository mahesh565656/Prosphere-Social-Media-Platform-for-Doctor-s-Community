<?php
include "Auth/controllerUserData.php";
$email = $_SESSION['email'];
$sql = "SELECT * FROM usertable WHERE email='$email'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Home Page</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="../assets/vendor/js/helpers.js"></script>
  <script src="../assets/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->


      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="<?php echo URL; ?>/Client/html/mainpage.php" class="app-brand-link">
            <span class="app-brand-logo demo">
              <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                  <path d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z" id="path-1"></path>
                  <path d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z" id="path-3"></path>
                  <path d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z" id="path-4"></path>
                  <path d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z" id="path-5"></path>
                </defs>
                <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                    <g id="Icon" transform="translate(27.000000, 15.000000)">
                      <g id="Mask" transform="translate(0.000000, 8.000000)">
                        <mask id="mask-2" fill="white">
                          <use xlink:href="#path-1"></use>
                        </mask>
                        <use fill="#696cff" xlink:href="#path-1"></use>
                        <g id="Path-3" mask="url(#mask-2)">
                          <use fill="#696cff" xlink:href="#path-3"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                        </g>
                        <g id="Path-4" mask="url(#mask-2)">
                          <use fill="#696cff" xlink:href="#path-4"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                        </g>
                      </g>
                      <g id="Triangle" transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                        <use fill="#696cff" xlink:href="#path-5"></use>
                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2">Prosphere</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboards -->
          <li class="menu-item">

            <a href="<?php echo URL; ?>/Client/html/mainpage.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Home</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="<?php echo URL; ?>/Client/html/editprofile.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div data-i18n="Notifications">Edit Profile</div>
            </a>
          </li>
          
        </ul>
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none ps-1 ps-sm-2" placeholder="Search..." aria-label="Search..." />
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->
              <li class="nav-item lh-1 me-3">
                </li>

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-medium d-block">John Doe</span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="editprofile.php">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-cog me-2"></i>
                      <span class="align-middle">Settings</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <span class="d-flex align-items-center align-middle">
                        <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                        <span class="flex-grow-1 align-middle ms-1">Billing</span>
                        <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                      </span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="../../Auth/logout-user.php">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">

            <div class="row">
              <div class="col-md-7">
                <div class="card mb-4">
                  <h5 class="card-header">Post</h5>
                  <div class="card-body">
                    <form id="PostImage" method="post" enctype="multipart/form-data">
                      <div class="row align-items-center">
                        <div class="col-md-2">
                          <div class="user-avatar">
                            <img src="<?php if (isset($row['image'])) {
                                        echo $row['image'];
                                      } ?>" alt="Upload Image" class="d-block rounded" height="70" width="70" id="uploadedAvatar" />
                          </div>
                        </div>
                        <div class="col-md-10 mt-3 mt-md-0">
                          <input class="form-control" type="text" id="post" name="text" placeholder="Start a Post" autofocus />
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-md-12">
                          <div class="d-flex justify-content-end">
                            <label for="upload" class="btn btn-primary me-2" tabindex="0">
                              <span class="d-none d-sm-block">Upload Image</span>
                              <i class="bx bx-upload d-block d-sm-none"></i>
                              <input type="file" id="upload" name="post_image" class="account-file-input" hidden accept="image/png, image/jpeg" />
                            </label>
                            <button type="submit" name="save" class="btn btn-primary">Post</button>
                          </div>
                          <p class="text-muted mb-0 mt-3">Allowed formats: JPG, GIF, PNG | Max size: 800KB</p>
                          <div id="statusMessages"></div> <!-- Placeholder for success/error messages -->
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                  $(document).ready(function() {
                    $('#PostImage').submit(function(e) {
                      e.preventDefault();
                      var formData = new FormData(this);
                      $.ajax({
                        url: 'uploadpost.php',
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                          $('#statusMessages').html('<div class="alert alert-success" role="alert">Image Updated Successfully!</div>');
                        },
                        error: function(xhr, status, error) {
                          $('#statusMessages').html('<div class="alert alert-danger" role="alert">Error: ' + error + '</div>');
                        }
                      });
                    });
                  });
                </script>


                <div class="card mb-4">
                  <h5 class="card-header">Posts</h5>
                  <div class="card-body">
                    <?php

                    $result = mysqli_query($con, "SELECT * FROM posts");
                    if (mysqli_num_rows($result) > 0) {
                      while ($people = mysqli_fetch_array($result)) {

                        $added_by = $people['added_by'];
                        $usertable = mysqli_query($con, "SELECT * FROM usertable WHERE email='$added_by' ");

                        $user = mysqli_fetch_array($usertable);
                    ?>
                        <article class="post">
                          <div class="post__header">
                            <div class="post__profile">
                              <a href="#"  class="post__avatar">
                                <img src="<?php if (isset($user['image'])) {
                                            echo $user['image'];
                                          } ?>" alt="User Picture" />
                              </a>
                              <a href="#"  class="post__user"><?php echo $people['added_by']; ?></a>
                            </div>

                            <button class="post__more-options">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="6.5" cy="11.5" r="1.5" fill="var(--text-dark)" />
                                <circle cx="12" cy="11.5" r="1.5" fill="var(--text-dark)" />
                                <circle cx="17.5" cy="11.5" r="1.5" fill="var(--text-dark)" />
                              </svg>
                            </button>
                          </div>

                          <div class="post__content">
                            <div class="post__medias">
                              <img width="100%" class="post__media" src="<?php if (isset($people['post_image'])) {
                                                                            echo $people['post_image'];
                                                                          } ?>" alt="Post Content" />
                            </div>
                          </div>

                          <div class="post__footer">
                            <div class="post__buttons">
                              <button class="post__button">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M11.4995 21.2609C11.1062 21.2609 10.7307 21.1362 10.4133 20.9001C8.2588 19.3012 3.10938 15.3239 1.81755 12.9143C0.127895 9.76543 1.14258 5.72131 4.07489 3.89968C5.02253 3.31177 6.09533 3 7.18601 3C8.81755 3 10.3508 3.66808 11.4995 4.85726C12.6483 3.66808 14.1815 3 15.8131 3C16.9038 3 17.9766 3.31177 18.9242 3.89968C21.8565 5.72131 22.8712 9.76543 21.186 12.9143C19.8942 15.3239 14.7448 19.3012 12.5902 20.9001C12.2684 21.1362 11.8929 21.2609 11.4995 21.2609ZM7.18601 4.33616C6.34565 4.33616 5.5187 4.57667 4.78562 5.03096C2.43888 6.49183 1.63428 9.74316 2.99763 12.2819C4.19558 14.5177 9.58639 18.6242 11.209 19.8267C11.3789 19.9514 11.6158 19.9514 11.7856 19.8267C13.4082 18.6197 18.799 14.5133 19.997 12.2819C21.3603 9.74316 20.5557 6.48738 18.209 5.03096C17.4804 4.57667 16.6534 4.33616 15.8131 4.33616C14.3425 4.33616 12.9657 5.04878 12.0359 6.28696L11.4995 7.00848L10.9631 6.28696C10.0334 5.04878 8.6611 4.33616 7.18601 4.33616Z" fill="var(--text-dark)" stroke="var(--text-dark)" stroke-width="0.6" />
                                </svg>
                              </button>
                              <button class="post__button">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M21.2959 20.8165L20.2351 16.8602C20.1743 16.6385 20.2047 16.3994 20.309 16.1907C21.2351 14.3342 21.5438 12.117 20.9742 9.80402C20.2003 6.67374 17.757 4.16081 14.6354 3.33042C13.7833 3.10869 12.9442 3 12.1312 3C6.29665 3 1.74035 8.47365 3.31418 14.5647C4.04458 17.3819 7.05314 20.2992 9.88344 20.9861C10.6486 21.173 11.4008 21.26 12.1312 21.26C13.7006 21.26 15.1701 20.8557 16.4614 20.1601C16.6049 20.0818 16.7657 20.0383 16.9222 20.0383C17.0005 20.0383 17.0787 20.047 17.157 20.0688L21.009 21.0991C21.0307 21.1035 21.0525 21.1078 21.0699 21.1078C21.2177 21.1078 21.3351 20.9687 21.2959 20.8165ZM19.0178 17.1863L19.6178 19.4253L17.4831 18.8558C17.3005 18.8079 17.1135 18.7819 16.9222 18.7819C16.557 18.7819 16.1875 18.8775 15.8571 19.0558C14.6963 19.6818 13.4441 19.9992 12.1312 19.9992C11.4834 19.9992 10.8269 19.9166 10.1791 19.7601C7.78354 19.1775 5.14453 16.6037 4.53586 14.2473C3.90111 11.7865 4.40109 9.26057 5.90536 7.31719C7.40964 5.3738 9.6791 4.26081 12.1312 4.26081C12.8529 4.26081 13.5876 4.35646 14.3137 4.5521C16.9961 5.26511 19.0786 7.39544 19.7525 10.1084C20.2264 12.0213 20.0308 13.9299 19.183 15.6298C18.9395 16.1168 18.8787 16.6689 19.0178 17.1863Z" fill="var(--text-dark)" stroke="var(--text-dark)" stroke-width="0.7" />
                                </svg>
                              </button>
                              <button class="post__button">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M22.8555 3.44542C22.6978 3.16703 22.3962 3 22.0714 3L2.91369 3.01392C2.52859 3.01392 2.19453 3.25055 2.05997 3.60781C1.96254 3.86764 1.98574 4.14603 2.11565 4.37338C2.16669 4.45689 2.23165 4.53577 2.31052 4.60537L9.69243 10.9712L11.4927 20.5338C11.5623 20.9096 11.8499 21.188 12.2304 21.2483C12.6062 21.3086 12.9774 21.1323 13.1723 20.8029L22.8509 4.35018C23.0179 4.06715 23.0179 3.72381 22.8555 3.44542ZM4.21748 4.39194H19.8164L10.4255 9.75089L4.21748 4.39194ZM12.6248 18.9841L11.1122 10.948L20.5171 5.58436L12.6248 18.9841Z" fill="var(--text-dark)" stroke="var(--text-dark)" stroke-width="0.3" />
                                </svg>
                              </button>

                              <div class="post__indicators"></div>

                              <button class="post__button post__button--align-right">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M19.875 2H4.125C3.50625 2 3 2.44939 3 3.00481V22.4648C3 23.0202 3.36563 23.1616 3.82125 22.7728L11.5444 16.1986C11.7244 16.0471 12.0225 16.0471 12.2025 16.1936L20.1731 22.7879C20.6287 23.1666 21 23.0202 21 22.4648V3.00481C21 2.44939 20.4994 2 19.875 2ZM19.3125 20.0209L13.3444 15.0827C12.9281 14.7394 12.405 14.5677 11.8763 14.5677C11.3363 14.5677 10.8019 14.7444 10.3856 15.0979L4.6875 19.9502V3.51479H19.3125V20.0209Z" fill="var(--text-dark)" stroke="var(--text-dark)" stroke-width="0.7" />
                                </svg>
                              </button>
                            </div>

                            <div class="post__infos">
                              <div class="post__likes">
                                <a href="#" class="post__likes-avatar">
                                  <img src="<?php if (isset($user['image'])) {
                                              echo $user['image'];
                                            } ?>" alt="User Picture" />
                                </a>

                                <span>Liked by
                                  <a class="post__name--underline" href="#">user123</a> and
                                  <a href="#">73 others</a></span>
                              </div>

                              <div class="post__description">
                                <span>
                                  <a class="post__name--underline" href="#" ><?php echo $people['added_by'];
                                                                                            ?></a>
                                  <?php
                                  echo $people['text'];
                                  ?>
                                </span>
                              </div>

                              <span class="post__date-time"><?php echo $people['post_date'] ?></span>
                            </div>
                          </div>
                        </article>




                    <?php }
                    } ?>
                     </div>
                </div>
              </div>


              <div class="col-md-5">
                <div class="row">
                  <div class="row">
                    <div class="card mb-4" style="position: sticky; top: 20px;">
                      <h5 class="card-header">Story</h5>
                      <div class="card-body" style="max-height: calc(100vh - 140px);overflow:scroll">
                        <div class="stories">
                          <button class="stories__left-button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path fill="#fff" d="M256 504C119 504 8 393 8 256S119 8 256 8s248 111 248 248-111 248-248 248zM142.1 273l135.5 135.5c9.4 9.4 24.6 9.4 33.9 0l17-17c9.4-9.4 9.4-24.6 0-33.9L226.9 256l101.6-101.6c9.4-9.4 9.4-24.6 0-33.9l-17-17c-9.4-9.4-24.6-9.4-33.9 0L142.1 239c-9.4 9.4-9.4 24.6 0 34z"></path>
                            </svg>
                          </button>


                          <div class="stories__content">




                            <?php

                            $result = mysqli_query($con, "SELECT * FROM posts");
                            if (mysqli_num_rows($result) > 0) {
                              while ($people = mysqli_fetch_array($result)) {


                            ?>

                                <button class="story ">
                                  <div class="story__avatar">
                                    <div class="story__border">
                                      <svg width="64" height="64" xmlns="http://www.w3.org/2000/svg">
                                        <circle r="31" cy="32" cx="32" />
                                        <defs>
                                          <linearGradient y2="0" x2="1" y1="1" x1="0" id="--story-gradient">
                                            <stop offset="0" stop-color="#f09433" />
                                            <stop offset="0.25" stop-color="#e6683c" />
                                            <stop offset="0.5" stop-color="#dc2743" />
                                            <stop offset="0.75" stop-color="#cc2366" />
                                            <stop offset="1" stop-color="#bc1888" />
                                          </linearGradient>
                                        </defs>
                                      </svg>
                                    </div>
                                    <div class="story__picture">
                                      <img width="100%" src="<?php if (isset($people['post_image'])) {
                                                                echo $people['post_image'];
                                                              } ?>" alt="User Picture" />
                                    </div>
                                  </div>
                                  <span class="story__user"><?php if (isset($people['added_by'])) {
                                                              echo $people['added_by'];
                                                            } ?></span>
                                </button>


                            <?php }
                            } ?>
                             </div>
                          <button class="stories__right-button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path fill="#fff" d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z"></path>
                            </svg>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="card mb-4" style="position: sticky; top: 20px;">
                      <h5 class="card-header">People you may Know</h5>
                      <div class="card-body" style="max-height: calc(100vh - 140px);overflow:scroll">
                        <?php
                        $result = mysqli_query($con, "SELECT * FROM usertable");
                        if (mysqli_num_rows($result) > 0) {
                          while ($people = mysqli_fetch_array($result)) { ?>
                            <div class="row align-items-center mb-3">
                              <div class="col-md-3">
                                <div class="user-avatar">
                                  <img src="<?php if (isset($people['image'])) {
                                              echo $people['image'];
                                            } ?>" alt="Upload Image" class="d-block rounded" height="70" width="70" id="uploadedAvatar" />
                                </div>
                              </div>
                              <div class="col-md-9">
                                <div>

                                  <div class="row">

                                    <div class="col-md-5">
                                      <h6><?php echo $people['name']; ?></h6>
                                    </div>

                                    <div class="col-md-4">
                                      <p style="font-size: small;"><?php echo $people['Designation']; ?></p>
                                    </div>

                                    <div class="col-md-3">
                                      <button type="button" class="btn btn-primary">Follow</button>
                                    </div>
                                  </div>

                                </div>
                              </div>
                            </div>
                        <?php }
                        } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->


  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->

  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="../assets/vendor/js/menu.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="../assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="../assets/js/dashboards-analytics.js"></script>
  <style>
    .stories {
      width: 100%;
      background-color: var(--primary);
      padding: 16px 0;
      flex-shrink: 0;

      position: relative;
      overflow: hidden;
    }

    .stories::after {
      content: '';
      position: absolute;
      bottom: 0;

      width: 100%;
      height: 1px;
      background-color: var(--border);
    }

    .stories__content {
      display: flex;
      overflow-x: auto;
      overflow-y: hidden;
      gap: 16px;
      padding: 0 16px;
      position: relative;

      scroll-behavior: smooth;
      scrollbar-width: none;
    }

    .stories__content::-webkit-scrollbar {
      display: none;
    }

    .posts {
      display: flex;
      flex-direction: column;
      flex: 1;
      gap: 8px;
    }

    .stories__left-button,
    .post__left-button,
    .stories__right-button,
    .post__right-button {
      width: 24px;
      height: 24px;
      display: none;

      background-color: transparent;
      border: none;
      border-radius: 50%;
      cursor: pointer;
      filter: drop-shadow(0px 0px 5px rgba(0, 0, 0, 0.5));

      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      z-index: 1;
    }

    .stories__left-button {
      left: 10px;
    }

    .stories__right-button {
      right: 10px;
    }

    .post__left-button {
      left: 16px;
      opacity: 0.7;
    }

    .post__right-button {
      right: 16px;
      opacity: 0.7;
    }

    /* Components */
    /* Story */
    .story {
      background-color: transparent;
      border: none;
      cursor: pointer;

      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 6px;
    }

    .story__avatar {
      position: relative;
    }

    .story__border {
      width: 64px;
      height: 64px;

      fill: none;
      stroke: var(--story-border);
      stroke-width: 1.5;
    }

    .story--has-story .story__border {
      stroke: url(#--story-gradient);
      stroke-width: 2;
    }

    .story__picture {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);

      width: 56px;
      height: 56px;
      border-radius: 50%;
      overflow: hidden;
    }

    .story__picture::after {
      content: '';
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;

      border: 1px solid var(--img-border);
      border-radius: 50%;
    }

    .story__user {
      font-size: 12px;
      font-weight: 400;
      color: var(--text-light);
      text-transform: lowercase;

      max-width: 72px;
      text-overflow: ellipsis;
      overflow: hidden;
      white-space: nowrap;
    }

    .story--has-story .story__user {
      color: var(--text-dark);
    }

    /* Post */
    .post {
      width: 100%;
      display: flex;
      flex-direction: column;
      overflow: hidden;
    }

    .post__header {
      background-color: var(--primary);
      border-bottom: 1px solid var(--border);

      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 16px;
    }

    .post__profile {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .post__avatar {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      overflow: hidden;
      position: relative;
    }

    .post__avatar::after {
      content: '';
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;

      border: 1px solid var(--img-border);
      border-radius: 50%;
    }

    .post__user {
      font-size: 14px;
      font-weight: 500;
      color: var(--text-dark);
      text-decoration: none;
      text-transform: lowercase;
    }

    .post__user:hover {
      text-decoration: underline;
    }

    .post__more-options {
      background-color: transparent;
      border: none;
      cursor: pointer;
    }

    .post__content {
      display: flex;
      position: relative;
    }

    .post__medias {
      display: flex;
      overflow-y: hidden;
      overflow-x: auto;

      width: 100%;
      scroll-snap-type: x mandatory;
      scroll-behavior: smooth;
      scrollbar-width: none;
    }

    .post__medias::-webkit-scrollbar {
      display: none;
    }

    .post__media {
      width: 100%;
      flex: none;
      scroll-snap-align: start;
      scroll-snap-stop: always;
    }

    .post__footer {
      background-color: var(--primary);
      display: flex;
      flex-direction: column;
      gap: 4px;
      padding: 0 4px;
    }

    .post__buttons {
      display: flex;
      position: relative;
    }

    .post__button {
      background-color: transparent;
      border: none;
      cursor: pointer;

      padding: 8px;
    }

    .post__button--align-right {
      margin-left: auto;
    }

    .post__indicators {
      display: flex;
      align-items: center;
      gap: 4px;

      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -100%);
    }

    .post__indicator {
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background-color: var(--text-light);
    }

    .post__indicator--active {
      background-color: var(--link);
    }

    .post__infos {
      display: flex;
      flex-direction: column;
      padding: 0 8px;
      gap: 10px;
    }

    .post__likes,
    .post__description {
      display: flex;
    }

    .post__likes {
      align-items: center;
      gap: 6px;
    }

    .post__likes-avatar {
      width: 20px;
      height: 20px;
      border-radius: 50%;
      overflow: hidden;
      position: relative;
    }

    .post__likes-avatar::after {
      content: '';
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;

      border: 1px solid var(--img-border);
      border-radius: 50%;
    }

    .post__likes span,
    .post__description span {
      font-size: 14px;
      font-weight: 400;
      color: var(--text-dark);
    }

    .post__likes a,
    .post__description a {
      font-size: 14px;
      font-weight: 500;
      color: var(--text-dark);
      text-decoration: none;
    }

    .post__name--underline:hover {
      text-decoration: underline;
    }

    .post__date-time {
      font-size: 10px;
      font-weight: 400;
      color: var(--text-light);
      text-transform: uppercase;
    }
  </style>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>