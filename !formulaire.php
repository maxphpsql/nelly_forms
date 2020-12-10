<form method="post" action="envoi.php" name="submit" id="messageForm" data-toggle="validator">
<!--     <form method="post" action="http://38volts.fr/cible.php" > -->

    <div class="row">

        <!-- Nom -->
        <div class="col-12">
            <input type="text" id="nom" class="form-control" name="nom" placeholder="Nom" aria-label="Nom" aria-describedby="basic-addon1" required>
        </div>

        <!-- Prénom -->
        <div class="col-12">
            <input type="text" id="prenom" class="form-control" name="prenom" placeholder="Prénom" aria-label="Prénom" aria-describedby="basic-addon2" required>
        </div>

        <!-- Email -->
        <div class="col-sm-6 col-12">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">@</span>
                </div>
                <input type="email" id="email" class="form-control email" name="email" placeholder="Email" aria-label="Username" aria-describedby="basic-addon3" required>
            </div>
        </div>

        <!-- Téléphone -->
        <div class="col-sm-6 col-12">
            <input type="text" id="tel" class="form-control tel" name="tel" placeholder="Tél (Ex. 0123456789)" aria-label="tel" pattern="^0\d(?:\d{2}){4}$" title="format: 0123456789" required />
        </div>

        <!-- Sujet -->
        <div class="col-12">
            <input type="text" id="sujet" class="form-control" name="sujet" placeholder="Sujet" aria-label="Sujet" aria-describedby="basic-addon5" required>
            <div class="col-12">
                <select name="" id="">
                    <option value="info">Informations</option>
                    <option value="achat">Achat</option>
                    <option value="panne">Panne</option>
                    <option value="emploi">Recherche d'emploi/stage</option>
                </select>
            </div>
        </div>
        <div class="col-12">
            <label for="topic">CATEGORIE</label>
            <select name="" id="">
                <option value="">Imprimantes</option>
                <option value="">Cartouches</option>
                <option value="">Toner</option>
                <option value="">Autre</option>
            </select>
        </div>
        <!-- Message -->
        <div class="col-12">
            <textarea id="message" id="message" class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
        </div>

        <!-- Bouton d'Envoi -->
        <div class="col-12">
            <button type="submit" class="btn btn-primary envoyer" name="envoi" value="J'envoie">Envoyer</button>
        </div>

    </div> <!-- fin class row -->

</form> <!-- fin formulaire -->