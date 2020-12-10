
  <form action="index.php" method="post">
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
        <input type="checkbox" class="" id="">
        <label for="authorize">J’autorise le site à conserver mes données personnelles</label>
      </div>
      <div>
        <button type="submit" name="send" value="send">Envoyer</button>
      </div>
    </div>
  </form>
  