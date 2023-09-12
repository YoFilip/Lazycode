<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LazyCode - Edytor Kodu</title>
    <link rel="shortcut icon" href="img/profile.png">
    <link rel="stylesheet" href="../css/lessonsof.css">
    <link rel="stylesheet" href="../css/button.css">
    <link rel="stylesheet" href="../css/scrollbar.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
        crossorigin="anonymous">
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
        <div class="theme-wrapper">
            <i class="bx bxs-moon theme-icon"></i>
            <p>Ciemny Motwy</p>
            <div class="theme-btn">
                <span class="theme-ball"></span>
            </div>
        </div>
    </section>

    <section id="main">
        <section class="bg-dark2 text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
            <div class="container">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <div>
                    <h1>Edytor<span style="color:rgb(19, 87, 223);"> Kodu</span>?</h1>
                        <h2>Visual Studio Code: Najlepszy Edytor Kodu dla Tworzenia Stron</h2>
                        <p class="lead my-4">
                            HTML, czyli HyperText Markup Language, to podstawowy język, który pozwala tworzyć strony
                            internetowe. HTML jest używany do strukturyzowaniatreści na stronie i może być uzupełniany
                            przez
                            CSS (Cascading Style Sheets) do stylizacji i JavaScript do dodawania interaktywności. HTML
                            składa
                            się z różnych elementów, zwanych również znacznikami. Znaczniki te definiują różne typy
                            zawartości,
                            takie jak nagłówki, paragrafy, listy,linki, obrazy, formularze itp. Przykładowo, tekst
                            umieszczony
                            pomiędzy znacznikami &lt;p&gt; To jest przykładowy kod HTML. &lt;/p&gt; zostanie wyświetlony
                            jako
                            paragraf na stronie internetowej o teści ,,To jest przykładowy kod HTML.".</p>

                        <hr id="hr">
                        <h2>Instalacja VS Code</h2><br>
                        <p><span style="color:#ffc400">Krok 1: Przejdź na stronę oficjalną Visual Studio
                                Code</span><br>

                            Rozpocznij proces instalacji, odwiedzając oficjalną stronę Visual Studio Code. Możesz to
                            zrobić, wpisując "Visual Studio Code" w wyszukiwarkę internetową lub bezpośrednio wchodząc
                            na <a href="https://code.visualstudio.com/Download">stronę instalacji</a><br><br>

                            <span style="color:#ffc400">Krok 2: Pobierz odpowiednią wersję VS Code dla swojego systemu
                                operacyjnego</span><br>

                            Na stronie pobierania Visual Studio Code znajdziesz opcje dla różnych systemów operacyjnych,
                            takich jak Windows, macOS i Linux.<br> <span style="color:#ff1930">!!! Upewnij się, że
                                wybrałeś
                                odpowiednią wersję dla swojego komputera !!!</span><br><br>

                            <span style="color:#ffc400">Krok 3: Uruchom plik instalacyjny VS Code</span><br>

                            Po pobraniu instalatora VS Code, otwórz plik instalacyjny. W większości przypadków wystarczy
                            dwukliknąć na plik, aby rozpocząć instalację. Może pojawić się monit o uprawnienia
                            administratora, jeśli instalujesz program na komputerze z systemem Windows.<br><br>

                            <span style="color:#ffc400">Krok 4: Postępuj zgodnie z kierowanymi krokami
                                instalatora</span><br>

                            Podczas instalacji V\S Code będziesz musiał zaakceptować warunki licencji. Zapoznaj się z
                            nimi uważnie i zaakceptuj, jeśli się zgadzasz. Następnie możesz mieć możliwość wybrania
                            lokalizacji instalacji na swoim dysku (opcjonalnie).<br><br>

                            <span style="color:#ffc400">Krok 5: Uruchom Visual Studio Codea</span><br>

                            Po zakończeniu instalacji, uruchom Visual Studio Code. Powinieneś zobaczyć nowoczesny i
                            przyjazny dla użytkownika interfejs. Teraz jesteś gotowy do rozpoczęcia pracy!<br><br>

                            Dzięki prostemu procesowi instalacji możesz teraz korzystać z potężnego narzędzia do pisania
                            i edytowania kodu. Visual Studio Code jest jednym z najpopularniejszych edytorów kodu,
                            cenionym przez programistów na całym świecie. Rozpocznij swoją przygodę z VS Code i odkryj,
                            jakie możliwości oferuje w pracy nad Twoimi projektami programistycznymi.
                        </p>


                        <hr id="hr">
                        <h3>Rozszerzenia VS Code</h3><br>
                        <p>Oto lista obowiązkowych rozszerzeń do Visual Studio Code, które są przydatne dla każdego
                            programisty:<br><br>


                            <span style="color:#ffc400;margin-bottom:8px;">Bracket Pair Colorizer 2:</span> Podświetla
                            nawiasy i inne pary
                            znaków w różnych kolorach, ułatwiając czytelność kodu.<br>


                            <span style="color:#ffc400;margin-bottom:8px;">ESLint:</span> Pomaga w zachowaniu
                            jednolitych standardów w
                            kodzie JavaScript poprzez wskazywanie na błędy i sugerowanie poprawek zgodnie z regułami
                            ESLint.<br>


                            <span style="color:#ffc400;margin-bottom:8px;">Prettier:</span> Automatycznie formatuje kod,
                            zapewniając spójny
                            styl bez konieczności ręcznego formatowania.<br>


                            <span style="color:#ffc400;margin-bottom:8px;">IntelliSense for CSS class names in
                                HTML:</span> Uzupełniający
                            podpowiedzi IntelliSense dla klas CSS w plikach HTML, co ułatwia pracę z klasami stylów.<br>


                            <span style="color:#ffc400;margin-bottom:8px;">Live Server:</span> Umożliwia szybkie
                            podglądanie stron
                            internetowych w czasie rzeczywistym z automatycznym odświeżaniem po zmianach.<br>


                            <span style="color:#ffc400;margin-bottom:8px;">Code Spell Checker:</span> Sprawdza pisownię
                            w plikach kodu, co
                            pomaga unikać błędów typograficznych i literówek.<br>


                            <span style="color:#ffc400;margin-bottom:8px;">Debugger for Chrome:</span> Umożliwia
                            debugowanie kodu
                            JavaScript/TypeScript za pomocą przeglądarki Google Chrome.<br>


                            <span style="color:#ffc400;margin-bottom:8px;">Rainbow CSV:</span> Ułatwia czytelność danych
                            w plikach CSV
                            poprzez kolorowanie komórek w zależności od kolumny.<br>


                            <span style="color:#ffc400;margin-bottom:8px;">TODO Highlight:</span> Wyróżnia znaczniki
                            TODO, FIXME i innych
                            zadań, które muszą zostać zrealizowane, ułatwiając śledzenie zadań do wykonania.<br>


                            <span style="color:#ffc400;margin-bottom:8px;">Docker:</span> Daje wsparcie dla pracy z
                            kontenerami Docker.<br>


                            <span style="color:#ffc400;margin-bottom:8px;">Code Runner:</span> Umożliwia uruchamianie
                            fragmentów kodu w
                            różnych językach programowania bezpośrednio z edytora.<br>

                        </p>

                        <hr id="hr">
                        <a href="lesson2.php"><button class="button-65" role="button">Kolejna Lekcja</button></a>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <script src="../js/menu.js"></script>
    <script src="../js/code.box.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>
