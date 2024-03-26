<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('header')
    <body class="antialiased">
        <div class="jumbotron text-center">
        <h1>About page - <?php echo $name; ?> </h1>
        <h1>About page - {{ $name }} </h1>
        <p>Resize this responsive page to see the effect!</p>
        </div>

        <div class="container">
        <div class="row">
            @foreach($faculties as $faculty)
                <div class="col-sm-2">
                    <h3>{{ $faculty->title }}</h3>
                    <p>{{ $faculty->city }} | {{ $faculty->postal_code }}</p>
                </div>
            @endforeach
        </div>
        </div>
        
    </body>
</html>
