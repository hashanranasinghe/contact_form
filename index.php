<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Contact Form</title>
</head>
<body>
    <main>
        <form class="contact-form" action="includes/mailer.php" method="post">
            <p>Contact Form</p>
            <input type="text" name="fullname" placeholder= "Enter your full name">
            <input type="email" name="email" placeholder= "Enter your email">
            <input type="text" name="subject" placeholder= "Enter your subject">
            <textarea name="message" cols="30" rows="10" palceholder="Enter your message"></textarea>
            <button type="submit" name="submit">send</button>

        </form>
        <div>
            <?php
            
            

            if(isset($_GET["mailsend"])){
                if($_GET["mailsend"] === "succeeded"){
                    echo "<p>Succesfully Send!!</p>";
                }else if($_GET["mailsend"] === "unsucceeded"){
                   echo "<p>Fail to send</p>";
                }
            }
    
            
            ?>
        </div>
    </main>
</body>
</html>











