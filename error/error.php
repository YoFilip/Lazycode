<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LazyCode</title>
    <link rel="shortcut icon" href="img/profile.png">
    <link rel="stylesheet" href="../css/lessonsof.css" />
    <link rel="stylesheet" href="../css/button.css" />
    <link rel="stylesheet" href="../css/scrollbar.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <style>
    #bg-dark2 h1 {
        text-align: center;
        margin-top: 400px;
    }

    .bg-dark2 {
        height: 1300px;
    }

    @media only screen and (max-width: 600px) {
        .bg-dark2 {
            height: 1300px;
        }

        #bg-dark2 h1 {
            text-align: center;
            margin-top: 300px;
            margin-left: 10px;
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
                    <li><a href="../php/lesson1.php">Edytor Kodu</a></li>
                    <li><a href="../php/lesson2.php">Co to HTML?</a></li>
                    <li><a href="../php/lesson3.php">Struktura Kodu</a></li>
                    <li><a href="../php/lesson4.php">Elementy</a></li>
                    <li><a href="../php/lesson5.php">Atrybuty</a></li>
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
            <li><a href="error.php">Co to CSS?</a></li>
            <li><a href="error.php">Edytor Kodu</a></li>
            <li><a href="error.php">Elementy</a></li>
            <li><a href="error.php">Atrybuty</a></li>
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
            <li><a href="error.php">Co to JS?</a></li>
            <li><a href="error.php">Edytor Kodu</a></li>
            <li><a href="error.php">Elementy</a></li>
            <li><a href="error.php">Atrybuty</a></li>
        </ul>

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

    <section class="bg-dark2 text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start" id="bg-dark2">
        <h1>Strona w Budowie</h1>
    </section>

    <script src="../js/menu.js"></script>
    <script src="../js/code.box.js"></script>
    <script src="../js/list.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
