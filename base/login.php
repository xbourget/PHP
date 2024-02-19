<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $username = $_POST["username"];
    $password = $_POST["password"];

    $link = mysql_connect('localhost', 'toto', 'toto');
    mysql_select_db('apple',$link);

     // Préparer la requête SQL d'insertion
    $req = "INSERT INTO utilisateurs (nom, pass) VALUES ( '$username', '$password')";
    // on envoie la requête
    $res = mysql_query($req, $link );
    // on va scanner tous les tuples un par un
    while ($data = mysql_fetch_assoc($res)) {
        // on affiche les résultats
        print_r( $data );
        print( '<br>');
    }
    mysql_close($link);
 
?>
<br>
<br>
<br>
<br>

<body>
    <h2>Inscription</h2>
    <form action="inscription.php" method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" name="username" required>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" required>

        <label for="confirm_password">Confirmer le mot de passe :</label>
        <input type="password" name="confirm_password" required>

        <button type="submit">S'inscrire</button>
    </form>
</body>
</html>
