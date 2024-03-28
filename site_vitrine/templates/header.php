<div style="width:100%;position:fixed;height:5svh;display:flex;justify-content:center;align-items:center;z-index:4;align-items:balseline;font-weight: bold;justify-content:center;top:95svh;background:#005082;color:white"><marquee behavior="" direction="">académie du codeur</marquee></div>

<header>
    <div id="content">
        <div id="c_logo">
            <img id="logo" src="./templates/images/academieducodeur.png" alt="academieducoder" width="100px">
        </div>
        <div id="navigation">
            <nav id="bar_nav">
                <a href="./" target="_parent" rel="noopener noreferrer" class="lien_page"><button>accueil</button></a>|
                <a href="./propos/" target="_parent" rel="noopener noreferrer" class="lien_page"><button>a propos</button></a>|
                <a href="./services/" target="_parent" rel="noopener noreferrer" class="lien_page"><button>services</button></a>|
                <a href="./contact/" target="_parent" rel="noopener noreferrer" class="lien_page"><button>contact</button></a>|
                <a href="./blog/" target="_parent" rel="noopener noreferrer" class="lien_page"><button>blog</button></a>
            </nav>
            <nav id="ico_nav">
                <svg id="menu_options" onclick="affiche();" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#63E6BE" d="M16 132h416c8.8 0 16-7.2 16-16V76c0-8.8-7.2-16-16-16H16C7.2 60 0 67.2 0 76v40c0 8.8 7.2 16 16 16zm0 160h416c8.8 0 16-7.2 16-16v-40c0-8.8-7.2-16-16-16H16c-8.8 0-16 7.2-16 16v40c0 8.8 7.2 16 16 16zm0 160h416c8.8 0 16-7.2 16-16v-40c0-8.8-7.2-16-16-16H16c-8.8 0-16 7.2-16 16v40c0 8.8 7.2 16 16 16z"/></svg>
            </nav>

        </div>
    </div>

    <div id="zone_daffiche">
    </div>
    <script>
        function affiche(x) {
            var result = '<?php func_aff(); ?>'
            document.getElementById("zone_daffiche").innerHTML=(result);
            document.getElementById("ico_nav").innerHTML=[
                '<svg id="menu_options" onclick="masque()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#63E6BE" d="M16 132h416c8.8 0 16-7.2 16-16V76c0-8.8-7.2-16-16-16H16C7.2 60 0 67.2 0 76v40c0 8.8 7.2 16 16 16zm0 160h416c8.8 0 16-7.2 16-16v-40c0-8.8-7.2-16-16-16H16c-8.8 0-16 7.2-16 16v40c0 8.8 7.2 16 16 16zm0 160h416c8.8 0 16-7.2 16-16v-40c0-8.8-7.2-16-16-16H16c-8.8 0-16 7.2-16 16v40c0 8.8 7.2 16 16 16z"/></svg>'
            ];
            return result;
        }
        function masque(x) {
            var result = '<?php func_masq(); ?>'
            document.getElementById("zone_daffiche").innerHTML=(result);
            document.getElementById("ico_nav").innerHTML=[
                '<svg xmlns="http://www.w3.org/2000/svg" id="menu_options" onclick="affiche()" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#63E6BE" d="M16 132h416c8.8 0 16-7.2 16-16V76c0-8.8-7.2-16-16-16H16C7.2 60 0 67.2 0 76v40c0 8.8 7.2 16 16 16zm0 160h416c8.8 0 16-7.2 16-16v-40c0-8.8-7.2-16-16-16H16c-8.8 0-16 7.2-16 16v40c0 8.8 7.2 16 16 16zm0 160h416c8.8 0 16-7.2 16-16v-40c0-8.8-7.2-16-16-16H16c-8.8 0-16 7.2-16 16v40c0 8.8 7.2 16 16 16z"/></svg>'
            ];
            return result;
        }
    
        document.addEventListener("click",function ouverture(e) {
            lien=e.target.id;
            if(lien=="/" || lien=="/services/" || lien=="/propos/" || lien=="/contact/" || lien=="/blog/"){
                window.open("/site_vitrine"+lien,"_parent","true");
            }
        });
    </script>
    <?php
        function func_aff(){
            echo(
                '<div class="liens_page" id="this_url">'.
                    '<div><button id="/" target="_parent" rel="noopener noreferrer">home</button></div>'.
                    '<div><button id="/services/" target="_parent" rel="noopener noreferrer">services</button></div>'.
                    '<div><button id="/propos/" target="_parent" rel="noopener noreferrer">à propos</button></div>'.
                    '<div><button id="/contact/" target="_parent" rel="noopener noreferrer">contact</button></div>'.
                    '<div><button id="/blog/" target="_parent" rel="noopener noreferrer">blog</button></div>'.
                    '<div><button id="reduire" target="_parent" rel="noopener noreferrer">🔼</button></div>'.
                '</div>'
            );
        }
        function func_masq(){
            echo "";
        }
    ?>
    <hr style="height: 2px;background: royalblue;border: 0;">
</header>