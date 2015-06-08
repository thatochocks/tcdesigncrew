<?php
// Include Wordpress 
define('WP_USE_THEMES', false);
require('../wordpress/wp-blog-header.php');

// get the q parameter from URL
$p=$_REQUEST["page"]; 
$content="There is currently no content to display";
$c=array(
"<div style='left:0%; padding-top:8%; width:100%; text-align:center; position:relative; font-family:raleway; font-size:40pt; color:#ebebeb;'>Products Page Still Under Construction<br/><img style='width:30%;' src='images/under.png'/></div>",

"<div style='left:33%; padding-top:15%; position:relative;'><img src='images/logo.png' width='500'  /></div>
  <img style='position:relative; right:0;' src='images/line.png' width='1365' height='50' /><br />
<div style='position:relative; left :53%; width:100%; padding:0 0 0 0; font-family:raleway; font-size:17pt; margin:-1.5% 0 0 0; color:#ebebeb;'>Setting The Design Standard</div>",

"<div style='left:0%; padding-top:8%; width:100%; text-align:center; position:relative; font-family:raleway; font-size:40pt; color:#ebebeb;'>Services Page Still Under Construction<br/><img style='width:30%;' src='images/under.png'/></div>",

"<div style='left:0%; padding-top:8%; width:100%; text-align:center; position:relative; font-family:raleway; font-size:40pt; color:#ebebeb;'>Blog Page Still Under Construction<br/><img style='width:30%;' src='images/under.png'/></div>",

"<div style='left:0%; width:35%; height:100%; text-align:center; position:absolute; background-color:#1a1a1a; font-family:raleway; font-size:40pt; color:#ebebeb;'>About<p style='padding-left:5%; padding-right:5%; text-align:justify; font-size:16pt;'>Tc Design Crew started in someone's very own office turned bedroom. The idea was inspired by the desire to create industry starndard high quality websites unlike many that where imerging at the time. The idea has manifested over time into one of the best quality based IT companies in Botswana and continues expanding.<br/><br/>Unfortunately this business is not yet fully established due to limited clients. Help us grow by utilising our services. Thanks for the visit.</p></div><div style='left:35%; width:64.7%; top:50%; height:47%; text-align:center; position:absolute; font-family:raleway; font-size:30pt; color:#1a1a1a;  background-color:#ebebeb; padding:1% 0 0 0; border-bottom:solid 5px #1a1a1a; border-right:solid 2px #1a1a1a;'>Contacts<p style='padding-left:35%; font-size:15pt; font-weight:bold; text-align:left;'>Phone: +267 75227868<br/>Email: tcdesigncrew@gmail.com<br/><br><img src='images/facebook.png' width='50'/>&nbsp;<img src='images/google.png' width='50' />&nbsp;<img src='images/twitter.png' width='50' />&nbsp;</p></div><div class='crew' style='left:35%; width:64.7%; height:50%; text-align:center; position:absolute; font-family:raleway; font-size:35pt; line-height:30pt; color:#1a1a1a; background-color:#ebebeb;border-top:solid 3px #1a1a1a ; border-right:solid 2px #1a1a1a; border-bottom:solid 8px #1a1a1a'>Crew<br/>
<ul>
<li><img src='images/crew1.png' width='95%' /></><strong style='font-size:10pt;'>Founder</strong></li>

<li><img src='images/crew2.png' width='95%' /></><strong style='font-size:10pt;'>Ceo</strong></li>

<li><img src='images/crew3.png' width='95%' /></><strong style='font-size:10pt;'>Designer and Developer</strong></li>

</div><footer>&copy;Copyright 2014 Tc Design Crew. All rights reserved.</footer>",

"<div style='left:0%; padding-top:8%; width:100%; text-align:center; position:relative; font-family:raleway; font-size:40pt; color:#ebebeb;'>Works Page Still Under Construction<br/><img style='width:30%;' src='images/under.png'/></div>");

// lookup all hints from array if $q is different from ""
if ($p !== "")
  {
   $content = $c[$p-1];
   if ($p == 1)
   {
	    $content ="";?>
		<div style='left:0%; padding-top:8%; width:100%; text-align:center; position:relative; font-family:raleway; font-size:40pt; color:#ebebeb;'><?php
		while ( have_posts() ) : the_post(); 
           
                     get_template_part( 'content', get_post_format() ); 
           
                   endwhile; ?></div><?php
		}
  }

// Output "no suggestion" if no hint were found
// or output the correct values
echo $content;
?> 