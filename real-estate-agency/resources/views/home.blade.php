<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estate-kg</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.ico') }}">
    <script src="{{ asset('js/scripts.js') }}"></script>
</head>
<body>
<div class="container">
    @include('partials.header')
    <div class="info-block">
        <h1 class="agency-title">Estate-kg</h1>
        <div class="info-content">
            <div class="info-left">
                <blockquote class="quote">Ваш надёжный эксперт в мире недвижимости</blockquote>
                <form action="#" method="get" class="info-search-form">
                    <img src="{{ asset('images/search.svg') }}" alt="Поиск" class="search-icon">
                    <input type="text" placeholder="Поиск..." class="info-search-input">
                </form>
                <div class="recent-searches">
                    <h3>Недавний поиск:</h3>
                    <ul>
                        <li><a href="#">Люкс</a></li>
                        <li><a href="#">Апартаменты</a></li>
                        <li><a href="#">2 комнантная</a></li>
                        <li><a href="#">Элитка</a></li>
                        <li><a href="#">Дом с верандой</a></li>
                    </ul>
                </div>
            </div>
            <div class="info-right">
                <img src="{{ asset('images/header-house.png') }}" alt="Дом" class="header-house-img">
            </div>
        </div>
    </div>
    <div class="discover-section">
        <div class="left-content">
            <h1>Откройте для себя самые последние объекты недвижимости</h1>
            <p>Ознакомьтесь с нашими последними предложениями потрясающих домов и элитной недвижимости. Найдите недвижимость своей мечты сегодня!</p>
            <a href="{{ url('catalog') }}">
                <button class="filter-button">
                    Фильтры
                </button>
            </a>
        </div>
        <div class="right-content">
            <div class="consultation-form">
                <h2>Консультация</h2>
                <form action="#" method="post">
                    <input type="text" name="name" placeholder="Ваше имя" required>
                    <input type="tel" name="phone" placeholder="Ваш телефон" required>
                    <button type="submit">Получить консультацию</button>
                </form>
            </div>
        </div>
    </div>
    <div class="block-container">
        <div class="block">
            <h2>Купить квартиру</h2>
            <ul>
                <li><a href="#">1-комнатные <span class="count">150</span></a></li>
                <li><a href="#">2-комнатные <span class="count">200</span></a></li>
                <li><a href="#">3-комнатные <span class="count">100</span></a></li>
                <li><a href="#">4-комнатные <span class="count">50</span></a></li>
                <li><a href="#">Студии <span class="count">75</span></a></li>
            </ul>
        </div>
        <div class="block">
            <h2>Снять квартиру</h2>
            <ul>
                <li><a href="#">1-комнатные <span class="count">180</span></a></li>
                <li><a href="#">2-комнатные <span class="count">220</span></a></li>
                <li><a href="#">3-комнатные <span class="count">90</span></a></li>
                <li><a href="#">4-комнатные <span class="count">40</span></a></li>
                <li><a href="#">Студии <span class="count">60</span></a></li>
            </ul>
        </div>
        <div class="block">
            <h2>Собственникам</h2>
            <ul>
                <li><a href="#">Продать квартиру </a></li>
                <li><a href="#">Сдать квартиру </a></li>
            </ul>
        </div>
    </div>

    @verbatim
        <div id="app">
            <div class="slider">
                <div class="slider-container" :style="{ transform: `translateX(-${currentSlide * 100}%)` }">
                    <div v-for="(property, index) in properties" :key="index" class="slide">
                        <div class="property-detail">
                            <div class="property-text">
                                <div class="property-header">
                                    <h2 class="property-title">{{ property.title }}</h2>
                                    <span class="property-price">{{ property.price }}</span>
                                </div>
                                <div class="property-content">
                                    <p class="property-description">{{ property.description }}</p>
                                    <div class="property-icons">
                                        <div v-for="(icon, i) in property.icons" :key="i" class="icon-text">
                                            <img :src="icon.src" :alt="icon.alt" class="property-icon">
                                            <span class="icon-label">{{ icon.label }}</span>
                                        </div>
                                    </div>
                                </div>
                                <progress-bar :progress="property.progress" :status="property.status" :time="property.time" :key="currentSlide"></progress-bar>
                                <button class="property-button">Подробнее</button>
                            </div>
                            <div class="property-image-container">
                                <img :src="property.image" alt="Изображение дома" class="property-image">
                            </div>
                        </div>
                    </div>
                </div>
                <button @click="prevSlide" class="prev-button">Назад</button>
                <button @click="nextSlide" class="next-button">Вперед</button>
            </div>
        </div>
    @endverbatim
    @include('partials.footer')
</div>

<script src="{{ asset('js/vue.js') }}"></script>
<script src="{{ asset('js/slider.js') }}"></script>

</body>
</html>
