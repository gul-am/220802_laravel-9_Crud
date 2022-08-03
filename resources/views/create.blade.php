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
                    <label  class="form-label">Name</label>
                    <input type="text" class="form-control" name="name">
                    @error('name')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">Contact</label>
                    <input type="text" class="form-control" name="contact">
                    @error('contact')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">Sector</label>
                    <input type="text" class="form-control" name="sector">
                    @error('sector')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">Gender</label>
                    <select name="gender" class="form-control">
                        <option value=""></option>
                        <option value="F">F</option>
                        <option value="M">M</option>
                    </select>
                    @error('gender')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button class="btn btn-info btn-sm" type="submit">save</button>
            </form>
        </div>

    </body>
</html>
