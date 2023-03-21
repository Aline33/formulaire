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
<form  action="thanks.php"  method="post">
    <div>
        <label  for="firstname">Prénom :</label>
        <input  type="text"  id="firstname"  name="firstname">
    </div>
    <div>
        <label  for="lastname">Nom :</label>
        <input  type="text"  id="lastname"  name="lastname">
    </div>
    <div>
        <label  for="telnumber">Numéro de téléphone :</label>
        <input  type="tel"  id="telnumber"  name="telnumber">
    </div>
    <div>
        <label  for="email">Courriel :</label>
        <input  type="email"  id="email"  name="email">
    </div>
    <div>
        <label  for="subject">Sujet :</label>
        <select id="subject" name="subject">
            <option value="votre commande">votre commande</option>
            <option value="votre facture">votre facture</option>
        </select>
    </div>
    <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="message"></textarea>
    </div>
    <div  class="button">
        <button  type="submit">Envoyer votre message</button>
    </div>
</form>

</body>
</html>