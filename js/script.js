
/**
 * Функцыя для отправки запроса на сервер 
 * @param {type} nameStreet название улицы 
 * @returns {undefined}
 */
function ajaxPost(nameStreet){
    var request = new XMLHttpRequest();
    var params = 'street='+ nameStreet;
    request.onreadystatechange = function(){
        if(request.readyState == 4 && request.status == 200){
            document.querySelector("#info").innerHTML = request.responseText;
        }
    }
    request.open('POST','get_count_building.php');
    request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    request.send(params);
}