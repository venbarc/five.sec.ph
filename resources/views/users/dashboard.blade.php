@include('partials.header')

    <x-nav /> {{--Navigation and cart--}} 

    <section class="mx-[20%] my-[3%]">
        <h1 class="text-xl font-bold text-center mb-10"> User Dashboard </h1>
        
        <form method="POST" action="/users/dashboard/update_info_view">
            @csrf
            <div class="grid grid-cols-4">
                <div class="mx-1">
                    <label for="full_name" class="block text-md font-medium text-blue-600">Email</label>
                    <p class="block text-md font-semibold text-gray-700">{{ $users->email }}</p>
                </div>
                <div class="mx-1">
                    <label for="full_name" class="block text-md font-medium text-blue-600">Full Name</label>
                    <p class="block text-md font-semibold text-gray-700">{{ $users->full_name }}</p>
                </div>
                <div class="mx-2">
                    <label for="full_name" class="block text-md font-medium text-blue-600">Contact</label>
                    <p class="block text-md font-semibold text-gray-700">{{ $users->contact }}</p>
                </div>
                <div class="mx-2">
                    <label for="full_name" class="block text-md font-medium text-blue-600">Address</label>
                    <p class="block text-md font-semibold text-gray-700">{{ $users->address }}</p>
                </div>
            </div>
            <div class="mt-5">
                <button type="submit"
                class="bg-blue-600 px-5 text-white py-2 rounded text-sm hover:bg-blue-400 mt-3">
                Update Information
                </button>
            </div>
        </form>
        
    </section>


@include('partials.footer')