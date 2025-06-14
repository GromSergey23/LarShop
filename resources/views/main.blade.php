<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyStore</title>
    @vite('resources/css/app.css')
</head>
<body>
        <div class="container store-container">
            <div class="store-form">
                <form action="" method="post">
                    <input type="text">
                    <button type="submit">search</button>
                </form>
            </div>
            <div class="product-wrapper">
                <ul class="product-list">
                    @foreach($productCollection as $elem)
                        <li class="product-item">
                            <div class="product-name">{{$elem->name}}</div>
                            <div class="product-image">
                                <img src="#" alt="#" class="product-image-item">
                                {{$elem->image}}
                            </div>
                            <div class="product-description">{{$elem->description}}</div>
                            <div class="product-count">Осталось товара: {{$elem->count}}</div>
                            <div class="product-price">Цена: {{$elem->price}}</div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
</body>
</html>
