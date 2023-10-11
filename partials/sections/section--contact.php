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
                        <h2 class="eng-text">Let’s Talk</h2>
                        <h2 class="french-text">Discutons-en</h2>
                        <p class="eng-text">Send us your mail and a message and we will contact you.</p>
                        <p class="french-text">Send us your mail and a message and we will contact you.</p>
                    </div>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                        <div class="form__column">
                            <div class="form__field">
                                <label class="eng-text" for="">Your Name</label>
                                <label class="french-text" for="">Votre nom</label>
                                <input type="text" class="field-input" name="NAME" placeholder="Sirety" required />
                            </div>
                            <div class="form__field">
                                <label class="eng-text" for="">Your Email</label>
                                <label class="french-text" for="">Votre adresse e-mail</label>
                                <input name="EMAIL" class="field-email" type="email" placeholder="sirety@gmail.com" />
                            </div>
                            <div class="form__field">
                                <label class="eng-text" for="">Your Message</label>
                                <label class="french-text" for="">Votre message</label>
                                <textarea name="MESSAGE" class="field-message" placeholder="Write Here...."
                                    required></textarea>
                            </div>
                        </div>
                        <div class="form__button">
                            <input type="submit" class='button' value="Submit">
                            <!-- <button class='button'>Submit</button> -->
                        </div>
                    </form>
                </div>
                <div class="contact__map-and-details">
                    <div class="contact__map js-map">
                        <div id="map"></div>
                        <div class="contact__map--button eng-text">
                            <a href="https://maps.app.goo.gl/HBvyPm5d9hC6hB6t7" target="_blank" class="button">Get
                                Location</a>
                        </div>
                        <div class="contact__map--button french-text">
                            <a href="https://maps.app.goo.gl/HBvyPm5d9hC6hB6t7" target="_blank" class="button">Obtenir
                                Emplacement</a>
                        </div>

                    </div>
                    <div class="contact__details">
                        <div class="contact__address-holder">
                            <div style="visibility: hidden;" class="contact__address-icon">
                                <img src="assets/img/address-icon.svg" alt="">
                            </div>
                            <div class="contact__address">
                                <p>SIRETY SARL </p>
                            </div>
                        </div>
                        <div class="contact__address-holder">
                            <div class="contact__address-icon">
                                <img src="assets/img/address-icon.svg" alt="">
                            </div>
                            <div class="contact__address">
                                <p> Douala-Cameroun, BP 15395</p>
                            </div>
                        </div>
                        <div class="contact__number-holder">
                            <div class="contact__number-icon">
                                <img src="assets/img/number-icon.svg" alt="">
                            </div>
                            <div class="contact__number">
                                <a href="tel:+8801817672626">+237659258830</a>
                            </div>
                        </div>
                        <div class="contact__email-holder">
                            <div class="contact__email-icon">
                                <img src="assets/img/email-icon.svg" alt="">
                            </div>
                            <div class="contact__email">
                                <a href="mailto:Tummy110@gmail.com">contact@sirety.com</a>
                            </div>
                        </div>
                        <div class="contact__email-holder">
                            <div style="visibility: hidden;" class="contact__number-icon">
                                <p style="font-size: 18px; font-weight: bold;"> </p>
                            </div>
                            <div class="contact__email">
                                <a href="mailto:Tummy110@gmail.com">N⁰ RCCM: RC/DLN/2023/B/1940</a>
                            </div>
                        </div>
                        <div class="contact__email-holder">
                            <div style="visibility: hidden;" class="contact__number-icon">
                                <img src="assets/img/number-icon.svg" alt="">
                            </div>
                            <div class="contact__email">
                                <a href="mailto:Tummy110@gmail.com">NIU: 092316083910E</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>