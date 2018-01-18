<?php
if(!isset($_SESSION['loggedin'])){
  die();
}
?>
<div class ="row main-content">
  <div class = "col-sm-3"></div>
  <div class ="col-sm-9">
    <form action="action_create.php" method="post">
      <table class ="create">

        <tr>
          <td>
            Nume Prenume
          </td>
          <td>
            <input type="text" name="name" placeholder="ex. Hermione Granger">
          </td>
        </tr>

      <tr><td>
          E-mail
      </td><td>
      <input type="text" name="email" placeholder="ron.weasley@catalog.hw"><br>
      </td></tr>

<tr><td>
          Password</td><td>
      <input type="text" name="password" placeholder="Parolă"><br>
</td></tr>


<tr><td>
          Tipul de utilizator </td><td>
      <input type="text" name="rank" placeholder="0, 1 ex. 1 (admin)"><br>
</td></tr>
<tr><td>
          Capitole Speciale de Informatică</td><td>
      <input type="text" name="class1" placeholder="1 - 10 ex. 8"><br>
</td></tr>
<tr><td>
          Disciplina Complementară</td><td>
      <input type="text" name="class2" placeholder="1 - 10 ex. 8"><br>
</td></tr>

<tr><td>
          Ecuații Diferențiale</td><td>
      <input type="text" name="class3" placeholder="1 - 10 ex. 8"><br>
</td></tr>
<tr><td>
          Inteligență Artificială</td><td>
      <input type="text" name="class4" placeholder="1 - 10 ex. 8"><br>
</td></tr>
<tr><td>
          Metode de Modelare și Proiectare</td><td>
      <input type="text" name="class5" placeholder="1 - 10 ex. 8"><br>
</td></tr>
<tr><td>
          Stagiu de Licență</td><td>
      <input type="text" name="class6" placeholder="1 - 10 ex. 8"><br>
</td></tr>
<tr><td>
          Tehnologii Web</td><td>
      <input type="text" name="class7" placeholder="1 - 10 ex. 8"><br>
</td></tr>

    </table>

      <br>
	  <button onclick="myFunction()">Creează utilizator nou</button>

<p id="demo"></p>

<script>
function myFunction() {
    var txt;
    if (confirm("Felicitari! A-ti creat un nou cont.") == true) {
        txt = "You pressed OK!";
    } else {
        txt = "You pressed Cancel!";
    }
    document.getElementById("demo").innerHTML = txt;
}
</script>
    </form>
  </div>
  <div class = "col-sm-3"></div>
  </div>
