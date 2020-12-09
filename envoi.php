<?php
//error_reporting(E_ALL);
//error_reporting(E_ALL);

//var_dump($_POST);
/**
 * On vérifie que les données postées avec le formulaire sont correctes
 * */
function antispam($nom_champ, $type_email=false) {
	$value = input_filter(
		INPUT_POST,
		$emailTo, 
		($type_email) ? FILTER_SANITIZE_EMAIL : FILTER_SANITIZE_STRING
	);
	if($value === false) {
		exit("Champ $emailTo non valide");
		// On se casse !
	}
	return $value;
}


//echo "<pre>"; // va m'aider à afficher et surtout à indenter si c'est une variable conséquente 
////var_dump($_POST);
//echo "</pre>";
//die;

$emailFrom = $_POST['email']; 
$emailTo = "kaendesign@gmail.com";
$prenom = $_POST['prenom'];
$nom = $_POST['nom']; 
$email = $_POST['email'];
$subject = $_POST['sujet'];
$message = $_POST['message']; 
$message = $_POST['telephone']; 

// validation
$validationOK=true;
if (!$validationOK) {
  echo "Error";
  exit;
}
 
// mise en form mail
$body = "";
$body .= "Prenom: ";
$body .= $prenom;
$body .= "\n";
$body .= "Nom: ";
$body .= $nom;
$body .= "\n";
$body .= "Email: ";
$body .= $email;
$body .= "\n";
$body .= "Sujet: ";
$body .= $sujet;
$body .= "\n";
$body .= "Message: ";
$body .= $message;
$body .= "\n";
$body .= $message;
$body .= "\n";
 
// envoi email 
$success = mail($emailTo, $subject, $body, "From: <$emailFrom>");

// message success-error
if ($success){
  echo "Votre message à bien été envoyé.";
}
else{
  echo "Une erreur s'est produite à l'envoi de votre message.";
}

 ?>