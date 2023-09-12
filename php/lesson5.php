<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LazyCode - Atrybuty HTML</title>
    <link rel="shortcut icon" href="../img/profile.png">
    <link rel="stylesheet" href="../css/lessonsof.css">
    <link rel="stylesheet" href="../css/button.css">
    <link rel="stylesheet" href="../css/scrollbar.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
    .bg-dark2 {
        height: auto;
    }

    @media only screen and (max-width: 600px) {
        .bg-dark2 {
            height: auto;
        }
    }
    </style>
</head>

<body>
    <section class="sidebar">
        <div class="nav-header">
            <p class="logo">Lazy<span>Code</span> </p>
            <i class="bx bx-menu btn-menu"></i>
        </div>
        <ul class="nav-links">
            <li>
                <i class="bx bx-search search-btn"></i>
                <input type="text" id="searchInput" placeholder="Wyszukaj..." />
                <span class="tooltip">Wyszukaj...</span>
            </li>


            <li class="dropdown">
                <a href="../index.php">
                    <i class='bx bx-home-alt-2'></i>
                    <span class="title">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>



            <li class="dropdown">
                <a class="dropdown-btn">
                    <i class="bx bx-dock-left"></i>
                    <span class="title">HTML</span>
                    <span class="arrow-container">
                        <i class="bx bx-chevron-down arrow" style="margin-left:85px;"></i>
                        <i class="bx bx-chevron-up arrow" style="display: none;margin-left:85px;"></i>
                    </span>
                </a>
                <ul class="dropdown-content">
                    <li><a href="lesson1.php">Edytor Kodu</a></li>
                    <li><a href="lesson2.php">Co to HTML?</a></li>
                    <li><a href="lesson3.php">Strutkura Kodu</a></li>
                    <li><a href="lesson4.php">Elementy</a></li>
                    <li><a href="lesson5.php">Atrybuty</a></li>
                </ul>
            </li>



            <li class="dropdown">
                <a class="dropdown-btn">
                    <i class="bx bx-dock-left"></i>
                    <span class="title">CSSㅤ</span>
                    <span class="arrow-container">
                        <i class="bx bx-chevron-down arrow" style="margin-left:86px;"></i>
                        <i class="bx bx-chevron-up arrow" style="display: none;margin-left:86px;"></i>
                    </span>
                </a>
                <ul class="dropdown-content">
                    <li><a href="../error/error.php">Co to CSS?</a></li>
                    <li><a href="../error/error.php">Edytor Kodu</a></li>
                    <li><a href="../error/error.php">Elementy</a></li>
                    <li><a href="../error/error.php">Atrybuty</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a class="dropdown-btn">
                    <i class="bx bx-dock-left"></i>
                    <span class="title">JSㅤㅤ</span>
                    <span class="arrow-container">
                        <i class="bx bx-chevron-down arrow" style="margin-left:84px;"></i>
                        <i class="bx bx-chevron-up arrow" style="display: none;margin-left:84px;"></i>
                    </span>
                </a>
                <ul class="dropdown-content">
                    <li><a href="../error/error.php">Co to JS?</a></li>
                    <li><a href="../error/error.php">Edytor Kodu</a></li>
                    <li><a href="../error/error.php">Elementy</a></li>
                    <li><a href="../error/error.php">Atrybuty</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="https://discord.gg/vSZwgZPaVg" target="_blank">
                    <i class='bx bxs-message-dots'></i>
                    <span class="title">Discord</span>
                </a>
                <span class="tooltip">Home</span>
            </li>


            <div class="theme-wrapper">
                <i class="bx bxs-moon theme-icon"></i>
                <p>Ciemny Motwy</p>
                <div class="theme-btn">
                    <span class="theme-ball"></span>
                </div>
            </div>
    </section>
    <section id="main">
        <section class="bg-dark2 text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start"
            style=".bg-dark { background-color: none }">
            <div class="container">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <div>
                        <h1>Atrybuty<span style="color:rgb(19, 87, 223);"> HTML</span>?</h1>
                        <h2>Atrybuty - Podstawy</h2>

                        <p class="lead my-4">
                            Dzisiaj zgłębimy tajniki atrybutów HTML i dowiemy się, jak wpływają na
                            wygląd i zachowanie elementów na stronie. Aby ułatwić zrozumienie, przygotowałem dla Ciebie
                            krótki opis najważniejszych atrybutów.
                        </p>
                        <hr id="hr">
                        <p><span style="color:#ffc400">1. Atrybut "href" :</span><br><br>
                            Atrybut href jest używany głównie w znaczniku &lt;a&gt;&lt;/a&gt; (link) i określa adres URL
                            strony, do
                            której prowadzi link. <br>


                        <div class='K2_CBox'>
                            <div class='CB_Heading'>
                                <span>Użycie atrybutu href w znaczniku &lt;a&gt;&lt;/a&gt;</span>
                                <button id='copy1' class='C_box_main' onclick="copyC('copy1','code1')">
                                    <i class='CBox_icn'></i>
                                </button>
                            </div>

                            <div id='code1'>
                                <pre>{
&lt;a href="https://www.przykladowastrona.com"&gt;Przykładowa strona&lt;/a&gt;
}</pre>
                            </div>
                        </div>
                        <hr id="hr">

                        <p><span style="color:#ffc400">2. Atrybut "src" :</span><br><br>
                            Atrybut src stosuje się w znaczniku &lt;img&gt; (obraz) i wskazuje ścieżkę do obrazu, który
                            ma zostać wyświetlony na stronie.<br>

                        <div class='K2_CBox'>
                            <div class='CB_Heading'>
                                <span>Użycie atrybutu src w znaczniku &lt;img&gt;</span>
                                <button id='copy2' class='C_box_main' onclick="copyC('copy2','code2')">
                                    <i class='CBox_icn'></i>
                                </button>
                            </div>

                            <div id='code2'>
                                <pre>{
&lt;img src="obraz.jpg"&gt;
}</pre>
                            </div>
                        </div>
                        <hr id="hr">
                        <p><span style="color:#ffc400">3. Atrybuty "width" i "height" :</span><br><br>
                            Atrybuty width i height używane są również w znaczniku &lt;img&gt; i dostarczają informacje
                            o rozmiarze obrazu <br>(width to szerokość obrazu, a height to wysokość).<br>

                        <div class='K2_CBox'>
                            <div class='CB_Heading'>
                                <span>Użycie atrybutu width i height w znaczniku &lt;img&gt;</span>
                                <button id='copy3' class='C_box_main' onclick="copyC('copy3','code3')">
                                    <i class='CBox_icn'></i>
                                </button>
                            </div>

                            <div id='code3'>
                                <pre>{
&lt;img src="obraz.jpg" width="200" height="100"&gt;
}</pre>
                            </div>
                        </div>
                        <hr id="hr">
                        <p> <span style="color:#ffc400">4. Atrybut "alt": </span><br><br>
                            Atrybut alt jest wykorzystywany w znaczniku &lt;img&gt; i zapewnia alternatywny tekst dla
                            obrazu, który jest wyświetlany, gdy obraz nie może zostać wczytany lub dla użytkowników
                            korzystających z czytników ekranowych. <br>

                        <div class='K2_CBox'>
                            <div class='CB_Heading'>
                                <span>Użycie alt w znaczniku &lt;img&gt;</span>
                                <button id='copy4' class='C_box_main' onclick="copyC('copy4','code4')">
                                    <i class='CBox_icn'></i>
                                </button>
                            </div>

                            <div id='code4'>
                                <pre>{
&lt;img src="obraz.jpg" alt="Opis alternatywny"&gt;
}</pre>
                            </div>
                        </div>
                        <hr id="hr">
                        <p> <span style="color:#ffc400">5. Atrybut "style" :</span><br><br>
                            Atrybut style pozwala na dodawanie stylów do elementów HTML, takich jak kolor, czcionka,
                            rozmiar i wiele innych.<br>(color to styl zmieniający kolor tekstu a font-size to styl
                            zmieniający rozmiar czcionki danego
                            elementu).<br>
                        <p style="color:#ff1930">!!! Uwaga wszystkie style będą szegółowo opisane w kursie css !!!</p>
                        <div class='K2_CBox'>
                            <div class='CB_Heading'>
                                <span>Użycie style w znaczniku &lt;p&gt;&lt;/p&gt;</span>
                                <button id='copy5' class='C_box_main' onclick="copyC('copy5','code5')">
                                    <i class='CBox_icn'></i>
                                </button>
                            </div>

                            <div id='code5'>
                                <pre>{
&lt;p style="color: blue; font-size: 16px;"&gt;Ten paragraf ma niebieski kolor i rozmiar czcionki 16px.&lt;/p&gt;
}</pre>
                            </div>
                        </div>
                        <hr id="hr">
                        <p> <span style="color:#ffc400">6. Atrybut "lang" :</span><br><br>
                            Atrybut lang jest używany w znaczniku &lt;html&gt; i deklaruje język strony WWW. Jest to
                            ważne dla narzędzi tłumaczących i wyszukiwarek.
                            <br>
                        <div class='K2_CBox'>
                            <div class='CB_Heading'>
                                <span>Użycie lang w znaczniku &lt;hmtl&gt;</span>
                                <button id='copy6' class='C_box_main' onclick="copyC('copy6','code6')">
                                    <i class='CBox_icn'></i>
                                </button>
                            </div>

                            <div id='code6'>
                                <pre>{
&lt;html lang="pl"&gt;
&lt;!-- Zawartość strony w języku polskim --&gt;
&lt;/html&gt;
}</pre>
                            </div>
                        </div>
                        <hr id="hr">
                        <p> <span style="color:#ffc400">7. Atrybut "title" :</span><br><br>
                            Atrybut title jest używany do dostarczania dodatkowych informacji o elemencie, np. wyświetla
                            się je jako podpowiedź, gdy kursor znajdzie się nad elementem.
                            <br>
                        <div class='K2_CBox'>
                            <div class='CB_Heading'>
                                <span>Użycie title w znaczniku &lt;a&gt;&lt;/a&gt;</span>
                                <button id='copy7' class='C_box_main' onclick="copyC('copy7','code7')">
                                    <i class='CBox_icn'></i>
                                </button>
                            </div>

                            <div id='code7'>
                                <pre>{
&lt;a href="kontakt.html" title="Skontaktuj się z nami"&gt;Kontakt&lt;/a&gt;
}</pre>
                            </div>
                        </div>
                        <hr id="hr">
                        <h3>Podsumowanie:</h3>
                        <br>
                        <p>
                            1. Wszystkie elementy HTML mogą mieć atrybuty<br>
                            2. Atrybut href określa &lt;a&gt; adres URL strony, do której prowadzi link<br>
                            3. Atrybut src określa &lt;img&gt; ścieżkę do obrazu, który ma zostać wyświetlony<br>
                            4. Atrybuty width i height zapewniają &lt;img&gt; informacje o rozmiarze obrazów<br>
                            5. Atrybut alt zapewnia &lt;img&gt; alternatywny tekst dla obrazu<br>
                            6. Atrybut style służy do dodawania stylów do elementu, takich jak kolor, czcionka, rozmiar
                            i inne<br>
                            7. Atrybut lang tagu &lt;html&gt; deklaruje język strony WWW<br>
                            8. Atrybut title definiuje dodatkowe informacje o elemencie<br>

                        </p>
                        <hr id="hr">
                        Dzięki za poświęcenie czasu na zapoznanie się z atrybutami HTML! Są one niezwykle przydatne w
                        projektowaniu stron internetowych, pozwalając na dostosowanie wyglądu i zachowania elementów.
                        Pamiętaj, że atrybuty można stosować w różnych znacznikach HTML, nadając im unikalne
                        właściwości.
                        <br> <br>
                        <a href="../error/error.php"><button class="button-65" role="button">Kolejna Lekcja</button></a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ****************************JAVASCRIPT****************************  -->

        <script src="../js/menu.js"></script>
        <script src="../js/code_box.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>

        <!-- ****************************JAVASCRIPT****************************  -->
    </section>
</body>

</html>