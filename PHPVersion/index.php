<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>LSolutions</title>
</head>
<body>
<header>
    <a href="#" class="logo">Linda Solutions</a>
    <div class="nav">
        <a class="nav-text"><label class="search-label">
                <input placeholder="Hledat..." type="text" class="search-box">
            </label></a>
        <a onclick="notifyClick()" class="nav-text">Ozn&aacute;men&iacute;</a>
        <a href="pages/favourite.html" class="nav-text">Obl&iacute;ben&eacute;</a>
        <a href="pages/profile.html" class="nav-text">Profil</a>
        <a href="pages/cart.html" class="nav-text">Ko&scaron;&iacute;k</a>
    </div>
    <div onclick="burgerClick()" class="nav-text-burger"><img class="burger" src="img/burger.svg" alt=""></div>
    <div id="drop" class="drop-down">
        <a class="drop-text"><label class="search-label">
                <input placeholder="Hledat..." type="text" class="search-box">
            </label></a>
        <a onclick="notifyClick()" class="drop-text">Ozn&aacute;men&iacute;</a>
        <a href="pages/favourite.html" class="drop-text">Obl&iacute;ben&eacute;</a>
        <a href="pages/profile.html" class="drop-text">Profil</a>
        <a href="pages/cart.html" class="drop-text">Ko&scaron;&iacute;k</a>
    </div>
    <div id="notify" class="drop-notify">
        <a class="notify-text">Ozn&aacute;men&iacute;</a>
        <a class="notify-text">Ozn&aacute;men&iacute;</a>
        <a class="notify-text">Ozn&aacute;men&iacute;</a>
        <a class="notify-text">Ozn&aacute;men&iacute;</a>
    </div>
</header>
<main class="banner">
    <img class="banner-img" alt="banner" src="img/img.png">
    <div id="banner-text" class="banner-text">
        <h1>Ve&scaron;ker&eacute; elektronick&eacute; produkty</h1>
        <div class="buttons">
            <button class="btn-1">ZJISTIT V&Iacute;CE</button>
            <button class="btn-2">CATEGORIE</button>
        </div>
    </div>
</main>
<main class="mid-section">
    <section class="subsection-mid">
        <img class="section-img" src="img/icon-03.svg" alt="img">
        <div class="section-text-heading">Nejlep&scaron;&iacute; ceny</div>
        <div class="section-text">Srovn&aacute;v&aacute;me ceny s konkurenc&iacute;!
        </div>
    </section>
    <section class="subsection-mid">
        <img class="section-img" src="img/icon-02.svg" alt="img">
        <div class="section-text-heading">Včasn&eacute; doručen&iacute;</div>
        <div class="section-text">Kompenzujeme z&aacute;kazn&iacute;ky při zpozděn&iacute;!</div>
    </section>
    <section class="subsection-mid">
        <img class="section-img" src="img/icon-01.svg" alt="img">
        <div class="section-text-heading">Vždy nabl&iacute;zku</div>
        <div class="section-text">Pobočky po cel&eacute; republice!</div>
    </section>
</main>
<main class="lower-mid-section">
    <section class="subsection-wrapper">
        <section class="subsection-lower">
            <img class="subsection-img" src="img/pcb.jpg" alt="">
            <div class="subsection-column">
                <div class="subsection-text-heading">Micro souč&aacute;stky</div>
                <div class="subsection-text">Vysok&yacute; v&yacute;běr micro-poč&iacute;tačů pro dom&aacute;c&iacute; i
                    profesion&aacute;ln&iacute; bastl&iacute;ře
                </div>
                <button class="btn-1">MICRO-PC</button>
            </div>
        </section>
    </section>
    <section class="subsection-wrapper-light">
        <section class="subsection-lower">
            <div class="subsection-column">
                <div class="subsection-text-heading">Poč&iacute;tače</div>
                <div class="subsection-text">Sestaven&eacute; poč&iacute;tačov&eacute; sestavy a vychyt&aacute;vky pro
                    nen&aacute;ročn&eacute; uživatele
                </div>
                <button class="btn-1">POČ&Iacute;TAČE</button>
            </div>
            <img class="subsection-img" src="img/pc.jpg" alt="">
        </section>
    </section>
    <section class="subsection-wrapper-orange">
        <section class="subsection-lower">
            <img class="subsection-img" src="img/household.png" alt="">
            <div class="subsection-column">
                <div class="subsection-text-heading">Pro dom&aacute;cnost</div>
                <div class="subsection-text">Vychyt&aacute;vky pro chytrou a automatizovanou dom&aacute;cnost
                </div>
                <button class="btn-1 borders">DOM&Aacute;CNOST</button>
            </div>
        </section>
    </section>
</main>
<main class="bottom-section">
    <section class="testimony">
        <div class="testimony-container">
            <div class="individual">
                <img class="individual-icon" alt="" src="img/team-03.jpg">
                <div class="individual-text">Lorem ipsum dolor sit amet. Est explicabo esse est porro illum ab eius
                    recusandae?
                </div>
                <div class="individual-text">JANET MORRIS</div>
            </div>
            <div class="individual">
                <img class="individual-icon" alt="" src="img/team-02.jpg">
                <div class="individual-text">Lorem ipsum dolor sit amet. Est explicabo esse est porro illum ab eius
                    recusandae?
                </div>
                <div class="individual-text">WILLIE BROWN</div>
            </div>
            <div class="individual">
                <img class="individual-icon" alt="" src="img/team-01.jpg">
                <div class="individual-text">Lorem ipsum dolor sit amet. Est explicabo esse est porro illum ab eius
                    recusandae?
                </div>
                <div class="individual-text">SEAN FISHER</div>
            </div>
        </div>
    </section>
    <section class="work-wrapper">
        <div class="work">
            <div class="work-text-heading">Přidejte se k n&aacute;m</div>
            <div class="work-text">Pojďte nabrat zku&scaron;enosti z mlad&eacute;ho kolektivu pracuj&iacute;c&iacute;m v
                inovativn&iacute;
                m a modern&iacute;m
                prostřed&iacute;
            </div>
            <button class="btn-1 borders">NAB&Iacute;DKA</button>
        </div>
    </section>
</main>
<footer>
    <div class="feedback">
        <div class="feedback-text">Daniel Linda</div>
        <div class="feedback-subtext">Středn&iacute; průmyslov&aacute; &scaron;kola Ječn&aacute; 2024</div>
    </div>
</footer>
</body>
</html>
