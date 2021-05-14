<?php
 
/**Template Name: About Page Template */
 
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
        <h2 class="shortTextHeading">Who are we?</h2>
        <p class="shortText">We are an umbrella organisation for local community networks. Our membership includes not-for-profit and voluntary social service organisations all over the country. We’re committed to Te Tiriti o Waitangi and are guided by our membership.</p>
        <a href="http://192.168.33.10/Formative%204.1/index.php/shop/" class="CTAButton">Donate Now</a>
    </div>
    <div class="collumn">
        <a href="http://192.168.33.10/Formative%204.1/index.php/our-members-o-tatou-whanau/"><img class="map" src=" <?php bloginfo('stylesheet_directory'); ?>/images/map.png" alt=""></a>
        <h2 class="paragraphHeading">Our Members</h2>
        <p class="paragraphText">We support local community networks.
We are the umbrella organisation for local, regional and national community networks.
Our membership includes not-for-profit and voluntary social service organisations all over the country.
The community sector is an essential part of a healthy thriving society. Our goal is to empower and strengthen the community sector by supporting community networks across Aotearoa.
Read more about what we do here.</p>
<h2 class="paragraphHeading2">Our goal</h2>
        <p class="paragraphText2">Our goal is to empower and strengthen the community sector by supporting community networks across Aotearoa.</p>
    </div>
    <div class="collumn">
    <h2 class="paragraphHeading3">What we do</h2>
        <p class="paragraphText3">Community Networks Aotearoa:

Provides advice and support to members
Connects community networks nationally
Uses our collective voice to advocate for policy change and raise awareness of issues affecting the community sector</p>
<h2 class="paragraphHeading2">Why we’re here</h2>
        <p class="paragraphText2">The community sector is an essential part of a healthy thriving society. From housing and health to emergency support and everything in-between, the community sector plays a critical role in individual family, whānau and community wellbeing.

By supporting community networks across the country, we’re helping to strengthen the community sector. We support community networks by providing:

Regular briefings on key events and the community sector
Personalised organisational advice and support
A platform for a collective voice on matters affecting the community sector
Opportunities to connect with other community networks across Aotearoa</p>
    
    </div>
</div>


<?php

get_footer();

?>