<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins');
body
{
    font-family:'Poppins', sans-serif;
}
.alert {
  padding: 20px;
  background-color:lightsteelblue
  ;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
</head>
<body>
<?php
if(isset($_GET['sent'])){
    
    echo ('<h2>Confirmation message</h2>

    <p>Click on the "x" symbol to close the alert message.</p>
    <div class="alert">
      <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span> 
      <strong>Message has been sent successfully!</strong>
    </div>
    ');
}
?>

</body>
</html>
