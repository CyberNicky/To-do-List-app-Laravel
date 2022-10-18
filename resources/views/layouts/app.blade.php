<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laravel Quickstart - Basic</title>


    <!-- CSS And JavaScript -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/styles/style.css">
</head>

<body>
    <nav class="navbar navbar-light" style="background-color: #FF74B1;">
        <div class="container-fluid">
            @if((session()->has('success')))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif
            <a class="navbar-brand" href="#">To-do-List</a>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>Author: Monique Campos</p>
        <p><a href="nickyalbuquerque2008@gmail.com">Email</a></p>
        <p><a href="https://www.linkedin.com/in/monique-campos-427816207/">LinkedIn</a></p>

    </footer>
</body>

</html>