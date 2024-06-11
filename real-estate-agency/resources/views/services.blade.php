<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estate-kg</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.ico') }}">
    <script src="{{ asset('js/scripts.js') }}"></script>

</head>
<body>
<div class="container">
    @include('partials.header')
    <div class="services-grid">
        <div class="service-card">
            <div class="service-icon">&#128205;</div>
            <h3 class="service-title">Продажа недвижимости</h3>
            <p class="service-description">
                Мы помогаем продать вашу недвижимость быстро и по выгодной цене. Наши агенты используют современные методы маркетинга и широкую базу клиентов.
            </p>
        </div>
        <div class="service-card">
            <div class="service-icon">&#128221;</div>
            <h3 class="service-title">Оценка недвижимости</h3>
            <p class="service-description">
                Профессиональная оценка недвижимости позволяет определить реальную рыночную стоимость вашего объекта и привлечь больше потенциальных покупателей.
            </p>
        </div>
        <div class="service-card">
            <div class="service-icon">&#128176;</div>
            <h3 class="service-title">Юридическое сопровождение</h3>
            <p class="service-description">
                Наши юристы обеспечивают полное юридическое сопровождение сделок с недвижимостью, включая проверку документов и заключение договоров.
            </p>
        </div>
        <div class="service-card">
            <div class="service-icon">&#128197;</div>
            <h3 class="service-title">Аренда недвижимости</h3>
            <p class="service-description">
                Мы подбираем лучшие варианты аренды для вас и ваших близких. Работаем как с жилой, так и с коммерческой недвижимостью.
            </p>
        </div>
        <div class="service-card">
            <div class="service-icon">&#128200;</div>
            <h3 class="service-title">Анализ рынка</h3>
            <p class="service-description">
                Предоставляем детальный анализ рынка недвижимости, чтобы вы могли принимать взвешенные и обоснованные решения.
            </p>
        </div>
        <div class="service-card">
            <div class="service-icon">&#128247;</div>
            <h3 class="service-title">Фотосессия недвижимости</h3>
            <p class="service-description">
                Профессиональная фотосессия вашего объекта поможет выделить его среди множества других предложений на рынке.
            </p>
        </div>
    </div>
    @include('partials.footer')


</div>
</body>
</html>
