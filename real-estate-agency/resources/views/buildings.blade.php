<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estate-kg</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/catalog.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.ico') }}">
    <script src="{{ asset('js/scripts.js') }}"></script>
</head>
<body>
<div class="container">
    @include('partials.header')

    <div class="filter-container">
        <div class="filters">
            <div class="filter">
                <label for="property-type">Тип недвижимости</label>
                <select id="property-type">
                    <option value="flat">Квартира</option>
                    <option value="house">Дом</option>
                    <option value="land">Участок</option>
                </select>
            </div>

            <div class="filter">
                <label for="city">Город</label>
                <input type="text" id="city" placeholder="Город">
            </div>
            <div class="filter">
                <label for="rooms">Комнатность</label>
                <select id="rooms">
                    <option value="studio">Студия</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4+">4+</option>
                </select>
            </div>
            <div class="filter">
                <label for="price">Цена</label>
                <div class="price-range">
                    <input type="number" id="price-from" placeholder="От">
                    <span class="divider">-</span>
                    <input type="number" id="price-to" placeholder="До">
                </div>
            </div>
            <div class="filter">
                <label for="address">Введите адрес</label>
                <input type="text" id="address" placeholder="Поиск...">
            </div>
        </div>
        <button class="search-button">Найти</button>
        <button class="search-button advanced-search">
            Расширенный поиск
            <span class="filter-count">(0)</span>
        </button>
    </div>

    <div class="advanced-search-form">
        <div class="filters">
            <div class="filter">
                <label for="adv-rooms">Комнат</label>
                <select id="adv-rooms">
                    <option value="any">Неважно</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4+</option>
                </select>
            </div>
            <div class="filter">
                <label for="adv-price">Цена</label>
                <div class="price-range">
                    <input type="number" id="adv-price-from" placeholder="От ₽">
                    <input type="number" id="adv-price-to" placeholder="До ₽">
                </div>
            </div>
            <div class="filter">
                <label for="adv-floor">Этаж</label>
                <div class="floor-range">
                    <input type="number" id="adv-floor-from" placeholder="От">
                    <input type="number" id="adv-floor-to" placeholder="До">
                </div>
            </div>
            <div class="filter">
                <label for="adv-house-floors">Этажей в доме</label>
                <div class="house-floors-range">
                    <input type="number" id="adv-house-floors-from" placeholder="От">
                    <input type="number" id="adv-house-floors-to" placeholder="До">
                </div>
            </div>
            <div class="filter">
                <label for="adv-area">Общая площадь</label>
                <div class="area-range">
                    <input type="number" id="adv-area-from" placeholder="От м²">
                    <input type="number" id="adv-area-to" placeholder="До м²">
                </div>
            </div>
            <div class="filter">
                <label for="adv-living-area">Жилая площадь</label>
                <input type="number" id="adv-living-area" placeholder="До м²">
            </div>
            <div class="filter">
                <label for="adv-kitchen-area">Площадь кухни</label>
                <input type="number" id="adv-kitchen-area" placeholder="До м²">
            </div>
            <div class="filter">
                <label for="adv-balcony">Балкон</label>
                <select id="adv-balcony">
                    <option value="any">Неважно</option>
                    <option value="yes">Да</option>
                    <option value="no">Нет</option>
                </select>
            </div>
            <div class="filter">
                <label for="adv-bathroom">Санузел</label>
                <select id="adv-bathroom">
                    <option value="any">Неважно</option>
                    <option value="combined">Совмещенный</option>
                    <option value="separate">Раздельный</option>
                </select>
            </div>
            <div class="filter">
                <label for="adv-renovation">Отделка</label>
                <select id="adv-renovation">
                    <option value="any">Неважно</option>
                    <option value="euro">Евроремонт</option>
                    <option value="cosmetic">Косметический</option>
                    <option value="none">Без ремонта</option>
                </select>
            </div>
            <div class="filter">
                <label for="adv-deal-type">Тип сделки</label>
                <select id="adv-deal-type">
                    <option value="any">Неважно</option>
                    <option value="sale">Продажа</option>
                    <option value="rent">Аренда</option>
                </select>
            </div>
            <div class="filter">
                <label for="adv-house-type">Тип дома</label>
                <select id="adv-house-type">
                    <option value="any">Неважно</option>
                    <option value="brick">Кирпичный</option>
                    <option value="panel">Панельный</option>
                    <option value="monolithic">Монолитный</option>
                    <option value="wood">Деревянный</option>
                </select>
            </div>
        </div>
        <div class="buttons">
            <button class="search-button" id="apply-filters">Поиск</button>
            <button class="search-button" id="reset-filters">Очистить</button>
        </div>
    </div>
    @include('partials.footer')
</div>

<script src="{{ asset('catalog.js') }}"></script>
</body>
</html>
