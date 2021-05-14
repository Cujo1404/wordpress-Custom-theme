<?php
 
/**Template Name: Home Page Template */
 
?>

<?php

get_header (); ?>

<div id="container">

<?php

// the wordpress loop

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); 
    
?>
<div id="pagetitle">
<h3 class="pageTitleH3"><a class="pageTitle" href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
</div>

<?php endwhile;

else :
	echo '<p>There are no posts!</p>';
endif; ?>

</div>

<div class="content-container">
    <div class="infoBox">
        <h2 class="shortTextHeading">Welcome</h2>
        <p class="shortText">We are an umbrella organisation for local community networks. Our membership includes not-for-profit and voluntary social service organisations all over the country. We’re committed to Te Tiriti o Waitangi and are guided by our membership.</p>
        <a href="http://192.168.33.10/Formative%204.1/index.php/about-kaupapa/" class="CTAButton">Read About Us</a>
    </div>

  <div class="column">
        <h3 class="goal"><span class="line11">OUR GOAL IS A STRONG</span><br><span class="line22">COMMUNITY SECTOR</span></h3>
  </div>
</div>

<div class="content-container">
    <div class="homePageButtonText">
    <h3>We support our Members by</h3>
            <p>

Regular briefings on key events and the community sector.
Personalised, organisational advice and support.
A platform for a collective voice on matters affecting the community sector.
Opportunities to connect with other community networks across Aotearoa.</p>
 </div>
    <div class="homePageButtonText">   
    <h3>Are you a Member and need help?</h3>
    <p>If you’re a member of CNA and are having a problem or issue, or just need some information, please get in touch, that’s what we’re here for!</p>

    </div>
    <div class="homePageButtonText">    
    <h3>Make A Donation</h3>
    <p>Donate online with your credit or debit card for a fast, simple and secure way to make a difference.</p>

    </div>
</div>

<div class="content-container">
    <div class="homePageButtons">
        <a href="http://192.168.33.10/Formative%204.1/index.php/our-members-o-tatou-whanau/" class="CTAButton2">Become a Member</a>       
    </div>
    <div class="homePageButtons">
        <a href="http://192.168.33.10/Formative%204.1/index.php/contact/" class="CTAButton2">Contact for assistance</a>       
    </div>
    <div class="homePageButtons">
        <a href="http://192.168.33.10/Formative%204.1/index.php/shop/" class="CTAButton2">Donate</a>       
    </div>
</div>

<div class="content-container">
    <div class="columnText">
        <h3>Community networks working together to support local, regional and national communities</h3>
    </div>
</div>
<div class="content-container">
    <div class="columnText">
        <a href="http://www.accessradio.org.nz/collaborative-voices.html target="_blank"><img class="front-page-logo" src=" <?php bloginfo('stylesheet_directory'); ?>/images/collaborative-voices-logo.png" alt=""></a>
        <a href="http://www.livingwage.org.nz/" target="_blank"><img class="front-page-logo" src=" <?php bloginfo('stylesheet_directory'); ?>/images/employers-web.png" alt=""></a>
        <a href="https://www.msd.govt.nz/" target="_blank"><img class="front-page-logo" src=" <?php bloginfo('stylesheet_directory'); ?>/images/1.png" alt=""></a>
        <a href="http://www.communitymatters.govt.nz/Funding-and-grants---Lottery-grants" target="_blank"><img class="front-page-logo" src=" <?php bloginfo('stylesheet_directory'); ?>/images/Lottery-Grants-Board-logo-Colour-JPG.jpg" alt=""></a>
        <a href="http://wellington.govt.nz/" target="_blank"><img class="front-page-logo" src=" <?php bloginfo('stylesheet_directory'); ?>/images/Wellington-City-Council.jpg" alt=""></a>
    </div>
</div>


<?php

get_footer();

?>