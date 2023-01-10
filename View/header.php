<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Manager Entité</title>
    <meta name="viewport" content="width=device-width">
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css"> <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Glegoo" rel="stylesheet">
</head>

<div class="user-widget">
    <br>
    <a href="index.php?ctrl=user&action=home">Home</a>
    <?php if (isset($_SESSION['user']) && $_SESSION['user'] !== null) { ?>
    <a href="index.php?ctrl=user&action=logOut">Se déconnecter</a>
    <?php
    } else { ?>
    <a href="index.php?ctrl=user&action=login">Login</a>
    <a href="index.php?ctrl=user&action=create">Create account</a>
    <?php }
    ?>
</div>