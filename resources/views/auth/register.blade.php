<x-guest-layout>

    <div class="grid grid-cols-2 items-center justify-items-center">

        <div class=" w-full px-10">

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <legend class="text-center pb-2 text-2xl font-bold ">Register</legend>
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <input type="submit" value="Register"
                        class="red text-white w-full py-3 my-1 rounded-lg block mx-auto cursor-pointer">

                    <span class=" w-full text-center text-sm  rounded-lg block mx-auto">Already have an Account ?
                    </span>
                    <a href="/login">
                        <input type="button" value="Login"
                            class="red text-white w-full py-3 my-1 rounded-lg block mx-auto cursor-pointer">
                </div>
            </form>

        </div>


        <div class="min-h-[100%] p-24">
            <img src="https://pathwayport.com/saasland/images/login@4x.png" alt=""
                class="h-[50%] object-contain">
        </div>

    </div>

</x-guest-layout>
