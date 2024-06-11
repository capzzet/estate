<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estate-kg</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/for-sale.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.ico') }}">
    <script src="{{ asset('js/scripts.js') }}"></script>
</head>
<body>
<div class="container">
    @include('partials.header')
    <section class="why-agent">
        <h2>Зачем вам агент?</h2>
        <div class="reasons">
            <div class="reason" id="reason1">
                <img src="images/icon1.svg" alt="Icon 1">
                <h3>Причина 1</h3>
                <p>Опыт и знания рынка</p>
            </div>
            <div class="reason" id="reason2">
                <img src="images/icon2.svg" alt="Icon 2">
                <h3>Причина 2</h3>
                <p>Экономия времени и сил</p>
            </div>
            <div class="reason" id="reason3">
                <img src="images/icon3.svg" alt="Icon 3">
                <h3>Причина 3</h3>
                <p>Юридическая безопасность</p>
            </div>
            <div class="reason" id="reason4">
                <img src="images/icon4.svg" alt="Icon 4">
                <h3>Причина 4</h3>
                <p>Переговоры и сделки</p>
            </div>
        </div>
    </section>

    <section class="steps">
        <h2>Этапы работы агента</h2>
        <div class="step">
            <img src="images/stage1.svg" alt="Stage 1">
            <div class="step-text">
                <h3>Шаг 1. Профессиональная оценка недвижимости</h3>
                <p>90% собственников неверно определяют цену и теряют покупателей. Агент по недвижимости рассчитывает правильную стартовую цену, которая позволит выйти на сделку в 2-3 раза быстрее.</p>
            </div>
        </div>
        <div class="step">
            <img src="images/stage2.svg" alt="Stage 2">
            <div class="step-text">
                <h3>Шаг 2. Предпродажная подготовка</h3>
                <p>Этот этап определяет, насколько эффективное визуальное впечатление ваша недвижимость произведёт на покупателя. Агент осматривает объект, составляет детальные рекомендации и оказывает помощь в их реализации.</p>
            </div>
        </div>
        <div class="step">
            <img src="images/stage3.svg" alt="Stage 3">
            <div class="step-text">
                <h3>Шаг 3. Маркетинговый план и рекламная кампания</h3>
                <p>Профессиональный маркетинг объекта недвижимости – это более 50 рекламных мероприятий, включая фотосессию, размещение на лучших интернет-порталах и в соцсетях, поиск по собственной базе потенциальных покупателей и многое другое. Такой подход обеспечивает максимальный охват и спрос, что в свою очередь поднимает цену на вашу недвижимость.</p>
            </div>
        </div>
        <div class="step">
            <img src="images/stage4.svg" alt="Stage 4">
            <div class="step-text">
                <h3>Шаг 4. Организация показов</h3>
                <p>Агент профессионально организует показ недвижимости: составляет план показов, избавляет вас от нецелевых контактов и преподносит объект с лучшей стороны.</p>
            </div>
        </div>
        <div class="step">
            <img src="images/stage5.svg" alt="Stage 5">
            <div class="step-text">
                <h3>Шаг 5. Выбор самого выгодного предложения</h3>
                <p>На этом этапе агент собирает и систематизирует все предложения, проводит работу по повышению стоимости и предлагает вам наиболее выгодные варианты.</p>
            </div>
        </div>
        <div class="step">
            <img src="images/stage6.svg" alt="Stage 6">
            <div class="step-text">
                <h3>Шаг 6. Переговоры, задаток и сделка</h3>
                <p>Агент профессионально проводит переговоры с покупателями, отстаивает ваши позиции и помогает получить задаток. Процесс завершается заключением сделки в соответствии с законодательством и рекомендациями юристов.</p>
            </div>
        </div>
    </section>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const showPhoneBtns = document.querySelectorAll('#show-phone');
            showPhoneBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    btn.style.display = 'none';
                    const phoneNumber = btn.nextElementSibling;
                    phoneNumber.style.display = 'block';
                });
            });
        });
    </script>
    @include('partials.footer')
</div>
</body>
</html>
