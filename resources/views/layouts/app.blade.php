<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laravel Quickstart - Basic</title>
    

    <!-- CSS And JavaScript -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        
        <nav class="navbar navbar-default">
            @if((session()->has('success')))
            <div class="alert alert-success">
                
                {{ session()->get('success') }}

            </div>
            @endif
        </nav>
    </div>

    @yield('content')
</body>

</html>