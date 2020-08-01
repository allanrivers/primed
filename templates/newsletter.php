<?php 

    $displayForm = true;

    if(isset($_POST['submit'])) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $displayForm = false;
        
        $sql = "INSERT INTO newsletter (name, email, created)
            VALUES('$name', '$email', NOW())";

        if(mysqli_query($conn, $sql)) {
            echo 
            '<div id="newNewsletter" style="text-align: center; margin-top: 10rem; height: 35vh; background-color: rgba(255, 255, 255, 0.3); position: relative;">
                <div style=" position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); ">
                    <h1 style="font-size: 2.5rem;">Hello ' . $name . '</h1>
                    <h2 style="font-size: 1.5rem;">Thank you for subscribing, the email you have provided is ' . $email . '</h2>
                </div>
            </div>';
        }   else {

        }

        mysqli_close($conn);


    }
?>


<?php if ($displayForm): ?>

<div id="newsletter" class="newsletter">
    
    <h1>Sign up for our newsletter</h1>
    <div id="underline"></div>

    <form id="newsletterForm" action="./#newNewsletter" method="post">
        <input type="text" name="name" placeholder="Enter your name" required>
        <input type="email" name="email" placeholder="Enter your email" required>
        <input id="submit" type="submit" name="submit" value="Submit">
    </form>
</div>

<?php endif; ?>