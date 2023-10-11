<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "carles.tchuatcheu@yahoo.fr";
    $name = $_POST["NAME"];
    $email = $_POST["EMAIL"];
    $message = $_POST["MESSAGE"];

    // Check if either email or phone_no is provided
    if (!empty($email) || !empty($name)) {
        // Additional headers
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        // Format the message in a grid form using HTML table
        $formattedMessage = "
        <table border='1' cellspacing='0' cellpadding='5'>
            <tr>
                <td><strong>Name:</strong></td>
                <td>$name</td>
            </tr>
            <tr>
                <td><strong>Email:</strong></td>
                <td>$email</td>
            </tr>
            <tr>
                <td><strong>Message:</strong></td>
                <td>$message</td>
            </tr>
        </table>";

        // Send email with the formatted message
        $mailSent = mail($to, "Request For contact.", $formattedMessage, $headers);

        if ($mailSent) {
            echo '<script>alert("The form was submitted successfully. We will contact you as soon as possible.")</script>';
            // exit(); 
        } else {
            echo '<script>alert("Email sending failed. Enter Proper Details.")</script>';
        }
    }
}
?>

<section class="section section--contact">
    <div class="section__background">
        <div class="section__container">
            <div class="contact">
                <div class="contact__form">
                    <div class="contact__heading">
                        <h2>Let’s Talk</h2>
                        <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                        <div class="form__column">
                            <div class="form__field">
                                <label for="">Your Name</label>
                                <input type="text" class="field-input" name="NAME" placeholder="E.g Shamim Al Hasan" required />
                            </div>
                            <div class="form__field">
                                <label for="">Your Email</label>
                                <input name="EMAIL" class="field-email"  type="email" placeholder="E.g shamim582@gmail.com"/>
                            </div>
                            <div class="form__field">
                                <label for="">Your Message</label>
                                <textarea name="MESSAGE" class="field-message" placeholder="Write Here...." required></textarea>
                            </div>
                        </div>
                        <div class="form__button">
                            <input type="submit" class='button' value="Submit">
                            <!-- <button class='button'>Submit</button> -->
                        </div>
                    </form>
                    <!-- <div class="error-massage">
                        <p>The form was submitted successfully. We will contact you as soon as possible.</p>
                    </div> -->
                </div>
                <div class="contact__map-and-details">
                    <div class="contact__map js-map">
                        <div id="map"></div>
                        <div class="contact__map--button">
                            <a href="https://www.google.com/maps/place/Aziz+Pipes+Limited/@23.7237153,90.4209564,17z/data=!3m1!4b1!4m5!3m4!1s0x3755b85a31e8a957:0xa3e0ba4311c1e8c9!8m2!3d23.7237104!4d90.4231451" target="_blank" class="button">Get Location</a>
                        </div>

                    </div>
                    <!-- <div class="contact__details">
                        <div class="contact__address-holder">
                            <div class="contact__address-icon">
                                <img src="assets/img/address-icon.svg" alt="">
                            </div>
                            <div class="contact__address">
                                <p>Ajij Building, 93 Motijhil ba/a, Dhaka-1000, Bangladesh</p>
                            </div>
                        </div>
                        <div class="contact__number-holder">
                            <div class="contact__number-icon">
                                <img src="assets/img/number-icon.svg" alt="">
                            </div>
                            <div class="contact__number">
                                <a href="tel:+8801817672626">+8801817672626</a>
                            </div>
                        </div>
                        <div class="contact__email-holder">
                            <div class="contact__email-icon">
                                <img src="assets/img/email-icon.svg" alt="">
                            </div>
                            <div class="contact__email">
                                <a href="mailto:Tummy110@gmail.com">Tummy110@gmail.com</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>