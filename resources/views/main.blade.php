<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyStore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    @vite('resources/css/app.css')
</head>
<body>
        <div class="container store-container">
            <div class="store-form-wrapper">
                <form action="/search" method="get" class="store-form">
                    <input type="text" class="store-form__search" name="search">
{{--                    <button type="submit">search</button>--}}
                </form>
            </div>
            <div class="product-wrapper">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Сортировать
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('sort', ['type' => 'cat'])}}">по категории</a></li>
                        <li><a class="dropdown-item" href="{{route('sort', ['type' => 'alfa', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc'])}}">в алфавитном порядке</a></li>
                        <li><a class="dropdown-item" href="{{route('sort', ['type' => 'count', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc'])}}">по количеству</a></li>
                        <li><a class="dropdown-item" href="{{route('sort', ['type' => 'price', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc'])}}">по цене</a></li>
                    </ul>
                </div>
                <ul class="product-list">
                    @foreach($productCollection as $elem)
                        <li class="product-item">

                            <div class="product-image">
                                <img src="/storage/images/free-icon-gear-7174887.png" alt="{{$elem->image}}" class="product-image-item">
{{--                                {{$elem->image}}--}}

                            </div>
                            <div class="product-item__text">
                                <div class="product-name">{{$elem->name}}</div>
                                <div class="">{{$elem->collection_type}}</div>
                                <div class="product-price">от: {{$elem->price}}</div>
                                <div class="product-description">{{$elem->description}}</div>
                                <div class="product-count">Осталось товара: {{$elem->count}}</div>

                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="mt-4 ">
{{--                {{ $productCollection->links()}}--}}
                {{ $productCollection->links('pagination::bootstrap-5') }}
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
