<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
    <h2>Create a Driver</h2>
    
    <div>
      <label for="form_name">First name:</label><br>
      <input type="text" id="form_name" name="fname"><br>
      <label for="form_surname">Last name:</label><br>
      <input type="text" id="form_surname" name="lname"><br><br>
      <button onclick='proccess();'>confirm</button>
    </div>
    
    <script>
    function proccess(){
       let data={
          'name': document.getElementById('form_name').value,
          'surname': document.getElementById('form_surname').value
       }
       fetch('/proccess2', {
          headers:{
             'Content-Type': 'application/json',
             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          },
          method:'POST',
          body: JSON.stringify(data)
      })
      .then(response => response.json())
      .then(function(result){
          alert(result.message);
      })
      .catch(function (error) {
        console.log(error);
      });
    }
    </script>
    </body>