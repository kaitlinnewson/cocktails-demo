<x-layout>
    <img src="{{ asset('/img/' . $recipe->img ) }}" class="img-fluid recipe-img" alt="{{ $recipe->name }}">
    <h2 class="">{{ $recipe->name }}</h5>

    <h3>Ingredients</h3>

    @foreach ($ingredients as $ingredient)
        @if($ingredient->type === "garnish")
            <p>Garnish: {{ $ingredient->name }}</p>
        @else
            <ul>
                <li>{{ $ingredient->quantity}} {{ $ingredient->unit}} {{ $ingredient->name }}</li>
            </ul>
        @endif
    @endforeach

    <h3>Instructions</h3>

    <p class="">{{ $recipe->description }}</p>
    
</x-layout>