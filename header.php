<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head()?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="main" <?php body_class(); ?>>
    <div id="site-header">
        <br><br>
        <h2><a id="site-title" href="<?php echo home_url() ?>"><img class="logo-image" src=" <?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="Community networks Aotearoa logo"/></a></h2>
        <!-- <h4 id="site-tagline"><?php bloginfo('description'); ?></h4> -->
        <?php $args = ['theme_location' => 'primary']; ?>
        <!-- <div id="nav"><?php wp_nav_menu($args) ?></div> -->
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="http://192.168.33.10/Formative%204.1/index.php/about-kaupapa/">About | Kaupapa</a>
                        <a href="http://192.168.33.10/Formative%204.1/index.php/covid-19-updates-info-resources/">COVID-19 – Updates, Info & Resources</a>
                        <a href="http://192.168.33.10/Formative%204.1/index.php/newsletters-panui/">Newsletters | Pānui</a>
                        <a href="http://192.168.33.10/Formative%204.1/index.php/our-members-o-tatou-whanau/">Our Members | Ō Tātou Whānau</a>
                        <a href="http://192.168.33.10/Formative%204.1/index.php/our-people-taura-here/">Our People | Taura Here</a>
                        <a href="http://192.168.33.10/Formative%204.1/index.php/resources-rauemi-ipurangi/">Resources | Rauemi Ipurangi</a>
                        <a href="http://192.168.33.10/Formative%204.1/index.php/whats-on/">What’s on</a>
                        <a href="http://192.168.33.10/Formative%204.1/index.php/shop/">Donations</a>
                    </div>
                    <div>
                        <span class="menuButton" style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
                    </div>
                    <hr>
    </div>