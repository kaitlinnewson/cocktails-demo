<x-layout>
    <div class="container">
        <div class="row">
            <h2 class="display-6">Featured Recipes</h2>

                @foreach ($featured as $recipe)
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('/img/' . $recipe->img ) }}" class="d-block w-100 img-fluid" alt="{{ $recipe->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $recipe->name }}</h5>
                            <p class="card-text">{{ $recipe->short_description }}</p>
                            <a href="recipe/{{ $recipe->id }}" class="btn btn-primary">Recipe</a>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</x-layout>