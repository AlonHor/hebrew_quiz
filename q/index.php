<html dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>איך אומרים בעברית?</title>
    <link href="assets/style.css" rel="stylesheet" type="text/css" /> 
  </head>
  <body><br><center>
    <form action="/a" method="POST">
      <h1 class="title">איך אומרים "<?php echo $_REQUEST['question'] ?>" בעברית?</h1>
      <br><h2>
      <label class="o">
      <?php echo $_REQUEST['option1'] ?> </label><input type="text" name="name1" autocomplete="off"></input><br><br><label class="o">
      <?php echo $_REQUEST['option2'] ?> </label><input type="text" name="name2" autocomplete="off"></input><br><br><label class="o">
      <?php echo $_REQUEST['option3'] ?> </label><input type="text" name="name3" autocomplete="off"></input><br><br><label class="o">
      אין תחליף </label><input type="text" name="name4" autocomplete="off"> </input><br><br><br>
      <input type="hidden" name="name1points" autocomplete="off" value='<?= $_REQUEST["name1points"] ?>'></input>
      <input type="hidden" name="name2points" autocomplete="off" value='<?= $_REQUEST["name2points"] ?>'></input>
      <input type="hidden" name="name3points" autocomplete="off" value='<?= $_REQUEST["name3points"] ?>'></input>
      <input type="hidden" name="name4points" autocomplete="off" value='<?= $_REQUEST["name4points"] ?>'></input>
      <input type="hidden" name="name1perm" autocomplete="off" value='<?= $_REQUEST["name1perm"] ?>'></input>
      <input type="hidden" name="name2perm" autocomplete="off" value='<?= $_REQUEST["name2perm"] ?>'></input>
      <input type="hidden" name="name3perm" autocomplete="off" value='<?= $_REQUEST["name3perm"] ?>'></input>
      <input type="hidden" name="name4perm" autocomplete="off" value='<?= $_REQUEST["name4perm"] ?>'></input>
      <input type="hidden" name="question" autocomplete="off" value='<?= $_REQUEST["question"] ?>'></input>
      <input type="hidden" name="answer" autocomplete="off" value='<?= $_REQUEST["answer"] ?>'></input>
      <input type="hidden" name="option1" autocomplete="off" value='<?= $_REQUEST["option1"] ?>'></input>
      <input type="hidden" name="option2" autocomplete="off" value='<?= $_REQUEST["option2"] ?>'></input>
      <input type="hidden" name="option3" autocomplete="off" value='<?= $_REQUEST["option3"] ?>'></input>
      <button class="button" type="submit">
        הגש תשובות
      </button></h2><br>
      <img src="assets/icon.png" width = 120px height = 120px/>
    </form>
  </center>
  </body>
</html>