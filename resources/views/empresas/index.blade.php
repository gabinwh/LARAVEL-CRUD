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
                    <table width="100%" class="min-w-full text-center">
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
                        </thead>
                        <tbody>
                            @foreach ($empresas as $empresa)
                                <tr class="bg-white border-b">
                                    <th class="text-sm font-medium text-gray-900 px-6 py-4 whitespace-nowrap">
                                            {{ $empresa->nome }}
                                    </th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-4 whitespace-nowrap">
                                        {{ $empresa->email }}
                                    </th>
                                    <th class="inline-block">
                                        <img src="/storage/{{ $empresa->logotipo }}" alt="{{$empresa->nome}}" width="42" height="42">
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-wdite px-6 py-4">
                                        {{ $empresa->site }}
                                    </th>
                                    <th class="text-sm font-medium text-gray-900 px-6 py-4 whitespace-nowrap">
                                        <a href="{{ route('empresas.edit', $empresa->id) }} ">Atualizar</a><br>
                                        <form action="{{ route('empresas.destroy',$empresa->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
                                        </form>
                                    </th>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
