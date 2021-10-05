<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>średni wiek</title>
  </head>
  <body>
    <?php
    if (!isset($_POST['person'])){
      echo <<< FROMCOUNTPERSON
      <h3>Ilość osób w rodzinie</h3>
      <form method="post">
        <input type="number" name="person" placeholder="ilość osób"><br><br>
        <input type="submit" value="Zatwierdź">
      </form>
      FROMCOUNTPERSON;
    }
    if (!empty($_POST['person'])) {
      echo "<h3> Ilość osób w rodzinie: $_POST[person]</h3>";
      echo <<< FROMCOUNTPERSON
      <form method="post">
      FROMCOUNTPERSON;
      for ($i=1; $i <= $_POST['person'] ; $i++) {
        echo "<input type='number' name='person$i' placeholder='Wiek osoby $i'><br><br>";
      }
        echo <<< FROMCOUNTPERSON
        <input type="submit" value="Zatwierdź">
      </form>
      FROMCOUNTPERSON;
    }
    ?>

  </body>
</html>
