@extends("layout")

<?php
$arrayCategories = [
    ['id' => 0, 'image' => 'images/home-images/image10.jpg', 'title' => 'Косметика и гигиена'],
    ['id' => 1, 'image' => 'images/home-images/image9.jpg', 'title' => 'Техника и электроника'],
    ['id' => 2, 'image' => 'images/home-images/image8.jpg', 'title' => 'Повседневная одежда'],
    ['id' => 3, 'image' => 'images/home-images/image7.jpg', 'title' => 'Одежда и обувь'],
    ['id' => 4, 'image' => 'images/home-images/image6.jpg', 'title' => 'Сапоги и туфли '],
    ['id' => 5, 'image' => 'images/home-images/image5.jpg', 'title' => 'Универсальное'],
    ['id' => 6, 'image' => 'images/home-images/image4.jpg', 'title' => 'Сумки и кошельки'],
    ['id' => 7, 'image' => 'images/home-images/image3.jpg', 'title' => 'Нижнее бельё'],
    ['id' => 8, 'image' => 'images/home-images/image2.jpg', 'title' => 'Спортивная обувь '],
    ['id' => 9, 'image' => 'images/home-images/image1.jpg', 'title' => 'Сапоги и туфли ']
];

$arrayCard = [
    ['id' => 0, 'time' => '— 15 min', 'text' => 'Текст карточки первый'],
    ['id' => 1, 'time' => '— 20 min', 'text' => 'Текст карточки второй'],
    ['id' => 2, 'time' => '— 11 min', 'text' => 'Текст карточки третий'],
    ['id' => 3, 'time' => '— 9 min', 'text' => 'Текст карточки последний']
];
?>

@section("categories")
    <main>
        <div class="categories">
            <h1 class="visually-hidden">Example 1</h1>
            <div class="categories__content container px-0">
                <header class="categories__header categories-header row row-cols-1 row-cols-sm-2 align-items-center justify-content-center justify-content-sm-between mx-0">
                    <div class="categories-header__title title col-md-6 px-0 text-center text-lg-left ">Популярные категории</div>
                    <a class="categories-header__button button d-block col-8 col-sm-4 col-md-3 col-xl-1 justify-content-end" href="#">все категории</a>
                </header>
                <div class="categories__list row justify-content-between mx-0">
                    @foreach($arrayCategories as $category)
                        <div class="categories__item category col px-0">
                            <picture class="category__picture d-block position-relative">
                                <source srcset="{{asset($category['image'])}}">
                                <img src="{{asset($category['image'])}}" alt="{{$category['title']}}">
                            </picture>
                            <div class="category__title text-left align-items-stretch">{{ $category['title'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
{{--                <footer class="footer position-relative">--}}
{{--                    <div class="footer__content container">--}}
{{--                        <div class="faq">--}}
{{--                            <div class="faq__title">Тут должен быть какой то  текст, потом <br>--}}
{{--                                придумаем какой точно будет =)--}}
{{--                            </div>--}}
{{--                            <button class="faq__button button">замовити зворотній зв’язок--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                        <div class="products row row-cols-1 row-cols-sm-2 row-cols-md-4">--}}
{{--                            @foreach($arrayCard as $card)--}}
{{--                                <div class="products__item product col">--}}
{{--                                    <div class="product__title">{{($card['text'])}}</div>--}}
{{--                                    <p class="product__time">{{($card['time'])}}</p>--}}
{{--                                    <time class="product__time" datetime="2018--11-14 12:00">{{($card['time'])}}</time>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </footer>--}}
@endsection



{{--@section('categories')--}}
{{--    <main>--}}
{{--        <div class="categories container">--}}
{{--            <div class="categories__wrap position-relative">--}}
{{--                <div class="categories__content d-flex flex-column position-relative">--}}
{{--                    <h1 class="visually-hidden"></h1>--}}
{{--                    <div class="categories__title title">Популярные категории</div>--}}
{{--                    <a class="categories__button button d-flex align-self-center" href="#">все категории</a>--}}
{{--                    <div class="categories__list d-flex justify-content-between">--}}
{{--                        @foreach($arrayCategories as $category)--}}
{{--                            <div class="categories__item category d-flex flex-column align-items-start position-relative">--}}
{{--                                <picture class="category__picture picture-gradient d-block position-relative">--}}
{{--                                    <source srcset="{{asset($category['image'])}}">--}}
{{--                                        <img src="{{asset($category['image'])}}" alt="{{$category['title']}}">--}}
{{--                                </picture>--}}
{{--                                <div class="category__title text-left">{{ $category['title'] }}</div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </main>--}}
{{--    <footer class="footer">--}}
{{--        <div class="footer__content container d-flex flex-column align-items-center justify-content-between position-relative">--}}
{{--            <div class="faq d-flex flex-column align-items-center position-absolute">--}}
{{--                <div class="faq__title text-center">Тут должен быть какой то  текст, потом <br>--}}
{{--                    придумаем какой точно будет =)</div>--}}
{{--                <button class="faq__button button position-relative">замовити зворотній зв’язок</button>--}}
{{--            </div>--}}
{{--            <div class="container products d-flex flex-wrap flex-column flex-sm-row align-items-center justify-content-center justify-content-sm-between px-0 ">--}}
{{--                @foreach($arrayCard as $card)--}}
{{--                    <div class="products__item product d-flex flex-column align-items-start">--}}
{{--                        <div class="product__title">{{($card['text'])}}</div>--}}
{{--                        <p class="product__time position-relative">{{($card['time'])}}</p>--}}
{{--                        <time class="product__time" datetime="2018--11-14 12:00">{{($card['time'])}}</time>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </footer>--}}
{{--@endsection--}}


