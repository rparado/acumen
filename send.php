<?php
if (isset($_POST['send']))
{
	$to = "keno@spiralwebsolutions.com";
	
    $subject = "Acumen Global Sourcing Solution";
    
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    $txt = '';
    $txt .= '
      <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Salomone Apparel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        </head>
        <body style="margin: 0; padding: 0;">
          <table border="0" cellpadding="0" cellspacing="0" width="100%"> 
            <tr>
              <td style="padding: 10px 0 30px 0;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
                  <tr>
                    <td align="center" bgcolor="#232323" style="padding: 40px 0 30px 0; color: #ffffff; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;">
                      Acumen Global Sourcing Solution
                    </td>
                  </tr>
                  <tr>
                    <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                      <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                          <td style="width:20%;color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                            <b>Name:</b>
                          </td>
                          <td style="padding:5px;color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                            '.$_POST['fieldname'].'
                          </td>
                        </tr>

                        <tr>
                          <td style="width:20%;color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                            <b>Email:</b>
                          </td>
                          <td style="padding:5px;color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                            '.$_POST['fieldemail'].'
                          </td>
                        </tr>

                        <tr>
                          <td style="width:20%;color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;text-align:top">
                            <b>Message:</b>
                          </td>
                          <td style="padding:5px;color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                            '.$_POST['fieldmessage'].'
                          </td>
                        </tr>


                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td bgcolor="#232323" style="padding: 30px 30px 30px 30px;">
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </body>
        </html>
    ';
    $headers .= "From: AGSS" . "\r\n";
    $success_email = mail($to,$subject,$txt,$headers);
	session_start();
    header("Location: contact.php?status=success");
	
	
	
}
?>