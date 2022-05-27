<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-center">
                        <thead class="border-b bg-gray-800">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Nome
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Sobrenome
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Empresa
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Email
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Telefone
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Ações
                                </th>
                            </tr>
                        </thead class="border-b">
                        <tbody>
                            @foreach ($funcionarios as $funcionario)
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $funcionario->nome }}</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $funcionario->sobrenome }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $funcionario->empresa->nome }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $funcionario->email }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $funcionario->telefone }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        <a href="{{ route('funcionarios.edit', $funcionario->id) }} ">Atualizar</a><br>
                                        <form action="{{ route('funcionarios.destroy',$funcionario->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
                                        </form>
                                    </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>