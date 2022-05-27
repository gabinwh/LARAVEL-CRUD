<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Empresa') }}
        </h2>
    </x-slot>
    <div class="container mx-auto">
        <x-auth-card>
            <x-slot name="logo">
            </x-slot>
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('empresas.store') }}" enctype="multipart/form-data">
                @csrf


                <div>
                    <x-label for="name" :value="__('Nome')" />

                    <x-input id="name" class="block mt-1 w-full" type="text" name="nome" :value="old('name')" required
                        autofocus />
                </div>


                <div class="mt-4">
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" />
                </div>


                <div class="mt-4">
                    <x-label for="logotipo" :value="__('Logotipo')" />

                    <x-input id="logotipo" class="block mt-1 w-full" type="file" name="logotipo" />
                </div>


                <div class="mt-4">
                    <x-label for="site" :value="__('Site')" />

                    <x-input id="site" class="block mt-1 w-full" type="text" name="site" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-4">
                        {{ __('Enviar') }}
                    </x-button>
                </div>
            </form>
        </x-auth-card>

</x-app-layout>
