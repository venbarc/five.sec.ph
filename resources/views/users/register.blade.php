@include('partials.header')

    <x-nav /> {{--Navigation and cart--}} 

    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <p class="flex items-center mb-6 text-2xl font-bold text-gray-900 dark:text-white">
                Register    
            </p>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Create your account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="/register/create" method="POST">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Your email
                            </label>
                            @error('email')
                                <p class="text-red-500 text-sm p-1">
                                    {{$message}}
                                </p>
                            @enderror
                            <input type="email" name="email" value="{{old('email')}}" id="email"  placeholder="Email@gmail.com" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for="full_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Full Name
                            </label>
                            @error('full_name')
                                <p class="text-red-500 text-sm p-1">
                                    {{$message}}
                                </p>
                            @enderror
                            <input type="text" name="full_name" value="{{old('full_name')}}" id="full_name" placeholder="Full name here...." class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for="contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Contact Number [+63]
                            </label>
                            @error('contact')
                                <p class="text-red-500 text-sm p-1">
                                    {{$message}}
                                </p>
                            @enderror
                            <input type="number" name="contact" value="{{old('contact')}}" id="contact" placeholder="xxxx-xxxx-xxx" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Complete Address
                            </label>
                            @error('address')
                                <p class="text-red-500 text-sm p-1">
                                    {{$message}}
                                </p>
                            @enderror
                            <input type="text" name="address" value="{{old('address')}}" id="address" placeholder="Address here...." class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Password
                            </label>
                            @error('password')
                                <p class="text-red-500 text-sm p-1">
                                    {{$message}}
                                </p>
                            @enderror
                            <input type="password" name="password" id="password" placeholder="••••••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Password Confirmation
                            </label>
                            @error('password_confirmation')
                                <p class="text-red-500 text-sm p-1">
                                    {{$message}}
                                </p>
                            @enderror
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        
                        <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Register
                        </button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Already have an account ? <br>
                            <a href="/login" class="font-medium text-blue-600 hover:underline dark:text-blue-300">
                                Login here
                            </a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

@include('partials.footer')