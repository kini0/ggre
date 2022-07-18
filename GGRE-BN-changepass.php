<?php
    session_start();

    date_default_timezone_set('Europe/Paris');

    $errormsg = '';
    if(empty($_REQUEST['token']) || empty($_REQUEST['account']) || empty($_REQUEST['i'])) {
        $errormsg = "URL INVALIDE";
    } else {
        // Verification du token
        $token = md5( "{$_REQUEST['i']}GGRE@TOKEN{$_REQUEST['account']}" . date("Y-m-d_H") );
        if($_REQUEST['token'] != $token ) {
            $errormsg = "TOKEN INVALIDE <br>";
        }
    }

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="icon" type="image/x-icon" href="images/ggre-favicon.ico" />
<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="images/ggre-favicon.ico" /><![endif]-->
<link rel="stylesheet" media="screen" type="text/css" title="Design" href="design_BN.css" />
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">

<title>G.G.R.E, Groupement des Graphothérapeutes - Rééducateurs de l'écriture</title>
<meta name="robots" content="index, follow" />
<meta name="keywords" content="formation, graphotherapie,graphothérapie,Graphothérapeute,Graphothérapeutes,Graphotherapeute,Graphotherapeutes,difficultés,difficulté, Graphoth&#233;rapeutes - R&#233;&#233;ducation de l'&#233;criture - Dysgraphie, bilan graphomoteur, annuaire des graphoth&#233;rapeutes, difficultés de l'écriture ,mauvaise,Groupement, rééducateur , reeducateur , reeducation, rééducation, ecriture, enfant, precoce, précoce,G G R E, dysgraphie , ecole, enseignement, orthophonie, orthophoniste, olivaux, trillat, ECHEC SCOLAIRE,PSYCHOLOGIE,ORIENTATION,PSYCHOGRAPHO,SCOLARITE,PRECOCITE,Echec scolaire, ecriture illisible, precocite, reeducation de l ecriture, rééducation de l écriture, troubles de l'écriture, trouble de l'ecriture">
<meta name="description" content="Bienvenue sur le site de l'association G.G.R.e">

<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="Scripts/script.js"></script>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<style type="text/css">
html { overflow: hidden; } 
body {
		background-color: #fff; 
        margin:0; 
        padding:0; 
        background: url(images/GGRE-V2-fond5b.jpg) no-repeat center center fixed;
        -webkit-background-size: cover; 
        -moz-background-size: cover; 
        -o-background-size: cover; 
        background-size: cover; 
}
#Form_Connect {
	position: absolute;
	width: 650px;
	height: 450px;
	z-index: 1100;
	left: 0px;
	top: -5px;
	border-radius: 4px;
	background-color: white;
	box-shadow: 1px 1px 12px #021748;
	-moz-box-shadow: 1px 1px 12px #021748;
	-webkit-box-shadow: 1px 1px 12px #021748;
	-webkit-animation: mymove1 4s; /* Chrome, Safari, Opera */
	-webkit-animation-delay: mymove1 2s; /* Safari 4.0 - 8.0 */
	animation: mymove1 4s;
	animation-delay: mymove1 2s;
}
/* Chrome, Safari, Opera */
@-webkit-keyframes mymove1 {
    from {top: -450px;}
    to {top: -5px;}
}

@keyframes mymove1 {
    from {top: -450px;}
    to {top: -5px;}
}
#tableauform {
	position: relative;
	margin: auto;
	width: 482px;
	height: 186px;
	z-index: 1001;
	top: 20px;
	border-radius: 5px;
	padding: 12px;
}
input[type=text], input[type=email], input[type=password], select {
    width: 100%;
    padding: 6px 11px;
    margin: 6px 0;
    display: inline-block;
	font-size: 14px;
	font-weight:bold;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #f59331;
    color: white;
    padding: 5px 10px;
    margin: 5px 0;
    border: none;
    border-radius: 3px;
    cursor: pointer;
	font-size: 16px;
	font-weight:bold;
	transition-duration: 0.4s;
}

input[type=submit]:hover {
    background-color: #343995;
}
#logo {
	position: relative;
	margin: auto;
	width: 130px;
	height: 150px;
	z-index: 1000;
	top: 20px;
}
#Mdpoubli {
	position: absolute;
	width: 486px;
	height: 36px;
	z-index: 1002;
	left: 72px;
	top: 390px;
	text-align:center;
}
@fa-font-path: "css/font";

#recup_MdPDiv
{
    display: none;
}
a:link {
	color: #343995;
	font-weight: bold;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #343995;
}
a:hover {
	text-decoration: none;
	color: #f59331;
}
a:active {
	text-decoration: none;
}
#mySidenav a {
    position: absolute;
    right: -50px;
    transition: 0.3s;
    padding: 15px;
    width: 70px;
	text-align: left;
    text-decoration: none;
    font-size: 18px;
    color: white;
}

#mySidenav a:hover {
    right: 0;
}
#Back_home {
    top: 150px;
    background-color: #f59331;
	z-index: 1012;
	border-radius: 4px;
	box-shadow: 1px 1px 15px #021748;
	-moz-box-shadow: 1px 1px 15px #021748;
	-webkit-box-shadow: 1px 1px 15px #021748;
}



</style>

<script type="text/javascript">
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
</script>
</head>

<body>
<div id="Layer global" style="position:relative; margin: 0 auto; width:650px; height:700px;">
    <div id="Form_Connect">
        <div id="logo">
            <a href="index.php"><img src="images/GGRE-V2-logo.png" width="130" title="retour accueil" /></a>
        </div>
    <div id="tableauform">
        <?php if(!empty($errormsg)) : ?>
            <?= "<h1 style=\"text-align:center;color:#343995;\">$errormsg</h1>"; ?>
        <?php else : ?>
            <form method="POST">
                <input type="hidden" id="user_id" name="id" value="<?= $_REQUEST['i'] ?>" >
                
                <div>
                    <i class="fa fa-key" style="font-size:14px; color:#343995"></i>
                    <label for="mdp" class="Style20" style="color:#343995"> Nouveau mot de passe</label>
                    <input type="password" id="mdp" name="pass" required><br /><br />
                </div>

                <div>
                    <i class="fa fa-key" style="font-size:14px; color:#343995"></i>
                    <label for="mdp_verif" class="Style20" style="color:#343995"> Resaisir mot de passe</label>
                    <input type="password" id="mdp_verif" name="pass_verif" required><br /><br />
                </div>

                <input type="submit" value="Changer mot de passe">
            </form><br />
        <?php endif; ?>
    </div>
        
    <div class="Style25" id="Mdpoubli">
        Vous voulez vous connecter ? <a href="GGRE-connect-BN.php" class="text-primary">Connectez-vous</a>
    </div>

    </div>
    <script>
        $(function() {
            $('form').submit(function (e) { 
                e.preventDefault();
                $.ajax({                           
                    url: 'dbajax/db.php?task=change_user_password',
                    method: "POST",
                    data:  $(this).serialize(),
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend : function() {},
                    dataType: "json", 
                    success: function(response){
                        if(response.success) {
                            location.href = 'GGRE-BN-index.php';
                        } else {
                            alert(response.msg);
                        }
                    }
                });
            });       
        });
    </script>

</div>
<div id="mySidenav" class="sidenav">
  <a href="index.php" id="Back_home"><i class="fas fa-home"></i></a>
</div>
<div id="bandeausup"></div>
</body>
</html>
