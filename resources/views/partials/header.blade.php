<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo"><a href="{{ route('home') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo" /></a>
                
            </div>
            <nav>
                <ul>    
                                  
                    <li key=1><a href="{{ route('characters') }}" class="{{ request()->routeIs('characters') ? 'active' : '' }}">Characters</a></li>
                    <li key=2><a href="{{ route('comics') }}" class="{{ request()->routeIs('comics') ? 'active' : '' }}">Comics</a></li>
                    <li key=3><a href="#">Movies</a></li>
                    <li key=4><a href="#">TV</a></li>
                    <li key=5><a href="#">Games</a></li>
                    <li key=6><a href="#">Collectibles</a></li>
                    <li key=7><a href="#">Videos</a></li>
                    <li key=8><a href="#">Fans</a></li>
                    <li key=9><a href="#">Fans</a></li>
                    <li key=10><a href="#">Shop</a></li>                 
                  
                </ul>
            </nav>
        </div>
    </header >
</body>
</html>