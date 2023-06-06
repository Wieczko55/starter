<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Księgoappka | Nowoczesna księgowość</title>
    <link rel="stylesheet" href="ksiegowosc.css">
</head>
<body>
    <nav>
        <div id="nic">
        <h1>KsięgoAPPka</h1>
        <p>Nowoczesna księgowość w Twoich rękach</p>
        </div>
        <div id="odnosniki">
            <a href="#">Strona główna</a>
            <a href="mailto:biuro@ezdamin.pl">Oferta</a>
            <a href="kontakt.php">Kontakt</a>
        </div>
    </nav>
    <main>
        <div id="pek">
            <section id="le">
                <h1>Możesz na nas liczyć</h1>
                <p>A my policzymy Twoje podatki.łatwo i bez formalności.Nie musisz stresować się rachunkami. Jedno kliknięcie - faktury rozliczone!</p>
            </section>
            <section id="pr">
                <img id="pyk" src="ksiegowosc.jpg" alt="">
                
                </section>
                </div>
                <h3>Polecają nas:</h3>
                <section id="tak">

                <?php
                $polaczenie = mysqli_connect("localhost","root","","ksiegowosc");
                $sql = "SELECT logo_firmy, nazwa_firmy, opinia FROM opinia WHERE ulubione = 1";
                $wynik = mysqli_query($polaczenie, $sql);
                while ($r = mysqli_fetch_row($wynik)) {
                    echo "<div class='ka'>";
                    echo "<img src='$r[0]' alt='logo firmy'>";
                    echo "<h4>".$r[1]."</h4>";
                    echo "<p>"."$r[2]"."</p>";
                    echo "</div>";
                }
                ?>
            </section>
       </main>
       <div id="kontener">
        <p>Ile będzie kosztować Twoja księgowość !</p>
       </div>
       <footer>
        <section id="lew">
            <form action="ksiegoappka.php" method="post">
                Rodzaj firmy <br>
                <select name="aa" id="rodzaj">
                    <option value="a">(1)Spółka cywilna</option>
                    <option value="b">(2)Spółka z o.o</option>
                    <option value="c">(3)Spółka akcyjna</option>
                </select> <br>
                Typ rozliczenia <br>
                <select name="b" id="be">
                    <option value="">Ryczałt</option>
                    <option value="">Karta podatkowa</option>
                </select> <br>
                <button onclick="f1()">Sprawdź cenę!</button>
                </form>
                
        </section>

                <section id="pra">
                    <p>Koszt Twojej księgowości</p>
                    <p id="wynik"></p>
                    <p id="wynik2"></p>
                </section>
            
       </footer>
       <?php
       mysqli_close($polaczenie);
        ?>
        <script>
    function f1()
    {
    
        let rodzaj = document.getElementById("rodzaj").value;
        let cena = 0;
        if(rodzaj == "a")
        {
            cena = 0.75 * 500;
        }
        if(rodzaj == "b")
        {
            cena = (1.02*499)-8.99;
        }
        if(rodzaj == "c")
        {
            cena = (1.15*899);
        }
        document.getElementById("wynik").innerHTML = cena+"zł/rok";
        document.getElementById("wynik2").innerHTML = "Lub miesięcznie"+(cena/12);
    
    }
</script>
</body>
</html>