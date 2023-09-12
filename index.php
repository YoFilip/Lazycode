<?php
if(isset($_COOKIE["visited"])) {
    $welcome_message = "Witaj ponownie w ";
} else {
    setcookie("visited", "1", time() + (86400 * 30), "/");
    $welcome_message = "Witaj w ";
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LazyCode</title>
    <link rel="shortcut icon" href="img/profile.png">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/scrollbar.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
    <style>
    .i_button {
        position: relative;
        background: #444;
        color: #fff;
        text-decoration: none;
        text-transform: uppercase;
        border: none;
        letter-spacing: 0.1rem;
        font-size: 1rem;
        padding: 1rem 3rem;
        transition: 0.2s;
        font-weight: bold;
    }

    .i_button:hover {
        letter-spacing: 0.2rem;
        padding: 1.1rem 3.1rem;
        background: rgb(19, 87, 223);
        color: rgb(19, 87, 223);
        animation: box 3s infinite;
        font-weight: bold;
    }

    .i_button::before {
        content: "";
        position: absolute;
        inset: 2px;
        background: #272822;
    }

    .i_button span {
        position: relative;
        z-index: 1;
    }

    .i_button i {
        position: absolute;
        inset: 0;
        display: block;
    }

    .i_button i::before {
        content: "";
        position: absolute;
        width: 10px;
        height: 2px;
        left: 80%;
        top: -2px;
        border: 2px solid rgb(19, 87, 223);
        background: rgb(19, 87, 223);
        transition: 0.2s;
    }

    .i_button:hover i::before {
        width: 15px;
        left: 20%;
        animation: move 3s infinite;
    }

    .i_button i::after {
        content: "";
        position: absolute;
        width: 10px;
        height: 2px;
        left: 20%;
        bottom: -2px;
        border: 2px solid rgb(19, 87, 223);
        background: #272822;
        transition: 0.2s;
    }

    .i_button:hover i::after {
        width: 15px;
        left: 80%;
        animation: move 3s infinite;
    }

    @keyframes move {
        0% {
            transform: translateX(0);
        }

        50% {
            transform: translateX(5px);
        }

        100% {
            transform: translateX(0);
        }
    }

    @keyframes box {
        0% {
            box-shadow: rgb(19, 87, 223);
        }

        50% {
            box-shadow: 0 0 25px rgb(19, 87, 223);
        }

        100% {
            box-shadow: rgb(19, 87, 223);
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
                <a href="index.php">
                    <i class='bx bx-home-alt-2'></i>
                    <span class="title">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>

            <li class="dropdown">
        <a class="dropdown-btn" data-list="html">
            <i class="bx bx-dock-left"></i>
            <span class="title">HTML</span>
            <span class="arrow-container">
                <i class="bx bx-chevron-down arrow" style="margin-left:85px;"></i>
                <i class="bx bx-chevron-up arrow" style="display: none;margin-left:85px;"></i>
            </span>
        </a>
        <ul class="dropdown-content" data-list="html">
            <li><a href="php/lesson1.php">Edytor Kodu</a></li>
            <li><a href="php/lesson2.php">Co to HTML?</a></li>
            <li><a href="php/lesson3.php">Struktura Kodu</a></li>
            <li><a href="php/lesson4.php">Elementy</a></li>
            <li><a href="php/lesson5.php">Atrybuty</a></li>
        </ul>
    </li>

    <li class="dropdown">
        <a class="dropdown-btn" data-list="css">
            <i class="bx bx-dock-left"></i>
            <span class="title">CSSㅤ</span>
            <span class="arrow-container">
                <i class="bx bx-chevron-down arrow" style="margin-left:86px;"></i>
                <i class="bx bx-chevron-up arrow" style="display: none;margin-left:86px;"></i>
            </span>
        </a>
        <ul class="dropdown-content" data-list="css">
            <li><a href="error/error.php">Co to CSS?</a></li>
            <li><a href="error/error.php">Edytor Kodu</a></li>
            <li><a href="error/error.php">Elementy</a></li>
            <li><a href="error/error.php">Atrybuty</a></li>
        </ul>
    </li>

    <li class="dropdown">
        <a class="dropdown-btn" data-list="js">
            <i class="bx bx-dock-left"></i>
            <span class="title">JSㅤㅤ</span>
            <span class="arrow-container">
                <i class="bx bx-chevron-down arrow" style="margin-left:84px;"></i>
                <i class="bx bx-chevron-up arrow" style="display: none;margin-left:84px;"></i>
            </span>
        </a>
        <ul class="dropdown-content" data-list="js">
            <li><a href="error/error.php">Co to JS?</a></li>
            <li><a href="error/error.php">Edytor Kodu</a></li>
            <li><a href="error/error.php">Elementy</a></li>
            <li><a href="error/error.php">Atrybuty</a></li>
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
    <section class="bg-dark2 text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start" style=".bg-dark {
    background-color: none">
            <div class="container">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <div>
                        <h1>
                            <?php echo $welcome_message; ?>
                            Lazy<span style="color:rgb(19, 87, 223);">Code</span></h1>
                        <p class="lead my-4">
                            Twoja przygoda z programowaniem zaczyna się tutaj! LazyCode to Twoja platforma do nauki
                            kodowania. Bez względu na to, czy jesteś początkującym czy doświadczony programistą,
                            znajdziesz tu coś dla siebie. Zacznij swoją podróż z LazyCode już dziś!
                        </p>
                    </div>
                    <img style="width:400px; height:400px;margin-bottom:20px;" class="img-fluid w-50 d-none d-sm-block"
                        src="img/photo1.webp" alt="" />
                </div>
            </div>
        </section>

        <!-- Learn Sections -->
        <section id="learn" class="p-5">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md">
                        <img src="img/photo2.svg" class="img-fluid" alt="" />
                    </div>
                    <div class="col-md p-5">
                        <h2><b>Ucz się szybko i łatwo</b></h2>
                        <p class="lead">
                            Z LazyCode, nauka kodowania nigdy nie była prostsza! Nasze interaktywne kursy są
                            zaprojektowane tak, aby szybko i łatwo
                            zrozumieć języki programowania takie jak HTML, CSS, JavaScript i PHP. Zacznij swoją przygodę
                            z programowaniem już dziś i
                            przekonaj się, jak proste to może być z LazyCode!
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="learn" class="p-5 bg-dark2 text-light">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md p-5">
                        <h2 style="color:rgb(19, 87, 223)"><b>Naucz się HMTL i CSS</b></h2>
                        <p class="lead">
                            Chcesz stworzyć własną stronę internetową? Zacznij od naszego kursu HTML! W przystępny
                            sposób przekażemy Ci podstawy tego niezbędnego języka.
                            Po jego opanowaniu, zapraszamy do nauki CSS, JavaScript i PHP. Zacznij swoją przygodę z
                            programowaniem
                            już dziś z LazyCode!
                        </p>
                        <br>
                        <a class="i_button" href="php/lesson1.php"><span>Czytam</span><i></i></a>
                    </div>
                    <div class="col-md">
                        <img src="img/photo3.png" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </section>



        <!-- Question Sections -->
        <section id="questions" class="p-5">
            <div class="container">
                <h2 class="text-center mb-4"><b>Najczęściej zadawane pytania</b></h2>
                <div class="accordion accordion-flush" id="questions">
                    <!-- Item 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#question-one">
                                <b>Czym jest LazyCode?</b>
                            </button>
                        </h2>
                        <div id="question-one" class="accordion-collapse collapse" data-bs-parent="#questions">
                            <div class="accordion-body">
                                <b>LazyCode to internetowe środowisko dla programistów i nie tylko, które umożliwia
                                    naukę języków programowania, takich jak HTML, CSS, JS, PHP, C++, itp. oraz ich
                                    szybką formę powtórki w łatwy i
                                    szybki sposób.</b>
                            </div>
                        </div>
                    </div><br>
                    <!-- Item 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#question-two">
                                <b>Czy korzystanie z LazyCode jest płatne?</b>
                            </button>
                        </h2>
                        <div id="question-two" class="accordion-collapse collapse" data-bs-parent="#questions">
                            <div class="accordion-body">
                                <b>Nie, korzystanie z LazyCode jest całkowicie darmowe! Oferujemy naukę programowania w
                                    wielu językach bez żadnych opłat. Naszą misją jest zapewnienie dostępu do wiedzy
                                    wszystkim zainteresowanym, bez względu na ich sytuację finansową.</b>
                            </div>
                        </div>
                    </div><br>
                    <!-- Item 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#question-three">
                                <b>Jakie języki programowania są obecnie dostępne na LazyCode?</b>
                            </button>
                        </h2>
                        <div id="question-three" class="accordion-collapse collapse" data-bs-parent="#questions">
                            <div class="accordion-body">
                                <b>Obecnie na LazyCode znajduje się kurs HTML, ponieważ nasza strona jest w fazie
                                    aktywnego rozwoju. Nasza zespół developerski pracuje nad tworzeniem treści dla
                                    kolejnych języków, w tym CSS, JS, C++, PHP, i innych. Wkrótce będziemy sukcesywnie
                                    dodawać nowe kursy, aby zapewnić jeszcze bogatszą ofertę nauki programowania.
                                    Dziękujemy za cierpliwość i zachęcamy do regularnego odwiedzania strony, aby być na
                                    bieżąco z naszymi postępami!</b>
                            </div>
                        </div>
                    </div><br>
                    <!-- Item 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#question-four">
                                <b>Czy LazyCode to tylko dla doświadczonych programistów?</b>
                            </button>
                        </h2>
                        <div id="question-four" class="accordion-collapse collapse" data-bs-parent="#questions">
                            <div class="accordion-body">
                                <b>Absolutnie nie! LazyCode jest odpowiednie zarówno dla początkujących, którzy dopiero
                                    zaczynają swoją przygodę z programowaniem, jak i dla bardziej doświadczonych osób,
                                    które chcą poszerzyć swoje umiejętności.</b>
                            </div>
                        </div>
                    </div><br>
                    <!-- Item 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#question-five">
                                <b>Czy nauczenie się języków programowania na LazyCode jest łatwe?</b>
                            </button>
                        </h2>
                        <div id="question-five" class="accordion-collapse collapse" data-bs-parent="#questions">
                            <div class="accordion-body">
                                <b>Tak, nasza platforma skupia się na łatwości nauki. Kursy są zaprojektowane w sposób
                                    przystępny i
                                    zrozumiały, dzięki czemu każdy może szybko opanować podstawy i bardziej zaawansowane
                                    techniki
                                    programowania.</b>
                            </div>
                        </div>
                    </div><br>
                    <!-- Item 6 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#question-six">
                                <b>Czy LazyCode oferuje wsparcie dla użytkowników?</b>
                            </button>
                        </h2>
                        <div id="question-six" class="accordion-collapse collapse" data-bs-parent="#questions">
                            <div class="accordion-body">
                                <b>Tak, jesteśmy gotowi pomóc naszym użytkownikom. Chętnie odpowiadamy na pytania i
                                    udzielamy wsparcia
                                    w miarę naszych możliwości. Możesz skontaktować się z nami za pomocą <a
                                        href="https://discord.gg/vSZwgZPaVg">Discord Lazy Code</a></b>
                            </div>
                        </div>
                    </div><br>

                    <!-- Item 7 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#question-seven">
                                <b>Czy LazyCode coś kosztuje?</b>
                            </button>
                        </h2>
                        <div id="question-seven" class="accordion-collapse collapse" data-bs-parent="#questions">
                            <div class="accordion-body">
                                <b>Nie, korzystanie z LazyCode jest całkowicie darmowe! Nasza misja to umożliwienie jak
                                    największej
                                    liczbie osób nauki programowania, dlatego oferujemy kursy języków takich jak HTML,
                                    CSS, JavaScript,
                                    PHP i wiele innych zupełnie za darmo. Wierzymy, że wiedza powinna być dostępna dla
                                    wszystkich i nie
                                    chcemy, aby finanse były barierą dla tych, którzy chcą się nauczyć kodować.
                                    Jednakże, jeśli chcesz
                                    wesprzeć naszą misję, zawsze doceniamy dobrowolne donacje!</b>
                            </div>
                        </div>
                    </div><br>

                </div>
            </div>
            </div>
        </section>
    </section>
    <script src="js/menu.js"></script>
    <script src="js/theme.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
