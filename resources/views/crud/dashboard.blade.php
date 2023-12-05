@include('partials.header')

    <x-nav /> {{--Navigation and cart--}} 

    <section class="mx-[15%] my-[3%]">
        <h1 class="text-xl font-bold text-center mb-10"> User Dashboard </h1>
        
        <div class="grid grid-cols-2">
            <div>
                <label for="full_name" class="block text-sm font-medium text-gray-600">Email</label>
                <input type="text" name="full_name" value="{{$users->email }}" class="my-2 p-2 w-full border border-blue-400 rounded-md">
                 <button class="bg-blue-600 px-5 text-white py-2 rounded text-sm hover:bg-blue-400">
                    Change Email
                </button>
                <button class="bg-red-600 px-5 text-white py-2 rounded text-sm hover:bg-red-400">
                    Change Password
                </button>
            </div>
            <div>
                <form method="POST" action="{{ url('/users/dashboard/update_info_updated', ['id' => $users->id]) }}">
                    @csrf
                    <div class="grid grid-cols-3">
                        <div class="mx-1">
                            <label for="full_name" class="block text-sm font-medium text-gray-600">Full Name</label>
                            <input type="text" name="full_name" value="{{$users->full_name }}" class="my-2 p-2 w-full border border-blue-400 rounded-md">
                        </div>
                        <div class="mx-2">
                            <label for="full_name" class="block text-sm font-medium text-gray-600">Contact</label>
                            <input type="text" name="contact" value="{{$users->contact }}" class="my-2 p-2 w-full border border-blue-400 rounded-md">
                        </div>
                        <div class="mx-2">
                            <label for="full_name" class="block text-sm font-medium text-gray-600">Address</label>
                            <input type="text" name="address" value="{{$users->address }}" class="my-2 p-2 w-full border border-blue-400 rounded-md">
                        </div>
                        <button type="submit"
                        class="bg-blue-600 px-3 mx-2 text-white py-2 rounded text-sm hover:bg-blue-400 my-3">
                            Update Information
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="flex justify-center">
            <a href="{{route('dashboard')}}"
                class="bg-red-600 text-center px-56 text-white py-3 rounded text-lg hover:bg-red-400 mt-5">
                Discard
            </a>
        </div>
    </section>


@include('partials.footer')