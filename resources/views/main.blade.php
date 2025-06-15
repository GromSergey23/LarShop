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
            <div class="store-form-wrapper">
                <form action="" method="post" class="store-form">
                    <input type="text" class="store-form__search">
                    <button type="submit">search</button>
                </form>
            </div>
            <div class="product-wrapper">
                <ul class="product-list">
                    @foreach($productCollection as $elem)
                        <li class="product-item">

                            <div class="product-image">
                                <img src="images/free-icon-gear-7174887.png" alt="{{$elem->image}}" class="product-image-item">
{{--                                {{$elem->image}}--}}

                            </div>
                            <div class="product-item__text">
{{--                                <div class="product-name">{{$elem->name}}</div>--}}
                                <div class="product-price">от: {{$elem->price}}</div>
                                <div class="product-description">{{$elem->description}}</div>
                                <div class="product-count">Осталось товара: {{$elem->count}}</div>

                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
</body>
</html>
