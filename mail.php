<?php
ini_set('display_errors', '1');
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
?>
        <?php
          error_reporting(E_ALL);

              if($_POST){
              $Name=trim(addslashes($_REQUEST['Name']));
              $Email=trim(addslashes($_REQUEST['E-mail']));
              $Phone=trim(addslashes($_REQUEST['Phone']));
              $Message=trim(addslashes($_REQUEST['Message']));
             
          

 //Create instance of PHPMailer
 $mail = new PHPMailer();
 //Set mailer to use smtp
   $mail->isSMTP();
 //Define smtp host
   $mail->Host = "mail.wetindeycodeacademy.com.ng";
 //Enable smtp authentication
   $mail->SMTPAuth = true;
 //Set smtp encryption type (ssl/tls)
   $mail->SMTPSecure = "tls";
 //Port to connect smtp
   $mail->Port = "587";
 //Set gmail username
   $mail->Username = "inny@wetindeycodeacademy.com.ng";
 //Set gmail password
   $mail->Password = "Innymoney04";
 //Email subject
   $mail->Subject = "Contact";
 //Set sender email
   $mail->setFrom('inny@wetindeycodeacademy.com.ng', 'Contact Page');
 //Enable HTML
   $mail->isHTML(true);
 //Attachment
 
 
 //Email body
   $mail->Body = "<style>

   html,
   body {
       margin: 0 auto !important;
       padding: 0 !important;
       height: 100% !important;
       width: 100% !important;
       font-family: 'Roboto', sans-serif !important;
       font-size: 16px;
       margin-bottom: 10px;
       line-height: 24px;
       color:  #1F1FFF;
       font-weight: 400;
   }
   * {
       -ms-text-size-adjust: 100%;
       -webkit-text-size-adjust: 100%;
       margin: 0;
       padding: 0;
   }
   table,
   td {
       mso-table-lspace: 0pt !important;
       mso-table-rspace: 0pt !important;
   }
   table {
       border-spacing: 0 !important;
       border-collapse: collapse !important;
       table-layout: fixed !important;
       margin: 0 auto !important;
   }
   table table table {
       table-layout: auto;
   }
   a {
       text-decoration: none;
   }
   img {
       -ms-interpolation-mode:bicubic;
   }
 </style>
 
<center style='width: 100%; background-color: #f5f6fa;'>
  <table width='100%' border='0' cellpadding='0' cellspacing='0' bgcolor='#f5f6fa'>
      <tr>
          <td style='padding: 40px 0;'>
              <table style='width:100%;max-width:620px;margin:0 auto;'>
                  <tbody>
                      <tr>
                                        <td style='text-align: center; padding-bottom:25px'>
                                        <strong>BEAUTY IN BLACK</strong>
                                    </td>
                                    </tr>
                  </tbody>
              </table>
              <table style='width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;'>
                  <tbody align='center'>
                      
                      <tr>
                          <td style='padding: 0 30px 20px;'>

                          <p></p><br>

             <hr>

             <p style='margin-bottom: 10px; font-weight:bold; color:black;'>Dear Chidozie, Please be informed that you have received a new email. The details are provided below for your reference:</p><hr>

             <p style='margin-bottom: 10px; color:black;'>Name: <b style='color:black; text-decoration:none; font-weight:bold;color:black;'>$Name</b></p>
             <p style='margin-bottom: 10px; color:black;'>Phone Number: <b style='color:black; text-decoration:none; font-weight:bold;color:black;'>$Phone</b></p>
             <p style='margin-bottom: 10px; color:black;'>Email: <b style='color:black; text-decoration:none; font-weight:bold;color:black;'>$Email</b></p>
             <p style='margin-bottom: 10px; color:black;'>Message: <b style='color:black; text-decoration:none; font-weight:bold;color:black;'>$Message</b></p>
          


                              
                              <p style='margin-bottom: 10px; color:black;'><em>Thanks</em><br>
                              <b>Beauty in Black</b></p>


                          </td>
                      </tr>

                  </tbody>
              </table>
              <table style='width:100%;max-width:620px;margin:0 auto;'>
                  <tbody>
                      <tr>
                          <td style='text-align: center; padding:25px 20px 0;'>
                              <p style='font-size: 13px;color:black;'>Copyright © 2025 <strong>Beauty in Black</strong>. All rights reserved. <br> </p>

                            
                          </td>
                      </tr>
                  </tbody>
              </table>
          </td>
      </tr>
  </table>
</center>";
 //Add recipient
   $mail->addAddress("ofatuchidozie@gmail.com");
   if ( $mail->send() ) {
             
    echo "<script>alert('Email Sent')
        location.href='index.html';
      </script>";
  } } 
  ?> 
 
                       

              
   