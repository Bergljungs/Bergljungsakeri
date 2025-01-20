<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namn = $_POST['namn'];
    $email = $_POST['email'];
    $meddelande = $_POST['meddelande'];
    
    // Mottagare av meddelandet
    $to = "din-email@example.com";  // Ändra till din e-postadress
    $subject = "Nytt meddelande från kontaktformuläret";
    
    // Innehållet i e-postmeddelandet
    $message = "Namn: $namn\nE-post: $email\nMeddelande: $meddelande";
    
    // Skickar e-post
    $headers = "From: $email";
    
    if(mail($to, $subject, $message, $headers)) {
        echo "Tack för ditt meddelande! Vi återkommer till dig snart.";
    } else {
        echo "Det uppstod ett problem när vi försökte skicka ditt meddelande. Försök igen senare.";
    }
}
?>
