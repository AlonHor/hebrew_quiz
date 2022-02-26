<!DOCTYPE php>
<html dir="rtl">
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
  <title>איך אומרים בעברית?</title>
  <link rel = "icon" href=
"icon.png" type="image/x-icon">
</head>
<body>
<br><br><br><center><center>
<?php 
  $winner_name = $_GET['name3']
?>
    
<h1>איך אומרים "פורטל" בעברית?</h1><br><br><br><h2>
השחקנים שצדקו הם: <?php echo $winner_name; ?><br>
והתשובה הנכונה הייתה: פורטן<br><br>

<?php 
  $tok = strtok($winner_name, ',');
  
  while ($tok !== false) {
    $trimmed_tok = trim($tok);
    switch($trimmed_tok){
      case $_GET['name1perm']:
        $_GET['name1points'] = $_GET['name1points'] + 10;
        break;
      case $_GET['name2perm']:
        $_GET['name2points'] = $_GET['name2points'] + 10;
        break;
      case $_GET['name3perm']:
        $_GET['name3points'] = $_GET['name3points'] + 10;
        break;
      case $_GET['name4perm']:
        $_GET['name4points'] = $_GET['name4points'] + 10;
        break;
      default:
        echo '<script>alert("שחקן לא רשום ניצח את הסיבוב!")</script>';
        echo '<script>alert("חוזר לדף הבית!")</script>';
        echo '<script>window.location.href = "index.php";</script>';
    }
    $tok = strtok(",");
  }
    
?>
  
<div class="leaderboard" align="right"><br>
      &nbsp;&nbsp;<?php echo $_GET['name1perm']; ?>: <?php echo $_GET['name1points']; ?><br><br>
      &nbsp;&nbsp;<?php echo $_GET['name2perm']; ?>: <?php echo $_GET['name2points']; ?><br><br>
      &nbsp;&nbsp;<?php echo $_GET['name3perm']; ?>: <?php echo $_GET['name3points']; ?><br><br>
      &nbsp;&nbsp;<?php echo $_GET['name4perm']; ?>: <?php echo $_GET['name4points']; ?><br><br>
  </div>

<form action="sms_q.php" method="GET">
<input type="hidden" name="name1points" autocomplete="off" value='<?= $_GET["name1points"] ?>'></input>
    <input type="hidden" name="name2points" autocomplete="off" value='<?= $_GET["name2points"] ?>'></input>
    <input type="hidden" name="name3points" autocomplete="off" value='<?= $_GET["name3points"] ?>'></input>
    <input type="hidden" name="name4points" autocomplete="off" value='<?= $_GET["name4points"] ?>'></input>
    <input type="hidden" name="name1perm" autocomplete="off" value='<?= $_GET["name1perm"] ?>'></input>
    <input type="hidden" name="name2perm" autocomplete="off" value='<?= $_GET["name2perm"] ?>'></input>
    <input type="hidden" name="name3perm" autocomplete="off" value='<?= $_GET["name3perm"] ?>'></input>
    <input type="hidden" name="name4perm" autocomplete="off" value='<?= $_GET["name4perm"] ?>'></input>
<br><br><input class="button" type="submit" value="לשאלה הבאה"></input></h2><br><br>
</form>
</center>
</body>
</html>