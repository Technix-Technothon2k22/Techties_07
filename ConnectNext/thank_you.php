<!DOCTYPE html>
<html>
<head>
<title>Thank you</title>
<?php if(isset($_GET['applicant_email'])): ?>
<?php endif; ?>
<?php
    $email=$_POST['applicant_email'];
    $subject = 'REGISTRATION CONFIRMED';
    $message = '<h1>You have been sucessfully registered for this event. </h1>
    <h2>The confirmation mail is sent to your registered email id.</h2> 
    <h2>Please confirm your presence 2 days prior to the event.</h2>
    <h2>On confirming your presence, a QR code will be sent on your registered email id.</h2>
    <h2>PLEASE NOTE:  the QR code is MANDATORY for entry to the event.</h2>
    ';

    mail($email, $subject, $message);
?>
</head>
<body>

<div class="bgimg">
      <div class="overlay">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark nav-colour">
            <div class="container">
                <a class="navbar-brand font-weight-bold" href="#" >ConnectNext</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></s></button>
                
                    <div class="collapse navbar-collapse text-center" id="navbarText">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active px-1">
                              <a class="nav-link" href="#">Events <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item px-1">
                              <a class="nav-link" href="#">Registrations</a>
                            </li>

                            <li class="nav-item px-1">
                              <a class="nav-link" href="#"><button class="btn btn-info btn-sm text-white border border-white">Log out</button></a>
                            </li>
                          </ul>
                    </div>
            </div>
        </nav>
            
       </div>
    </div>

<h1>You have been sucessfully registered for this event. </h1>
<h2>The confirmation mail is sent to your registered email id.</h2> 
<h2>Please confirm your presence 2 days prior to the event.</h2>
<h2>On confirming your presence, a QR code will be sent on your registered email id.</h2>
<h2>PLEASE NOTE:  the QR code is MANDATORY for entry to the event.</h2>

</body>
</html>