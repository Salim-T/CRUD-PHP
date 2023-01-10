<body>
    <h1>Bienvenue
        <?php
        if (isset($result)) {
            echo $user['firstName'];
        }
        ?>
    </h1>
    <div class="user-widget">
        <?php if (isset($_SESSION['user']) && $_SESSION['user'] !== null) { ?>
        <a href="index.php?ctrl=user&action=home">Home</a>
        <a href="index.php?ctrl=user&action=logOut">Se déconnecter</a>
        <?php
        } else { ?>

        <a href="index.php?ctrl=user&action=login">Login</a>
        <a href="index.php?ctrl=user&action=create">Create account</a>
        <?php }
        ?>
    </div>
    <p>
        <?php
        if (isset($result)) {
            echo $info;
        }
        ?>
    </p>
</body>