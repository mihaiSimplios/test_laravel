<!DOCTYPE html>
<html>
<head>
    <title>Cars</title>
</head>
<body>
<h1>Cars List</h1>

@foreach($cars as $car)
    <div>
        <h2>{{ $car->make }} {{ $car->model }} ({{ $car->year }})</h2>

        <h3>Engine</h3>
        <p>Type: {{ $car->engine->type }}</p>
        <p>Horsepower: {{ $car->engine->horsepower }}</p>

        <h3>Drivers</h3>
        <ul>
            @foreach($car->drivers as $driver)
                <li>{{ $driver->name }} (License: {{ $driver->license_number }})</li>
            @endforeach
        </ul>
    </div>
    <hr>
@endforeach
</body>
</html>
