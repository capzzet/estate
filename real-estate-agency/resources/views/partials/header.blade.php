<div class="modal" id="callbackModal">
    <div class="modal-content">
        <span class="close" id="closeModal">&times;</span>
        <h2>Заказать звонок</h2>
        <form id="callbackForm">
            <div class="form-group">
                <label for="name">Ваше имя:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="phone">Ваш телефон:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <button type="submit">Отправить</button>
        </form>
        <div id="successMessage" style="display:none;">Успешно!</div>
    </div>
</div>
<header class="header">
    <div class="header-left">
        <a href="{{ url('/') }}"><img src="{{ asset('/images/logo1.png') }}" alt="Логотип" class="logo-icon"></a>
        <img src="{{ asset('images/logo2.png') }}" alt="Иконка 1" class="logo-wand-icon">
        <a href="#" class="city-name"><span>Бишкек</span></a>
        <img src="{{ asset('images/location.svg') }}" alt="Иконка 2" class="icon">
    </div>
    <div class="header-right">
        <div class="call">
            <a href="#">
                <img src="{{ asset('images/call.svg') }}" alt="Иконка звонка" class="button-icon">
                <span>Заказать звонок</span>
            </a>
        </div>
        <div class="phone-numbers">
            <span class="phone-number">+996 123 456 789</span>
            <span class="phone-number">+996 123 456 789</span>
        </div>
    </div>
</header>
<nav class="main-nav">
    <ul>
        <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Главная</a></li>
        <li><a href="{{ url('catalog') }}" class="{{ request()->is('catalog') ? 'active' : '' }}">Каталог</a></li>
        <li><a href="{{ url('buildings') }}" class="{{ request()->is('buildings') ? 'active' : '' }}">Новостройки</a></li>
        <li><a href="{{ url('for-sale') }}" class="{{ request()->is('for-sale') ? 'active' : '' }}">Сдать/Продать</a></li>
        <li><a href="{{ url('services') }}" class="{{ request()->is('services') ? 'active' : '' }}">Услуги</a></li>
        <li><a href="{{ url('about') }}" class="{{ request()->is('about') ? 'active' : '' }}">О компании</a></li>
        <li><a href="{{ url('contacts') }}" class="{{ request()->is('contacts') ? 'active' : '' }}">Контакты</a></li>
        <li><a href="{{ url('reviews') }}" class="{{ request()->is('reviews') ? 'active' : '' }}">Отзывы</a></li>
    </ul>
</nav>
