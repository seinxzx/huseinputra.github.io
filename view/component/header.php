<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title ?></title>
    <meta name="description" content="Husein Putra Widya Pratama, Experience in making projects both from the office and as a freelancer." />
    <meta name="keywords" content="Husein Putra Widya Pratama,Husein,Developer Bogor , portfolio husein" />
    <meta name="author" content="Husein Putra Widya Pratama" />
    <meta name="url" content="https://seinovation.my.id/">
    <meta name="image" content="https://seinovation.my.id//img/profile_photo.png">

    <meta name="og:type" content="website">
    <meta name="og:title" content="Husein Putra Widya Pratama">
    <meta name="og:description" content="Husein Putra Widya Pratama, Experience in making projects both from the office and as a freelancer.">
    <meta name="og:url" content="https://seinovation.my.id/">
    <meta name="og:image" content="https://seinovation.my.id//img/profile_photo.png">
    <meta name="og:author" content="Husein Putra Widya Pratama">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Load Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,100,300italic,300,100italic,400italic,500,500italic,700,700italic&amp;subset=latin,cyrillic' rel='stylesheet'>

    <!-- CSS -->
    <link rel="stylesheet" href="css/glitche-basic.css" />
    <link rel="stylesheet" href="css/glitche-layout.css" />
    <link rel="stylesheet" href="css/ionicons.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/animate.css" /> 
    <link rel="stylesheet" href="css/template-colors/orange.css" /> 
    <!--
		Template Dark
	-->
    <link rel="stylesheet" href="css/template-dark/dark.css" />
 
    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicons/favicon.ico">
 
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BJ0WGD6Q1H"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-BJ0WGD6Q1H');
    </script>
</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="centrize full-width">
            <div class="vertical-center">
                <div class="pre-inner">
                    <div class="load typing-load">
                        <p>loading...</p>
                    </div>
                    <span class="typed-load"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Container -->
    <div class="container">

        <!-- Header -->
        <header>
            <div class="head-top">
                <a href="#" class="menu-btn"><span></span></a>
                <div class="top-menu">
                    <ul>
                        <li <?= ($active == 'home' ? 'class="active"' : '')?> ><a href="/" class="lnk">Home</a></li>
                        <li <?= ($active == 'resume' ? 'class="active"' : '')?> ><a href="resume.php" class="lnk">Resume</a></li>
                        <li <?= ($active == 'portofolio' ? 'class="active"' : '')?> ><a href="portfolio.php" class="lnk">Portfolio</a></li>
                        <li <?= ($active == 'contact' ? 'class="active"' : '')?>><a href="contacts.php" class="btn">Contacts</a></li>
                    </ul>
                </div>
            </div>
        </header>