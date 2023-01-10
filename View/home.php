<body>
    <h1>Bienvenue
        <?php
        if (isset($_SESSION['user'])) {
            echo $_SESSION["user"]['firstName'];
        }
        ?>
    </h1>
    <?php
    //if (isset($_SESSION['user']) && $_SESSION['user'] !== null){}
    ?>
</body>