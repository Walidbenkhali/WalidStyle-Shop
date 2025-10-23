<?php $pageTitle='Contact'; include 'header.php';?>
<section class="page-header"><div class="container"><h1>Contact Us</h1></div></section>
<section class="contact"><div class="container">
<div class="contact-wrapper">
<form class="contact-form" onsubmit="handleContactSubmit(event)">
<div class="form-group"><input type="text" id="contactName" placeholder="Name" required></div>
<div class="form-group"><input type="email" id="contactEmail" placeholder="Email" required></div>
<div class="form-group"><input type="tel" id="contactPhone" placeholder="Phone" required></div>
<div class="form-group"><textarea id="contactMessage" rows="5" placeholder="Message" required></textarea></div>
<button type="submit" class="btn btn-primary">Send</button>
</form>
</div>
</div></section>
<?php include 'footer.php';?>