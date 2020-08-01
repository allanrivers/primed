<?php

    if(isset($_POST['submit'])) {

        
        $to = 'allanrivers99@gmail.com';
        $name = htmlspecialchars($_POST['contactName']);
        $email = htmlspecialchars($_POST['contactEmail']);
        $subject = 'Form submission';
        $message = 'Thank you ' . $name .'. Here is a copy of your email';
        $text = htmlspecialchars($_POST['contact']);
       
        $headers = 'From: ' . $name;
        $mail = mail($to, $email, $headers);
        if($mail) {
            echo 'Mail has been sent';
        } else {
        echo 'error';
        }
    }


?>

<section id="contactUs">
    <div class="translate">
        <h1>Contact Us</h1>
        <div id="underline"></div>
        <div class="contactForm">
            <form action="index.php" method="post">
                <input type="text" name="contactName"       placeholder="Please enter your name" required>
                <input type="email" name="contactEmail"         placeholder="Please enter your email" required>
                <textarea name="contact" cols="30" rows="10"  placeholder="Please enter your message" required></textarea>
                <input type="submit" value="Submit" name="submit">
            </form>
        </div>
    </div>
</section>