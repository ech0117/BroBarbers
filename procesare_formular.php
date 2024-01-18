php
<?php
if(isset($_POST['nume']) && isset($_POST['email']) && isset($_POST['mesaj'])){
  $nume = $_POST['nume'];
  $email = $_POST['email'];
  $mesaj = $_POST['mesaj'];
  
  // Aici puteți adăuga cod pentru a trimite mesajul primit prin email sau pentru a-l salva într-o bază de date
  
  echo "Mesajul a fost trimis cu succes!";
}
?>