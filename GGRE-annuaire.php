<?php
session_start();
require_once('connexion.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="icon" type="image/x-icon" href="/images/ggre-favicon.ico" />
    <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="/images/ggre-favicon.ico" /><![endif]-->
    <link rel="stylesheet" media="screen" type="text/css" title="Design" href="/design.css" />
    <link rel="stylesheet" href="/css/w3.css">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">

    <title>G.G.R.E, Groupement des Graphothérapeutes - Rééducateurs de l'écriture</title>
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="formation, graphotherapie,graphothérapie,Graphothérapeute,Graphothérapeutes,Graphotherapeute,Graphotherapeutes,difficultés,difficulté, Graphoth&#233;rapeutes - R&#233;&#233;ducation de l'&#233;criture - Dysgraphie, bilan graphomoteur, annuaire des graphoth&#233;rapeutes, difficultés de l'écriture ,mauvaise,Groupement, rééducateur , reeducateur , reeducation, rééducation, ecriture, enfant, precoce, précoce,G G R E, dysgraphie , ecole, enseignement, orthophonie, orthophoniste, olivaux, trillat, ECHEC SCOLAIRE,PSYCHOLOGIE,ORIENTATION,PSYCHOGRAPHO,SCOLARITE,PRECOCITE,Echec scolaire, ecriture illisible, precocite, reeducation de l ecriture, rééducation de l écriture, troubles de l'écriture, trouble de l'ecriture">
    <meta name="description" content="Bienvenue sur le site de l'association G.G.R.e">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script type="text/javascript" src="/js/ajax.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/jquery.lightbox-0.5.css" />
    <script type="text/javascript" src="/js/jquery.lightbox-0.5.js"></script>
    <script type="text/javascript" src="/Scripts/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <script type="text/javascript">
        $(function() {
            $("#lightbox").hide();
            $('#lightbox').click (function () {
                $("#lightbox").fadeOut(400);
            });
        });

        function afficheLightbox() {
            $("#lightbox").fadeIn(400);
        }

        function MM_swapImgRestore() { //v3.0
            var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
        }
        function MM_preloadImages() { //v3.0
            var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
                var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
                    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
        }

        function MM_findObj(n, d) { //v4.01
            var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
                d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
            if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
            for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
            if(!x && d.getElementById) x=d.getElementById(n); return x;
        }

        function MM_swapImage() { //v3.0
            var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
                if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
        }
        function afficheLightbox() {
            $("#lightbox").fadeIn(400);
        }
        function open_window(page, hauteur, largeur)
        {
            var hauteur_popup=screen.height;
            var H = (screen.height - hauteur) / 2;
            var largeur_popup=screen.width;
            var L = (screen.width - largeur) / 2;
            pop_up = window.open
            (page,"Popup","toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,height="+hauteur+",width="+largeur+",top="+H+",left="+L);
        }
    </script>

    <style type="text/css">
        <!--
        html { overflow: hidden; }
        body {
            background-color: #fff;
            margin:0;
            padding:0;
            background: url(/images/GGRE-V2-fond11.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        #LogoGGRE {
            position: absolute;
            width: 328px;
            height: 300px;
            z-index: 1000;
            left: 0px;
            top: -10px;
            border-radius: 4px;
            box-shadow: 1px 1px 12px #021748;
            -moz-box-shadow: 1px 1px 12px #021748;
            -webkit-box-shadow: 1px 1px 12px #021748;
            background-color: #FFFFFF;
        }
        .button {
            background-color: #f59331;
            border: none;
            color: white;
            width: 210px;
            height: 210px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-family: Verdana, Geneva, sans-serif;
            font-weight: bold;
            font-size: 18px;
            box-shadow: 1px 1px 15px #021748;
            -moz-box-shadow: 1px 1px 15px #021748;
            -webkit-box-shadow: 1px 1px 15px #021748;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button1 {
            background-color: #f59331;
            color: white;
        }
        .button1:hover {
            background-color: white;
            color: #363b94;
        }
        .button2:hover {
            background-color: #363b94;
            color: #f59331;
        }
        .button2 {
            background-color: #ffffff;
            color: #f59331;
        }

        #LienGrapho {
            position: absolute;
            width: 210px;
            height: 210px;
            z-index: 1012;
            left: 391px;
            bottom: 181px;
            -webkit-animation: mymove2 4s; /* Chrome, Safari, Opera */
            -webkit-animation-delay: mymove2 4s; /* Safari 4.0 - 8.0 */
            animation: mymove2 4s;
            animation-delay: mymove2 4s;
        }
        /* Chrome, Safari, Opera */
        @-webkit-keyframes mymove2 {
            from {bottom: -200px;}
            to {bottom: 181px;}
        }

        @keyframes mymove2 {
            from {bottom: -200px;}
            to {bottom: 181px;}
        }

        #LienFormation {
            position: absolute;
            width: 210px;
            height: 210px;
            z-index: 1012;
            left: 701px;
            bottom: 181px;
        }
        .buttonNav {
            background-color: #233087;
            border: none;
            color: white;
            width: 162px;
            height: 80px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 4px;
            margin: 2px 2px 2px 2px;
            font-family: Verdana, Geneva, sans-serif;
            font-weight: bold;
            font-size: 14px;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .buttonNav1 {
            background-color: #233087;
            color: white;
        }
        .buttonNav1:hover {
            background-color: white;
            color: #363b94;
        }
        .buttonNav2 {
            background-color: #f59331;
            border: none;
            color: #ffffff;
            width: 162px;
            height: 80px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 4px;
            margin: 2px 2px 2px 2px;
            font-family: Verdana, Geneva, sans-serif;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
        }

        .buttonHome {
            background-color: #233087;
            border: none;
            color: white;
            width: 328px;
            height: 45px;
            text-align: left;
            text-decoration: none;
            display: inline-block;
            border-radius: 4px;
            padding-left: 10px;
            margin: 2px 0px 0px 2px;
            font-family: Verdana, Geneva, sans-serif;
            font-weight: bold;
            font-size: 14px;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .buttonHome1 {
            background-color: #233087;
            color: white;
        }
        .buttonHome1:hover {
            background-color: white;
            color: #363b94;
        }
        #MenuNav {
            position: absolute;
            width: 335px;
            height: 310px;
            z-index: 1012;
            left: -2px;
            bottom: 96px;
        }

        #Titre {
            position: absolute;
            width: 700px;
            height: 60px;
            z-index: 1012;
            left: 350px;
            top: 100px;
        }
        #Contenu {
            position: absolute;
            width: 700px;
            height: 443px;
            z-index: 1012;
            left: 350px;
            top: 150px;
            opacity: 0.7;
            filter: alpha(opacity=70);
            border-radius: 4px;
            background-color: #ffffff;
        }
        #texte {
            position: absolute;
            width: 560px;
            height: 430px;
            z-index: 1020;
            left: 360px;
            top: 160px;
        }
        #carte_france {
            position:absolute;
            width:358px;
            height:367px;
            z-index:22;
            left: 0px;
            top: 35px;
        }
        #tab_recherche {
            position:absolute;
            width:275px;
            height:355px;
            z-index:23;
            left: 400px;
            top: 2px;
        }
        .table {
            border-radius: 4px;
        }
        a:link {
            color: #0B1B54;
            text-decoration: none;
        }
        a:visited {
            text-decoration: none;
            color: #101B54;
        }
        a:hover {
            text-decoration: none;
            color: #A75B27;
        }
        a:active {
            text-decoration: none;
        }
        input[type=text] {
            width: 100%;
            padding: 6px 12px;
            box-sizing: border-box;
            border: 1px solid #f59331;
            border-radius: 4px;
        }

        -->
    </style>
</head>

<body onLoad="MM_preloadImages('/images/GGRE-V2-fond-carte-france2.png', '/images/GGRE-V2-fond-carte-france1.png')">
<div id="Layer global" style="position:relative; margin: 0 auto; width:1050px; height:700px;">
    <div id="LogoGGRE"><a href="/index-grapho.php"><img src="/images/GGRE-V2-logo1.jpg" width="323" height="291" title="Retour accueil zone bleue"/></a></div>

    <div id="MenuNav"><a href="/GGRE-presentation.php"><button class="buttonNav buttonNav1">Qui<br />sommes-nous<br />?</button></a><a href="/GGRE-graphotherapeute.php"><button class="buttonNav buttonNav1">Qu'est-ce qu'une<br />graphothérapie<br />?</button></a><br />
        <a href="/GGRE-bilan.php"><button class="buttonNav buttonNav1">Qu'est-ce<br />qu'un bilan<br />?</button></a><a href="/GGRE-dysgraphie.php"><button class="buttonNav buttonNav1">Qu'est-ce<br />qu'une<br />dysgraphie ?</button></a><br />
        <button class="buttonNav2">ANNUAIRE</button><a href="/GGRE-contacts.php"><button class="buttonNav buttonNav1">Nous contacter</button></a><br />
        <a href="/index.php" title="Retour page accueil général"><button class="buttonHome buttonHome1"><i class="fa fa-home" style="font-size:30px"></i></button></a></div>

    <div class="Style400" id="Titre">Annuaire des graphothérapeutes en France</div>
    <div class="Style29" id="texte">Vous cherchez un graphothérapeute dans votre région,<br />consultez notre annuaire national :<br /><br />
        <div id="carte_france" onmouseout="document.carte.src='/images/ggre-fond-carte-france.png';"><img name="carte" src="/images/ggre-fond-carte-france.png" width="387" height="377" border="0" usemap="#Map" title ="Carte en cours de maintenance">
            <map name="Map">
                <!-- NORD -->
                <area id="nord" onclick="region('/listeAnnuaire.php','apDiv22','59,62');" shape="poly" coords="177,34,176,15,200,4,203,14,209,19,214,16,220,27,234,33,243,35,243,49,225,47,214,49,203,46,188,40" href="#" onmouseover="document.carte.src='/images/GGRE-carte-nord-pas-de-calais.png';">
                <!-- PICARDIE -->
                <area id="picardie" onclick="region('/listeAnnuaire.php','apDiv22','88,60,02');" shape="poly" coords="177,39,173,44,178,53,178,79,196,80,203,82,214,82,225,93,229,89,230,82,231,76,239,72,240,66,244,61,245,51,212,52,195,43" href="#" onmouseover="document.carte.src='/images/GGRE-carte-picardie.png';">
                <!-- HAUTE NORMANDIE -->
                <area id="haute" onclick="region('/listeAnnuaire.php','apDiv22','76,27');" shape="poly" coords="170,46,176,53,177,82,172,84,171,92,164,93,154,100,153,93,145,91,143,77,141,71,149,71,139,67,140,59,153,51" href="#" onmouseover="document.carte.src='/images/GGRE-carte-haute-normandie.png';">
                <!-- CHAMPAGNE -->
                <area id="champagne" onclick="region('/listeAnnuaire.php','apDiv22','51,10,52,82,08');" shape="poly" coords="245,49,246,60,241,66,241,72,233,77,232,86,225,96,227,102,224,109,230,122,238,130,248,130,257,126,263,130,263,137,276,142,279,138,283,138,285,132,290,128,283,119,284,114,278,111,278,105,268,101,263,92,265,87,266,75,268,65,272,66,273,60,260,54,260,47,258,40,253,48" href="#" onmouseover="document.carte.src='/images/GGRE-carte-champagne.png';">
                <!-- BASSE NORMANDIE -->
                <area id="basse" onclick="region('/listeAnnuaire.php','apDiv22','14,50,61');" shape="poly" coords="138,71,131,76,124,72,112,69,106,73,103,65,106,61,99,57,93,60,87,57,88,65,90,73,93,78,94,91,96,98,92,99,94,105,103,104,114,108,129,105,134,111,141,108,145,114,156,120,153,112,159,108,154,101,150,96,143,92,143,83,141,75" href="#" onmouseover="document.carte.src='/images/GGRE-carte-basse-normandie.png';">
                <!-- ILE DE FRANCE -->
                <area id="idf" onclick="region('/listeAnnuaire.php','apDiv22','75,91,92,93,94,95,77,78');" shape="poly" shape="poly" coords="174,86,179,81,194,80,200,84,211,83,223,93,225,100,223,111,216,112,213,119,200,123,199,117,193,114,187,116,183,111,180,105,176,103,175,93" href="#" onmouseover="document.carte.src='/images/GGRE-carte-Idf.png';">
                <!-- BRETAGNE -->
                <area id="bretagne" onclick="region('/listeAnnuaire.php','apDiv22','35,56,29,22');" shape="poly" coords="31,126,20,128,17,122,8,115,19,114,13,106,11,97,23,92,32,92,39,93,41,93,44,91,55,87,67,101,76,95,77,100,88,94,87,99,91,99,93,106,100,106,108,108,110,123,105,127,102,131,95,133,83,136,76,143,65,144,58,142,57,138,50,139,48,134" href="#" onmouseover="document.carte.src='/images/GGRE-carte-bretagne.png';">
                <!-- LORRAINE -->
                <area id="lorraine" onclick="region('/listeAnnuaire.php','apDiv22','57,88,54,55');" shape="poly" coords="276,64,283,62,286,67,292,65,302,66,308,76,318,77,325,76,332,79,331,85,323,87,316,84,316,89,324,92,322,103,321,110,320,119,315,131,307,128,299,127,294,125,291,127,284,120,284,115,279,111,278,105,270,102,263,92,267,87,265,78,268,70,269,66" href="#" onmouseover="document.carte.src='/images/GGRE-carte-lorraine.png';">
                <!-- ALSACE -->
                <area id="alsace" onclick="region('/listeAnnuaire.php','apDiv22','67,68');" shape="poly" coords="334,80,340,80,349,83,340,96,338,109,335,118,333,130,336,136,330,144,323,145,320,141,317,139,319,134,315,132,320,124,323,114,322,108,324,100,325,91,317,89,317,84,329,86" href="#" onmouseover="document.carte.src='/images/GGRE-carte-alsace.png';">
                <!-- FRANCHE COMTE -->
                <area id="francheComte" onclick="region('/listeAnnuaire.php','apDiv22','25,39,70,90');" shape="poly" coords="320,145,321,150,311,162,306,165,307,171,301,178,299,185,291,193,284,190,281,193,274,188,277,178,277,171,274,166,273,162,277,158,279,151,275,147,279,142,283,141,286,134,290,129,293,127,299,128,305,128,311,131,316,134,315,138" href="#" onmouseover="document.carte.src='/images/GGRE-carte-franche-comte.png';">
                <!-- BOURGOGNE -->
                <area id="bourgogne" onclick="region('/listeAnnuaire.php','apDiv22','21,89,71,58');" shape="poly" coords="215,121,217,126,215,131,215,134,210,134,213,142,211,145,211,151,214,157,217,171,213,175,222,179,226,180,230,177,232,183,239,185,237,191,236,195,240,196,248,198,253,194,256,192,261,198,264,191,266,185,272,186,277,174,273,169,272,164,275,157,277,150,274,146,268,141,262,139,261,130,256,127,249,130,240,132,234,127,231,123,226,118,223,113,216,113" href="#" onmouseover="document.carte.src='/images/GGRE-carte-bourgogne.png';">
                <!-- CENTRE -->
                <area id="centre" onclick="region('/listeAnnuaire.php','apDiv22','37,45,41,28,18,36');" shape="poly" coords="210,175,203,179,201,185,195,186,196,189,184,189,177,189,171,192,166,192,162,185,156,183,157,177,151,166,144,169,141,166,137,161,134,158,141,139,150,135,153,129,153,126,156,122,155,113,159,111,156,100,162,95,168,94,173,90,173,100,175,104,179,106,183,112,185,118,190,116,194,115,199,117,198,122,202,123,207,123,212,121,217,126,213,128,212,133,208,134,212,141,209,145,210,151,215,157,216,168" href="#" onmouseover="document.carte.src='/images/GGRE-carte-centre.png';">
                <!-- PAYS DE LA LOIRE -->
                <area id="loire" onclick="region('/listeAnnuaire.php','apDiv22','44,85,49,72,53');" shape="poly" coords="132,160,120,162,109,164,116,171,116,181,118,189,112,192,105,189,101,191,92,189,86,186,83,180,78,174,73,168,73,161,72,150,66,150,65,145,76,143,82,138,89,138,99,134,110,125,109,108,116,109,128,106,132,113,139,110,143,114,154,120,150,134,139,139" href="#" onmouseover="document.carte.src='/images/GGRE-carte-pays-loire.png';">
                <!-- POITOU CHARENTES -->
                <area id="poitou" onclick="region('/listeAnnuaire.php','apDiv22','86,17,16,79');" shape="poly" coords="162,191,155,196,155,202,158,206,152,214,143,224,140,230,131,238,122,238,118,233,114,231,107,229,104,221,97,215,95,201,96,195,105,191,114,192,119,189,118,176,118,171,112,165,133,161,141,168,150,167,155,175,155,182,163,186" href="#" onmouseover="document.carte.src='/images/GGRE-carte-charentes.png';">
                <!-- LIMOUSIN -->
                <area id="limousin" onclick="region('/listeAnnuaire.php','apDiv22','87,23,19');" shape="poly" coords="154,218,161,220,167,227,168,235,170,239,172,245,176,244,180,247,192,244,194,237,195,230,202,230,202,218,199,213,203,204,203,198,197,190,187,190,178,190,170,193,164,191,158,197,158,204,156,210" href="#" onmouseover="document.carte.src='/images/GGRE-carte-limousin.png';">
                <!-- AUVERGNE -->
                <area id="auvergne" onclick="region('/listeAnnuaire.php','apDiv22','63,15,43,03');" shape="poly" coords="240,228,252,227,255,234,246,249,240,253,232,249,227,252,225,246,218,249,216,257,211,255,207,249,202,256,192,259,190,253,187,247,193,244,195,231,201,231,203,217,199,212,204,206,203,199,196,188,202,185,203,181,212,175,218,179,222,181,229,179,231,185,237,186,235,196,238,203,233,207,241,220" href="#" onmouseover="document.carte.src='/images/GGRE-carte-auvergne.png';">
                <!-- AQUITAINE -->
                <area id="aquitaine" onclick="region('/listeAnnuaire.php','apDiv22','24,33,40,47,64');" shape="poly" coords="169,251,161,260,159,266,155,277,150,281,141,282,131,286,127,284,125,289,125,293,127,298,130,311,123,318,120,328,112,331,106,325,106,321,100,322,92,318,88,318,85,310,78,306,87,296,92,275,97,247,98,221,104,228,112,232,118,236,124,239,129,239,135,235,144,227,153,215,154,219,162,223,167,229,166,234,169,242" href="#" onmouseover="document.carte.src='/images/GGRE-carte-aquitaine.png';">
                <!-- RHONES ALPES -->
                <area id="rhone" onclick="region('/listeAnnuaire.php','apDiv22','69,42,74,38,22,26,01,07');" shape="poly" coords="318,208,320,213,329,222,328,231,318,237,310,240,304,238,307,246,295,252,289,261,286,265,291,271,283,277,276,273,271,269,264,274,263,270,254,271,244,271,243,265,239,262,238,254,247,250,253,236,253,227,242,226,241,219,234,208,238,200,248,200,255,194,260,200,266,186,275,193,279,195,285,194,290,195,296,191,308,185,317,184,319,191,322,199,326,203" href="#" onmouseover="document.carte.src='/images/GGRE-carte-rhones-alpes.png';">
                <!-- MIDI PYRENEES -->
                <area id="midi" onclick="region('/listeAnnuaire.php','apDiv22','31,81,12,65,32,82,46,09');" shape="poly" coords="149,332,136,334,127,334,123,330,122,321,129,313,128,298,126,294,126,287,131,287,139,283,146,282,149,282,156,274,161,263,169,253,170,244,177,247,186,249,189,254,190,258,191,261,200,258,203,254,207,251,214,257,217,261,218,271,225,275,227,283,218,293,209,296,202,298,203,303,200,305,191,305,182,307,181,313,185,317,185,323,185,328,190,334,179,341,172,336,163,332,157,330" href="#" onmouseover="document.carte.src='/images/GGRE-carte-midi-pyrenees.png';">
                <!-- PACA -->
                <area id="paca" onclick="region('/listeAnnuaire.php','apDiv22','13,83,06,84,04,05');" shape="poly" coords="263,276,267,282,260,292,251,304,258,304,259,308,267,309,273,308,278,307,277,311,282,313,288,314,295,319,302,317,310,316,320,311,323,302,328,299,341,289,345,281,347,278,346,271,339,273,327,269,324,258,327,252,326,246,319,245,318,239,310,241,306,240,307,247,296,252,289,261,288,267,292,272,288,276,279,277,270,271" href="#" onmouseover="document.carte.src='/images/GGRE-carte-PACA.png';">
                <!-- LANGUDOC -->
                <area id="languedoc" onclick="region('/listeAnnuaire.php','apDiv22','34,30,66,11,48');" shape="poly" coords="249,303,244,299,235,307,230,312,225,311,217,319,216,337,219,343,213,343,208,344,204,349,196,347,194,345,188,347,184,346,177,342,187,337,189,332,186,327,185,318,180,312,182,308,192,306,204,304,205,298,213,295,224,288,227,281,224,275,219,269,216,259,216,253,223,248,225,251,231,250,235,253,237,259,241,265,242,271,249,273,255,273,261,272,261,278,266,282,260,290,254,300" href="#" onmouseover="document.carte.src='/images/GGRE-carte-languedoc-roussillon.png';">
                <!-- CORSE -->
                <area id="corse" onclick="region('/listeAnnuaire.php','apDiv22','20,2A,2B');" shape="poly" coords="365,362,371,353,371,345,371,337,375,331,372,314,368,309,368,300,364,296,363,306,355,310,349,315,346,320,344,325,345,336,351,350,354,358,360,358" href="#" onmouseover="document.carte.src='/images/GGRE-carte-corse.png';">
            </map>
        </div>

        <div id="tab_recherche"><div id="lightbox"><div id="lightbox-content"></div></div>
            <table width="270" height="330" border="0" cellspacing="0">
                <tr>
                    <td width="9" height="20" valign="bottom" bgcolor="#363b94">&nbsp;</td>
                    <td width="9" height="20" valign="bottom" bgcolor="#363b94">&nbsp;</td>
                </tr>
                <tr>
                    <td width="9" height="20" valign="bottom" bgcolor="#363b94">&nbsp;</td>
                    <td width="220" height="20" valign="bottom" bgcolor="#363b94" class="Style22">Recherche par d&eacute;partement :</td>
                </tr>
                <tr>
                    <td height="25" valign="top" bgcolor="#363b94">&nbsp;</td>
                    <td height="25" valign="top" bgcolor="#363b94"><select name="departement" id="departement" onchange="dept();" style="width: 240px;">
                            <option>          </option>
		                    <?php
		                    for ($i=1;$i<=95;$i++)
		                    {
			                    if($i < 10) echo "<option value=0".$i.">0".$i."</option>";
			                    else echo "<option value=".$i.">".$i."</option>";
		                    }
		                    ?>
                        </select></td>
                </tr>
                <tr>
                    <td height="20" valign="bottom" bgcolor="#363b94">&nbsp;</td>
                    <td height="20" valign="bottom" bgcolor="#363b94" class="Style22">Recherche par nom :</td>
                </tr>
                <tr>
                    <td height="25" valign="top" bgcolor="#363b94">&nbsp;</td>
                    <td height="25" valign="top" bgcolor="#363b94"><select name="listeNoms" id="listeNoms" style="width: 240px;" onchange="rechercheNom();">
                            <option>          </option>
		                    <?php
		                    $query = "SELECT nom FROM user ORDER BY nom";
		                    $result = mysqli_query($conn, $query);
		                    while($row = mysqli_fetch_assoc($result)) {
			                    echo '<option value="'.utf8_encode($row['nom']).'">'.utf8_encode($row['nom']).'</option>';
		                    }
		                    ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td height="20" valign="bottom" bgcolor="#363b94">&nbsp;</td>
                    <td height="20" valign="bottom" bgcolor="#363b94" class="Style22">Recherche libre :</td>
                </tr>
                <tr>
                    <td height="25" valign="top" bgcolor="#363b94">&nbsp;</td>
                    <td height="25" valign="top" bgcolor="#363b94" class="pRelative">
                        <input type="text" id="search_field" name="search_field" value="" style="width: 240px;" />
                        <div class="close-icon">X</div>
                        <script type="text/javascript">
							<?php
							$text = "var listePersonnes = [";
							$query = "SELECT CONCAT(nom, ' ', prenom) as nom FROM user UNION SELECT codePostal as nom FROM user ORDER BY nom";
							$result = mysqli_query($conn, $query);
							while($row = mysqli_fetch_assoc($result)) {
								$text .= '"' . utf8_encode($row['nom']) . '",
                                ';
							}
							$text .= '];';
							echo $text;
							?>
                            $(document).on('ready', function(){
                                init_autocomplete();
                            });
                        </script>

                        <br /><br />
                    </td>
                </tr>
                <tr>
                    <td height="20" valign="bottom" bgcolor="#f59331">&nbsp;</td>
                    <td height="20" valign="bottom" bgcolor="#f59331" class="Style21">R&eacute;sultats :</td>
                </tr>
                <tr>
                    <td height="160" valign="bottom" bgcolor="#ffffff">&nbsp;</td>
                    <td height="160" valign="top" bgcolor="#ffffff" class="Style24"><span id="resultatRecherche" class="Style29"></span></td>
                </tr>
            </table>

        </div>
    </div>
    <div id="Contenu"></div>

</div>
</div>
<div id="bandeausup"></div>
</body>
</html>
