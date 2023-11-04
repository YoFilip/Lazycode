<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LazyCode - Znaczniki i Elementy HTML?</title>
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
                        <h1>Znaczniki i Elementy<span style="color:rgb(19, 87, 223);"> HTML</span>?</h1>
                        <h2>Znaczniki, Elementy</h2>
                        <p class="lead my-4">
                        HTML (HyperText Markup Language) składa się z różnych znaczników lub elementów, które
                            określają strukturę i zawartość strony. Każdy znacznik jest otwierany za pomocą symbolu "<"
                                i zamykany za pomocą symbolu ">", większość zamyka się za pomocą &lt;/nazwa_elementu&gt; lecz są tego wyjątki. Pomiędzy znacznikami znajduje się zawartość strony.
                                Znaczniki HTML pozwalają tworzyć hierarchię strony i nadają znaczenie różnym fragmentom
                                zawartości. Dzięki nim możemy nadawać nagłówkom większą wagę dla wyszukiwarek
                                internetowych, linkować do innych stron, wstawiać multimedia i wiele więcej. </p>

                                <hr id="hr">


                                <p>Oto lista podstawowych znaczników HTML wraz z krótkim opisem:<br><br></p>
                                <p style="color:#ff1930">!!! Uwaga wszystkie znaczniki/elementy od &lt;h1&gt; -
                                    &lt;h6&gt; w dół umieszczamy w &lt;body&gt; !!!
                                <div class='K2_CBox'>
                                    <div class='CB_Heading'>
                                        <span style="color:#000000">Znacznik &lt;html&gt;</span>
                                        <button id='copy1' class='C_box_main' onclick="copyC('copy1','code1')">
                                            <i class='CBox_icn'></i>
                                        </button>
                                    </div>

                                    <div id='code1'>
                                        <pre>{
&lt;html&gt;
&lt;!-- Zawartość strony --&gt;
&lt;/html&gt;
}</pre>
                                    </div>
                                </div>
                                <span style="color:#ffc400">&lt;head&gt;:</span> Sekcja zawierająca metadane, takie
                                jak tytuł strony, linki do arkuszy stylów CSS i skrypty JavaScript.<br>
                                <div class='K2_CBox'>
                                    <div class='CB_Heading'>
                                        <span style="color:#000000">Znacznik &lt;head&gt;</span>
                                        <button id='copy2' class='C_box_main' onclick="copyC('copy2','code2')">
                                            <i class='CBox_icn'></i>
                                        </button>
                                    </div>

                                    <div id='code2'>
                                        <pre>{
&lt;head&gt;
&lt;!-- Zawartość strony --&gt;
&lt;/head&gt;
}</pre>
                                    </div>
                                </div>
                                <span style="color:#ffc400">&lt;title&gt;:</span> Określa tytuł strony, który
                                pojawia się na pasku przeglądarki.<br>
                                <div class='K2_CBox'>
                                    <div class='CB_Heading'>
                                        <span style="color:#000000">Znacznik &lt;title&gt;</span>
                                        <button id='copy3' class='C_box_main' onclick="copyC('copy3','code3')">
                                            <i class='CBox_icn'></i>
                                        </button>
                                    </div>

                                    <div id='code3'>
                                        <pre>{
&lt;head&gt;
&lt;title&gt;Tutuł strony&lt;/title&gt;
&lt;/head&gt;
}</pre>
                                    </div>
                                </div>
                                <span style="color:#ffc400">&lt;body&gt;:</span> Element zawierający widoczną
                                zawartość strony, taką jak tekst, obrazy i media.<br>
                                <div class='K2_CBox'>
                                    <div class='CB_Heading'>
                                        <span style="color:#000000">Znacznik &lt;body&gt;</span>
                                        <button id='copy4' class='C_box_main' onclick="copyC('copy4','code4')">
                                            <i class='CBox_icn'></i>
                                        </button>
                                    </div>

                                    <div id='code4'>
                                        <pre>{
&lt;body&gt;
&lt;!-- Zawartość strony --&gt;
&lt;/body&gt;
}</pre>
                                    </div>
                                </div>
                                <span style="color:#ffc400">&lt;h1&gt; - &lt;h6&gt;:</span> Nagłówki o różnych
                                poziomach ważności, gdzie &lt;h1&gt; to najważniejszy.<br>
                                <div class='K2_CBox'>
                                    <div class='CB_Heading'>
                                        <span style="color:#000000">Znacznik &lt;h1&gt; - &lt;h6&gt;</span>
                                        <button id='copy5' class='C_box_main' onclick="copyC('copy5','code5')">
                                            <i class='CBox_icn'></i>
                                        </button>
                                    </div>

                                    <div id='code5'>
                                        <pre>{
&lt;h1&gt;Treść nagłówka&lt;/h1&gt;
&lt;h2&gt;Treść nagłówka&lt;/h2&gt;
&lt;h3&gt;Treść nagłówka&lt;/h3&gt;
&lt;h4&gt;Treść nagłówka&lt;/h4&gt;
&lt;h5&gt;Treść nagłówka&lt;/h5&gt;
&lt;h6&gt;Treść nagłówka&lt;/h6&gt;
}</pre>
                                    </div>
                                </div>
                                <span style="color:#ffc400">&lt;p&gt;:</span> Znacznik do tworzenia akapitów
                                tekstu.<br>
                                <div class='K2_CBox'>
                                    <div class='CB_Heading'>
                                        <span style="color:#000000">Znacznik &lt;p&gt;</span>
                                        <button id='copy6' class='C_box_main' onclick="copyC('copy6','code6')">
                                            <i class='CBox_icn'></i>
                                        </button>
                                    </div>

                                    <div id='code6'>
                                        <pre>{
&lt;p&gt;Treść akapiutu&lt;/p&gt;
}</pre>
                                    </div>
                                </div>
                                <span style="color:#ffc400">&lt;a&gt;:</span> Tworzy hiperłącza, które prowadzą do
                                innych stron lub zasobów.<br>
                                <div class='K2_CBox'>
                                    <div class='CB_Heading'>
                                        <span style="color:#000000">Znacznik &lt;a&gt;</span>
                                        <button id='copy7' class='C_box_main' onclick="copyC('copy7','code7')">
                                            <i class='CBox_icn'></i>
                                        </button>
                                    </div>

                                    <div id='code7'>
                                        <pre>{
&lt;a href="https://lazycode.projectsclassf.pl"&gt;Treść&lt;/a&gt;
}</pre>
                                    </div>
                                </div>
                                <span style="color:#ffc400">&lt;img&gt;:</span> Używany do wyświetlania obrazów na
                                stronie.<br>
                                <div class='K2_CBox'>
                                    <div class='CB_Heading'>
                                        <span style="color:#000000">Znacznik &lt;img&gt;</span>
                                        <button id='copy8' class='C_box_main' onclick="copyC('copy8','code8')">
                                            <i class='CBox_icn'></i>
                                        </button>
                                    </div>

                                    <div id='code8'>
                                        <pre>{
&lt;img src="ścieżka_do_pliku"&gt;
}</pre>
                                    </div>
                                </div>
                                <span style="color:#ffc400">&lt;ul&gt;:</span> Tworzy listy nienumerowane.<br>
                                <div class='K2_CBox'>
                                    <div class='CB_Heading'>
                                        <span style="color:#000000">Znacznik &lt;ul&gt;</span>
                                        <button id='copy9' class='C_box_main' onclick="copyC('copy9','code9')">
                                            <i class='CBox_icn'></i>
                                        </button>
                                    </div>

                                    <div id='code9'>
                                        <pre>{
&lt;ul&gt;
&lt;/ul&gt;
}</pre>
                                    </div>
                                </div>
                                <span style="color:#ffc400">&lt;ol&gt;:</span> Tworzy listy numerowane.<br>
                                <div class='K2_CBox'>
                                    <div class='CB_Heading'>
                                        <span style="color:#000000">Znacznik &lt;ol&gt;</span>
                                        <button id='copy10' class='C_box_main' onclick="copyC('copy10','code10')">
                                            <i class='CBox_icn'></i>
                                        </button>
                                    </div>

                                    <div id='code10'>
                                        <pre>{
&lt;ol&gt;
&lt;/ol&gt;
}</pre>
                                    </div>
                                </div>
                                <span style="color:#ffc400">&lt;li&gt;:</span> Elementy listy używane wewnątrz
                                &lt;ul&gt; lub &lt;ol&gt;.<br>
                                <div class='K2_CBox'>
                                    <div class='CB_Heading'>
                                        <span style="color:#000000">Znacznik &lt;li&gt;</span>
                                        <button id='copy11' class='C_box_main' onclick="copyC('copy11','code11')">
                                            <i class='CBox_icn'></i>
                                        </button>
                                    </div>

                                    <div id='code11'>
                                        <pre>{
&lt;li&gt;
&lt;/li&gt;
}</pre>
                                    </div>
                                </div>
                                <span style="color:#ffc400">&lt;div&gt;:</span> Kontener służący do grupowania
                                innych elementów i tworzenia bloków.<br>
                                <div class='K2_CBox'>
                                    <div class='CB_Heading'>
                                        <span style="color:#000000">Znacznik &lt;div&gt;</span>
                                        <button id='copy12' class='C_box_main' onclick="copyC('copy12','code12')">
                                            <i class='CBox_icn'></i>
                                        </button>
                                    </div>

                                    <div id='code12'>
                                        <pre>{
&lt;div&gt;
&lt;/div&gt;
}</pre>
                                    </div>
                                </div>
                                <span style="color:#ffc400">&lt;span&gt;:</span> Podobnie jak &lt;div&gt;, ale służy
                                do stylizacji fragmentów tekstu lub grupowania elementów inline.<br>
                                <div class='K2_CBox'>
                                    <div class='CB_Heading'>
                                        <span style="color:#000000">Znacznik &lt;span&gt;</span>
                                        <button id='copy13' class='C_box_main' onclick="copyC('copy13','code13')">
                                            <i class='CBox_icn'></i>
                                        </button>
                                    </div>

                                    <div id='code13'>
                                        <pre>{
&lt;span&gt;Treść&lt;/span&gt;
}</pre>
                                    </div>
                                </div>
                                <span style="color:#ffc400">&lt;table&gt;:</span> Tworzy tabele na stronie.<br>
                                <div class='K2_CBox'>
                                    <div class='CB_Heading'>
                                        <span style="color:#000000">Przykładowa tabela wykożystująca &lt;table&gt; oraz
                                            znaczniki poniżej</span>
                                        <button id='copy14' class='C_box_main' onclick="copyC('copy14','code14')">
                                            <i class='CBox_icn'></i>
                                        </button>
                                    </div>

                                    <div id='code14'>
                                        <pre>{
&lt;table&gt;
   &lt;tr&gt;
      &lt;td&gt;1&lt;/td&gt; &lt;td&gt;2&lt;/td&gt; &lt;td&gt;3&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr&gt;
      &lt;td&gt;4&lt;/td&gt; &lt;td&gt;5&lt;/td&gt; &lt;td&gt;6&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr&gt;
      &lt;td&gt;7&lt;/td&gt; &lt;td&gt;8&lt;/td&gt; &lt;td&gt;9&lt;/td&gt;
   &lt;/tr&gt;
&lt;/table&gt;
}</pre>
                                    </div>
                                </div>
                                <span style="color:#ffc400">&lt;tr&gt;:</span> Wiersze tabeli.<br>
                                <div class='K2_CBox'>
                                    <div class='CB_Heading'>
                                        <span style="color:#000000">Znacznik &lt;tr&gt;</span>
                                        <button id='copy15' class='C_box_main' onclick="copyC('copy15','code15')">
                                            <i class='CBox_icn'></i>
                                        </button>
                                    </div>

                                    <div id='code15'>
                                        <pre>{
&lt;tr&gt;
&lt;/tr&gt;
}</pre>
                                    </div>
                                </div>
                                <span style="color:#ffc400">&lt;td&gt;:</span> Komórki tabeli.<br>
                                <div class='K2_CBox'>
                                    <div class='CB_Heading'>
                                        <span style="color:#000000">Znacznik &lt;td&gt;</span>
                                        <button id='copy16' class='C_box_main' onclick="copyC('copy16','code16')">
                                            <i class='CBox_icn'></i>
                                        </button>
                                    </div>

                                    <div id='code16'>
                                        <pre>{
&lt;td&gt;
&lt;/td&gt;
}</pre>
                                    </div>
                                </div>
                                <span style="color:#ffc400">&lt;th&gt;:</span> Nagłówki komórek tabeli.<br>
                                <div class='K2_CBox'>
                                    <div class='CB_Heading'>
                                        <span style="color:#000000">Znacznik &lt;th&gt;</span>
                                        <button id='copy17' class='C_box_main' onclick="copyC('copy17','code17')">
                                            <i class='CBox_icn'></i>
                                        </button>
                                    </div>

                                    <div id='code17'>
                                        <pre>{
&lt;th&gt;
&lt;/th&gt;
}</pre>
                                    </div>
                                </div>
                                <span style="color:#ffc400">&lt;form&gt;:</span> Tworzy formularze do przesyłania
                                danych na serwer.<br>
                                <div class='K2_CBox'>
                                    <div class='CB_Heading'>
                                        <span style="color:#000000">Znacznik &lt;form&gt;</span>
                                        <button id='copy18' class='C_box_main' onclick="copyC('copy18','code18')">
                                            <i class='CBox_icn'></i>
                                        </button>
                                    </div>

                                    <div id='code18'>
                                        <pre>{
&lt;form&gt;
&lt;/form&gt;
}</pre>
                                    </div>
                                </div>
                                <span style="color:#ffc400">&lt;input&gt;:</span> Pole do wprowadzania danych w
                                formularzu.<br>
                                <div class='K2_CBox'>
                                    <div class='CB_Heading'>
                                        <span style="color:#000000">Znacznik &lt;input&gt;</span>
                                        <button id='copy19' class='C_box_main' onclick="copyC('copy19','code19')">
                                            <i class='CBox_icn'></i>
                                        </button>
                                    </div>

                                    <div id='code19'>
                                        <pre>{
&lt;input &lt;!-- np. type="submit" value="Submit" --&gt;&gt;
}</pre>
                                    </div>
                                </div>
                                <span style="color:#ffc400">&lt;button&gt;:</span> Przycisk umożliwiający wysyłanie
                                formularza.<br>
                                <div class='K2_CBox'>
                                    <div class='CB_Heading'>
                                        <span style="color:#000000">Znacznik &lt;button&gt;</span>
                                        <button id='copy20' class='C_box_main' onclick="copyC('copy20','code20')">
                                            <i class='CBox_icn'></i>
                                        </button>
                                    </div>

                                    <div id='code20'>
                                        <pre>{
&lt;button&gt;Treść Przycisku&lt;/button&gt;
}</pre>
                                    </div>
                                </div>
                        </p>
                        <hr id="hr">

                        <p>Jak wspomniano, powyżej HTML posiada hierarchię znaczników/elementów, która
                            znajduje się poniżej:</p>

                        <div class='K2_CBox'>
                            <div class='CB_Heading'>
                                <span style="color:#000000">Hierarchia HTML (Od góry do dołu)</span>
                                <button id='copy21' class='C_box_main' onclick="copyC('copy21','code21')">
                                    <i class='CBox_icn'></i>
                                </button>
                            </div>
                            <div id='code21'>
                                <pre>{
&lt;html&gt; 
&lt;head&gt;
&lt;title&gt;
&lt;body&gt;
&lt;h1&gt;-&lt;h6&gt;
&lt;p&gt;
&lt;a&gt;
&lt;img&gt;
&lt;ul&gt;
&lt;li&gt;
&lt;ol&gt;
&lt;li&gt;
&lt;div&gt;
&lt;span&gt;
&lt;table&gt;
&lt;tr&gt;
&lt;th&gt;
&lt;td&gt;
&lt;form&gt;
&lt;input&gt;
&lt;button&gt;
    }</pre>
                            </div>
                        </div>
                        <hr id="hr">
                        <p>Nauka podstawowych znaczników HTML jest niezbędna dla każdego, kto chce tworzyć
                            strony internetowe. To prosta, ale potężna umiejętność, która otwiera drzwi do
                            rozwoju w świecie tworzenia treści online.</p>
                        <a href="lesson5.php"><button class="button-65" role="button">Kolejna Lekcja</button></a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <script src="../js/menu.js"></script>
    <script src="../js/code_box.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>
