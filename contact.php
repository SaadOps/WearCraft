<?php
$active = "Contact";
include('db.php');
include("functions.php");
include("header.php");

if (isset($_POST['submit'])) {
    $user_name = $_POST['name'];
    $user_email = $_POST['email'];
    $user_subject = $_POST['subject'];
    $user_msg = $_POST['message'];

    $receiver_mail = 'saad7teen@gmail.com';
    $subject = 'Contact Form Submission: ' . $user_subject;

    $message = "Name: $user_name\n";
    $message .= "Email: $user_email\n";
    $message .= "Subject: $user_subject\n";
    $message .= "Message:\n$user_msg";

    $headers = 'From: ' . $user_email . "\r\n" .
        'Reply-To: ' . $user_email . "\r\n";

    // Send the email
    if (mail($receiver_mail, $subject, $message, $headers)) {
        echo '<div class="alert alert-success">Your message has been sent successfully.</div>';
    } else {
        echo '<div class="alert alert-danger">Sorry, there was an error sending your message.</div>';
    }
}
?>

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="index.php"><i class="fa fa-home"></i> Home</a>
                    <span>Contact</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Contact Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-title">
                    <h4>Contact Us</h4>
                    <p>Your Passion is our Satisfaction</p>
                </div>
                <div class="contact-widget">
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-location-pin"></i>
                        </div>
                        <div class="ci-text">
                            <span>Address:</span>
                            <p>Sion, Mumbai</p>
                        </div>
                    </div>
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-mobile"></i>
                        </div>
                        <div class="ci-text">
                            <span>Phone:</span>
                            <p>+91 1234567890</p>
                        </div>
                    </div>
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-email"></i>
                        </div>
                        <div class="ci-text">
                            <span>Email:</span>
                            <p>WearCraft@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="contact-form">
                    <div class="leave-comment">
                        <h4>Leave A Message</h4>
                        <p>Our staff will call back later and answer your questions.</p>
                        <form action="contact.php" method="post" class="comment-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Your name" class="form-control" name="name" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Your email" class="form-control" name="email" required>
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" placeholder="Message Subject" class="form-control" name="subject" required>
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Your message" class="form-control" name="message" required></textarea>
                                    <button type="submit" class="site-btn" name="submit">Send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<?php
include('footer.php');
?>

</body>
</html>
