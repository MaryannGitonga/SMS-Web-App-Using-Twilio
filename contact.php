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
                                <label for="">Phone Number</label>
                                <input type="text" name="phone" required placeholder="Please input the SMS number">
                            </div>
                        </div>
                        <label for="">Message</label>
                        <textarea rows="5" name="body" placeholder="Your Message goes here"></textarea>
                        <input type="submit" value="SEND" name="send" class="btn-contact">
                    </form>
                </div>
                <div class="contact-right">
                <h3>Reach Us</h3>  
                <table>
                    <tr>
                        <td>Email</td>
                        <td>smswebapp@smsweb.com <br>info@smswebapp.com</td>
                        
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>+2547 29079432 <br>+2547 29079432</td>       
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>212, Ground Floor, 7th Cross <br> Mbagathi Road, Nairobi <br>Kenya</td>
                    </tr>
                </table> 
                </div>
            </div>
       </div>
</body>
</html>
<?php
?>
