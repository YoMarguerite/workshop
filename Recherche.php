<?php include_once 'bootstrap.php';?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
     var_dump($_POST);
 ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Recherche</title>
        <link href="Recherche.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="cote_gauche">
            <form method="post" action="Recherche.php">
                <fieldset>
                    <legend>Qui recherchez vous ?</legend>
                    <div>
                         <input type="checkbox" id="checkbox" name="langage0" value="C++">
                         <label for="checkbox">C++</label>
                         <SELECT name="skills0" size="1">
                            <br><br>
                            <OPTION>Débutant
                            <OPTION>Intermédiaire
                            <OPTION>Professionnel
                        </SELECT>
                    </div>
                    <div>
                        <input type="checkbox" id="checkbox" name="langage1" value="Java">
                        <label for="checkbox">Java</label>
                        <SELECT name="skills1" size="1">
                            <br><br>
                            <OPTION>Débutant
                            <OPTION>Intermédiaire
                            <OPTION>Professionnel
                        </SELECT>
                    </div>
                    <div>
                        <input type="checkbox" id="checkbox" name="langage2" value="Php">
                        <label for="checkbox">Php</label>
                        <SELECT name="skills2" size="1">
                            <br><br>
                            <OPTION>Débutant
                            <OPTION>Intermédiaire
                            <OPTION>Professionnel
                        </SELECT>
                    </div>
                    <div>
                        <input type="checkbox" id="checkbox" name="langage3" value="Sql">
                        <label for="checkbox">Sql</label>
                        <SELECT name="skills3" size="1">
                            <br><br>
                            <OPTION>Débutant
                            <OPTION>Intermédiaire
                            <OPTION>Professionnel
                        </SELECT>
                    </div>
                    <div>
                        <input type="checkbox" id="checkbox" name="langage4" value="HTML">
                        <label for="checkbox">HTML</label>
                        <SELECT name="skills4" size="1">
                            <br><br>
                            <OPTION>Débutant
                            <OPTION>Intermédiaire
                            <OPTION>Professionnel
                        </SELECT>
                    </div>
                    <div>
                        <input type="checkbox" id="checkbox" name="langage5" value="CSS">
                        <label for="checkbox">CSS</label>
                        <SELECT name="skills5" size="1">
                            <br><br>
                            <OPTION>Débutant
                            <OPTION>Intermédiaire
                            <OPTION>Professionnel
                        </SELECT>
                    </div>
                    <button type="submit" class="btn btn-info glyphicon glyphicon-send"></button>
                </fieldset>
            </form>
        </div>
    </body>
</html>
