<?php
//Упорядоченние списка улиц по алфавиту
function sortList($array) {
    uksort($array, 'strnatcmp');
}

// Создание выпадающего меню 
function createDropDown($array){

    foreach ($array as $key => $value) {
        echo "<li><a href=\"#\" onclick=\"ajaxPost('$key'); \" >$key</a></li>";

    }
}

