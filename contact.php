<?php
 
/**Template Name: Contact Page Template */
 
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
        <a href="http://192.168.33.10/Formative%204.1/index.php/about-kaupapa/" class="CTAButton">Become a Member</a>
    </div>

  <div class="column">
        <h3 class="goal"><span class="line11">OUR GOAL IS A STRONG</span><br><span class="line22">COMMUNITY SECTOR</span></h3>
  </div>
</div>

<div class="content-container-members">

<section class="home-container">


 
<div class="">
 <h1>CONTACT US</h1>
 <p>All queries about Family Works services, jobs, volunteering opportunities and donations are dealt with by the Presbyterian Support organisation in each region.</p>
</div>
 
<form class="my-form" action="/action_page.php">
 <label for="fname">First name:</label><br>
 <input class="my-input" type="text" id="fname" name="fname" value=""><br>
 <label for="lname">Last name:</label><br>
 <input class="my-input" type="text" id="lname" name="lname" value=""><br>
 <label for="lname">Email:</label><br>
 <input class="my-input" type="text" id="lname" name="lname" value=""><br>
 <label for="lname">Message:</label><br>
 <textarea class="my-textarea" id="w3review" name="w3review" rows="4" cols="50">
 
 </textarea>
 <input class="my-button" type="submit" value="Submit">
 <input class="second-button" type="submit" value="Close">
</form> 
 
<div class="map-div">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1719.6899216208294!2d174.7750304777156!3d-41.28202219776691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d38ae2ad925a805%3A0x25fc25c69ac3f431!2s2%20Woodward%20Street%2C%20Wellington%20Central%2C%20Wellington%206011!5e1!3m2!1sen!2snz!4v1620972198964!5m2!1sen!2snz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
 
<div class="my-list"> 
 
 <div class="footer-info"> 
 <ul>
 <h1>Bussines Hours</h1>
 <li>Mon: 9:30 AM – 2:30 PM</li>
 <li>Tue: 9:30 AM – 2:30 PM</li>
 <li>Wed: 9:30 AM – 2:30 PM</li>
 <li>Thu: 9:30 AM – 2:30 PM</li>
 <li>Fri: 9:30 AM – 2:30 PM</li>
 <li>Sat: 9:30 AM – 1:30 AM</li>
 <li>Sun: Closed</li>
 </ul>
 </div>
 
<div class="footer-info">
 <h1>Address</h1>
 <p>Level 3<br>
 Prime Property House<br>
 Woodward St<br>
 Wellington <br>
 New Zealand <br>
 </p>
</div>
 
<div class="footer-info">
 <h1>Contact</h1>
 <p>04 472 3364</p>
</div>
 
</div>




 
</section>

</div>


<?php

get_footer();

?>