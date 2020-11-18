<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMS App Using Twilio API</title>
    <link rel="stylesheet" href="contact.css">
  </head>
  <body>
    <div class="container">
      <!--Navigation Menu-->
      <nav></nav>
      <h2 class="heading">Confirmation message</h2>
      <?php
        if(isset($_GET['sent'])){
            
            echo (
            '<div class="alert">
              <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
              <strong>Message has been sent successfully!</strong>
            </div>
            ');
        }
        else{
          echo (
            '<div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
            <strong>Message has not been sent! Please try again</strong>
          </div>');
        }
      ?>
    </div>
  </body>
</html>
