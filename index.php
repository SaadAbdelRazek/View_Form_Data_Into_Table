<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <link rel="stylesheet" href="style/style.css">
    <title>Form Data</title>
</head>
<body>
<div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="post">
                <h3>Send Us a Message</h3>
               <div class="row">
                    <div class="col-md-10" id="formDiv">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" required />
                        </div>
                        <div class="form-group">
                            <input type="email" name="txtEmail" class="form-control" placeholder="Your Email *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" required />
                        </div>
                        <!-- <div class="col-md-10"> -->
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;" required></textarea>
                        </div>
                        <!-- </div> -->
                        <center>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                        </center>
                    </div>
                </div>
     </form>
</div>  
</body>
</html>
<?php
if(isset($_POST['btnSubmit'])){
    $name=$_POST['txtName'];
    $phone=$_POST['txtPhone'];
    $email=$_POST['txtEmail'];
    $message=$_POST['txtMsg'];
    echo '
    <center>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">E-mail</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">'.$name.'</th>
      <td>'.$phone.'</td>
      <td>'.$email.'</td>
      <td>'.$message.'</td>
    </tr>
  </tbody>
</table>
</center>
    ';
}

?>
