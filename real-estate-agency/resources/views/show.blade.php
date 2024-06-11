<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $property->type }} в {{ $property->city }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/property.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.ico') }}">
    <script src="{{ asset('js/scripts.js') }}"></script>
</head>
<body>
<div class="container">
    @include('partials.header')

    <div class="property-details">
        <div class="property-images">
            <div class="slider">
                @foreach($property->images as $image)
                    <div class="slide">
                        <img src="{{ asset('images/' . $image) }}" alt="Изображение недвижимости">
                    </div>
                @endforeach
                <button class="slider-button prev">&#10094;</button>
                <button class="slider-button next">&#10095;</button>
                <div class="slider-indicators">
                    @foreach($property->images as $index => $image)
                        <span class="slider-indicator {{ $index === 0 ? 'active' : '' }}"></span>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="property-info">
            <h2>{{ $property->area }}м², {{ $property->rooms }} комнат(ы), {{ $property->floor }}/{{ $property->house_floors }} этаж</h2>
            <div class="price-details">
                <div class="agent-price">{{ number_format($property->price, 0, ',', ' ') }} ⃀</div>
                <div class="agent-price-per-meter">{{ number_format($property->price / $property->area, 0, ',', ' ') }} ⃀/м²</div>
            </div>
            <div class="descrip">
                <p>{{ $property->city }}, {{ $property->address }}</p>
                <p>{{ $property->description }}</p>
            </div>
            <div class="advertisement-agent">
                <div class="agent-image">
                    <img src="{{ asset('images/agent4.jpg') }}" alt="Агент">
                </div>
                <div class="agent-info">
                    <div class="agent-name">Романенкова Наталья Викторовна</div>
                    <div class="agent-description">Агент</div>
                </div>
            </div>
            <div class="agent-contact">
                <button id="show-phone" class="contact-button">Показать телефон</button>
                <button id="phone-number" class="contact-button" style="display: none;">+996 (123) 456-789</button>
                <div class="icons">
                    <img src="{{ asset('images/telegram.svg') }}" alt="Telegram">
                    <img src="{{ asset('images/whatsapp.svg') }}" alt="WhatsApp">
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
</div>
<script>
    document.getElementById('show-phone').addEventListener('click', function() {
        document.getElementById('phone-number').style.display = 'block';
        this.style.display = 'none';
    });
</script>
</body>
</html>
