<x-layout>
    <div class="px-4 py-2 my-5 text-center">
        <h1 class="display-5 fw-bold">Cocktails for Beginners</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Your resource for getting started with cocktails, including key recipes to try, helpful tips, and other resources.</p>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <h2 class="display-6 p-3">Featured Recipes</h2>
            @foreach ($featured as $recipe)
                <div class="col">
                    <div class="card h-100">
                        <a href="recipe/{{ $recipe->id }}" tabindex="-1">
                            <img src="{{ asset('/img/' . $recipe->img ) }}" class="card-img" alt="{{ $recipe->name }}">
                        </a>
                        <div class="card-body">
                            <a class="card-title" href="recipe/{{ $recipe->id }}">
                                <h3>{{ $recipe->name }}</h3>
                            </a>
                            <p class="card-text">{{ $recipe->short_description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>