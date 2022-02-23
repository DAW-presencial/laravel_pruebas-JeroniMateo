function form(){
    let data={
       'lname': document.getElementById('form_name').value,
       'fname': document.getElementById('form_surname').value
    }
    fetch('http://127.0.0.1:8000/api/drivers', {
       headers:{
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
       },
       method:'POST',
       body: JSON.stringify(data)
   })
   .then(response => response.json())
   .then(function(result){
    document.getElementById("pilotos").innerHTML = tbody;
   })
   .catch(function (error) {
     console.log(error);
   });
 }