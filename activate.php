<?php
//  echo $activationpage;exit();
// if (!(isset($_GET["content"]) && isset($_GET["email"]) && isset($_GET["pwh"]))) {
//   header("Location: ./index.php?content=message&alert=hacker-alert");
//   // exit();
// }


?> 



<div class="container">
  <div class="card">
    <div class="inner-box" id="card">
      <div>
        <h2> ACTIVER</h2>
        <form id="activate" action="./index.php?content=activate_script" method="post">
          <div class="form-group">
            <label  for="inputPassword">Kies een wachtwoord</label>
            <input name="password" type="password" class="form-control" id="inputPassword"  aria-describedby="passwordHelp" autofocus>

            <label for="inputPasswordCheck">Type het wachtwoord opnieuw:</label>
            <input name="passwordCheck" type="password" class="form-control" id="inputPasswordCheck" aria-describedby="passwordHelpCheck">
          </div>
          <div class="form-group">
            <label for="inputPasswordCheck">Naam</label>
            <input name="name" type="text" class="form-control" id="inputPasswordCheck" aria-describedby="passwordHelpCheck">
            <label for="inputPasswordCheck">Telefoonummer:</label>
            <input name="mobile" type="tel" class="form-control" id="inputPasswordCheck" aria-describedby="passwordHelpCheck">
          </div>
          <button type="submit" class="submit-btn">Submit</button>
          <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
          <input type="hidden" name="pwh" value="<?php echo $_GET["pwh"]; ?>">
          
        </form>
      </div>
    </div>
  </div>
</div> 
  