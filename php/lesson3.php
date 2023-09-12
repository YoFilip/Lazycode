<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LazyCode - Struktura Kodu HTML</title>
    <link rel="shortcut icon" href="../img/profile.png">
    <link rel="stylesheet" href="../css/lessonsof.css">
    <link rel="stylesheet" href="../css/button.css">
    <link rel="stylesheet" href="../css/scrollbar.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
        .bg-dark2 {
            height: 120vh;
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
            <p class="logo">Lazy<span>Code</span></p>
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
                    <li><a href="lesson3.php">Struktura Kodu</a></li>
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
        </ul>
    </section>

    <section id="main">
        <section class="bg-dark2 text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
            <div class="container">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <div>
                        <h1>Struktura Kodu<span style="color:rgb(19, 87, 223);"> HTML</span>?</h1>
                        <h2>Szkielet strony internetowej</h2>
                        <p style="color:#ff1930">!!! Uwaga wszystkie znaczniki/elementy będą szegółowo opisane w lekcji:
                            <a href="lesson3.php">Znaczniki/Elementy</a> !!!
                        </p>
                        <p class="lead my-4">
                            Każda strona HTML zaczyna się od deklaracji typu dokumentu &lt;!DOCTYPE html&gt;,
                            informującej przeglądarkę o wersji HTML.
                            Następnie mamy główny element &lt;html&gt;, który zawiera całą zawartość strony.
                            Wewnątrz tego elementu znajdują się dwie główne sekcje: &lt;head&gt; i &lt;body&gt;.<br>

                            <br> <span style="color:#ffc400">&lt;head&gt;</span> to sekcja, która zawiera metadane,
                            takie jak
                            tytuł strony ("&lt;title&gt;"), linki do
                            arkuszy stylów CSS ("&lt;link&gt;"), skrypty JavaScript ("&lt;script&gt;") i inne
                            informacje, które
                            nie są bezpośrednio wyświetlane na stronie.
                            <br> <span style="color:#ffc400">&lt;body&gt;</span> to miejsce, gdzie umieszczamy wszystko,
                            co użytkownik widzi na stronie -
                            tekst,
                            obrazy,
                            wideo, formularze, przyciski i wiele innych elementów.
                        </p>

                        <hr id="hr">

                        <div class='K2_CBox'>
                            <div class='CB_Heading'>
                                <span style="color:#000000">Podstawy szkielet strony</span>
                                <button id='copy1' class='C_box_main' onclick="copyC('copy1','code1')">
                                    <i class='CBox_icn'></i>
                                </button>
                            </div>

                            <div id='code1'>
                                <pre>{
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Nazwa strony&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;/body&gt;
&lt;/html&gt;
}</pre>
                            </div>
                        </div>
                        <hr id="hr">
                        <p>Ten szkielet to punkt wyjścia do tworzenia dowolnego rodzaju strony internetowej. Jest on
                            podstawą, do której dodaje się kolejne elementy HTML, CSS i JavaScript, aby stworzyć
                            kompletną, interaktywną stronę.</p>
                        <a href="lesson4.php"><button class="button-65" role="button">Kolejna Lekcja</button></a>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <script src="../js/menu.js"></script>
    <script src="../js/code_box.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>
