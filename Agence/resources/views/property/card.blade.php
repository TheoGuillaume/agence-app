<div class="card">
    <img src="/static/img/people.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">
            <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property] )}}">{{ $property->title }}</a>
        </h5>
        <p class="card-text">{{ $property->surface }}m² - {{ $property->city }} ({{ $property->postal_code }})</p>
        <div class="text-primary fs-bold" style="font-size : 1.4rem;">
            {{ number_format($property->price, thousands_separator: ' ') }} €
        </div>
    </div>
</div>
