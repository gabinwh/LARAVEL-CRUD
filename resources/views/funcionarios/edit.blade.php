<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Funcionário') }}
        </h2>
    </x-slot>
    <div class="container mx-auto">
        <x-auth-card>
            <x-slot name="logo">
            </x-slot>
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <h2>Editar Funcionário {{ $funcionario->nome }}</h2>
            <form method="POST" action="{{ route('funcionarios.update',$funcionario->id) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div>
                    <x-label for="nome" :value="__('Nome')" />
                    <x-input id="nome" class="block mt-1 w-full" type="text" name="nome" value="{{ $funcionario->nome }}"    required
                        autofocus   />
                </div>
                <div class="mt-4">
                    <x-label for="sobrenome" :value="__('Sobrenome')" />
                    <x-input id="sobrenome" class="block mt-1 w-full" type="text" name="sobrenome" value="{{ $funcionario->sobrenome }}" />
                </div>
                <div class="mt-4">
                    <x-label for="empresa" :value="__('Empresa')" />
                    <select name="empresa_id">
                        @foreach ($empresas as $empresa)
                        <option value=" {{ $empresa->id }} ">{{ $empresa->nome }}</option>
                        @endforeach   
                    </select>    
                </div>

                <div class="mt-4">
                    <x-label for="email" :value="__('E-mail')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $funcionario->email }}"/>
                </div>
                <div class="mt-4">
                    <x-label for="telefone" :value="__('Telefone')" />

                    <x-input id="telefone" class="block mt-1 w-full" type="text" name="telefone" value="{{ $funcionario->telefone }}"/>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-4">
                        {{ __('Atualizar') }}
                    </x-button>
                </div>
            </form>
        </x-auth-card>

</x-app-layout>
