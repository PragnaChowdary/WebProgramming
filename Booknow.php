?php
if (isset($_POST["submit"])) {
  $place = $_POST["Where To"];
  $Number of guests = $_POST["How Many"];
  $Date of arrival = $_POST["Arrivals"];
  $Date of Leaving = $_POST["Leaving"];

  $to = $email;
  $subject = $message;

  $message = "Name: {$place} Email: {$email} Phone: {$phone}  Message: " . $message;

  // Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // More headers
  $headers .= 'From: bravecoderofficial@gmail.com';

  $mail = mail($to, $subject, $message, $headers);

  if ($mail) {
    echo "<script>alert('Mail Send.');</script>";
  } else {
    echo "<script>alert('Mail Not Send.');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="02sree.css">
</head>

<body>
  <h3 class="heading">

    <span>B</span>
    <span>o</span>
    <span>o</span>
    <span>k</span>
    <span>N</span>
    <span>o</span>
    <span>w</span>
    
  </h3>

  <section class="Booknow" id="Booknow">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115348.31815136687!2d68.28450457850833!3d25.38354855142485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c70f6d444f3c3%3A0xc00bbc183d41e285!2sHyderabad%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2sin!4v1682788015085!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <div class="row">
      <div class="booknow-info">
        <div class="box">
          <h3><i class="fa-solid fa-house"></i> Where To </h3>
        </div>
        <div class="box">
          <h3><i class="fa-sharp fa-solid fa-phone-volume"></i> How Many </h3>
          <p> +91 7981433235</p>
        </div>
        <div class="box">
          <h3><i class="fa-regular fa-envelope"></i> Arrivals </h3>
          <p>pragnaachowdary@gmail.com</p>
        </div>
        <div class="box">
          <h3><i class="fa-solid fa-house"></i> Leaving </h3>
          <p>Vizianagaram,<br>
            2-60</p>
        </div>
      </div>

      <div style="padding-left: 20px;" class="contact-form-container">
        <form action="">
          <h3>Your Feedback</h3>
          <div class="inputBox">
            <input type="text" placeholder="place name">
            <input type="text" placeholder="Number of guests">
            <input type="text" placeholder="Date of Arrival">
            <input type="text" placeholder="Data of Leaving>
          </div>
          <textarea name="" id="" cols="30" rows="10" placeholder="message"></textarea>
          <input type="submit" value="submit">
        </form>
      </div>
    </div>

  </section>
  <script src="03sree.js"></script>
</body>

</html>