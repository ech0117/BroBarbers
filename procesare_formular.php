<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nume = $_POST["name"];
  $email = $_POST["email"];
  $mesaj = $_POST["message"];

  $to = "sebastian.feneser@yahoo.com";
  $subject = "BroBarbers";
  $body = "Nume: " . $nume . "\nEmail: " . $email . "\nMesaj: " . $mesaj;

  if (mail($to, $subject, $body)) {
    echo "Mesajul a fost trimis cu succes.";
  } else {
    echo "Eroare la trimiterea mesajului.";
  }
}
?>
