function api_rest(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function (){
        document.getElementById('respuesta').innerHTML +=xhttp.responseText + '<br>';
    };

    xhttp.open('GET', '/api/apirest',true)
 //     xhttp.setRequestHeader('Content-Type', '');
//      xhttp.setRequestHeader('Acept',);
    xhttp.send();
}