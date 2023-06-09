<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    @if ($wishlist -> isEmpty())
        <a href = "{{ route('homepage') }}" class = "btn btn-primary">+ Create New Wishlist</a>
    {{-- href = "{{ route('home') }} to redirect user to home page to add products to the wishlist once the user clicked on the button "+ Create New Wishlist" --}}
    @else
        <ul>
            @foreach($wishlist as $wl)
                <li>
                    <h3><b>{{ $wl -> product -> name }}</b></h3>
                    <p>{{ $wl -> product -> price }}</p>
                </li>
            @endforeach
        </ul>
</body>
</html>
