<x-layout>
    <div class="container pt-5">
        <div class="row align-items-start">
            <div class="col">
                <figure class="figure">
                    <img src="{{ asset('/img/' . $recipe->img ) }}" class="img-fluid recipe-img figure-img" alt="{{ $recipe->name }}">
                    <figcaption class="figure-caption">
                        {{ $recipe->img_credit }}
                    </figcaption>
                </figure>
            </div>
            <div class="col">
                <h1>{{ $recipe->name }}</h1>
                <p>{{ $recipe->short_description }}</p>
                <h2>Ingredients</h2>

                <ul>
                @foreach ($ingredients as $ingredient)
                    @if($ingredient->type != "garnish")
                        <li>{{ $ingredient->pivot->quantity}} {{ $ingredient->unit}} {{ $ingredient->name }}</li>
                    @endif
                @endforeach
                </ul>

                @isset($garnish)
                    <p><strong>Garnish:</strong> {{ $garnish->name }}</p>
                @endisset

                <h2>Instructions</h2>

                @isset($glassware)
                    <p><strong>Glass:</strong> {{ $glassware->name }}</p>
                @endisset

                <p>{{ $recipe->description }}</p>
            </div>
        </div>
    </div>
</x-layout>