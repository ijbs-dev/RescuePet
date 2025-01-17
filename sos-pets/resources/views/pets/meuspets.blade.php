@extends('principal')

@section('titulo', 'Detalhes')

@section('conteudo')

@if(session('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-green-400" role="alert"> {{ session('success') }}
    </div>
@endif

<h3 class="text-4xl font-normal leading-normal mt-8 mb-8 text-teal-800 text-center">
    Meus Pets
</h3>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg container mx-auto">

    <table class="w-full text-sm text-left text-white bg-gray-800 mb-12">
        <thead class="text-xs text-gray-100 uppercase bg-gray-800">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nome
                </th>
                <th scope="col" class="px-6 py-3">
                    Idade
                </th>
                <th scope="col" class="px-6 py-3">
                    Raça
                </th>
                <th scope="col" class="px-6 py-3">
                    Tipo
                </th>
                <th scope="col" class="px-6 py-3">
                    Porte
                </th>
                <th scope="col" class="px-6 py-3">
                    Sexo
                </th>
                <th scope="col" class="px-6 py-3">
                    Descrição
                </th>
                <th scope="col" class="px-6 py-3">
                    Stuação
                </th>
                <th scope="col" class="px-6 py-3">
                    Ações
                </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($meusPets as $pet)
            <tr class="bg-white border-b hover:bg-gray-50 text-gray-700">
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <img class="w-20 h-20 rounded-full" src="{{ url("storage/{$pet->fotos}") }}" alt="Jese image">
                    <div class="pl-3">
                        <div class="text-base text-gray-600 font-semibold">{{$pet->nome}}</div>
                    </div>
                </th>
                <td class="px-6 py-4">
                    {{$pet->idade}}
                </td>
                <td class="px-6 py-4">
                    {{$pet->raca}}
                </td>
                <td class="px-6 py-4">
                    @if ($pet->type_id == 1)
                        Cachorro
                    @elseif ($pet->type_id == 2)
                        Gato
                    @endif
                </td>
                <td class="px-6 py-4">
                    @if ($pet->port_id == 1)
                    Pequeno
                @elseif ($pet->port_id == 2)
                    Médio
                @elseif ($pet->port_id == 3)
                    Grande
                @endif
                </td>
                <td class="px-6 py-4">
                    @if ($pet->sex_id == 1)
                        Macho
                    @elseif ($pet->sex_id == 2)
                        Fêmea
                    @endif
                </td>
                <td class="px-6 py-4">
                    {{$pet->descricao}}
                </td>
                <td class="px-6 py-4">
                    {{$pet->situacao}}
                </td>
                <td class="px-6 py-4">
                    <a href="{{route('pets.edit',$pet->id)}}" class="mr-2 font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                    <form method="post" action="{{ route('pets.destroy', $pet->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remover</button>
                    </form>
                    @if ($pet->situacao == 'agendado')
                    <form method="post" action="{{ route('pets.confirmar-adocao') }}">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="situacao" value="Adotado">
                        <input type="hidden" name="user_id" value="{{ $pet->user_id }}">
                        <input type="hidden" name="id" value="{{ $pet->id }}">
                        <button type="submit" class="font-medium text-green-600 dark:text-green-500 hover:underline">Confirmar Adoção</button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
