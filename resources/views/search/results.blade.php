<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>

    <ul>
        @foreach($results['results'] as $result)
            <li>
                <strong>Name:</strong> {{ $result['name'] }} <br>
                <strong>Height:</strong> {{ $result['height'] }} <br>
                <strong>Mass:</strong> {{ $result['mass'] }} <br>
                <!-- Add more properties as desired -->
            </li>
        @endforeach
    </ul>
</body>
</html>
