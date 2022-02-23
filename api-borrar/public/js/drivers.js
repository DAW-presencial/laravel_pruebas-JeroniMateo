function api_rest() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
         let tbody = "";
         var drivers = JSON.parse(xhttp.responseText);
         drivers.forEach(driver => {
             tbody += `<tr><td>${driver.id}</td><td>${driver.fname}</td><td>${driver.lname}</td><td>${driver.driverteam}</td></tr>`
         });
        
        document.getElementById("pilotos").innerHTML = tbody;
        
    };

    xhttp.open("GET", "http://127.0.0.1:8000/api/drivers", true);
    //xhttp.setRequestHeader('Content-Type', '');
    //xhttp.setRequestHeader('Acept',);
    xhttp.send();
}
