<div id="connect" class="icons">
      <h2>Get in touch</h2>
      <div class="row">
        <a href="mailto:&#105;&#110;&#102;&#111;&#064;&#103;&#105;&#117;&#115;&#101;&#112;&#112;&#101;&#099;&#097;&#115;&#116;&#105;&#103;&#108;&#105;&#111;&#110;&#101;&#046;&#099;&#111;&#046;&#117;&#107;?Subject=Website Enquiry"><i class="icon-at-2"></i></a>
        <a href="https://twitter.com/giuseppe_uk" target="_blank"><i class="icon-twitter-bird"></i></a>
        <a href="http://www.linkedin.com/pub/giuseppe-castiglione/31/831/b93/" target="_blank"><i class="icon-linkedin-1"></i></a>
      </div>
</div>

<div id="contact-form">    
<?php  
//init variables  
$cf = array();  
$sr = false;  
  
if(isset($_SESSION['cf_returndata'])){  
    $cf = $_SESSION['cf_returndata'];  
    $sr = true;  
}  
?>  
<ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">  
    <li id="info">There were some problems with your form submission:</li>  
    <?php   
    if(isset($cf['errors']) && count($cf['errors']) > 0) :  
        foreach($cf['errors'] as $error) :  
    ?>  
    <li><?php echo $error ?></li>  
    <?php  
        endforeach;  
    endif;  
    ?>  
</ul>  
<p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Your message has successfully been delivered.</p>   
    <form method="post" action="process.php">  
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="Name" required="required"/> 
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="Email Address" required="required" />
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['subject'] : '' ?>" placeholder="Subject" required="required" /> 
        <label for="message">Message:</label>
        <textarea id="message" name="message"required="required" data-minlength="20" placeholder="Message"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
        <p id="req-field-desc">*All fields are required</p>    
        <span id="loading"></span>  
        <input type="submit" value="Send Message" id="submit-button" />  
        
    </form>  
    <?php unset($_SESSION['cf_returndata']); ?>  
</div>  