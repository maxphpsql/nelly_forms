<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Contact</title>
</head>

<body>
    <h1>Contact</h1>
    <form action="" method="post">
    <div class="category">
      <label for="name">NOM:</label>
      <input type="text" id="surname" name="surname" placeholder="Nom" required>
    </div>
    <div class="category">
      <label for="name">PRENOM</label>
      <input type="text" id="name" class="form-control" name="name" placeholder="Prénom" required>
    </div>
    <div class="category">
      <label for="mail">ADRESSE EMAIL</label>
      <input type="email" id="email" class="form-control email" name="email" placeholder="Email" required>
    </div>
    <div class="category">
      <label for="mail">TELEPHONE</label>
      <input type="text" id="phone" name="phone" placeholder="Tél (Ex. 0123456789)" pattern="^0\d(?:\d{2}){4}$" title="format: 0123456789" required />
    </div>
    <div class="category">
      <label for="subject">SUJET</label>
		  <input type="text" id="subject" name="subject" placeholder="Sujet" required>
    </div>
    <div>
      <div class="category">
        <label for="message">MESSAGE</label>
        <textarea id="message" id="message" name="message" placeholder="Message" required></textarea>
      </div>	
      <div>
        <input type="checkbox" class="" id="" name="ok">
        <label for="authorize">J’autorise le site à conserver mes données personnelles</label>
      </div>
      <div>
        <button type="submit" name="send" value="send">Envoyer</button>
      </div>
    </div>
  </form>
    <?php
    if(isset($_POST['message'] )){
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['email'] . "\r\n";
            
        $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
        <p><b>Nom : </b>' . $_POST['name'] . '<br>
        <p><b>Prenom : </b>' . $_POST['surname'] . '<br>
        <b>Email : </b>' . $_POST['email'] . '<br>
        <b>Téléphone : </b>' . $_POST['phone'] . '<br>
        <b>Message : </b>' . $_POST['message'] . '</br>
        <b>Authorization : </b>' . $_POST['ok'] . '</br>
        <b>Sujet : </b>' . $_POST['subject'] . '</p>';

        $retour = mail('kaendesign@gmail.com', 'Envoi depuis page Contact', $message, $entete);
        if($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
        }
    }
    ?>
</body>
</html>