<x-layout>
    <div class="px-4 py-2 my-5 text-center">
        <h1 class="display-5 fw-bold">Cocktails for Beginners</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Your resource for getting started with cocktails, including key recipes to try, helpful tips, and other resources.</p>
        </div>
    </div>
    
    <h2 class="display-6 p-3">Featured Recipes</h2>
        <div class="card-group p-3">
        @foreach ($featured as $recipe)
            <div class="card" style="width: 18rem;">
                <a href="recipe/{{ $recipe->id }}">
                    <img src="{{ asset('/img/' . $recipe->img ) }}" class="card-img" alt="{{ $recipe->name }}">
                </a>
                <div class="card-body">
                    <h3 class="card-title">{{ $recipe->name }}</h3>
                    <p class="card-text">{{ $recipe->short_description }}</p>
                </div>
            </div>
        @endforeach
        </div>
</x-layout>