<?php

get_header (); ?>

<div id="content-container">

<?php

// the wordpress loop

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); 
    
?>
<div id="singlePost">
<?php the_post_thumbnail('medium', ['class' => 'staff-member-photo']); ?>
<h3><a href="<?php the_permalink() ?>">- <?php the_title() ?></a></h3>
<?php the_content() ?>
<?php the_time('F jS, Y'); ?>
<br>
<?php the_time(); ?><br><br>
<?php 
$job_position = get_post_meta( get_the_ID(), '_job_title', true ); 
if ( ! empty($job_position)){
    echo '<h3> Job position: ' . $job_position . '<h3>';
}  
?>
<!-- show the taxonomy for this custom post type -->
<?php
    $post_tags = get_the_terms(get_the_ID(), 'Locations');
    if ($post_tags) {
        foreach($post_tags as $tag) {
            echo $tag->name . " ";
        }
    }
?>

</div>

<?php endwhile;

else :
	echo '<p>There are no posts!</p>';
endif; ?>

</div>

<?php

get_footer();

?>