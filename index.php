<?php

  echo '<!DOCTYPE html>
        <html>
          <head>
            <title>Registration</title>
            <link href="style.css" rel="stylesheet" type="text/css">
          </head>
          <body>';

  echo '<form action="registrazione.php" method="POST">
          <div id="boxlog">
            <div id="bxlg0">
              <div id="bxlg1">Registration</div>
				    </div>
            <div id="boxlogcenter">
              <div class="boxinp">USERNAME:</div>
				      <input class="inp" name="username" type="text" />
              <div class="boxinp">PASSWORD: </div>
              <input class="inp" name="password" type="text" />
              <div class="boxinp">EMAIL: </div>
              <input class="inp" name="email" type="text" />
              <div id="boxlogbottom">
              <input id="submit" type="submit" value="REGIST" />
              <input id="reset" type="reset" value="RESET" />
            </div>
        </div>
        </div>
		   </form>
       </body>
       </html>';
