<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estate-kg</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
    <script src="{{ asset('js/scripts.js') }}"></script>
</head>
<body>
<div class="container">
    @include('partials.header')

    <div class="about-container">
        <section class="about-header">
            <h1>О компании ESTATE-KG</h1>
            <p>Добро пожаловать в ESTATE-KG, ваш надежный партнер в мире недвижимости.</p>
        </section>

        <section class="about-content">
            <div class="about-mission">
                <h2>Наша миссия</h2>
                <p>Наша миссия — предоставить клиентам лучшие решения в области недвижимости, сочетая профессионализм, инновации и высокие стандарты обслуживания.</p>
            </div>

            <div class="about-vision">
                <h2>Наше видение</h2>
                <p>Мы стремимся стать лидером на рынке недвижимости, предоставляя клиентам качественные услуги и помогая им реализовывать свои мечты о комфортном жилье.</p>
            </div>

            <div class="about-team">
                <h2>Наша команда</h2>
                <div class="team-members">
                    <div class="team-member">
                        <img src="{{ asset('images/agent1.jpg') }}" alt="Team Member 1">
                        <h3>Иван Иванов</h3>
                        <p>Генеральный директор</p>
                    </div>
                    <div class="team-member">
                        <img src="{{ asset('images/agent5.jpg') }}" alt="Team Member 2">
                        <h3>Мария Петрова</h3>
                        <p>Менеджер по продажам</p>
                    </div>
                    <div class="team-member">
                        <img src="{{ asset('images/agent3.jpg') }}" alt="Team Member 3">
                        <h3>Алексей Сидоров</h3>
                        <p>Агент по недвижимости</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('partials.footer')
</div>
</body>
</html>
