@extends('layouts.main')

@section('title', $post->title)

@section('content')
    <main class="main">
        <section class="top">
            <div class="top__container" style="background-image: url('/images/top-bg.jpg');">
                <div class="container">
                    <h2 class="top__title title">BLOG ONE</h2>
                    <div class="breadcrumbs">
                        <ul class="breadcrumbs__list">
                            <li class="breadcrumbs__item">
                                <a class="breadcrumbs__link" href="/blog">Blog</a>
                            </li>
                            <li class="breadcrumbs__item">
                                <a class="breadcrumbs__link" href="#">{{$post->title}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-page blog-one">
            <div class="container">
                <div class="blog-page__inner">
                    <div class="blog-page__content blog-one__content">
                        <img class="blog-page__img" src="/images/blog/1-big.jpg" alt="blog image"/>
                        <div class="blog-one__text">
                            <ul class="blog-one__info">
                                <li class="blog-one__info-item">
                                    <span class="blog-one__info-link" href="#">{{$post->created_at}}</span>
                                </li>
                                <li class="blog-one__info-item">
                                    <a class="blog-one__info-link blog-one__info-link--comment" href="#">3 comments</a>
                                </li>
                                <li class="blog-one__info-item">
                                    <a class="blog-one__info-link blog-one__info-link--author" href="#">By {{$post->user->name}}</a>
                                </li>
                            </ul>
                            <h4>
                                {{$post->title}}
                            </h4>
                            <p>
                                {{$post->content}}
                            </p>
                            <blockquote>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elt, sed does eiusmod tempor incididunt ut labore et dolore magna
                                aliqua dilo. Quis ipsum suspendisse ultrices gravida.
                            </blockquote>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt of in utmm labore et dolore
                                magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo ecenas accumsan lacus vel facilisis. Quis ipsum
                                suspendisse ultrices gravida. Risus comdoumar viverra more maecenas accumsan lacus vel facilisis.
                            </p>
                            <img class="blog-one__left-img" src="/images/blog-one.jpg" alt="#">
                            <p>
                                Lorem ipsum dolor sit amet, consectur picing elit, sed do eusmod tempor incididunt ut mor more labore a doore magna
                                aliqua. Quis into ipsum the suspendisse ultrices grda. Lorem in ipsum dolor sit amet, consectetur adipiscings elit, sed
                                does eiusmod tempor incididunt mod labore et dolore magna aliqua. Quis ipsum in suspendisse fass a ultrices gravida.
                                Loremon ipsum dolor st amaiet, consectetur aipiscinge elit, sed do eiusobimod tempor incididunt uts labore et doloroe
                                gravida.
                            </p>
                        </div>
                        <div class="blog-one__box">
                            <div class="blog-one__tags">
                                <span>TAGS:</span>
                                <a href="#">Fashion</a>,
                                <a href="#">Style</a>
                            </div>
                            <div class="blog-one__share">
                                <span>share:</span>
                                <a href="#">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="15px"
                                        height="15px"
                                        viewbox="0 0 15 15"
                                        version="1.1">
                                        <g id="surface1">
                                            <path
                                                style=" stroke:none;"
                                                d="M 13.457031 4.445312 C 13.46875 4.578125 13.46875 4.710938 13.46875 4.84375 C 13.46875 8.910156 10.375 13.589844
                          4.722656 13.589844 C 2.980469 13.589844 1.359375 13.085938 0 12.210938 C 0.246094 12.238281 0.484375 12.25 0.742188 12.25
                          C 2.179688 12.25 3.503906 11.765625 4.558594 10.9375 C 3.207031 10.90625 2.074219 10.023438 1.683594 8.804688 C 1.875
                          8.832031 2.066406 8.851562 2.265625 8.851562 C 2.542969 8.851562 2.816406 8.8125 3.074219 8.746094 C 1.664062 8.460938
                          0.609375 7.222656 0.609375 5.730469 L 0.609375 5.691406 C 1.019531 5.921875 1.496094 6.0625 2 6.082031 C 1.171875 5.53125
                          0.628906 4.585938 0.628906 3.523438 C 0.628906 2.949219 0.78125 2.425781 1.046875 1.96875 C 2.558594 3.835938 4.835938
                          5.054688 7.386719 5.1875 C 7.339844 4.957031 7.308594 4.722656 7.308594 4.484375 C 7.308594 2.789062 8.679688 1.410156
                          10.382812 1.410156 C 11.269531 1.410156 12.070312 1.78125 12.628906 2.378906 C 13.324219 2.246094 13.992188 1.988281
                          14.582031 1.636719 C 14.351562 2.351562 13.867188 2.949219 13.230469 3.332031 C 13.847656 3.265625 14.449219 3.09375 15
                          2.855469 C 14.582031 3.464844 14.058594 4.007812 13.457031 4.445312 Z M 13.457031 4.445312 "/>
                                        </g>
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="15px"
                                        height="15px"
                                        viewbox="0 0 15 15"
                                        version="1.1">
                                        <g id="surface1">
                                            <path
                                                style=" stroke:none;"
                                                d="M 13.457031 4.445312 C 13.46875 4.578125 13.46875 4.710938 13.46875 4.84375 C 13.46875 8.910156 10.375 13.589844
                          4.722656 13.589844 C 2.980469 13.589844 1.359375 13.085938 0 12.210938 C 0.246094 12.238281 0.484375 12.25 0.742188 12.25
                          C 2.179688 12.25 3.503906 11.765625 4.558594 10.9375 C 3.207031 10.90625 2.074219 10.023438 1.683594 8.804688 C 1.875
                          8.832031 2.066406 8.851562 2.265625 8.851562 C 2.542969 8.851562 2.816406 8.8125 3.074219 8.746094 C 1.664062 8.460938
                          0.609375 7.222656 0.609375 5.730469 L 0.609375 5.691406 C 1.019531 5.921875 1.496094 6.0625 2 6.082031 C 1.171875 5.53125
                          0.628906 4.585938 0.628906 3.523438 C 0.628906 2.949219 0.78125 2.425781 1.046875 1.96875 C 2.558594 3.835938 4.835938
                          5.054688 7.386719 5.1875 C 7.339844 4.957031 7.308594 4.722656 7.308594 4.484375 C 7.308594 2.789062 8.679688 1.410156
                          10.382812 1.410156 C 11.269531 1.410156 12.070312 1.78125 12.628906 2.378906 C 13.324219 2.246094 13.992188 1.988281
                          14.582031 1.636719 C 14.351562 2.351562 13.867188 2.949219 13.230469 3.332031 C 13.847656 3.265625 14.449219 3.09375 15
                          2.855469 C 14.582031 3.464844 14.058594 4.007812 13.457031 4.445312 Z M 13.457031 4.445312 "/>
                                        </g>
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="15px"
                                        height="15px"
                                        viewbox="0 0 15 15"
                                        version="1.1">
                                        <g id="surface1">
                                            <path
                                                style=" stroke:none;"
                                                d="M 13.457031 4.445312 C 13.46875 4.578125 13.46875 4.710938 13.46875 4.84375 C 13.46875 8.910156 10.375 13.589844
                          4.722656 13.589844 C 2.980469 13.589844 1.359375 13.085938 0 12.210938 C 0.246094 12.238281 0.484375 12.25 0.742188 12.25
                          C 2.179688 12.25 3.503906 11.765625 4.558594 10.9375 C 3.207031 10.90625 2.074219 10.023438 1.683594 8.804688 C 1.875
                          8.832031 2.066406 8.851562 2.265625 8.851562 C 2.542969 8.851562 2.816406 8.8125 3.074219 8.746094 C 1.664062 8.460938
                          0.609375 7.222656 0.609375 5.730469 L 0.609375 5.691406 C 1.019531 5.921875 1.496094 6.0625 2 6.082031 C 1.171875 5.53125
                          0.628906 4.585938 0.628906 3.523438 C 0.628906 2.949219 0.78125 2.425781 1.046875 1.96875 C 2.558594 3.835938 4.835938
                          5.054688 7.386719 5.1875 C 7.339844 4.957031 7.308594 4.722656 7.308594 4.484375 C 7.308594 2.789062 8.679688 1.410156
                          10.382812 1.410156 C 11.269531 1.410156 12.070312 1.78125 12.628906 2.378906 C 13.324219 2.246094 13.992188 1.988281
                          14.582031 1.636719 C 14.351562 2.351562 13.867188 2.949219 13.230469 3.332031 C 13.847656 3.265625 14.449219 3.09375 15
                          2.855469 C 14.582031 3.464844 14.058594 4.007812 13.457031 4.445312 Z M 13.457031 4.445312 "/>
                                        </g>
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="15px"
                                        height="15px"
                                        viewbox="0 0 15 15"
                                        version="1.1">
                                        <g id="surface1">
                                            <path
                                                style=" stroke:none;"
                                                d="M 13.457031 4.445312 C 13.46875 4.578125 13.46875 4.710938 13.46875 4.84375 C 13.46875 8.910156 10.375 13.589844
                          4.722656 13.589844 C 2.980469 13.589844 1.359375 13.085938 0 12.210938 C 0.246094 12.238281 0.484375 12.25 0.742188 12.25
                          C 2.179688 12.25 3.503906 11.765625 4.558594 10.9375 C 3.207031 10.90625 2.074219 10.023438 1.683594 8.804688 C 1.875
                          8.832031 2.066406 8.851562 2.265625 8.851562 C 2.542969 8.851562 2.816406 8.8125 3.074219 8.746094 C 1.664062 8.460938
                          0.609375 7.222656 0.609375 5.730469 L 0.609375 5.691406 C 1.019531 5.921875 1.496094 6.0625 2 6.082031 C 1.171875 5.53125
                          0.628906 4.585938 0.628906 3.523438 C 0.628906 2.949219 0.78125 2.425781 1.046875 1.96875 C 2.558594 3.835938 4.835938
                          5.054688 7.386719 5.1875 C 7.339844 4.957031 7.308594 4.722656 7.308594 4.484375 C 7.308594 2.789062 8.679688 1.410156
                          10.382812 1.410156 C 11.269531 1.410156 12.070312 1.78125 12.628906 2.378906 C 13.324219 2.246094 13.992188 1.988281
                          14.582031 1.636719 C 14.351562 2.351562 13.867188 2.949219 13.230469 3.332031 C 13.847656 3.265625 14.449219 3.09375 15
                          2.855469 C 14.582031 3.464844 14.058594 4.007812 13.457031 4.445312 Z M 13.457031 4.445312 "/>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="blog-one__author">
                            <img class="blog-one__author-img" src="/images/blog-author.jpg" alt="photo">
                            <div class="blog-one__author-info">
                                <h5 class="blog-one__author-name">
                                    JHON DOE
                                </h5>
                                <p class="blog-one__author-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo dajsna for tempor incididunt ut labore et dolore
                                    magna aliqua. Quis ipsum more in the a mo spendisse ultrices gravida. Risus commodo.
                                </p>
                            </div>
                        </div>
                        <div class="comments">
                            <img src="/images/avatar/1.jpg" alt="avatar" class="comments__img"/>
                            <div class="comments__content">
                                <div class="comments__content-top">
                                    <p class="comments__content-name">Michle Jhon</p>
                                    <p class="comments__content-date">2 days ago</p>
                                </div>
                                <p class="comments__content-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Qus ipsum speissei ultrices gravida. Risus commodo viverra maeenas accumsan lacus vel facilisis.
                                </p>
                                <a class="comments__content-reply" href="#">Reply</a>
                            </div>
                        </div>
                        <div class="comments">
                            <img src="/images/avatar/2.jpg" alt="avatar" class="comments__img"/>
                            <div class="comments__content">
                                <div class="comments__content-top">
                                    <p class="comments__content-name">Michle Jhon</p>
                                    <p class="comments__content-date">2 days ago</p>
                                </div>
                                <p class="comments__content-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua. Qus ipsum speissei ultrices gravida. Risus commodo viverra maeenas accumsan lacus vel facilisis.
                                </p>
                                <a class="comments__content-reply" href="#">Reply</a>
                            </div>
                        </div>
                        <form action="#" class="comments-form">
                            <p class="blog-one__form-title">LEAVE A REPLY</p>
                            <div class="comments-form__box-input">
                                <input class="comments-form__text-input" type="text" placeholder="Your name"/>
                                <input class="comments-form__text-input" type="text" placeholder="E-mail address"/>
                            </div>
                            <textarea class="comments-form__textarea" placeholder="Your text here"></textarea>
                            <button class="comments-form__btn" type=" submit">
                                POST COMMENT
                            </button>
                        </form>
                    </div>
                    <div class="blog-page__aside">
                        <div class="filter-search filter__item">
                            <h3 class="filter__title">Search</h3>
                            <form class="filter-search__form" action="#">
                                <input class="filter-search__input" type="text" placeholder="Search your keyword...."/>
                                <button class="filter-search__btn" type="submit">
                                    <img src="/images/icons/search-white.svg" alt="search button"/>
                                </button>
                            </form>
                        </div>
                        <div class="person">
                            <img class="person__img" src="/images/avatar/ceo.jpg" alt="avatar"/>
                            <div class="person__name">Tom D. Maianay</div>
                            <div class="person__position">CEO & Founder</div>
                            <p class="person__text">
                                Lorem ipsum dolor sit amet, consectetum adipiscing eit, sed do eiusmod temporary incididunt ut labore et dolore magnaamo
                                aliqua. Qus ipsum suspendisse ultrices an gravida. Risus commodo
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
                            <h3 class="latest-post__title">Latest Post</h3>
                            <div class="latest-post__item">
                                <a class="latest-post__img-link" href="#">
                                    <img src="/images/blog/aside-1.jpg" alt="" class="latest-post__img"/>
                                </a>
                                <div class="latest-post__box">
                                    <a href="#" class="latest-post__title-link">
                                        <h5 class="latest-post__box-title">
                                            Lorem ipsum dolor suitabl amet, adiping elit.
                                        </h5>
                                    </a>
                                    <div class="latest-post__date">16 Feb, 2019</div>
                                </div>
                            </div>
                            <div class="latest-post__item">
                                <a class="latest-post__img-link" href="#">
                                    <img src="/images/blog/aside-1.jpg" alt="" class="latest-post__img"/>
                                </a>
                                <div class="latest-post__box">
                                    <a href="#" class="latest-post__title-link">
                                        <h5 class="latest-post__box-title">
                                            Lorem ipsum dolor suitabl amet, adiping elit.
                                        </h5>
                                    </a>
                                    <div class="latest-post__date">16 Feb, 2019</div>
                                </div>
                            </div>
                            <div class="latest-post__item">
                                <a class="latest-post__img-link" href="#">
                                    <img src="/images/blog/aside-1.jpg" alt="" class="latest-post__img"/>
                                </a>
                                <div class="latest-post__box">
                                    <a href="#" class="latest-post__title-link">
                                        <h5 class="latest-post__box-title">
                                            Lorem ipsum dolor suitabl amet, adiping elit.
                                        </h5>
                                    </a>
                                    <div class="latest-post__date">16 Feb, 2019</div>
                                </div>
                            </div>
                            <div class="latest-post__item">
                                <a class="latest-post__img-link" href="#">
                                    <img src="/images/blog/aside-1.jpg" alt="" class="latest-post__img"/>
                                </a>
                                <div class="latest-post__box">
                                    <a href="#" class="latest-post__title-link">
                                        <h5 class="latest-post__box-title">
                                            Lorem ipsum dolor suitabl amet, adiping elit.
                                        </h5>
                                    </a>
                                    <div class="latest-post__date">16 Feb, 2019</div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-category filter__item">
                            <h3 class="filter__title">CATEGORY</h3>
                            <form class="filter-category__form" action="#">
                                <label class="filter-category__label">
                                    <input class="filter-category__input" type="checkbox"/>
                                    <div class="filter-category__checkbox">
                                        <span>Woman</span>
                                        <span>48</span>
                                    </div>
                                </label>
                                <label class="filter-category__label">
                                    <input class="filter-category__input" type="checkbox"/>
                                    <div class="filter-category__checkbox">
                                        <span>Man</span>
                                        <span>30</span>
                                    </div>
                                </label>
                                <label class="filter-category__label">
                                    <input class="filter-category__input" type="checkbox" checked/>
                                    <div class="filter-category__checkbox">
                                        <span>Sale products</span>
                                        <span>92</span>
                                    </div>
                                </label>
                                <label class="filter-category__label">
                                    <input class="filter-category__input" type="checkbox"/>
                                    <div class="filter-category__checkbox">
                                        <span>Fashion</span>
                                        <span>121</span>
                                    </div>
                                </label>
                                <label class="filter-category__label">
                                    <input class="filter-category__input" type="checkbox"/>
                                    <div class="filter-category__checkbox">
                                        <span>Hot dresses</span>
                                        <span>52</span>
                                    </div>
                                </label>
                                <label class="filter-category__label">
                                    <input class="filter-category__input" type="checkbox"/>
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
                                    <input class="filter-popular__input" type="checkbox"/>
                                    <span class="filter-popular__checkbox">Sweetshirt</span>
                                </label>
                                <label class="filter-popular__label">
                                    <input class="filter-popular__input" type="checkbox"/>
                                    <span class="filter-popular__checkbox">Man Accessories</span>
                                </label>
                                <label class="filter-popular__label">
                                    <input class="filter-popular__input" type="checkbox"/>
                                    <span class="filter-popular__checkbox">Fashion</span>
                                </label>
                                <label class="filter-popular__label">
                                    <input class="filter-popular__input" type="checkbox"/>
                                    <span class="filter-popular__checkbox">Polo</span>
                                </label>
                                <label class="filter-popular__label">
                                    <input class="filter-popular__input" type="checkbox"/>
                                    <span class="filter-popular__checkbox">T-Shirt</span>
                                </label>
                                <label class="filter-popular__label">
                                    <input class="filter-popular__input" type="checkbox"/>
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
