<?php
$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(!isset($_POST['firstname']) || trim($_POST['firstname']) === '') {
        $errors[] = "Le prénom est obligatoire";
    }
    if(!isset($_POST['lastname']) || trim($_POST['lastname']) === '') {
        $errors[] = "Le nom est obligatoire";
    }
    if(!isset($_POST['telnumber']) || trim($_POST['telnumber']) === '') {
        $errors[] = "Le numéro de téléphone est obligatoire";
    }
    if(!isset($_POST['email']) || trim($_POST['email'] === '') || filter_var('email', FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'adresse mail est non valide";
    }
    if(!isset($_POST['subject']) || trim($_POST['subject']) === '') {
        $errors[] = "Le sujet du message est obligatoire";
    }
    if(!isset($_POST['message']) || trim($_POST['message']) === '') {
        $errors[] = "Le message est obligatoire";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>

<?php
if (count($errors) > 0) :
    foreach ($errors as $error) :?>
        <li><?= $error ?></li>
        </ul>
<?php
    endforeach;
endif;
?>

<form  action="thanks.php"  method="post">
    <div>
        <label  for="firstname">Prénom :</label>
        <input  type="text"  id="firstname"  name="firstname" required>
    </div>
    <div>
        <label  for="lastname">Nom :</label>
        <input  type="text"  id="lastname"  name="lastname"required>
    </div>
    <div>
        <label  for="telnumber">Numéro de téléphone :</label>
        <input  type="tel"  id="telnumber"  name="telnumber" required>
    </div>
    <div>
        <label  for="email">Courriel :</label>
        <input  type="email"  id="email"  name="email" required>
    </div>
    <div>
        <label  for="subject">Sujet :</label>
        <select id="subject" name="subject" required>
            <option value="votre commande">votre commande</option>
            <option value="votre facture">votre facture</option>
        </select>
    </div>
    <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="message" required></textarea>
    </div>
    <div  class="button">
        <button  type="submit">Envoyer votre message</button>
    </div>
</form>

</body>
</html>