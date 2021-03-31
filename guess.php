<html>
<head>
<title>Guessing Game for 2244f8ab</title>
</head>
<body>
<h1> Welcome to my guessing game</h1>
<p>
<?php
$correctnumber=34;
if(isset($_GET['guess']))
{
  if (is_numeric($_GET['guess'])===FALSE)
 {
echo "Your guess is not a number";
}
else if ($_GET['guess']<$correctnumber)
 {
echo "Your guess is too low";
}
else if ($_GET['guess']>$correctnumber)
 {
echo "Your guess is too high";
}
else if ($_GET['guess']==$correctnumber)
 {
echo "Congratulations - You are right";
}
}
else
{
echo "Missing guess parameter <br> Your guess is too short";
}
?>
</p>
</body>
</html>




  