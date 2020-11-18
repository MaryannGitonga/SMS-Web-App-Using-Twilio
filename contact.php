<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>

       <div class="container">
            <!--Navigation Menu-->
            <nav>      
                <ul> 
                    <li><a href="#">Home</a></li>
                    <li><a href="#" class="active">Send a Message </a></li>       
                </ul>
            </nav>

        <!--Contact Us-->
        <h1 class="heading">Try Sending someone a message!</h1>
            <div class="border"></div> 
            <div class="contact-box">
                <div class="contact-left">
                    <p>We ensure your data is safe when sending texts. Try out this feature</p>
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
                        <div class="input-row">
                            <div class="input-group">
                                <label for="">Email</label>
                                <input type="email" name="email" required placeholder="Please input your email address">
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
