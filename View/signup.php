<body>
    <header>
        <h1>Création/Modification d'un User</h1>
    </header>
    <hr />
    <section id="main-section">
        <form action="index.php?ctrl=user&action=doCreate" method="POST">
            <label>Mail :</label><br /> <input type="name" name="email" placeholder="Mail.." required /><br>
            <label>Mot de passe:</label><br /> <input type="password" name="password" placeholder="Mot de passe.."
                required /><br>
            <label>Nom:</label><br /> <input type="text" name="lastName" placeholder="Nom.." required /><br>
            <label>Prénom:</label><br /> <input type="text" name="firstName" placeholder="Prénom.." required /><br>
            <label>Adresse:</label><br /> <input type="text" name="address" placeholder="Adresse.." /><br>
            <label>Code Postal:</label><br /> <input type="text" name="postalCode" placeholder="Code Postal.." /><br>
            <label>Ville:</label><br /> <input type="text" name="city" placeholder="Ville.." /><br>
            <p> <input type="submit" class="submit-btn" value="Créer/Valider"> </p>
        </form>
    </section>
</body>

</html>