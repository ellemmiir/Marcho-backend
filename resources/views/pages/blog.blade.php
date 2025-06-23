@extends('layouts.main')

@section('title', 'Blog')

@section('content')
    <main class="main">
        <section class="top">
            <div class="top__container" style="background-image: url('images/top-bg.jpg');">
                <div class="container">
                    <h2 class="top__title title">BLOG</h2>
                    <div class="breadcrumbs">
                        <ul class="breadcrumbs__list">
                            <li class="breadcrumbs__item">
                                <a class="breadcrumbs__link" href="index.html">Home</a>
                            </li>
                            <li class="breadcrumbs__item">
                                <a class="breadcrumbs__link" href="#">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog-page">
            <div class="container">
                <div class="blog-page__inner">
                    <div class="blog-page__content">
                        @foreach($posts as $post)
                        <div class="blog-page__item">
                            <a href="blog-one.html" class="blog-page__item-link">
                                <img class="blog-page__img" src="images/blog/1-big.jpg" alt="blog image">
                            </a>
                            <div class="blog-page__item-box">
                                <h4 class="blog-page__item-title">
                                    <a href="blog/{{$post->id}}" class="blog-page__item-link">
                                        {{$post->title}}
                                    </a>
                                </h4>
                                <div class="blog-box">
                                    <a class="blog-box__author" href="#">By {{$post->user->name}}</a>
                                    <div class="blog-box__date">{{$post->created_at}}</div>
                                </div>
                                <p class="blog-page__item-text">
                                    {{$post->content}}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        <div class="blog-page__item">
                            <div class="blog-page__item-popup" style="background-image: url('images/blog/2-big.jpg');">
                                <a class="blog-page__item-link" data-fancybox href="https://www.youtube.com/watch?v=64TCo-9BD_U&ab_channel=LeraGr">
                                    <img class="blog-page__play-img" src="images/icons/play-btn.svg" alt="video play button">
                                </a>
                            </div>
                            <div class="blog-page__item-box">
                                <h4 class="blog-page__item-title">
                                    <a href="blog-one.html" class="blog-page__item-link">
                                        Be prepared to sweat a lot, but at least in the Southern regions there’s a good chance you’ll get to enjoy!
                                    </a>
                                </h4>
                                <div class="blog-box">
                                    <a class="blog-box__author" href="#">By Admin</a>
                                    <div class="blog-box__date">10 January, 2020</div>
                                </div>
                                <p class="blog-page__item-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodoami viverra maycenas acchmsan lacus vel facilisis.
                                </p>
                            </div>
                        </div>
                        <div class="blog-page__item blog-page__item--slider">
                            <div class="blog-page__slider">
                                <img class="blog-page__img" src="images/blog/3-big.jpg" alt="blog image">
                                <img class="blog-page__img" src="images/blog/2-big.jpg" alt="blog image">
                                <img class="blog-page__img" src="images/blog/1-big.jpg" alt="blog image">
                            </div>
                            <div class="blog-page__item-box">
                                <h4 class="blog-page__item-title">
                                    <a href="blog-one.html" class="blog-page__item-link">
                                        Be prepared to sweat a lot, but at least in the Southern regions there’s a good chance you’ll get to enjoy!
                                    </a>
                                </h4>
                                <div class="blog-box">
                                    <a class="blog-box__author" href="#">By Admin</a>
                                    <div class="blog-box__date">10 January, 2020</div>
                                </div>
                                <p class="blog-page__item-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodoami viverra maycenas acchmsan lacus vel facilisis.
                                </p>
                            </div>
                        </div>
                        <div class="blog-page__item blog-page__item--no-image">
                            <div class="blog-page__item-box">
                                <h4 class="blog-page__item-title">
                                    <a href="blog-one.html" class="blog-page__item-link">
                                        Be prepared to sweat a lot, but at least in the Southern regions there’s a good chance you’ll get to enjoy!
                                    </a>
                                </h4>
                                <div class="blog-box">
                                    <a class="blog-box__author" href="#">By Admin</a>
                                    <div class="blog-box__date">10 January, 2020</div>
                                </div>
                                <p class="blog-page__item-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodoami viverra maycenas acchmsan lacus vel facilisis.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="blog-page__aside">
                        <div class="filter-search filter__item">
                            <h3 class="filter__title">Search</h3>
                            <form class="filter-search__form" action="#">
                                <input class="filter-search__input" type="text" placeholder="Search your keyword....">
                                <button class="filter-search__btn" type="submit">
                                    <img src="images/icons/search-white.svg" alt="search button">
                                </button>
                            </form>
                        </div>

                        <div class="person">
                            <img class="person__img" src="images/avatar/ceo.jpg" alt="avatar">
                            <div class="person__name">Tom D. Maianay</div>
                            <div class="person__position">CEO & Founder</div>
                            <p class="person__text">Lorem ipsum dolor sit amet, consectetum adipiscing eit, sed do eiusmod temporary incididunt ut
                                labore et dolore magnaamo aliqua. Qus ipsum suspendisse ultrices an gravida. Risus commodo
                            </p>
                            <div class="person__social">
                                <a class="person__social-link" href="#">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="11px"
                                        height="18px"
                                        viewbox="0 0 11 17"
                                        version="1.1">
                                        <g>
                                            <path d="M 9.59375 9.5625 L 10.085938 6.484375 L 7.027344 6.484375 L 7.027344 4.488281 C 7.027344 3.648438 7.453125 2.828125
                      8.824219 2.828125 L 10.214844 2.828125 L 10.214844 0.207031 C 10.214844 0.207031 8.953125 0 7.746094 0 C 5.230469 0
                      3.585938 1.472656 3.585938 4.140625 L 3.585938 6.484375 L 0.785156 6.484375 L 0.785156 9.5625 L 3.585938 9.5625 L
                      3.585938 17 L 7.027344 17 L 7.027344 9.5625 Z M 9.59375 9.5625 "/>
                                        </g>
                                    </svg>
                                </a>
                                <a class="person__social-link" href="#">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="11px"
                                        height="18px"
                                        viewbox="0 0 11 17"
                                        version="1.1">
                                        <g>
                                            <path d="M 9.59375 9.5625 L 10.085938 6.484375 L 7.027344 6.484375 L 7.027344 4.488281 C 7.027344 3.648438 7.453125 2.828125
                      8.824219 2.828125 L 10.214844 2.828125 L 10.214844 0.207031 C 10.214844 0.207031 8.953125 0 7.746094 0 C 5.230469 0
                      3.585938 1.472656 3.585938 4.140625 L 3.585938 6.484375 L 0.785156 6.484375 L 0.785156 9.5625 L 3.585938 9.5625 L
                      3.585938 17 L 7.027344 17 L 7.027344 9.5625 Z M 9.59375 9.5625 "/>
                                        </g>
                                    </svg>
                                </a>
                                <a class="person__social-link" href="#">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="11px"
                                        height="18px"
                                        viewbox="0 0 11 17"
                                        version="1.1">
                                        <g>
                                            <path d="M 9.59375 9.5625 L 10.085938 6.484375 L 7.027344 6.484375 L 7.027344 4.488281 C 7.027344 3.648438 7.453125 2.828125
                      8.824219 2.828125 L 10.214844 2.828125 L 10.214844 0.207031 C 10.214844 0.207031 8.953125 0 7.746094 0 C 5.230469 0
                      3.585938 1.472656 3.585938 4.140625 L 3.585938 6.484375 L 0.785156 6.484375 L 0.785156 9.5625 L 3.585938 9.5625 L
                      3.585938 17 L 7.027344 17 L 7.027344 9.5625 Z M 9.59375 9.5625 "/>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="latest-post">
                            <h3 class="latest-post__title">
                                Latest Post
                            </h3>
                            @foreach($lastFourPosts as $lastPost)
                            <div class="latest-post__item">
                                <a class="latest-post__img-link" href="#">
                                    <img src="images/blog/aside-1.jpg" alt="" class="latest-post__img">
                                </a>
                                <div class="latest-post__box">
                                    <a href="#" class="latest-post__title-link">
                                        <h5 class="latest-post__box-title">{{$lastPost->title}}</h5>
                                    </a>
                                    <div class="latest-post__date">
                                        {{$lastPost->created_at}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="latest-post__item">
                                <a class="latest-post__img-link" href="#">
                                    <img src="images/blog/aside-1.jpg" alt="" class="latest-post__img">
                                </a>
                                <div class="latest-post__box">
                                    <a href="#" class="latest-post__title-link">
                                        <h5 class="latest-post__box-title">Lorem ipsum dolor suitabl amet, adiping elit.</h5>
                                    </a>
                                    <div class="latest-post__date">
                                        16 Feb, 2019
                                    </div>
                                </div>
                            </div>
                            <div class="latest-post__item">
                                <a class="latest-post__img-link" href="#">
                                    <img src="images/blog/aside-1.jpg" alt="" class="latest-post__img">
                                </a>
                                <div class="latest-post__box">
                                    <a href="#" class="latest-post__title-link">
                                        <h5 class="latest-post__box-title">Lorem ipsum dolor suitabl amet, adiping elit.</h5>
                                    </a>
                                    <div class="latest-post__date">
                                        16 Feb, 2019
                                    </div>
                                </div>
                            </div>
                            <div class="latest-post__item">
                                <a class="latest-post__img-link" href="#">
                                    <img src="images/blog/aside-1.jpg" alt="" class="latest-post__img">
                                </a>
                                <div class="latest-post__box">
                                    <a href="#" class="latest-post__title-link">
                                        <h5 class="latest-post__box-title">Lorem ipsum dolor suitabl amet, adiping elit.</h5>
                                    </a>
                                    <div class="latest-post__date">
                                        16 Feb, 2019
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-category filter__item">
                            <h3 class="filter__title">CATEGORY</h3>
                            <form class="filter-category__form" action="#">
                                <label class="filter-category__label">
                                    <input class="filter-category__input" type="checkbox">
                                    <div class="filter-category__checkbox">
                                        <span>Woman</span>
                                        <span>48</span>
                                    </div>
                                </label>
                                <label class="filter-category__label">
                                    <input class="filter-category__input" type="checkbox">
                                    <div class="filter-category__checkbox">
                                        <span>Man</span>
                                        <span>30</span>
                                    </div>
                                </label>
                                <label class="filter-category__label">
                                    <input class="filter-category__input" type="checkbox" checked>
                                    <div class="filter-category__checkbox">
                                        <span>Sale products</span>
                                        <span>92</span>
                                    </div>
                                </label>
                                <label class="filter-category__label">
                                    <input class="filter-category__input" type="checkbox">
                                    <div class="filter-category__checkbox">
                                        <span>Fashion</span>
                                        <span>121</span>
                                    </div>
                                </label>
                                <label class="filter-category__label">
                                    <input class="filter-category__input" type="checkbox">
                                    <div class="filter-category__checkbox">
                                        <span>Hot dresses</span>
                                        <span>52</span>
                                    </div>
                                </label>
                                <label class="filter-category__label">
                                    <input class="filter-category__input" type="checkbox">
                                    <div class="filter-category__checkbox">
                                        <span>Accessories</span>
                                        <span>88</span>
                                    </div>
                                </label>
                            </form>
                        </div>
                        <div class="filter-popular filter__item">
                            <h3 class="filter__title">Popular Tags</h3>
                            <form class="filter-popular__form" action="#">
                                <label class="filter-popular__label">
                                    <input class="filter-popular__input" type="checkbox">
                                    <span class="filter-popular__checkbox">Sweetshirt</span>
                                </label>
                                <label class="filter-popular__label">
                                    <input class="filter-popular__input" type="checkbox">
                                    <span class="filter-popular__checkbox">Man Accessories</span>
                                </label>
                                <label class="filter-popular__label">
                                    <input class="filter-popular__input" type="checkbox">
                                    <span class="filter-popular__checkbox">Fashion</span>
                                </label>
                                <label class="filter-popular__label">
                                    <input class="filter-popular__input" type="checkbox">
                                    <span class="filter-popular__checkbox">Polo</span>
                                </label>
                                <label class="filter-popular__label">
                                    <input class="filter-popular__input" type="checkbox">
                                    <span class="filter-popular__checkbox">T-Shirt</span>
                                </label>
                                <label class="filter-popular__label">
                                    <input class="filter-popular__input" type="checkbox">
                                    <span class="filter-popular__checkbox">Jewellery</span>
                                </label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
