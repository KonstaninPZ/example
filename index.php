<?php 
    $list_of_street = include_once './list_of_street.php';
    require_once './functions.php';
    sortList($list_of_street);
   ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <title>Hello</title>
    </head>
    <body>
       <ul id="my-drop-down-menu">

           <li class="list"><a href="#"  class="link">Улица</a>
            <ul class="child">
                <?php 
                    createDropDown($list_of_street);
                ?>
            </ul>
        </li>
       </ul>
        <div id="info"></div>
        <?php
        ?>
        <script src="js/script.js"></script>
    </body>
</html>
