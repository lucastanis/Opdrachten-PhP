<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="leeftijd" placeholder="Wat is je leeftijd?"><br>
        Stempas ontvangen?<br>
        <input type="radio" name="stempas" value="true">Ja (True)
        <input type="radio" name="stempas" value="false" checked="true">Nee (False)<br>
        <input type="submit" value="Verzenden"><br>
    </form>
    <?php
        if(isset($_POST["leeftijd"])){
            $leeftijd = $_POST['leeftijd'];
            $stempas = $_POST['stempas'];
            $examen = 16;

            if($leeftijd >= $examen){
                echo"Je mag praktijdexamen voor je scooterbewijs doen.<br>";
            }
            else {
                echo"Je mag geen praktijdexamen voor je scooterbewijs doen.<br>";
            }

            if($stempas == 'true' && $leeftijd >= 18){
                echo"Ja mag stemmen en heb een stempas ontvangen.";
            }
            else {
                echo"Je mag niet stemmen, want je hebt geen stempas!";
            }
        }
    ?>
</body>
</html>
