<?php
// J'ai choisi le mot de passe "tipe-mpsi"
if (isset($_POST['mot_de_passe'])) // Si la variable existe
{
    // On se cr�e une variable $mot_de_passe avec le mot de passe entr�
    $mot_de_passe = $_POST['mot_de_passe'];
}
else // La variable n'existe pas encore
{
    $mot_de_passe = ""; // On cr�e une variable $mot_de_passe vide
}
 
if ($mot_de_passe == "tipe-mpsi") // Si le mot de passe est bon
{
// On affiche la page cach�e.
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
<head>

<style type="text/css">
<!--
    a:link {text-decoration: none}
    a:visited {text-decoration: none}
    a:active {text-decoration: none}
    a:hover {text-decoration: none}
-->
</style>

<style type="text/css">
<!--
   a:link {color: #B55704}
    a:visited {color: #B55704}
    a:active {color: #ccbb33}
    a:hover {color: #ccbb33}
    
   
    
-->
</style>
<LINK REL=FONTDER SRC="http://serveur/font.pfr">
</head>
 


</head><body text="#198290"><font size="4"></font></font><p><font size="4"><br><br><br><br><br><br>

<br>
<font style="font-weight: bold ;"> Textes de maths de TIPE  :</font><br><br><br>
<table>
<tbody><tr>
<td> <li> Texte n� 1 : �quir�partition d'une suite de nombres : </td><td> <a target="bas" href="equirepartition.pdf"> .pdf </a> <tr> 
<td> <li> Texte n� 2 : Graphes planaires et th�or�me des cinq couleurs : </td><td> <a target="bas" href="graphes-5couleurs.pdf"> .pdf </a> <tr> 
<td> <li> Texte n� 3 : La cryptographie � cl� publique : </td><td> <a target="bas" href="cryptographie.pdf"> .pdf </a> <tr> <br><br>
<td> <li> Texte bonus n� 1 : Est-ce que P=NP ; les premiers sont bien dans P ! : </td><td> <a target="bas" href="NP-P.pdf"> .pdf </a> <tr> 
</td></tr></tbody></table>
</font></p></body></html>
<?php
}
else // le mot de passe n'est pas bon
{
// On affiche la zone de texte pour rentrer le mot de passe.
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head><body text="#198290">
        <title>Page prot�g�e par mot de passe</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    </head>
    <body><br><br><br><br><br><br>
<p><center>Veuillez entrer le mot de passe pour acc�der aux textes :</center></p>
<form action="acces-maths.php" method="post">
<p>
<center><input type="text" name="mot_de_passe" /> <input type="submit" value="Valider" /></center>
</p>
</form>
<!--<p>Cette zone est r�serv�e aux �tudiants du lyc�e La Martini�re Monplaisir de Lyon.</p>-->
    </body>
</html>
<?php
} // Fin du else
// Fin du code :)
?>
