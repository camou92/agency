<div class="box">
    @if ($property->getPicture())
    <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property]) }}">
        <img src="{{ $property->getPicture()->getImageUrl(360, 230) }}" alt="" class="w-100">
    </a>
    @else
        <img src="/empty.avif" alt="" class="w-100">
    @endif
    <h3>{{ number_format($property->price, thousands_separator: ' ')}} F CFA</h3>
    <div class="content">
        <div class="text">
            <h3> <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property]) }}">{{ $property->title}}</a></h3>
            <p>{{ $property->surface }}m² - {{ $property->city }}</p>
        </div>
        <div class="icon">
            <i class="bx bx-bed"><span>5</span></i>
            <i class="bx bx-bath"><span>2</span></i>
        </div>
    </div>
</div>
