<?php 

    if(isset($_POST['submit'])) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        
        $sql = "INSERT INTO newsletter (name, email, created)
            VALUES('$name', '$email', NOW())";

        if(mysqli_query($conn, $sql)) {
            echo 'success';
        }   else {
            echo 'error';
        }

        mysqli_close($conn);


    }


?>

<div class="newsletter">

    <h1>Sign up for our newsletter</h1>

    <form action="index.php" method="post">
        <input type="text" name="name" placeholder="Please enter your name" required>
        <input type="email" name="email" placeholder="Please enter your email" required>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>