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
    <title>Thanks</title>
</head>
<body>
<?php
if (empty($errors)) : ?>
    <p>Merci <?= $_POST['firstname'] . " " . $_POST['lastname']; ?> de nous avoir contacté à propos de <?= $_POST['subject']; ?>.</p>
    <p>Un de nos conseillers vous contactera soit à l’adresse  <?= $_POST['email']?> ou par téléphone au <?= $_POST['telnumber'] ?> dans les plus brefs délais pour traiter votre demande : </p>
    <p> <?= $_POST['message'] ?></p>
    <ul>
    <?php else :
        foreach ($errors as $error) :?>
        <li><?= $error ?></li>
    </ul>

<?php
        endforeach;
    endif;
?>

</body>
</html>
