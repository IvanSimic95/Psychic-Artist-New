<?php require_once $_SERVER['DOCUMENT_ROOT'].'/templates/config.php'; ?>
<?php
$title = $v['home-title'] ?? $v['website-title'] ?? 'Psychic Artist';

?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="title" content="<?php echo $pageTitle; ?>" />
<meta name="description" content="I will draw your SOULMATE with 100% accuracy" />
<meta name="author" content="Melissa Psychic" />
<link href="https://melissa.test/assets/img/logo.png" rel="alternate" media="only screen and (max-width: 640px)" />
<meta property="twitter:title" content="Soulmate Drawing | Melissa Psychic" />
<meta property="twitter:description" content="I will draw your SOULMATE with 100% accuracy" />
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:image" content="https://melissa.test/assets/img/logo.png" />
<meta property="og:title" content="Soulmate Drawing | Melissa Psychic" />
<meta property="og:description" content="I will draw your SOULMATE with 100% accuracy" />
<meta property="og:image" content="https://melissa.test/assets/img/logo.png" />

 

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="/assets/js/config.js"></script>
    <script src="/vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="/vendors/overlayscrollbars/OverlayScrollbars.min.css">
    <link href="/assets/css/theme-rtl.min.css" rel="stylesheet">
    <link href="/assets/css/theme.min.css" rel="stylesheet">
    <link href="/assets/css/user-rtl.min.css" rel="stylesheet">
    <link href="/assets/css/user.min.css" rel="stylesheet" >
    <link href="/assets/css/custom.css" rel="stylesheet" >
  </head>

  <body class="dark-wrapper">
  <main class="main" id="top">
      
      <?php require_once $_SERVER['DOCUMENT_ROOT'].'/templates/navbar.php'; ?>     
      