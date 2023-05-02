@extends('pets.layouts.principal')

@section('titulo', 'Cadastro')

@section('conteudo')


{{-- <x-slot name="trigger">
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Sairrr') }}
        </x-dropdown-link>
    </form>
</x-slot> --}}

<h1 style="font-size: 30px; font-weight: bold;">Cadastrar</h1> <br><br>

<form action="{{ route('pets.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="Nome"> <br><br>
    <label for="idade">Idade:</label>
<input type="text" name="idade" id="idade"> <br><br>



<label for="especie">Família:</label>
<select name="especie" id="especie">
    <option disabled selected>Selecione a família</option>
    <option value="cachorro">Cachorro</option>
    <option value="gato">Gato</option>
</select> <br><br>

<label for="raca">Raça:</label>
<input type="text" name="raca" id="raca"><br><br>

<label for="porte">Porte:</label>
<input type="text" name="porte" id="porte"><br><br>

<label for="sexo">Sexo:</label>
<select name="sexo" id="sexo">
    <option disabled selected>Selecione o sexo</option>
    <option value="Macho">Macho</option>
    <option value="Fêmea">Fêmea</option>
</select> <br><br>

<label for="descricao">Descrição:</label><br>
<textarea name="descricao" id="descricao" cols="40" rows="5"></textarea> <br><br>

<label for="fotos">Imagens:</label>
<input name="fotos" type="file"> <br><br>

<button class="bg-blue-400 border-none rounded text-center py-2 px-4" type="submit">Cadastrar</button>

</form>





@endsection

