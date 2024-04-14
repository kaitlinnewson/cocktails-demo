<x-layout>
    <div class="container pt-3">
    <div class="row align-items-start">
        <div class="col">
            <img src="{{ asset('/img/' . $recipe->img ) }}" class="img-fluid recipe-img" alt="{{ $recipe->name }}">
        </div>
        <div class="col">
            <h1 class="">{{ $recipe->name }}</h1>
            <p>{{ $recipe->short_description }}</p>
            <h2>Ingredients</h2>

            <ul>
            @foreach ($ingredients as $ingredient)
                @if($ingredient->type === "garnish")
                    @php 
                        $garnish = $ingredient->type;
                    @endphp
                @else
                    <li>{{ $ingredient->quantity}} {{ $ingredient->unit}} {{ $ingredient->name }}</li>
                @endif
            @endforeach
            </ul>

            @isset($garnish)
            <p><strong>Garnish:</strong> {{ $ingredient->name }}</p>
            @endisset

            <h2>Instructions</h2>

            <p class="">{{ $recipe->description }}</p>
        </div>
    </div>
    </div>


</x-layout>