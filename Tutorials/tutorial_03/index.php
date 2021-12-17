<?php
function getAge($dob){
$bday=new DateTime($dob); // object declaration for date of birth
$today=new DateTime(date('m.d.y')); //obj declaration for current 

//calculation for age
if ($bday>$today) {
  return 'You are not born yet';
}
$diff= $today->diff($bday); 
return 'Your Age: ' .$diff->y. 'Years, '.$diff->m.'Months, '.$diff->d.' Days'; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculating Date</title>
</head>
<body>
  <h3>Calculating Age</h3>
  <div class="input-date">
    <form>
    <label>Date of Birth</label>
    <input type="date" name="dob">
    <input type="submit" value="Calulating Age">
    </form>
  </div>
  <!--/.input-date-->

  <?php
  if (isset($_GET['dob']) && $_GET['dob']!='') {?>
  <div class="get-date">
    <?php echo getAge($_GET['dob']);?>
  <?php } ?>
</body>
</html>