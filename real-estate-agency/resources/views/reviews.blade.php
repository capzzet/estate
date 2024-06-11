<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estate-kg</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reviews.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.ico') }}">
    <script src="{{ asset('js/scripts.js') }}"></script>
</head>
<body>
<div class="container">
    @include('partials.header')
    <div class="reviews-section">
        <div class="review-form-container">
            <h2>Оставить отзыв</h2>
            <form class="review-form" id="review-form">
                <input type="text" id="name" placeholder="Введите ваше имя">
                <textarea id="review" placeholder="Напишите ваш отзыв"></textarea>

                <div class="button-container">
                    <button type="submit">Отправить</button>
                    <button type="button" class="clear-button" onclick="document.getElementById('review-form').reset();">Очистить</button>
                </div>

                <div class="success-message" id="success-message">Спасибо за ваш отзыв!</div>
            </form>
        </div>

        <ul class="reviews-list">
            <li class="review-item">
                <h3>Анна Иванова</h3>
                <p>Отличное агентство! Помогли быстро найти подходящую квартиру. Всем рекомендую!</p>
                <div class="review-date">10 июня 2024</div>
            </li>
            <li class="review-item">
                <h3>Сергей Петров</h3>
                <p>Очень доволен работой агентства. Профессиональный подход и отличное обслуживание.</p>
                <div class="review-date">5 июня 2024</div>
            </li>
        </ul>
    </div>

    <script>
        document.getElementById('review-form').addEventListener('submit', function(event) {
            event.preventDefault();
            document.getElementById('success-message').style.display = 'block';
            setTimeout(() => {
                document.getElementById('success-message').style.display = 'none';
                document.getElementById('review-form').reset();
            }, 3000);
        });
    </script>
    @include('partials.footer')
</div>
</body>
</html>
