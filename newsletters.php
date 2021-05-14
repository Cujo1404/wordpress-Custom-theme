<?php
 
/**Template Name: Newsletters Page Template */
 
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

<div class="content-container-members">
    <div class="postContainer">
<?php

//  tell wordpress we only want to show the post types with the name 'members'
query_posts(array(
    'post_type' => 'newsletters'
));


// the wordpress loop

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); 
    
?>
<div class="posts">
<?php the_post_thumbnail('thumbnail', ['class' => 'staff-member-photo']); ?>
<h3><a href="<?php the_permalink() ?>">- <?php the_title() ?></a></h3>
<p><a target="_BLANK" href="<?php the_excerpt() ?>">Visit Website</a></p>
<!-- <?php the_excerpt() ?> -->
<?php the_time('F jS, Y'); ?>
<br>
<?php the_time(); ?>
</div>

<?php endwhile;

else :
	echo '<p>There are no posts!</p>';
endif; ?>
</div>
</div>


<?php

get_footer();

?>