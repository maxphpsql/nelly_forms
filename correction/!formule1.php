<form method="post" action="submit.php" name="submit" id="messageForm" data-toggle="validator">
	<div>
		<div>
			<input type="text" id="surname" name="surname" placeholder="Nom" required>
		</div>
		<div>
			<input type="text" id="name" class="form-control" name="name" placeholder="Prénom" required>
		</div>
		<div>
			<input type="email" id="email" class="form-control email" name="email" placeholder="Email" required>
		</div>
	</div>
		<div>
			<input type="text" id="phone" name="phone" placeholder="Tél (Ex. 0123456789)" pattern="^0\d(?:\d{2}){4}$" title="format: 0123456789" required />
		</div>
	<div>
		<input type="text" id="subject" name="subject" placeholder="Sujet" required>
	</div>
	<div>
		<textarea id="message" id="message" name="message" placeholder="Message" required></textarea>
	</div>	
	<div>
		<button type="submit" name="send" value="send">Envoyer</button>
	</div>
</div>
</form>