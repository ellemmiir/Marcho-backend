@extends('layouts.main')

@section('title', 'Shop')

@section('content')
    <main class="main">
        <section class="top">
            <div class="top__container" style="background-image: url('images/top-bg.jpg');">
                <div class="container">
                    <h2 class="top__title title">SHOP</h2>
                    <div class="breadcrumbs">
                        <ul class="breadcrumbs__list">
                            <li class="breadcrumbs__item">
                                <a class="breadcrumbs__link" href="index.html">Home</a>
                            </li>
                            <li class="breadcrumbs__item">
                                <a class="breadcrumbs__link" href="#">Shop</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="shop">
            <div class="container">
                <div class="shop__inner">
                    <button class="shop__filter-btn">
                        <img src="images/icons/search-white.svg" alt="search button">
                    </button>

                    <div class="shop__filters filter">
                        <div class="filter-search filter__item">
                            <h3 class="filter__title">Search</h3>
                            <form class="filter-search__form" action="#">
                                <input class="filter-search__input" type="text" placeholder="Search your keyword....">
                                <button class="filter-search__btn" type="submit">
                                    <img src="images/icons/search-white.svg" alt="search button">
                                </button>
                            </form>
                        </div>
                        <form class="filter-price__form" action="{{ route('items.index') }}" method="GET">
                        <div class="filter-price filter__item">
                            <h3 class="filter__title">Price Filter</h3>

                                <input class="filter-price__input"
                                       type="text"
                                       data-min="{{$realMin}}"
                                       data-max="{{$realMax}}"
                                       data-from="{{$minPrice ?? 200}}"
                                       data-to="{{$maxPrice ?? 800}}"><!-- знач. по умолчанию -->

                            <input type="hidden" name="min_price" value="{{ $minPrice ?? 0 }}">
                            <input type="hidden" name="max_price" value="{{ $maxPrice ?? 999 }}">


                                <label class="filter-price__label">
                                    <span>Price: $<span class="filter-price__from">{{$minPrice ?? 50}}</span>
                                         - $<span class="filter-price__to">{{ $maxPrice ?? 800 }}</span>
                                    </span>
                                </label>
                        </div>

                        <div class="filter-color filter__item">
                            <h3 class="filter__title">Color Filter</h3>
                            @foreach($allColors as $colors)
                                <label class="filter-color__label">
                                    <span class="filter-color__text">{{$colors->name}} ({{$colors->items_count}})</span>
                                    <div class="filter-color__box">
                                        <input class="filter-color__input"
                                               type="checkbox"
                                               name="colors[]"
                                               value="{{$colors->id}}"
                                            {{ in_array($colors->id, request()->input('colors', [])) ? 'checked' : '' }}>
                                        <span class="filter-color__checkbox filter-color__checkbox--{{lcfirst($colors->name)}}"></span>
                                    </div>
                                </label>
                            @endforeach
                        </div>

                        <div class="filter-size filter__item">
                            <h3 class="filter__title">Size Filter</h3>
                            @foreach($allSizes as $id => $name)
                                <label class="filter-size__label">
                                    <input class="filter-size__input"
                                           type="checkbox"
                                           name="sizes[]"
                                           value="{{ $id }}"
                                           {{ in_array($id, request()->input('sizes', [])) ? 'checked' : '' }}>
                                    <span class="filter-size__checkbox"></span>
                                    <span class="filter-size__text">{{$name}}</span>
                                </label>
                            @endforeach
                        </div>
                        <div class="filter-category filter__item">
                            <h3 class="filter__title">CATEGORY</h3>
                            @foreach($allCategories as $category)
                                <label class="filter-category__label">
                                    <input class="filter-category__input"
                                           type="checkbox"
                                           name="categories[]"
                                           value="{{$category->id}}"
                                           {{ in_array($category->id, request()->input('categories', [])) ? 'checked' : '' }}>
                                    <div class="filter-category__checkbox">
                                        <span>{{$category->name}}</span>
                                        <span>{{$category->items_count}}</span>
                                    </div>
                                </label>
                            @endforeach
                        </div>

                        <div class="filter-popular filter__item">
                            <h3 class="filter__title">Popular Tags</h3>
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
                        </div>

                        <div class="filter__btn-box">
                            <button class="filter__btn" type="submit">Filter</button>
                        </div>
                        </form>
                    </div>

                    <div class="shop-content">
                        <div class="shop-content__filter">
                            <div class="shop-content__filter-buttons">
                                <span>View</span>
                                <button class="shop-content__filter-btn shop-content__filter-btn--active button-grid">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                        <path
                                            fill-rule="evenodd"
                                            fill="rgb(141, 141, 141)"
                                            d="M-0.000,3.750 L3.750,3.750 L3.750,-0.000 L-0.000,-0.000 L-0.000,3.750 ZM5.625,15.000 L9.375,15.000 L9.375,11.250
                        L5.625,11.250 L5.625,15.000 ZM-0.000,15.000 L3.750,15.000 L3.750,11.250 L-0.000,11.250 L-0.000,15.000 ZM-0.000,9.375
                        L3.750,9.375 L3.750,5.625 L-0.000,5.625 L-0.000,9.375 ZM5.625,9.375 L9.375,9.375 L9.375,5.625 L5.625,5.625 L5.625,9.375
                        ZM11.250,-0.000 L11.250,3.750 L15.000,3.750 L15.000,-0.000 L11.250,-0.000 ZM5.625,3.750 L9.375,3.750 L9.375,-0.000
                        L5.625,-0.000 L5.625,3.750 ZM11.250,9.375 L15.000,9.375 L15.000,5.625 L11.250,5.625 L11.250,9.375 ZM11.250,15.000
                        L15.000,15.000 L15.000,11.250 L11.250,11.250 L11.250,15.000 Z"/>
                                    </svg>
                                </button>
                                <button class="shop-content__filter-btn button-list">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="15px">
                                        <path
                                            fill-rule="evenodd"
                                            fill="rgb(141, 141, 141)"
                                            d="M5.835,14.998 L5.835,10.827 L19.994,10.827 L19.994,14.998 L5.835,14.998 ZM5.835,5.413 L19.994,5.413 L19.994,9.585
                        L5.835,9.585 L5.835,5.413 ZM5.835,0.000 L19.994,0.000 L19.994,4.172 L5.835,4.172 L5.835,0.000 ZM0.007,10.827
                        L4.429,10.827 L4.429,14.998 L0.007,14.998 L0.007,10.827 ZM0.007,5.413 L4.429,5.413 L4.429,9.585 L0.007,9.585 L0.007,5.413
                        ZM0.007,0.000 L4.429,0.000 L4.429,4.172 L0.007,4.172 L0.007,0.000 Z"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="shop-content__filter-selects">
                                <form class="shop-content__filter-form" action="#">
                                    <select class="shop-content__filter-sort select-style">
                                        <option value="">Sort By Default</option>
                                        <option value="">Sort Not By Default</option>
                                        <option value="">Sort Randomly</option>
                                        <option value="">Sort as you wish</option>
                                    </select>
                                    <select class="shop-content__filter-show select-style">
                                        <option value="">Show 10</option>
                                        <option value="">Show 4</option>
                                        <option value="">Show 6</option>
                                        <option value="">Show 8</option>
                                    </select>
                                </form>
                            </div>
                        </div>

                        <div class="shop-content__inner">
                            @foreach($items as $item)
                            <div class="product-item {{$item->new_price ? 'product-item--sale' : ''}}">
                                <div class="product-item__top-box top-box">
                                    <a href="shop/{{$item->id}}" class="top-box__img-link">
                                        <img class="top-box__img" src="images/product/1.jpg" alt="product">
                                    </a>
                                    <div class="top-box__link-box">
                                        <a class="top-box__link" href="shop.html">
                                            <svg width="19" height="20"><path fill="#29282D" fill-rule="evenodd" d="m18.709 18.219-4.681-4.95a8.142 8.142 0 0 0 1.863-5.194c0-4.453-3.563-8.077-7.944-8.077C3.568-.002.005 3.622.005 8.075c0 4.454 3.563 8.078 7.942 8.078a7.756 7.756 0 0 0 4.551-1.463l4.718 4.99a1.022 1.022 0 0 0 1.464.03 1.068 1.068 0 0 0 .029-1.491ZM7.947 2.106c3.238 0 5.872 2.679 5.872 5.969 0 3.292-2.634 5.971-5.872 5.971-3.236 0-5.869-2.679-5.869-5.971 0-3.29 2.633-5.969 5.869-5.969Z"/></svg>
                                        </a>
                                        <a class="top-box__link top-box__link--line" href="login.html">
                                            <svg width="16" height="20"><path fill="#29282D" fill-rule="evenodd" d="M15.999 17.294 14.854 4.396a.55.55 0 0 0-.547-.504h-2.354A3.953 3.953 0 0 0 8.005.002a3.953 3.953 0 0 0-3.948 3.89H1.703a.547.547 0 0 0-.547.504L.011 17.294c0 .017-.004.033-.004.049 0 1.469 1.345 2.663 3 2.663h9.996c1.655 0 3-1.194 3-2.663 0-.016 0-.032-.004-.049ZM8.005 1.106a2.848 2.848 0 0 1 2.844 2.786H5.161a2.848 2.848 0 0 1 2.844-2.786Zm4.998 17.796H3.007c-1.038 0-1.88-.687-1.896-1.534L2.206 5.001h1.847v1.677a.55.55 0 0 0 .552.552.55.55 0 0 0 .552-.552V5.001h5.692v1.677a.55.55 0 0 0 .552.552.55.55 0 0 0 .552-.552V5.001H13.8l1.099 12.367c-.016.847-.862 1.534-1.896 1.534Z"/></svg>
                                        </a>
                                        <a class="top-box__link" href="login.html">
                                            <svg width="23" height="20"><path fill="#29282D" fill-rule="evenodd" d="M16.894-.001c-2.424 0-3.959 1.424-4.82 2.619a8.851 8.851 0 0 0-.573.914 8.522 8.522 0 0 0-.573-.914c-.86-1.195-2.395-2.619-4.82-2.619-1.724 0-3.298.698-4.433 1.965C.593 3.172-.004 4.791-.004 6.521c0 1.884.748 3.636 2.353 5.513 1.434 1.679 3.498 3.409 5.887 5.413.891.746 1.811 1.518 2.792 2.362l.029.025a.678.678 0 0 0 .888 0l.03-.025c.98-.844 1.901-1.616 2.791-2.362 2.39-2.004 4.453-3.734 5.887-5.413 1.605-1.877 2.353-3.629 2.353-5.513 0-1.73-.596-3.349-1.679-4.557C20.192.696 18.618-.001 16.894-.001Zm-3.002 16.438a301.82 301.82 0 0 0-2.391 2.018c-.833-.712-1.623-1.374-2.39-2.018-4.677-3.921-7.766-6.511-7.766-9.916 0-1.407.476-2.715 1.342-3.681a4.53 4.53 0 0 1 3.421-1.515c1.849 0 3.043 1.12 3.72 2.06a7.819 7.819 0 0 1 1.032 2.019.674.674 0 0 0 .641.458.673.673 0 0 0 .641-.458 7.819 7.819 0 0 1 1.032-2.019c.677-.94 1.872-2.06 3.72-2.06 1.331 0 2.546.538 3.422 1.515.865.966 1.342 2.274 1.342 3.681 0 3.405-3.09 5.995-7.766 9.916Z"/></svg>
                                        </a>
                                    </div>
                                </div>

                                <div class="product-item__bottom-box bottom-box">
                                    <div class="bottom-box__wrapper">
                                        <div class="bottom-box__star star" data-rateyo-rating='4.7'></div>
                                        <a href="shop/{{$item->id}}" class="bottom-box__title-link">
                                            <h4 class="bottom-box__title">{{$item->name}}</h4>
                                        </a>
                                        @if($item->new_price)
                                            <div class="bottom-box__price">
                                                <div class="bottom-box__new-price">${{$item->new_price}}</div>
                                                <div class="bottom-box__old-price">${{$item->old_price}}</div>
                                            </div>
                                        @else
                                            <div class="bottom-box__price">
                                                <div class="bottom-box__new-price">${{$item->old_price}}</div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="bottom-box__content-box">
                                        <p class="bottom-box__text">
                                            Lorem ipsum dolor sit amet, adipiscing elit, sed de eusmod utlitoi labore et dolore magna aliqua.
                                        </p>
                                        <button class="bottom-box__btn">
                                            Add to cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        {{ $items->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
