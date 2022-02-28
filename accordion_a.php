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
  $winner_name = $_POST['name3']
?>
    
<h1>איך אומרים "אקורדיון" בעברית?</h1><br><br><br><h2>
השחקנים שצדקו הם: <?php echo $winner_name; ?><br>
והתשובה הנכונה הייתה: מפוחון<br><br>

<?php 
  $tok = strtok($winner_name, ',');
  
  while ($tok !== false) {
    $trimmed_tok = trim($tok);
    switch($trimmed_tok){
      case $_POST['name1perm']:
        $_POST['name1points'] = $_POST['name1points'] + 10;
        break;
      case $_POST['name2perm']:
        $_POST['name2points'] = $_POST['name2points'] + 10;
        break;
      case $_POST['name3perm']:
        $_POST['name3points'] = $_POST['name3points'] + 10;
        break;
      case $_POST['name4perm']:
        $_POST['name4points'] = $_POST['name4points'] + 10;
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
      &nbsp;&nbsp;<?php echo $_POST['name1perm']; ?>: <?php echo $_POST['name1points']; ?><br><br>
      &nbsp;&nbsp;<?php echo $_POST['name2perm']; ?>: <?php echo $_POST['name2points']; ?><br><br>
      &nbsp;&nbsp;<?php echo $_POST['name3perm']; ?>: <?php echo $_POST['name3points']; ?><br><br>
      &nbsp;&nbsp;<?php echo $_POST['name4perm']; ?>: <?php echo $_POST['name4points']; ?><br><br>
  </div>

<form action="magazine_q.php" method="POST">
<input type="hidden" name="name1points" autocomplete="off" value='<?= $_POST["name1points"] ?>'></input>
    <input type="hidden" name="name2points" autocomplete="off" value='<?= $_POST["name2points"] ?>'></input>
    <input type="hidden" name="name3points" autocomplete="off" value='<?= $_POST["name3points"] ?>'></input>
    <input type="hidden" name="name4points" autocomplete="off" value='<?= $_POST["name4points"] ?>'></input>
    <input type="hidden" name="name1perm" autocomplete="off" value='<?= $_POST["name1perm"] ?>'></input>
    <input type="hidden" name="name2perm" autocomplete="off" value='<?= $_POST["name2perm"] ?>'></input>
    <input type="hidden" name="name3perm" autocomplete="off" value='<?= $_POST["name3perm"] ?>'></input>
    <input type="hidden" name="name4perm" autocomplete="off" value='<?= $_POST["name4perm"] ?>'></input>
<br><br><input class="button" type="submit" value="לשאלה הבאה"></input></h2><br><br>
</form>
</center>
</body>
</html>