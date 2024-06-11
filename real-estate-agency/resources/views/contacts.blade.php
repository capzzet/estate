<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estate-kg</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contacts.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.ico') }}">
    <script src="{{ asset('js/scripts.js') }}"></script>
</head>
<body>
<div class="container">
    @include('partials.header')
    <div class="contact-container">
        <div class="contact-left">
            <h2>Информация</h2>
            <p>Мы всегда рады помочь вам. Пожалуйста, свяжитесь с нами через нижеуказанные данные или отправьте нам сообщение, используя форму справа.</p>
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>1234 Улица Пример, Город, Страна</p>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <p>email@example.com</p>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone-alt"></i>
                    <p>+123 456 7890</p>
                </div>
            </div>
            <div class="social-media">
                <h3>Наши соц сети</h3>
                <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="contact-right">
            <h2>Свяжитесь с нами</h2>
            <div class="consultation-form">
                <form action="#">
                    <input type="text" placeholder="Имя">
                    <input type="email" placeholder="Почта">
                    <input type="tel" placeholder="Телефон">
                    <textarea placeholder="Сообщение"></textarea>
                    <div class="form-buttons">
                        <button type="submit">Отправить</button>
                        <button type="reset">Очистить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('partials.footer')
</div>
</body>
</html>
