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

    <div class="container mt-4">
        <a href="{{ route('user.create') }}" class="btn btn-info" >New User</a>

        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Sector</th>
                    <th>Gender</th>
                </thead>

            </table>
        </div>


    </div>


</body>
</html>
