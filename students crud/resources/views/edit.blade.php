<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active home" aria-current="page" href="#">
                            <h1>Update Student</h1>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <form action="/edit" method="POST">
        @csrf
        <input type="hidden" name="id" value={{$data['id']}} />
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">
                <b>Student Name</b>
            </label>
            <input type="text" class="form-control" name="name" value="{{$data['name']}}" />


        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">
                <b>Registration No</b>
            </label>
            <input type="text" class="form-control" name="regno" value="{{$data['regno']}}" />
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">
                <b>Degree</b>
            </label>
            <input type="text" class="form-control" name="degree" value="{{$data['degree']}}" />
        </div>

        <button type="submit" class="btn btn-primary">update</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>

<style>
    .form-control {
        width: 100%;
    }

    form {
        width: 40%;

        margin-top: 100px;
        margin-left: 400px;

    }
</style>