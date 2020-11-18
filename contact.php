<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS App Using Twilio API</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>

       <div class="container">
            <!--Navigation Menu-->
            <nav></nav>

        <!--Contact Us-->
        <h1 class="heading">SMS App Using Twilio API</h1>
            <div class="border"></div> 
            <div class="contact-box">
                <div class="contact-left">
                    <h3>Try Sending an SMS</h3>
                    <form action="send.php" method="POST">
                        <div class="input-row">
                            <div class="input-group">
                                <label for="">Name</label>
                                <input type="text" name="name" required placeholder="Please input your name">
                            </div>
                            <div class="input-group">
                                <label for="">Recipient's Number</label>
                                <input type="text" name="phone" required placeholder="Format: +254712345678">
                            </div>
                        </div>
                        <label for="">Message</label>
                        <textarea rows="5" name="body" placeholder="Your Message goes here"></textarea>
                        <input type="submit" value="SEND" name="send" class="btn-contact">
                    </form>
                </div>
                <div class="contact-right">
                    <img style="position: relative; top: 60px;" src="img\twilio.png" alt="Twilio Logo" width="600px" height="200px">
                </div>
            </div>
       </div>
</body>
</html>
<?php
?>
