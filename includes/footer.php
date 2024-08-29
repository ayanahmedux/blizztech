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
<div id="footer-parent">
            <!-- Footer -->
<footer class="text-center text-lg-start">
    <!-- Section: Social media -->
    <section class="sec-1-footer d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
       <div class="work-footer">
        <div class="footer-image">
            <img src="../assests/images/f2-il-1.webp" alt="">
        </div>
        <h3> Ready To Work With Us?</h3>
       </div>
       
      </div>

      <!-- Left -->
  
      <!-- Right -->
      <div>
        <div class="footer-button">
        <a class="quote-button" href="javascript:;">Get A Quote</a>
       </div>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
   
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  <div class="bottom-footer p-4 d-flex justify-content-center justify-content-lg-between">
 <div class="left-footer">
    <p><a href="">Privacy Policy</a></p>
    <p><a href="">Terms & Conditions</a></p>
 </div>
 <div class="right-footer">
    <p>
        ©
        <a href="">BlizzTech Solutions</a>
        .All rights Reserved 2024
    </p>
 </div>
</div>
    </div>
    <div id="quoteModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="col-lg-12">
    <div class="modal-lines text-center">
      <h2 class="modal-heading">Request an <br> <span>Appointment</span></h2>
      <p class="modal-subheading">Signup and get free consultation</p>
    </div>
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

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="./script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


    <script>

        $(document).ready(function () {
            $('.custom-slider-1').slick({
                dots: true,  // Show dots navigation
                infinite: true,  // Infinite loop
                speed: 600,  // Speed of the slide transition
                slidesToShow: 1,  // Number of slides to show at once
                adaptiveHeight: true,  // Adjust height based on current slide
                autoplay: false,  // Disable autoplay
                autoplaySpeed: 1000,  // Time between auto transitions if autoplay is enabled
                easing: 'ease-in-out',  // Easing function for smoother transitions
                centerMode: true,  // Center the active slide
                centerPadding: '0px',  // Padding around the center slide
                arrows: true,  // Enable navigation arrows
                prevArrow: '<button type="button" class="slick-prev">Previous</button>',
                nextArrow: '<button type="button" class="slick-next">Next</button>',
                responsive: [
                    {
                        breakpoint: 1024,  // For screens smaller than 1024px
                        settings: {
                            slidesToShow: 2,  // Show 2 slides
                            slidesToScroll: 1,  // Scroll 1 slide at a time
                            infinite: true,  // Infinite loop
                            dots: true,  // Show dots navigation
                            centerMode: true,  // Ensure centering at this breakpoint
                        }
                    },
                    {
                        breakpoint: 768,  // For screens smaller than 768px
                        settings: {
                            slidesToShow: 1,  // Show 1 slide
                            slidesToScroll: 1,  // Scroll 1 slide at a time
                            centerMode: true,  // Ensure centering at this breakpoint
                        }
                    },
                    {
                        breakpoint: 480,  // For screens smaller than 480px
                        settings: {
                            slidesToShow: 1,  // Show 1 slide
                            slidesToScroll: 1,  // Scroll 1 slide at a time
                            centerMode: true,  // Ensure centering at this breakpoint
                        }
                    }
                ]
            });
        });


    </script>
     <script>

var modal = document.getElementById("quoteModal");


var buttons = document.getElementsByClassName("quote-button");


var span = document.getElementsByClassName("close")[0];


function openModal() {
  modal.style.display = "block";
}


function closeModal() {
  modal.style.display = "none";
}


for (var i = 0; i < buttons.length; i++) {
  buttons[i].onclick = openModal;
}


span.onclick = closeModal;


window.onclick = function(event) {
  if (event.target == modal) {
    closeModal();
  }
}

  $(".phone-country").intlTelInput({
    geoIpLookup: function(s) {
      $.get("https://ipinfo.io", function() {}, "jsonp").always(function(i) {
        s(i && i.country ? i.country : ""), (e = i.ip);

        

      });
    },
    initialCountry: "auto",
    nationalMode: !0,
    separateDialCode: !0,
  });
</script>
    <script src="../css/style.css"></script>