<body>
    <h1>Bienvenue
        <?php
        if ($result) {
            echo $result['email'];
        }
        ?>
    </h1>
    <div class="user-widget">
        <?php if (isset($_SESSION['user']) && $_SESSION['user'] !== null) : ?>
        <a href="index.php?ctrl=user&action=logOut">Se déconnecter</a>
        <?php endif; ?>
    </div>
    <p>
        <?php
        echo $info
        ?>
    </p>
</body>