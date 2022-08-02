<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
          crossorigin="anonymous">
    <title>laravel 9 CRUD</title>
</head>
<body>

<div class="container mt-5">

    <a href="{{ route('home') }}" class="form-label">Home</a>
    <br>
    <h1>Create User</h1>
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        @method('post')
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Contact</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Sector</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Gender</label>
        <select name="" id="" class="form-control">
            <option value=""></option>
            <option value="F">F</option>
            <option value="M">M</option>
        </select>

      </div>

      <button class="btn btn-info btn-sm" type="submit">save</button>
    </form>
</div>

</body>
</html>
