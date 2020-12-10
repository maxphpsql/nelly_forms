<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    <h1>Contactez-nous</h1>
  </div>
  <div>
      <p>Service client au top à l'écoute du lundi au vendredi 
<span class="highlight">de 9h à 12h00 / 13H45 - 17H45 </span>
ou joignable par mail pour répondre à toutes vos questions, 
une erreur dans votre commande ? ou non reçue : 
Notre équipe vous recontactera dans la journée <span class="highlight">pour vous trouver une solution !<span></p>
  </div>
  <div>
    <div>
      <img src="arrow.png" alt="flèche">
      <p>SV Print<br>
      80 AV Roland Moreno<br>
      9410 Anzin</p>
    </div>
    <div>
    <img src="phone.png" alt="téléphone">
      <p>0652804655</p>
    </div>
    <div>
      <img src="at.png" alt="arobase">
      <p>sandy@svprint.fr</p>
    </div>
  </div>
  <form action="index.php" method="post">
    <div>
      <label for="name">NOM:</label>
      <input type="text" id="name" name="user_name">
    </div>
    <div>
      <label for="name">PRENOM</label>
      <input type="text" id="name" name="user_firstname">
    </div>
    <div>
      <label for="mail">ADRESSE EMAIL</label>
      <input type="email" id="mail" name="user_mail">
    </div>
    <div>
      <label for="telephone">TELEPHONE</label>
      <input type="telephone" id="tel" name="user_phone">
    </div>
    <div>
      <p>
        <label for="topic">SUJET</label>
        <select name="" id="">
          <option value="info">Informations</option>
          <option value="achat">Achat</option>
          <option value="panne">Panne</option>
          <option value="emploi">Recherche d'emploi/stage</option>
        </select>
      </p>
    </div>
    <div>
      <p>
        <label for="topic">CATEGORIE</label>
        <select name="" id="">
          <option value="">Imprimantes</option>
          <option value="">Cartouches</option>
          <option value="">Toner</option>
          <option value="">Autre</option>
        </select>
      </p>
    </div>
    <div>
      <label for="message">MESSAGE</label>
      <textarea id="message" name="user_message"></textarea>
    </div>
    <div>
      <input type="checkbox" class="" id="">
      <label for="authorize">J’autorise le site à conserver mes données personnelles</label>
    </div>
    <div>
      <button class="" type="submit">Envoyer</button>
    </div>
  </form>
</body>
</html>
Bonjour, <?php echo htmlspecialchars($_POST['user_name']); ?>.
Tu as <?php echo (int)$_POST['user_email']; ?> .
//1 fichier ex.:formulaire.php ou formulaire.html

<HTML>
<HEAD>
<TITLE>E-Mail Formulaire</TITLE>
</HEAD>
<BODY>
<FORM method="POST" action="index.php">
<P>Votre noom:<br>
<INPUT type="text" name="nom" size=30>
</p>
<P>Votre adresse E-Mail:<br>
<INPUT type="text" name="email" size=30>
</p>
<P>Message:<br>
<textarea name="message" cols=30 rows=5></textarea>
</p><INPUT type="submit" value="Envoyer">
</FORM>
</BODY>
</HTML>

//La seconde page ex.:envoi.php

<?php 
//Pour définir chaque input du formulaire, ajouter le signe de dollar devant

$msg = "Nom:\t$nom\n";
$msg .= "E-Mail:\t$email\n";
$msg .= "Message:\t$message\n\n";
//Pourait continuer ainsi jusqu'à la fin du formulaire

$recipient = "kaendesign@gmail.com";
$subject = "Formulaire";

$mailheaders = "From: Mon test de formulaire<> \n";
$mailheaders .= "Reply-To: $email\n\n";

mail($recipient, $subject, $msg, $mailheaders);

echo "<HTML><HEAD>";
echo "<TITLE>Formulaire envoyer!</TITLE></HEAD><BODY>";
echo "<H1 align=center>Merci, $nom </H1>";
echo "<P align=center>";
echo "Votre formulaire à bien été envoyé !</P>";
echo "</BODY></HTML>";

?>