<div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col">
        <div class="row g-0">
            <div class="col-xl-6">
                <x-panels.error-message/>

                <div class="card-body p-md-5 text-black">
                    <x-input.group for="inputName" :error="$errors->first('name')">
                        <x-slot name="name">Имя</x-slot>
                        <x-input.input id="inputName" name="name" value="{{ old('name') }}" type="text"/>
                    </x-input.group>

                    <x-input.group for="inputSurname" :error="$errors->first('surname')">
                        <x-slot name="name">Фамилия</x-slot>
                        <x-input.input id="inputSurname" name="surname" value="{{ old('surname') }}" type="text"/>
                    </x-input.group>

                    <x-input.group for="inputEmail" :error="$errors->first('email')">
                        <x-slot name="name">Email</x-slot>
                        <x-input.input id="inputEmail" name="email" value="{{ old('email') }}" type="email"
                                       placeholder="john@example.com"/>
                    </x-input.group>

                    <x-input.group for="inputPassword" :error="$errors->first('password')">
                        <x-slot name="name">Пароль</x-slot>
                        <x-input.input id="inputPassword" name="password" type="password"/>
                    </x-input.group>

                    <x-input.group for="inputPasswordConfirm">
                        <x-slot name="name">Повторите пароль</x-slot>
                        <x-input.input id="inputPasswordConfirm" name="password_confirmation" type="password"/>
                    </x-input.group>

                    <div class="flex justify-center items-center mt-6">
                        <x-input.button>
                            {{ __('Регистрация') }}
                        </x-input.button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
