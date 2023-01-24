<?php
include('quiz.php');
include('land.php');
 session_start()
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$quiz = new Quiz();
$_SESSION['quiz'] = $quiz;


if (isset($_SESSION['counter'])){
  $aantal = $_SESSION['counter'];
  $aantal++;
  $_SESSION['counter'] = $aantal;
}
 else{
    $_SESSION['counter'] = 0;

 }


 if($_SESSION['counter'] == 0){  
 $vraag1 = $quiz->getVraag($_SESSION['counter']);
 echo 'Vraag '.$_SESSION['counter'] + 1;
 echo " Wat is de hoofdstad van ".$vraag1->getLand(). "?";
 echo '<form action="landenarrays.php" method="post">
 Antwoord: <input type="text" name="antwoord1"><br>
 <input type="submit">
 </form>'; }
 if(isset($_POST['antwoord1'])){
   if ($antwoord1 == $land){
    echo " You win";}
  }
  
    // $antwoord = $_POST["antwoord"];
    // $num = $_POST["number"];
    // $randomnumber = rand(0,50);
    // $land = $vragen;

    //         echo "Wat is de hoofdstad van ", $vragen, "?";
    //         echo '<form action="landenarrays.php" method="post">
    //         Antwoord: <input type="text" name="antwoord"><br>
    //         <input type="submit">
    //         <input type="hidden" name="number" value="'.$randomnumber.'">
    //         </form>';
        

    //     echo $_POST["antwoord"];
    //     unset($_POST["antwoord"]);
    


    // if (isset($_POST['antwoord1'])){

    // $antwoord = $_POST["antwoord"];
    // $num = $_POST["number"];
    //     if ($antwoord == $hoofdstad){
    //         echo " You win";
    //     }
    //     else {
    //         echo " Wrong! <br>";
    //         $randomnumber = rand(0,50);
    //         $land = $vragen;
    //         echo "Wat is de hoofdstad van ", $vragen, "?";
    //         echo '<form action="landenarrays.php" method="post">
    //         Antwoord: <input type="text" name="antwoord"><br>
    //         <input type="submit">
    //         <input type="hidden" name="number" value="'.$randomnumber.'">
    //         </form>';
    //     }

    //     echo $_POST["antwoord"];
    //     unset($_POST["antwoord"]);
    // }
// echo '<pre>'; print_r($quiz);echo'</pre>';


 ?>




</body>
</html>
