<html dir="rtl" id="top">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>איך אומרים בעברית?</title>
    <link href="assets/style.css" rel="stylesheet" type="text/css" /> 
  </head>
  <body>
    <form>
      <label>
        <a class="info" href="#i"></a>
      </label>
    </form>
    <br>
    <center>
      <form action="/q" method="POST" name="start" id="start">
        <h1 class="title">איך אומרים בעברית?</h1><br>אנא הכנס שמות משתתפים כאן:
        <br><br><h2>
        <input type="text" id="n1prm" name="name1perm" autocomplete="off"></input><br><br>
        <input type="text" id="n2prm" name="name2perm" autocomplete="off"></input><br><br>
        <input type="text" id="n3prm" name="name3perm" autocomplete="off"></input><br><br>
        <input type="text" id="n4prm" name="name4perm" autocomplete="off"> </input><br><br><br>
        <input type="hidden" name="name1points" autocomplete="off" value=0></input>
        <input type="hidden" name="name2points" autocomplete="off" value=0></input>
        <input type="hidden" name="name3points" autocomplete="off" value=0></input>
        <input type="hidden" name="name4points" autocomplete="off" value=0></input>
        <input type="hidden" name="question" autocomplete="off" value="שניצל"></input>
        <input type="hidden" name="answer" autocomplete="off" value="2"></input>
        <input type="hidden" name="option1" autocomplete="off" value="פרירה"></input>
        <input type="hidden" name="option2" autocomplete="off" value="כתיתה"></input>
        <input type="hidden" name="option3" autocomplete="off" value="שמנון"></input>
        <button class="button" type="submit">
          התחל לשחק
        </button></h2>
      </form><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <div id="i" dir="rtl"><br><br><br>
        <h1 class="title">הוראות</h1><br><h2>
        ברגע שנכנסים למשחק מופיע מסך הבית, בו מזינים את שמות השחקנים.
        ניתן לשחק עד ארבעה שחקנים ביחד. לאחר תחילת המשחק מופיעה שאלה על המסך: 
        "איך אומרים ____ בעברית?" 
        'ומתחת לשאלה שלושה תרגומים אפשריים למילה הלועזית שבה, בנוסף תהיה אפשרות של 'אין תחליף.
        ליד כל תשובה מזינים את שמות השחקנים שבחרו בתשובה זו, במידה ויש יותר משחקן אחד
        הבוחר בתשובה מסויימת, יש להפריד את השמות בפסיק. 
        לאחר מכן לוחצים על 'הגש תשובות', והשחקנים שצודקים מקבלים עשר נקודות. 
        </h2><br>

        <h1 class="title">הסבר על הנושא הלשוני - עיברות מילים לועזיות</h1><br><h2>
        בחיי היום יום, אנחנו משתמשים במאות מילים לועזיות כדי לדבר, מילים שיש להם תחליף בעברית 
        אך אנחנו לא משתמשים בהם. באתר האקדמיה ללשון העברית ניתן לראות תחליפים עבריים 
        להמון מהמילים שאנו משתמשים בהם על בסיס יומי, כמו שניצל, צ'יפס, ועוד המון. 
        
        </h2><br>
        
        
          <br><a href="#top" style="text-decoration: none;">
            <button class="button" type="submit">
              חזרה למשחק
            </button>
          </a>
        </h2>
      </div><br><br><br><br><br>
      <div>
        <!-- <div>
          <h1 class="title">צור שאלה מזוייפת</h1><br>שנה את הפרטים הבאים כרצונך
          <br><br><h2>
          <input type="text" id="question" autocomplete="off" value="שניצל"></input><br><br>
          <input type="text" id="answer" autocomplete="off" value="2"></input><br><br>
          <input type="text" id="option1" autocomplete="off" value="פרירה"></input><br><br>
          <input type="text" id="option2" autocomplete="off" value="כתיתה"></input><br><br>
          <input type="text" id="option3" autocomplete="off" value="שמנון"></input><br><br>
          <button class="button" onclick="fakeq()">
            התחל
          </button></h2>
        </div> -->
        <script>
          function fakeq() {
            var n1prm = document.getElementById("n1prm").value;
            var n2prm = document.getElementById("n2prm").value;
            var n3prm = document.getElementById("n3prm").value;
            var n4prm = document.getElementById("n4prm").value;
            var n1p = 0;
            var n2p = 0;
            var n3p = 0;
            var n4p = 0;
            var q = document.getElementById("question").value;
            var a = document.getElementById("answer").value;
            var o1 = document.getElementById("option1").value;
            var o2 = document.getElementById("option2").value;
            var o3 = document.getElementById("option3").value;
            window.location.href = "/q?name1perm=" + n1prm + "&name2perm=" + n2prm + "&name3perm=" + n3prm + "&name4perm=" + n4prm + "&name1points=0&name2points=0&name3points=0&name4points=0" + "&question=" + q + "&answer=" + a + "&option1=" + o1 + "&option2=" + o2 + "&option3=" + o3;
          }
        </script>
      </div>
    </center>
  </body>
</html>