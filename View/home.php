<body>
    <h1>Bienvenue
        <?php
        if (isset($result)) {
            echo $user['firstName'];
        }
        ?>
    </h1>

    <p>
        <?php
        if (isset($result)) {
            echo $info;
        }
        ?>
    </p>
</body>