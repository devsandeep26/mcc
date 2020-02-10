<!DOCTYPE html>
<html lang="en">

<head>
   <title>Register</title>
   <!-- Meta tag Keywords -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="utf-8">
   <link rel="shortcut icon" href="./images/MCC PRODUCTIONS NEW LOGO 2.png" type="image/x-icon">

   <!--// Meta tag Keywords -->
   <!-- css files -->
   <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
   <!-- Bootstrap-Core-CSS -->
   <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
   <!-- Style-CSS -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   <!-- Font-Awesome-Icons-CSS -->
   <!-- Font-Awesome-Icons-CSS -->
   <!-- web-fonts -->
   <link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
   <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
   <!-- //web-fonts -->
   <!-- //css files -->
   <link rel="stylesheet" href="css/style.css" type="text/css">
   <!-- <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet"> -->
         <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

</head>

<body class="grey-bg">
<nav class="navbar">
  <a class="navbar-brand no-shadow" href="index.html">
    <img src="images/MCC PRODUCTIONS NEW LOGO 2.png" class="reg-logo d-inline-block align-top" alt="">
  </a>
</nav>
   <!--// header -->
   <!-- contact form -->
   <section class="contact py-5">
      <div class="text-center icon"> <span><i class="fas fa-chess-queen"></i></span> </div>
      <h3 class="heading text-center mb-5" style="color:#fff;">Registrations</h3>
      <div class="container">
         <div class="row contact-grids">
            <div class="offset-md-2 col-md-8">
            
                <?php include('server.php'); ?>
           
               <?php include('errors.php');  ?>
               <form action="contact.php" method="POST" enctype="multipart/form-data">
                  <div class="form-row">
                     <div class="form-group col-md-12">
                        <label for="fullName">Full Name</label>
                        <input type="text" class="form-control" id="inputFirstName" placeholder="Enter Name" name="firstname" value="<?php echo $firstname; ?>">
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-6">
                        <label for="inputDateOfBirth">Date Of Birth</label>
                        <!-- <input type="date" class="form-control datetime" id="inputDateOfBirth"  name="dateofbirth" value="<?php echo $dateofbirth; ?>"> -->
                        <!-- <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy"> -->
                           <!-- <input type="date" class="form-control date"name="dateofbirth" id="dateogbirth" min="1995-01-01" max="2002-02-07"> -->
                           <input type = "text" class="form-control" name="dateofbirth" placeholder="Enter Date of Birth" id = "datepicker-1">

                        
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="inputAddress">Address 1</label>
                     <input type="text" class="form-control" id="inputAddress1" placeholder="Example:1234,Electonic City" name="address1" value="<?php echo $address1; ?>">
                  </div>
                  <div class="form-group">
                     <label for="inputAddress">Address 2</label>
                     <input type="text" class="form-control" id="inputAddress2" placeholder="Example:1234,Electonic City" name="address2" value="<?php echo $address2; ?>">
                  </div>
                  <div class="form-group">
                     <label for="inputState">WhatsApp Number</label>
                     <input type="number" class="form-control" id="inputwhatsApp" placeholder="Enter Number" name="whatsappnumber" value="<?php echo $whatsApp; ?>">
                  </div>
                  <div class="form-group">
                     <label for="inputMobile">Calling Number</label>
                     <input type="number" class="form-control" id="inputMobile" placeholder="Enter Calling Number" name="mobilenumber" value="<?php echo $mobilenumber; ?>">
                  </div>
                  <div class="form-group">
                     <label for="inputEmail">Email Address</label>
                     <input type="email" class="form-control" id="inputEmail" placeholder="Enter Email Address" name="email" value="<?php echo $email; ?>">
                  </div>
                  <div class="form-group">
                     <label for="inputVital">Vital Status</label>
                     <input type="text" class="form-control" id="inputVital" placeholder="Enter Vital Status" name="vitalstatus" value="<?php echo $vitalstatus; ?>">
                  </div>
                  <div class="form-row">
                  <div class="form-group col-sm">
                        <label for="inputChest">Chest</label>
                        <input type="number" class="form-control" id="inputChest" placeholder="Chest" name="chest" value="<?php echo $chest; ?>">
                     </div>
                     <div class="form-group col-sm">
                        <label for="inputBicep">Biceps</label>
                        <input type="number" class="form-control" id="inputBicep" placeholder="Biceps" name="biceps" value="<?php echo $biceps; ?>">
                     </div>
                     <div class="form-group col-sm">
                        <label for="inputWaist">Waist</label>
                        <input type="number" class="form-control" id="inputWaist" placeholder="Waist" name="waist" value="<?php echo $waist; ?>">
                     </div>
                     <div class="form-group col-sm">
                        <label for="inputHeight">Height</label>
                        <input type="number" class="form-control" id="inputHeight" placeholder="Height" name="height" value="<?php echo $height; ?>">
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group col-sm">
                        <label for="inputShoulder">Hair Type</label>
                        <input type="text" class="form-control" id="inputHairt" placeholder="Enter Hair Type" name="hairType" value="<?php echo $hairType; ?>">
                     </div>
                     <div class="form-group col-sm">
                        <label for="inputShoulder">Hair Color</label>
                        <input type="text" class="form-control" id="inputHairc" placeholder="Enter Hair Color" name="hairColor" value="<?php echo $hairColor; ?>">
                     </div>
                     <div class="form-group col-sm">
                        <label for="inputShoulder">Eye Color</label>
                        <input type="text" class="form-control" id="inputHairc" placeholder="Enter eye Color" name="eyeColor" value="<?php echo $eyeColor; ?>">
                     </div>
                  </div>
                    
                  <div class="form-group">
                     <label for="prevExpr">Previous Experience</label>
                     <input type="text" class="form-control" id="prevExpr" placeholder="Yes or No" name="prevExpr" value="<?php echo $prevExpr; ?>">
                  </div>
                  <div class="form-row">
                     <div class="form-group col-sm">
                        <label for="inputShoulder">Facebook Handle</label>
                        <input type="text" class="form-control" id="fbHandle" placeholder="Enter FB Handle" name="fbHandle" value="<?php echo $fbHandle; ?>">
                     </div>
                     <div class="form-group col-sm">
                        <label for="inputShoulder">Instagram Handle</label>
                        <input type="text" class="form-control" id="inputHairc" placeholder="Enter Insta Handle" name="instaHandle" value="<?php echo $instaHandle; ?>">
                     </div>
                    
                  </div>
                  <p style="color:#fff;">Upload Pictures</p>
                  <div class="form-row">
                     <div class="form-group col-lg-4 col-sm-12">
                        <label for="inputPhotoClose">CloseUp</label>
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" id="closeup" name="closeup">
                           <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                     </div>
                     <div class="form-group col-lg-4 col-sm-12">
                        <label for="inputPhotoMid">Mid Shot</label>
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" id="midshot" name="midshot">
                           <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                     </div>
                     <div class="form-group col-lg-4 col-sm-12">
                        <label for="inputPhotoFull">Full Shot</label>
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" id="fullshot" name="fullshot">
                           <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group col-lg-4 col-sm-12">
                        <label for="inputPhotoClose">CloseUp</label>
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" id="closeup" name="closeup1">
                           <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                     </div>
                     <div class="form-group col-lg-4 col-sm-12">
                        <label for="inputPhotomid">Mid Shot</label>
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" id="midshot" name="midshot1">
                           <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                     </div>
                     <div class="form-group col-lg-4 col-sm-12">
                        <label for="inputPhotoFull">Full Shot</label>
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" id="fullshot" name="fullshot1">
                           <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group col-sm">
                        <label for="inputShoulder">Special Talent</label>
                        <input type="text" class="form-control" id="fbHandle" placeholder="Special talent" name="splTalent" value="<?php echo $splTalent; ?>">
                     </div>
                     <div class="form-group col-sm">
                        <label for="inputShoulder">Career Goals</label>
                        <input type="text" class="form-control" id="inputHairc" placeholder="Career Goals" name="goals" value="<?php echo $goals; ?>">
                     </div>
                    
                  </div>
                  <div class="form-row">
                     <div class="form-group col-sm">
                        <label for="inputShoulder">Hobbies</label>
                        <input type="text" class="form-control" id="fbHandle" placeholder="Enter Hobbies" name="Hobbies" value="<?php echo $Hobbies; ?>">
                     </div>
                     <div class="form-group col-sm">
                        <label for="inputShoulder">Any Courses Done</label>
                        <input type="text" class="form-control" id="inputHairc" placeholder="Enter Courses Done" name="courses" value="<?php echo $courses; ?>">
                     </div>
                    
                  </div>
                 
                  <div class="form-group">
                     <label for="inputPagentInput">Why You Think, You Can Win The Pageant? not more than twelve
                        words</label>
                     <textarea class="form-control" id="inputPagentInput" rows="3" name="pagentdesc" placeholder="Type Here..." value="<?php echo $pagentdesc; ?>"></textarea>
                  </div>
                  <div class="form-group">
                     <label for="inputPagentInput">How would you be benefitting the country and the company?
                        words</label>
                     <textarea class="form-control" id="inputPagentInput" rows="3" name="benefitdesc" placeholder="Type Here..." value="<?php echo $benefitdesc; ?>"></textarea>
                  </div>
                  <div class="form-group text-white border pl-2">
                     <p>
                       <h5> Please Send the money to the below Bank Details</h5>
                        <table>
                           <tbody>
                              <tr>
                                 <td>
                                    Company Name 
                                 </td>
                                 <td>
                                    : Mcc Production
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    Bank Name
                                 </td>
                                 <td>
                                    : AAAAACCBBNNNHH Bank
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    Account Number&nbsp; 
                                 </td>
                                 <td>
                                    : XXXXXX-XXXXXXX
                                 </td>
                               
                              </tr>
                              <tr>
                              <td>
                                    IFSC Code
                                 </td>
                                 <td>
                                    : XXX-XXXXX
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    Note
                                 </td>
                                 <td>
                                 : Please check the bank number before sending.
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </p>
                  </div>
                  <div class="form-group">
                     <label for="inputPagentInput">Terms and Conditions</label>
                     <div class="terms">
                        <ol>
                           <li>The applicant need to follow all the rules imposed by organisers MCC productions talent management organisation from time to time
                           </li>
                           <li>The applicant should be in the age bar between 18 to 34 . Age proof should be attached.
                           </li>
                           The candidate should be natural born Male/ natural born female.</li>
                           <li>The candidate should not have been married or never been a parent or had a
                              child.
                           </li>
                           <li>The candidate should not have been married or never been a parent or had a child.</li>
                           <li>The candidate should have a valid Indian Passport</li>
                           <li>The candidate if shortlisted in the finals then he cannot associate himself with any modelling agency or enter into any commercial contract or Pageant National or International before the completion of the finals.
                           </li>
                           <li> MCC productions talent Management Organisation cannot be held responsible for any delay or non receipt of the applications for any reasons.
                           </li>
                           <li>The travel and stay expenses during the auditions to be strictly borne by the candidates
                           </li>
                           <li> The candidate needs to follow all the rules and regulations framed by the organisers and participate in all the preliminaries and finals in a disciplined manner as per schedule by the organisers.
                           </li>
                           <li> The candidate cannot hold the organisers responsible in case the sponsors don't deliver the prices as promised by them .

                           </li>
                           <li>The candidate will participate in all the preliminary rounds which includes
                              sports and fitness rounds, the candidate will be responsible for any physical
                              injury or loss that can arise during his participation in the pageant
                           </li>
                           <li>The candidate should not have any previous criminal or civil cases registered
                              against him.
                           </li>
                           <li>The organisers will hold the exclusive rights of the event schedules, may
                              change the dates if required.
                           </li>
                           <li> The organizers cannot be held responsible for non-occurrence or non-
                              completion of the event.
                           </li>
                           <li> The organizers decision will be binding and final in case of any dispute.</li>
                           <li>Pageant Winners and Runner-ups are not allowed to take part in any other Regional, National or International pageants with other organisations upto 10 months from the day of announcement of winners all runner-up. Not adhering to such rules will be an offence which will attract a penalty of five lakh Indian rupees in favour of MCC productions talent management organisation and the case will be filed under Maharashtra Jurisdiction.
                           </li>
                           <li>Pageant winners and Runner ups would need to edit there social media profiles
                              as per the organization demand along with use of hash tags and tags up-to
                              12months.
                           </li>
                           <li> All the decisions of auditions, preliminaries and Finals exclusive rights will
                              be under organization and shall not be questioned. The decision will be fair
                              enough and JUDGES DECISION WILL BE FINAL.
                           </li>
                           <li> For further information / clarifications email us : contact@mccproductions.in</li>
                        </ol>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                           I Consent to the Conditions
                        </label>
                     </div>
                  </div>
                  <button type="submit" name="register" class="btn btn-primary border text-white" id="checkTerms">Submit</button>
               </form>
            </div>
         </div>
      </div>
   </section>
   <!-- //contact form -->
   <!-- footer -->
   <section class="footer py-5">
      <div class="footer-top py-lg-3">
         <div class="container-fluid">
            <div class="row footer-grids">
               <div class="col-lg-6 col-md-6 footer-grid">
                  <div class="footer-logo" style="position:relative;bottom:85px;">
                     <a href="index.html"><img src="images/MCC PRODUCTIONS NEW LOGO 2.png" class="img-fluid" style="width:70px;"></a>
                     <p>Connect us on our official pages of instagram and facebook.</p>
                     <ul class="mt-4 social">
                        <li><a href="https://www.facebook.com/MCCProductionOfficial/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.instagram.com/mccproductionsofficial/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-7 mt-lg-0 mt-sm-5 mt-4 footer-grid links">
                  <h3 class="mb-4">contact us <i class="fas fa-map-marker"></i></h3>
                  <ul>
                     <li><strong>phone</strong> :+91 9820122237</li>
                     <li><strong>Mail</strong> : <a href="mailto:contactus@akshaysmark.in">contact@mccproductions.in</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- //footer -->
   <!-- js-scripts -->
   <!-- js -->

   <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
   <script src="./js/jquery-2.2.3.min.js"></script>
   <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

   <!-- <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9"
         crossorigin="anonymous"></script> -->
   <script src="js/bootstrap.js"></script>
   <!-- //js -->
   <!-- navigation  -->
   <script src="js/main.js"></script>
   <script>
         $(function() {
            $( "#datepicker-1" ).datepicker({
               changeMonth:true,
               changeYear:true,
               minDate: '-34Y',maxDate:'-18Y',
               yearRange: "-34:-18"
            });
            
         });
      </script>
   <!-- //navigation -->
   <!-- //js-scripts -->
</body>

</html>