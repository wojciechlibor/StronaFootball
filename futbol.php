<html> 
      <head>
<meta charset="utf-8">
          <title>Rozgrywki futbolowe</title>
          <link rel="stylesheet" href="styl.css">
    </head>
    <body>
        <?php
        if(!isset($_COOKIE['ciastko']))
        {
            echo "Dzień dobry! Strona używa ciasteczek";
        }
        ?>
        <?php
        setcookie("ciastko",1,time()+7200);
        {
            echo "Witaj ponownie na stronie";
        }
        ?>
<div id="baner">
    <h2>Światowe rozgrywki piłkarskie</h2>
	<img src="obraz1.jpg" alt="boisko">                                                                  
</div>
<div id="mecze">
	<?php
		$con=mysqli_connect('localhost','root','','egzamin');
		$zapytanie= "SELECT `zespol1`, `zespol2`,`wynik`,`data_rozgrywki` FROM rozgrywka WHERE `zespol1`='EVG'";
		$doBazy = mysqli_query($con,$zapytanie);
		while($pom = mysqli_fetch_array($doBazy)){
		echo "<section class='xd'>
        <h3>$pom[0]-$pom[1]</h3>
        <h4>$pom[2]</h4>
        <p>w dniu: $pom[3]</p>
        </section>";
		}
		mysqli_close($con);
		?>
</div>

<div id="glowny">
<h2>Reprezentacja Polski</h2>
</div>
        <div id="lewy">
<p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy,
4-napastnicy):</p>
            <form method="post" action="">
            <input type="number" name="pozycja";>
            <input type="submit" value="sprawdz";>  
            </form>
           <?php
		$position=$_POST['pozycja'];
            $con=mysqli_connect('localhost','root','','egzamin');
		$zapytanie= "SELECT `imie`,`nazwisko` FROM `zawodnik` WHERE `pozycja_id`='$position'";
		$doBazy = mysqli_query($con,$zapytanie);
		while($pom = mysqli_fetch_array($doBazy))
            {
		echo "<ul><li><p>".$pom[0]." ".$pom[1]."</p></li></ul>";
		}
		?> 
            
</div>
<div id="prawy">
<img src="zad1.png" alt="piłkarz">
    <p>00000000000</p>
</div>

</body>
          </html>