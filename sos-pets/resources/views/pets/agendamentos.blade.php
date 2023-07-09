@extends('principal')

@section('titulo', 'Agendamento')

@section('conteudo')


@if (session('sucesso'))
    <div class="alert alert-success">

    </div>
     <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
      <span class="font-medium"></span>{{ session('sucesso') }}
    </div>
@endif


<h3 class="text-center text-3xl font-bold text-gray-700 mt-8">Meus Agendamentos</h3>



<div class="flex items-center justify-center container mx-auto" style="margin-top:90px;">
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">

        <!-- card1 -->
        @foreach($schedules as $schedule)
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white"><span class="text-blue-500">Data:</span> <span class="text-xl">{{ $schedule->adoption_date }}</span></h5>

            <p class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white"><span class="text-blue-500">Hora:</span>{{ $schedule->hour }}</p>

             <p class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white"><span class="text-blue-500">Status: </span>{{ $schedule->status }}</p>

            <p class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white"><span class="text-blue-500">Obeservação:</span> <span>{{ $schedule->observation }}</span></p>
            {{-- @if ($schedule->status !== 'Aguardando')
            <a href="#" class="mt-4 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Confirmar
            </a>
            @endif --}}
        </div>
        @endforeach
    </div>
</div>



<div class="bg-gray-100 w-full min-h-screen gap-4 flex-wrap flex justify-center items-center">

  <!-- Card -->
  <div class="w-60 p-2 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
    <!-- Image -->
    <img class="h-40 object-cover rounded-xl" h-40 object-cover rounded-xl" src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
    <div class="p-2">
    <!-- Heading -->
    <h2 class="font-bold text-lg mb-2 ">Heading</h2>
    <!-- Description -->
    <p class="text-sm text-gray-600">Simple Yet Beautiful Card Design with TaiwlindCss. Subscribe to our Youtube channel for more ...</p>
    </div>
    <!-- CTA -->
    <div class="m-2">
    <a role='button' href='#' class="text-white bg-purple-600 px-3 py-1 rounded-md hover:bg-purple-700">Learn More</a>
    </div>
  </div>
    <!-- Card -->
  <div class="w-60 p-2 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
    <!-- Image -->
    <img class="h-40 object-cover rounded-xl" h-40 object-cover rounded-xl" src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
    <div class="p-2">
    <!-- Heading -->
    <h2 class="font-bold text-lg mb-2 ">Heading</h2>
    <!-- Description -->
    <p class="text-sm text-gray-600">Simple Yet Beautiful Card Design with TaiwlindCss. Subscribe to our Youtube channel for more ...</p>
    </div>
    <!-- CTA -->
    <div class="m-2">
    <a role='button' href='#' class="text-white bg-sky-500 px-3 py-1 rounded-md hover:bg-purple-700">Learn More</a>
    </div>
  </div>

    <!-- Card -->
  <div class="w-60 p-2 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
    <!-- Image -->
    <img class="h-40 object-cover rounded-xl" h-40 object-cover rounded-xl" src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
    <div class="p-2">
    <!-- Heading -->
    <h2 class="font-bold text-lg mb-2 ">Heading</h2>
    <!-- Description -->
    <p class="text-sm text-gray-600">Simple Yet Beautiful Card Design with TaiwlindCss. Subscribe to our Youtube channel for more ...</p>
    </div>
    <!-- CTA -->
    <div class="m-2">
    <a role='button' href='#' class="text-white bg-green-500 px-3 py-1 rounded-md hover:bg-purple-700">Learn More</a>
    </div>
  </div>
      <!-- Card -->
  <div class="w-60 p-2 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
    <!-- Image -->
    <img class="h-40 object-cover rounded-xl" h-40 object-cover rounded-xl" src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
    <div class="p-2">
    <!-- Heading -->
    <h2 class="font-bold text-lg mb-2 ">Heading</h2>
    <!-- Description -->
    <p class="text-sm text-gray-600">Simple Yet Beautiful Card Design with TaiwlindCss. Subscribe to our Youtube channel for more ...</p>
    </div>
    <!-- CTA -->
    <div class="m-2">
    <a role='button' href='#' class="text-white bg-yellow-500 px-3 py-1 rounded-md hover:bg-purple-700">Learn More</a>
    </div>
  </div>
</div>


<!-- component -->
<div class="flex flex-col justify-center h-screen items-center">
    <!-- <div
        class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white">
        <div class="w-full md:w-1/3 bg-white grid place-items-center">
            <img src="https://images.pexels.com/photos/4381392/pexels-photo-4381392.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="tailwind logo" class="rounded-xl" />
    </div> -->
            <div class="w-full md:w-2/3 bg-white flex flex-col space-y-2 p-3 border border-red-500 rounded">
                <div class="flex justify-between item-center">
                    <p class="text-gray-500 font-medium hidden md:block">Vacations</p>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <p class="text-gray-600 font-bold text-sm ml-1">
                            4.96
                            <span class="text-gray-500 font-normal">(76 reviews)</span>
                        </p>
                    </div>
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-500" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="bg-gray-200 px-3 py-1 rounded-full text-xs font-medium text-gray-800 hidden md:block">
                        Superhost</div>
                </div>
                <h3 class="font-black text-gray-800 md:text-3xl text-xl">The Majestic and Wonderful Bahamas</h3>
                <p class="md:text-lg text-gray-500 text-base">The best kept secret of The Bahamas is the country’s sheer
                    size and diversity. With 16 major islands, The Bahamas is an unmatched destination</p>
                <p class="text-xl font-black text-gray-800">
                    $110
                    <span class="font-normal text-gray-600 text-base">/night</span>
                </p>
            </div>
        </div>
    </div>



@endsection
