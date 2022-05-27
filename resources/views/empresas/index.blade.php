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
                                    E-mail
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Logotipo
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Site
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Ações
                                </th>
                            </tr>
                        </thead class="border-b">
                        <tbody>
                            @foreach ($empresas as $empresa)
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $empresa->nome }}</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $empresa->email }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $empresa->logotipo }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $empresa->site }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        <a href="{{ route('empresas.edit', $empresa->id) }} ">Atualizar</a><br>
                                        <form action="{{ route('empresas.destroy',$empresa->id) }}" method="POST">
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