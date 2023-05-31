<?php
include('classes/capitale.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capitales</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Creer un formulaire -->
    <section>
        <form action="" method="POST">
            <select name="pays" id="">
                <option value="allemagne">Allemagne</option>
                <option value="belgique">Belgique</option>
                <option value="espace">Espagne</option>
                <option value="france">France</option>
                <option value="guinée">Guinée</option>
                <option value="hollande">Hollande</option>
                <option value="italie">Italie</option>
                <input type="submit" name="voir" id="" value="Voir">
            </select>
        </form>

    <?php
    if(isset($_POST['voir'])) {
        //Creer une variable pays 
        $pays = $_POST['pays'];

        switch($pays) {
            case 'allemagne':
                $capitale = 'berlin';
                break;
            case 'belgique':
                $capitale = 'bruxel';
            case 'espagne':
                $capitale = 'madrid';
            case 'france':
                $capitale = 'paris';
            case 'guinée':
                $capitale = 'conakry';
            case 'hollande':
                $capitale = 'amsterdam';
            case 'italie':
                $capitale = 'rome';
        }
        // Si l'objet voir existe on instentie une nouvelle capitale avec la fonction new 
        $capitale = new Capitale($pays);
    }

    ?>
    </section>
</body>
</html>