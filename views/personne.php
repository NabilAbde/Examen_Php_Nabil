<?php include("controllers/person.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personnes</title>
</head>
<!-- Affichage des 3 personnes grace à l inclusion du controleur et des methodes attribue a Person-->

<body>
    <ul>
        <li>
            <h3> <?php echo $person1->getName(); ?> </h3>
        </li>
        <p> <?php echo $person1->getFirstName(); ?> </p>
        <p> <?php echo $person1->getAge(); ?> </p>

        <li>
            <h3> <?php echo $person2->getName(); ?> </h3>
        </li>
        <p> <?php echo $person2->getFirstName(); ?> </p>
        <p> <?php echo $person2->getAge(); ?> </p>

        <li>
            <h3> <?php echo $person3->getName(); ?> </h3>
        </li>
        <p> <?php echo $person3->getFirstName(); ?> </p>
        <p> <?php echo $person3->getAge(); ?> </p>
    </ul>

</body>

</html>