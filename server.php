<?php

// connect to a database
$razpay_key = "rzp_test_d1UzT2HabyA2SJ";
$razpay_secret="A4YLbBNkavxH0kVzEPSlTflz";
$db = mysqli_connect('localhost', 'admin', 'admin', 'fashionshow1');

$firstname = "";   
$dateofbirth = "";
$address1 = "";
$address2 = "";
$whatsapp = "";
$mobilenumber  = "";
$email = "";
$vitalstatus = "";
$chest = "";
$biceps = "";
$waist = "";
$height = "";
$hairType = "";
$hairColor = "";
$eyeColor = "";
$prevExpr = "";
$fbHandle = "";
$instaHandle = "";
$splTalent = "";
$goals = "";
$Hobbies = "";
$courses = "";
$pagentdesc = "";
$benefitdesc = "";
$errors = array();

if (isset($_POST['register'])) {
  require 'PHPMailerAutoload.php';

  #require 'credentials.php';

  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $dateofbirth = mysqli_real_escape_string($db, $_POST['dateofbirth']);
  $address1 = mysqli_real_escape_string($db, $_POST['address1']);
  $address2 = mysqli_real_escape_string($db, $_POST['address2']);
  $whatsapp = mysqli_real_escape_string($db, $_POST['whatsappnumber']);
  $mobilenumber = mysqli_real_escape_string($db, $_POST['mobilenumber']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $vitalstatus =  mysqli_real_escape_string($db, $_POST['vitalstatus']);
  $height = mysqli_real_escape_string($db, $_POST['height']);
  $biceps = mysqli_real_escape_string($db, $_POST['biceps']);
  $chest = mysqli_real_escape_string($db, $_POST['chest']);
  $waist = mysqli_real_escape_string($db, $_POST['waist']);
  $hairType = mysqli_real_escape_string($db, $_POST['hairType']);
  $hairColor = mysqli_real_escape_string($db, $_POST['hairColor']);
  $eyeColor = mysqli_real_escape_string($db, $_POST['eyeColor']);
  $prevExpr = mysqli_real_escape_string($db, $_POST['prevExpr']);
  $fbHandle = mysqli_real_escape_string($db, $_POST['fbHandle']);
  $instaHandle = mysqli_real_escape_string($db, $_POST['instaHandle']);
  $splTalent = mysqli_real_escape_string($db, $_POST['splTalent']);
  $goals = mysqli_real_escape_string($db, $_POST['goals']);
  $Hobbies = mysqli_real_escape_string($db, $_POST['Hobbies']);
  $courses = mysqli_real_escape_string($db, $_POST['courses']);
  $pagentdesc = mysqli_real_escape_string($db, $_POST['pagentdesc']);
  $benefitdesc = mysqli_real_escape_string($db, $_POST['benefitdesc']);
  if (empty($firstname)) {
    array_push($errors, "Username is required");
  }
  if (empty($email)) {
    array_push($errors, 'Email is Required');
  }
  if (empty($mobilenumber)) {
    array_push($errors, 'Mobile Number is Required');
  }
  if (empty($whatsapp)) {
    array_push($errors, 'WhatsApp is Required');
  }
  if (empty($pagentdesc)) {
    array_push($errors, "Reason Required");
  }
  if (empty($dateofbirth)) {
    array_push($errors, 'Date Of Birth Required');
  }
 
  if (empty($address1)) {
    array_push($errors, 'Address Required');
  }
  if (empty($fbHandle)) {
    array_push($errors, 'FB handle Required');
  }
  if (empty($vitalstatus)) {
    array_push($errors, 'Vital Status Required');
  }
  if (empty($instaHandle)) {
    array_push($errors, 'Insta handle Required');
  }
  if (count($errors) == 0) {
    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->Host = "smtp.zoho.in";
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->Username = "contact@mccproductions.in";
    $mail->Password = "akshay@99";
    $mail->SetFrom("no-reply@mccproductions.in");
    $mail->AddAddress("contact@mccproductions.in");
    $mail->Subject = $firstname." Application For Event ";
    $mail->isHTML(true);
    $mail->Body = '<html>
            <head>
              <style>
               .container {
                    padding-right: 15px;
                    padding-left: 15px;
                    margin-right: auto;
                    margin-left: auto;
                }
              </style>
              </head>
            <body>
              <div class="container" style="background:#EEF1F5;">
                <h1 style="text-align:center">
                  MCC Productions
                </h1>
                <h4>
                  Applicant Details
                </h4>
                <p>
                   Full Name:<span>' . $firstname . '</span>
                </p>
                <p>
                   Date of Birth :<span>' . $dateofbirth . '</span>
                </p>
                
                 <p>
                   Address :<span>' . $address1 . '</span>
                </p>
                <p>
                Address2 :<span>' . $address2 . '</span>
             </p>
                 <p>
                   Audition whatsApp :<span>' . $whatsapp . '</span>
                </p>
                <p>
                Audition whatsApp :<span>' . $mobilenumber . '</span>
             </p>
                 <p>
                   Email :<span>' . $email . '</span>
                </p>
                 <p>
                   Vital Status :<span>' . $vitalstatus . '</span>
                </p>
                <p>
                  Physical Attributes
                </p>
                 <p>
                    Height:<span>' . $height . '</span>
                </p>
                 <p>
                   biceps :<span>.' . $biceps . '</span>
                </p>
                 <p>
                   Chest :<span>' . $chest . '</span>
                </p>
                 <p>
                   Waist :<span>' . $waist . '</span>
                </p>
                <p>
                  Hair Type:<span>.' . $hairType . '</span>
                </p>
                <p>
                Hair Color:<span>.' . $hairColor . '</span>
                </p>
                <p>
                Previous Experience:<span>.' . $prevExpr . '</span>
                </p>
                <p>
                Insta handle:<span>.' . $instaHandle . '</span>
                </p>
                <p>
                FB Handle:<span>.' . $fbHandle . '</span>
                </p>

                 <p>
                   Special talent :<span>.' . $splTalent . '</span>
                </p>
                <p>
                    Career Goals:<span>.' . $goals . '</span>
                </p>
                <p>
                    Hobbies:<span>.' . $Hobbies . '</span>
                </p>
                <p>
                    Courses:<span>.' . $courses . '</span>
                </p>
                <p>
                   How Would You Be Benefiting the Country and the Company :<span>.' . $benefitdesc . '</span>
                </p>
                 <p>
                   Why do You think You can Win this Pagent :<span>.' . $pagentdesc . '</span>
                </p>
              </div>
            </body>
          </html>';
    if (isset($_FILES['closeup']) && $_FILES['closeup']['error'] == UPLOAD_ERR_OK) {
      $mail->AddAttachment($_FILES['closeup']['tmp_name'], $_FILES['closeup']['name']);
    }

    if (isset($_FILES['midhsot']) && $_FILES['midhsot']['error'] == UPLOAD_ERR_OK) {
      $mail->AddAttachment($_FILES['midhsot']['tmp_name'], $_FILES['midhsot']['name']);
    }

    if (isset($_FILES['fulllength']) && $_FILES['fulllength']['error'] == UPLOAD_ERR_OK) {
      $mail->AddAttachment($_FILES['fulllength']['tmp_name'], $_FILES['fulllength']['name']);
    }
    if (isset($_FILES['closeup']) && $_FILES['closeup']['error'] == UPLOAD_ERR_OK) {
      $mail->AddAttachment($_FILES['closeup1']['tmp_name'], $_FILES['closeup1']['name']);
    }

    if (isset($_FILES['midhsot']) && $_FILES['midhsot']['error'] == UPLOAD_ERR_OK) {
      $mail->AddAttachment($_FILES['midhsot1']['tmp_name'], $_FILES['midhsot1']['name']);
    }

    if (isset($_FILES['fulllength']) && $_FILES['fulllength']['error'] == UPLOAD_ERR_OK) {
      $mail->AddAttachment($_FILES['fulllength1']['tmp_name'], $_FILES['fulllength1']['name']);
    }

    if (!$mail->Send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
    } else { ?>
      <div class="success">
        <p><?php echo '<h5 class="text-center alert alert-success">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button> </h5>'; ?></p>
      </div>

      <?php }
    $sql = "INSERT INTO registration VALUES
        ('$firstname','$dateofbirth','$address1','$address2', '$whatsapp','$mobilenumber','$vitalstatus','$chest','$waist','$biceps','$height','$hairType','$hairColor','$eyeColor','$prevExpr',
        '$instaHandle','$fbHandle','$splTalent','$goals','$Hobbies','$pagentdesc','$benefitdesc','$email')";
    mysqli_query($db, $sql);
  }
}

?>