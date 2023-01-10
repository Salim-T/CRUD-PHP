<h2>List of users</h2>

<table>
    <tbody>
        <tr>
            <th>Email</th>
            <th>Password</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Rôle</th>
        </tr>
        <?php foreach ($users as $row) { ?>
        <tr>
            <td> <?php echo $row['email']; ?></td>
            <td> <?php echo $row['password']; ?></td>
            <td> <?php echo $row['firstName']; ?></td>
            <td> <?php echo $row['lastName']; ?></td>
            <td> <?php echo $row['admin']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>