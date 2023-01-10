<body>
    <h1>login</h1>
    <section>
        <br>
        <form action="index.php?ctrl=user&action=doLogin" method="POST">
            <label>Mail :</label>
            <input type="name" name="email" placeholder="Mail.." /><br>
            <label>Mot de passe :</label>
            <input type="password" name="password" placeholder="Mot de
            passe.." /><br>
            <p>
                <input type="submit" class="submit-btn" value="Valider">
            </p>
        </form>
    </section>
</body>