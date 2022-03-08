<!DOCTYPE php>
<html dir="rtl">
  <head>
    <meta charset="utf-8" />
    <link href="assets/style.css" rel="stylesheet" type="text/css" /> 
    <title>איך אומרים בעברית?</title>
  </head>
<body>

<br><center><center>

<?php 
  $winner_name_temp = $_REQUEST['name' . $_REQUEST['answer']];
  switch($winner_name_temp){
    case "":
      $winner_name = "<div>" . "אף אחד!" . "</div>";
      break;
    default:
      $winner_name = $winner_name_temp;
      break;
  }
?>
    
<h1 class="title">איך אומרים "<?php echo $_REQUEST['question'] ?>" בעברית?</h1><br><h2>
השחקנים שצדקו הם: <div><?php echo $winner_name ?></div><br>
והתשובה הנכונה היא: <div class="right-answer">

<?php 

if ($_REQUEST['answer'] == 4) {
  $ans = "אין תחליף";
} else {
  $ans = $_REQUEST['option' . $_REQUEST['answer']];
}
echo $ans

?>
</div><br><br>

<?php 
$tok = strtok($winner_name, ',');

while ($tok !== false) {
  $trimmed_tok = trim($tok);
  switch($trimmed_tok){
    case $_REQUEST['name1perm']:
      $_REQUEST['name1points'] = $_REQUEST['name1points'] + 10;
      break;
    case $_REQUEST['name2perm']:
      $_REQUEST['name2points'] = $_REQUEST['name2points'] + 10;
      break;
    case $_REQUEST['name3perm']:
      $_REQUEST['name3points'] = $_REQUEST['name3points'] + 10;
      break;
    case $_REQUEST['name4perm']:
      $_REQUEST['name4points'] = $_REQUEST['name4points'] + 10;
      break;
    default:
      if ($winner_name != "<div>" . "אף אחד!" . "</div>") {
        echo '<script>alert("שחקן לא קיים ניצח את הסיבוב!")</script>';
        $winner_name = "<div>" . "אף אחד!" . "</div>";
        break;
      }
  }
  $tok = strtok(",");
}

?>

<div class="leaderboard" align="right"><br>
  &nbsp;&nbsp;<?php echo $_REQUEST['name1perm']; ?>: <?php echo $_REQUEST['name1points']; ?><br><br>
  &nbsp;&nbsp;<?php echo $_REQUEST['name2perm']; ?>: <?php echo $_REQUEST['name2points']; ?><br><br>
  &nbsp;&nbsp;<?php echo $_REQUEST['name3perm']; ?>: <?php echo $_REQUEST['name3points']; ?><br><br>
  &nbsp;&nbsp;<?php echo $_REQUEST['name4perm']; ?>: <?php echo $_REQUEST['name4points']; ?><br><br>
</div>

<?php
switch ($_REQUEST['question']) {
  case "צ`יפס":
    $nextq = "רביולי";
    $nexta = "4";
    $nexto1 = "כיסונים";
    $nexto2 = "בצקון";
    $nexto3 = "פסטה";
    break;
  
  case "רביולי":
    $nextq = "אקורדיון";
    $nexta = "3";
    $nexto1 = "ניפוחון";
    $nexto2 = "כריצליל";
    $nexto3 = "מפוחון";
    break;
  
  case "אקורדיון":
    $nextq = "מגזין";
    $nexta = "2";
    $nexto1 = "מייצגון";
    $nexto2 = "תקופון";
    $nexto3 = "עלילון";
    break;
  
  case "מגזין":
    $nextq = "קאנטרי קלאב";
    $nexta = "1";
    $nexto1 = "מועדון שדה";
    $nexto2 = "חדר חברה";
    $nexto3 = "מועדון בריכה";
    break;
  
  case "קאנטרי קלאב":
    $nextq = "פורטל";
    $nexta = "3";
    $nexto1 = "משגר";
    $nexto2 = "מעברן";
    $nexto3 = "פורטן";
    break;
  
  case "פורטל":
    $nextq = "סימס";
    $nexta = "1";
    $nexto1 = "מסרר";
    $nexto2 = "מסרון";
    $nexto3 = "הודעה";
    break;
  
  case "סימס":
    $nextq = "ארומה";
    $nexta = "1";
    $nexto1 = "בשמת";
    $nexto2 = "ריחניות";
    $nexto3 = "אוורירה";
    break;
  
  case "ארומה":
    $nextq = "טאבלט";
    $nexta = "3";
    $nexto1 = "מסכון";
    $nexto2 = "צפין";
    $nexto3 = "מחשב לוח";
    break;
  
  case "טאבלט":
    $nextq = "היפופוטם";
    $nexta = "2";
    $nexto1 = "קרנמים";
    $nexto2 = "סוס יאור";
    $nexto3 = "לסתן";
    break;
  
  case "היפופוטם":
    $nextq = "חומוס";
    $nexta = "2";
    $nexto1 = "גרגרה";
    $nexto2 = "חמצה";
    $nexto3 = "ביסתה";
    break;

  case "חומוס":
    $nextq = "ז`קט";
    $nexta = "3";
    $nexto1 = "עליונית";
    $nexto2 = "צמריר";
    $nexto3 = "מקטרון";
    break;
  
  case "ז`קט":
    $nextq = "דיגיטלי";
    $nexta = "1";
    $nexto1 = "סיפרתי";
    $nexto2 = "ממוחשב";
    $nexto3 = "מוקרן";
    break;
  
  case "דיגיטלי":
    echo '<script>alert("שיימתם את המשחק! כל הכבוד!")</script>';
    echo '<script>window.location.href = "index.php";</script>';

  default:
    $nextq = "צ`יפס";
    $nexta = "3";
    $nexto1 = "מקל תפוח-אדמה";
    $nexto2 = "מילחים";
    $nexto3 = "טוגנים";
    break;
}

?>

<form action="/q" method="POST">
<input type="hidden" name="name1points" autocomplete="off" value='<?= $_REQUEST["name1points"] ?>'></input>
  <input type="hidden" name="name2points" autocomplete="off" value='<?= $_REQUEST["name2points"] ?>'></input>
  <input type="hidden" name="name3points" autocomplete="off" value='<?= $_REQUEST["name3points"] ?>'></input>
  <input type="hidden" name="name4points" autocomplete="off" value='<?= $_REQUEST["name4points"] ?>'></input>
  <input type="hidden" name="name1perm" autocomplete="off" value='<?= $_REQUEST["name1perm"] ?>'></input>
  <input type="hidden" name="name2perm" autocomplete="off" value='<?= $_REQUEST["name2perm"] ?>'></input>
  <input type="hidden" name="name3perm" autocomplete="off" value='<?= $_REQUEST["name3perm"] ?>'></input>
  <input type="hidden" name="name4perm" autocomplete="off" value='<?= $_REQUEST["name4perm"] ?>'></input>
  <input type="hidden" name="question" autocomplete="off" value="<?= $nextq ?>"></input>
  <input type="hidden" name="answer" autocomplete="off" value="<?= $nexta ?>"></input>
  <input type="hidden" name="option1" autocomplete="off" value="<?= $nexto1 ?>"></input>
  <input type="hidden" name="option2" autocomplete="off" value="<?= $nexto2 ?>"></input>
  <input type="hidden" name="option3" autocomplete="off" value="<?= $nexto3 ?>"></input>
<br><br>
  <button id="next" class="button" type="submit">
    לשאלה הבאה
  </button>
  </h2><br><br>
</form>
<script>
  setTimeout(function(){
    window.location.href = "#next";
  },2000);
</script>
</center>
</body>
</html>