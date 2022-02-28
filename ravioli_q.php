<html dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>איך אומרים בעברית?</title>
    <link rel = "icon" href=
"icon.png" type="image/x-icon">
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body><br><br><br><center>
    <form action="ravioli_a.php" method="POST">
    <h1 class="title">איך אומרים "רביולי" בעברית?</h1><br><br><br><h2><label>
    כיסונים </label><input type="text" name="name1" autocomplete="off"></input><br><br><label>
    בצקון </label><input type="text" name="name2" autocomplete="off"></input><br><br><label>
    פסטה </label><input type="text" name="name3" autocomplete="off"></input><br><br><label>
    אין תחליף </label><input type="text" name="name4" autocomplete="off"> </input><br><br><br>
    <input class="button" type="submit" value="הגש תשובות"></input></h2>
    <br><img src="icon.png" width = 120px height = 120px/>
    <input type="hidden" name="name1points" autocomplete="off" value='<?= $_POST["name1points"] ?>'></input>
    <input type="hidden" name="name2points" autocomplete="off" value='<?= $_POST["name2points"] ?>'></input>
    <input type="hidden" name="name3points" autocomplete="off" value='<?= $_POST["name3points"] ?>'></input>
    <input type="hidden" name="name4points" autocomplete="off" value='<?= $_POST["name4points"] ?>'></input>
    <input type="hidden" name="name1perm" autocomplete="off" value='<?= $_POST["name1perm"] ?>'></input>
    <input type="hidden" name="name2perm" autocomplete="off" value='<?= $_POST["name2perm"] ?>'></input>
    <input type="hidden" name="name3perm" autocomplete="off" value='<?= $_POST["name3perm"] ?>'></input>
    <input type="hidden" name="name4perm" autocomplete="off" value='<?= $_POST["name4perm"] ?>'></input>
  </form>
  </center>
  </body>
</html>