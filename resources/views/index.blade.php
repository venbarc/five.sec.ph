
@include('partials.header')

    <x-nav /> {{--Navigation and cart--}} 

    <main class="my-8">
        <div class="container mx-auto px-6">
            @include('home.categories')
        
            @include('home.new_release')

            @include('home.all_products');
        </div>
    </main>

@include('partials.footer')