<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active home" aria-current="page" href="#">
                            <h1>Home</h1>
                        </a>
                    </li>

                </ul>
                <form class="d-flex">

                    <a href="addStudents" button class="btn btn-outline-success" type="submit">Add Students</a>
                </form>
            </div>
        </div>
    </nav>

    <table class="table">
        <thead>
            <tr>

                <th scope="col">Name</th>
                <th scope="col">Registration N0</th>
                <th scope="col">Degree</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{$student['name']}}</td>
                <td>{{$student['regno']}}</td>
                <td>{{$student['degree']}}</td>
                <td>
                    <a href={{"delete/".$student['id']}}>Delete</a>
                    <a href={{"edit/".$student['id']}}>Edit</a>
                </td>


            </tr>
            @endforeach
        </tbody>

    </table>



    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>



<style>
    .btn-outline-success {
        margin-right: 100px;
    }

    .home {
        margin-left: 100px;
    }

    .form-control {
        width: 100%;
    }
</style>