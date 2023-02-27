<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Users Data</title>
</head>
<body>
<div>
    <h5>Users Data</h5>
    <table class="table table-bordered table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Adress</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach ($users as $user)
      <td>{{$user->id}}</td>
      <td>{{$user->firstName}}</td>
      <td>{{$user->lastName}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->contactNumber}}</td>
      <td>{{$user->address}}</td>
      <td><button type="button" class="edit">Edit</td>
      <td><button type="button" class="delete">Delete</td>
    </tr>
    @endforeach
</div>
</body>
</html>

<style>
h5   {text-align:center;
    font-family:verdana;
    font-size:300%;
}
div {padding:50px; }

.edit{
    background-color: #0cb0b0;
  color: black;
}

.delete{
    background-color: 	#ff4000;
  color: black;
}
</style>


