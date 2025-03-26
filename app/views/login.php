<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="caisses">Caisses :
            <select name="idCaisse" id="caisses">
                <?php foreach($caisses as $c) { ?>
                    <option value="<?= $c['idCaisse'] ?>"><?= $c['nom'] ?></option>
                <?php } ?>
            </select>
        </label>
        <button type="submit">Valider</button>
    </form>
</body>
</html>