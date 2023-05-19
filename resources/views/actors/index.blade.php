<!DOCTYPE html>
<html>
<head>
    <title>Actors and Movies</title>
</head>
<body>
    <h1>Actors and Movies</h1>

    <ul>
        @foreach($actors as $actor)
            <li>
                {{ $actor->name }}
                <ul>
                    @foreach($actor->movies as $movie)
                        <li>{{ $movie->title }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</body>
</html>
