<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "dont.css">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/074b4fe885.js" crossorigin="anonymous"></script>
</head>

<body>
 <section id="header">
        <span id="textu">
            Textu ii complex
        </span>
        <span id="Hex">
            <strong>Hǝx</strong>
        </span>
        <nav id="nav">
            <a href="#">vad</a>
            <a href="#">cum</a>
            <a href="#">soarele</a>
            <a href="#">Apune</a>
        </nav>
</section>
<section id="hero">
 
            <img src="viata mea/recunoscut.jpeg" alt="recunoscut" id="hero-image" >
        


        <b id="hero-text" class="hero-text"  > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ochii bulbucate, exprimind dexteritates areand ca
            subrect culoarea acestora caprui fund o culoare,<br> int
            simpleste si inleite. In momentele sensibile când emotra este simteto pupilele i se dilatează ca o floare
            cand in deschide pitalele dupa a nearte sumbro,<br> neagre. Uneori împietritide gönderse Enderrerat, acestia
            vărsand lacrimi seamără cu fla mai frumoasă cascadă din lume ena dulce fără umbre.<br> Grâncence sunt
            arcuite
            exact ca lura uneori, complet and cerul repti plin de stele una mai frumoasă la cealaltă.<br> aroque sau mai
            departe, dar nici una mu se -compare ar ochii acesteia care sunt ca niste margele conturate de durgre,<br>
            singuratate dar totusi reusind so exprime. genele sunt minunat acaparand spatiul romas pe care</b >
       
        

</section>
<section id="main"> 
    <div class="wrapper" id="wrapper">
        <div id="top-border" class="top-border" >
        <cite id="main-text" class="main-text">Vina fricii</cite>
        <img src="viata mea/x.jpg" alt="x" id="X" class="X">
        </div>
        <img id="main-image" src="viata mea/ramen.jpeg" alt="stiu" class="main-image">
    </div>
    <div class="wrapperSecond" id="wrapperSecond">
        <div id="top-border" class="top-border">
        <cite id="main-text" class="main-text">abcd</cite>
        <img src="viata mea/x.jpg" alt="x" id="X2" class="X">
        </div>
        <img id="main-image" src="viata mea/strangulare.jpeg" class="main-image" alt="nush">
    </div>
    <div class="wrapperThird" id="wrapperThird">
        <div id="top-border" class="top-border" >
        <cite id="main-text" class="main-text">abcd</cite>
        <img src="viata mea/x.jpg" alt="x" id="X3" class="X">
        </div>
        <img id="main-image" src="viata mea/boxa.jpeg" class="main-image" alt="stai ca stiu">
    </div>
</section>
<section class="abcd" >
<div class="aside" id="aside">
    <button type="button" class="aside-btn" id="first-btn">Press to color the even text's in blue</button>
    <button type="button" class="aside-btn" id="second-btn">Press to color the odd text's in blue</button>
    <button type="button" class="aside-btn" id="third-btn">Hover to hide the first second , forth and fifth</button>
    <button type="button" class="aside-btn" id="forth-btn">Press to switch the text's till the next refresh:)</button>
    <button type="button" class="aside-btn" id="fifth-btn">Press to write the text verticaly</button>
</div>

<div class="containerAsideText" id="containerAsideText">
    <i class="asideText" id="text1">Odata ce va fi murit, voi simtii o abatere a inimii atat de aspre si de buna</i><br>
    <i class="asideText" id="text2">Ce vise marete am avut cu aceea femeie, dar mi le-a spulberat tot dansa</i><br>
    <i class="asideText" id="text3">Ce noapte a mintii am in aceasta noapte, in care oridunde ma uit pe cer ii vad ochii si ceva ma face sa imi regandesc mutarile</i><br>
    <i class="asideText" id="text4">agonia a trecut acum ma bucur de extaz</i><br>
    <i class="asideText" id="text5">am o rana in inima pentru ca adevarul doare sau pentru ca ultima m-a injunghiat cu nepaasre</i><br>
</div>
</section>
<section class="calculator">
    <form>
        <input type="text" name="a" placeholder="A">
        <input type="text" name="b" placeholder="B">
    </form>
</section>
<!----button---->

            <button type="button" class="main-btn" id="main-btn">Press to add Classes</button>
<!---->
    <footer id="footer">

    </footer>

<script src="jquery-3.6.4.js"></script>
<script src="jquery-ui-1.13.2/jquery-ui.js"></script>
<script>
    $(document).ready(function(){
        $("#Hex").click(function(){
            $("#main-image").fadeToggle(300);
            $("#main-text").fadeToggle(300);
        });
        $("#X").click(function(){
            $("#wrapper",).hide();
        });
        $("#X2").click(function(){
            $("#wrapperSecond").hide();
        });
        $("#X3").click(function(){
            $("#wrapperThird").hide();
        });
        $("#wrapper").draggable();
        $("#main-btn").click(function(){
            $("#hero-text").toggleClass("hero-text-toogleClass");
            $("#main").toggleClass("bkgWhite");
            $("#aside").toggleClass("bkgWhite");
            $("#containerAsideText").toggleClass("bkgWhite");
            $("#text1").toggleClass("bkgblack-colorwhite");
            $("#text2").toggleClass("bkgblack-colorwhite");
            $("#text3").toggleClass("bkgblack-colorwhite");
            $("#text4").toggleClass("bkgblack-colorwhite");
            $("#text5").toggleClass("bkgblack-colorwhite")
        });
        $("#main-btn").hover(function(){
            $("#hero-image").attr("src","viata mea/incruntat.jpeg");
        },
        function(){
            $("#hero-image").attr("src","viata mea/recunoscut.jpeg");
        }
        );
        $("#first-btn").click(function(){
            $("#containerAsideText i:even").toggleClass("textColorBlue");
        });
        $("#second-btn").click(function(){
            $("#containerAsideText i:odd").toggleClass("textColorRed");
        });
        $("#third-btn").hover(function(){
            $("#containerAsideText i:not(#text3)").hide();
        },
        function(){
            $("#containerAsideText i:not(#text3)").show();
        });
        $("#forth-btn").click(function(){
            $("#containerAsideText i").html("   Simt ca niciodata nu voi fi multumit cu adevarat Asta-i si motivu pentru care o tot fac, pentru care-s relevant Caut o scuza care sa ierte cate rele fac");
        });
        $("#fifth-btn").click(function(){
            $("#containerAsideText i").toggleClass("verticalyText");
        });
    });

</script>
</body>

</html>