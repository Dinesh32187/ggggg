<?php 
$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
$baseURL="http://localhost/newwww/jetsetgo";
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="jetsetgoholidayindia">
    <meta name="description" content=""> 
    <meta property="og:site_name" content="jetsetgoholidayindia">
    <meta property="og:locale" content="es_EN">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.jetsetgoholidayindia.com">
    <meta property="og:image:url" src="<?php echo $baseURL;?>/assets/img/logo-1.png">
    <link rel="shortcut icon" href="<?php echo $baseURL;?>/assets/img/favicon3.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500&amp;family=Poppins:wght@300;400;500;600;700&amp;display=swap">
    <link rel="stylesheet" href="<?php echo $baseURL;?>/assets/css/plugins.css" />
    <link rel="stylesheet" href="<?php echo $baseURL;?>/assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144098545-1"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-144098545-1');
    </script>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg " id="navbar">
        <div class="container">
            <!-- Logo -->
            <div class="logo-wrapper navbar-brand valign">
                <a href="<?php echo $baseURL;?>/index.php">
                    <div class="logo"><img src="<?php echo $baseURL;?>/assets/img/jetsetgo1.png" class="logo-img" alt="error"> </div>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="ti-line-double"></i></span> </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item "> <a href="<?php echo $baseURL;?>/index.php" class="nav-link "> Home </a>
                        
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $baseURL;?>/pages/about.php">About</a></li>

                    <li class="nav-item  dropdown">
                                        <a class="nav-link pt-2" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Tour Packages
                                        </a>
                                        <div class="dropdown-menu dropdown-menu2" aria-labelledby="dropdown">
                                            <div class="city-boxmenu">
                                                <h5>International City</h5>
                                                <ul class="international-list">
                                                    <li><a class="dropdown-item" href="<?php echo $baseURL;?>/pages/package2.php"> Thailand Tour Packages  </a></li>
                                                    <li><a class="dropdown-item" href="<?php echo $baseURL;?>/pages/package2.php">  Maldives Tour Packages </a></li>
                                                    <li><a class="dropdown-item" href="<?php echo $baseURL;?>/pages/package2.php"> Dubai Tour Packages  </a></li>
                                                    <li><a class="dropdown-item" href="<?php echo $baseURL;?>/pages/package2.php">  Singapore Tour Packages </a></li>
                                                    <li><a class="dropdown-item" href="<?php echo $baseURL;?>/pages/package2.php"> Sri-Lanka Tour Packages </a></li>
                                                    <li><a class="dropdown-item" href="<?php echo $baseURL;?>/pages/package2.php"> Mauritius Tour Packages </a></li>
                                                    <li><a class="dropdown-item" href="<?php echo $baseURL;?>/pages/package2.php">  Seychelles Tour Packages </a></li>
                                                    <li><a class="dropdown-item" href="<?php echo $baseURL;?>/pages/package2.php"> Bali Tour Packages  </a></li>
                                                    <li><a class="dropdown-item" href="<?php echo $baseURL;?>/pages/package2.php">  Greece Tour Packages </a></li>
                                                    <li><a class="dropdown-item" href="<?php echo $baseURL;?>/pages/package2.php"> Turkey Tour Packages </a></li>
                                                </ul>
                                            </div>
                                            <div class="city-boxmenu">
                                                <h5>Domestic City</h5>
                                                <ul class="domestic-list">
                                                   <li><a class="dropdown-item" href="<?php echo $baseURL;?>/pages/package1.php"> Ladakh Tour Packages  </a></li>
                                                <li><a class="dropdown-item" href="<?php echo $baseURL;?>/pages/package1.php">  Sikkim Tour Packages </a></li>
                                                <li><a class="dropdown-item" href="<?php echo $baseURL;?>/pages/package1.php"> Himachal Tour Packages  </a></li>
                                                <li><a class="dropdown-item" href="<?php echo $baseURL;?>/pages/package1.php">  Kashmir Tour Packages </a></li>
                                                <li><a class="dropdown-item" href="<?php echo $baseURL;?>/pages/package1.php"> Rajasthan Tour Packages </a></li>
                                                <li><a class="dropdown-item" href="<?php echo $baseURL;?>/pages/package1.php"> Goa Tour Packages </a></li>
                                                <li><a class="dropdown-item" href="<?php echo $baseURL;?>/pages/package1.php">  Andaman Tour Packages </a></li>
                                                <li><a class="dropdown-item" href="<?php echo $baseURL;?>/pages/package1.php"> Uttarakhand Tour Packages  </a></li>
                                                <li><a class="dropdown-item" href="<?php echo $baseURL;?>/pages/package1.php">  Kerala Tour Packages </a></li>
                                                <li><a class="dropdown-item" href="<?php echo $baseURL;?>/pages/package1.php"> Karnataka Tour Packages </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                    <!-- <li class="nav-item dropdown"> <span class="nav-link"> Packages <i class="ti-angle-down"></i></span>
                        <ul class="dropdown-menu last">
                            <li class="dropdown-item"><a href="<?php echo $baseURL;?>/pages/package1.php">Domestic city</a></li>
                            <li class="dropdown-item"><a href="<?php echo $baseURL;?>/pages/package2.php">International city</a></li>
                        </ul>
                    </li> -->
                    <li class="nav-item"><a class="nav-link" href="<?php echo $baseURL;?>/pages/gallery.php">Gallery</a></li>
                    <li class="nav-item"> <a class="nav-link"href="<?php echo $baseURL;?>/pages/service.php"> Services</a>
                    
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $baseURL;?>/pages/contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    
  
    </nav>
    