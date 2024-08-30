<?php
$message = ""; // Initialize an empty variable to hold the message

if(isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone']; // Added phone field
    $message = $_POST['message'];

    // Set up email headers
    $to = 'info@blizztechsolutions.com';
    $subject = 'Quotation Form';
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Compose the email body
    $body = "<html><body>";
    $body .= "<h2>QUERY FORM</h2>";
    $body .= "<p><strong>Name:</strong> $name</p>";
    $body .= "<p><strong>Email:</strong> $email</p>";
    $body .= "<p><strong>Phone:</strong> $phone</p>"; // Added phone field
    $body .= "<p><strong>Message:</strong> $message</p>";
    $body .= "</body></html>";

    // Send email
    if(mail($to, $subject, $body, $headers)) {
        $message = "Thank you for contacting us"; // Update the message variable
    } else {
        $message = "Failed to send email. Please try again later.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once("includes/head.php"); ?>
<body>
<?php include_once("includes/header.php") ?>
<div id="contact-sec-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-heading">
                    <h1>Contact</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contact-us-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-image-wrap">
                    <img src="assets/images/contact-us-image.webp" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                
                <h5>
                <i class="bi bi-patch-check-fill"></i>  Contact Us    
                </h5>

                <h1>Get in <span>touch</span></h1>
                    <p>We are here for you! How can we help?</p>
                    <div class="formarea">
                        <!-- Contact form -->
                        <form method="post" action="">
    <div class="mb-3">
        <input type="text" class="form-control" name="name" placeholder="Name" required>
    </div>
    <div class="mb-3">
        <input type="email" class="form-control" name="email" placeholder="Email" required>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="phone" placeholder="Phone" required> <!-- Added phone field -->
    </div>
    <div class="mb-3">
        <textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
    </div>
    <input class="btn btn-primary" type="submit" name="submit" value="Submit">
</form>
                       <div class="thankyoumessage"> <?php echo $message; ?></div>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php include_once("includes/footer.php") ?>
</body>
</html>
