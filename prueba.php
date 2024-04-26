<?php
      $to_email = "eduardo.andres627@gmail.com";
      $subject = "Email Test mediante PHP";
      $body = "Hola, esto es una prueba de envío por mail desde XAMPP";
      $headers = "De: sender\'s email";

     if (mail($to_email, $subject, $body, $headers)) {
         echo "Email enviado correctamente a $to_email...";
     } else {
            echo "Email fallo al enviar...";
     }
?>