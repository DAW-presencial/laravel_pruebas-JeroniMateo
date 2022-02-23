<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div id="responsive">
        <h1>F1 Drivers</h1>

        <h2>Create a Driver</h2>
        <div>
          <label for="form_name">First name:</label><br>
          <input type="text" id="form_name" name="fname"    ><br>
          <label for="form_surname">Last name:</label><br>
          <input type="text" id="form_surname" name="lname" ><br>
          <label for="form_surname">Team</label><br>
          <input type="text" id="form_surname" name="driverteam" ><br><br>
          <button onclick='form()'>Confirm</button>
        </div>
    <br>

        <button onclick="api_rest()" class="nav-link">Mostrar</button>
        <table class="table table-dark table-striped mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>LastName</th>
                    <th>Team</th>
                </tr>
            </thead>
            <tbody id="pilotos">
                
            </tbody>
        </table>

    <script src="/js/drivers.js"></script>
</body>
</html>