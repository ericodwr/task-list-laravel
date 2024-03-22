<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  {{-- blade-formatter-disable --}}
  <style type="text/tailwindcss">
    .btn {
      @apply rounded-md px-2 py-1 text-center text-slate-800 font-medium shadow-sm ring-1 ring-slate-700/50 hover:bg-slate-50
    }

    .link {
      @apply font-medium text-gray-700 underline decoration-pink-500
    }

    label {
      @apply block capitalize text-slate-900 mb-2
    }

    input, textarea {
      @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-900 leading-tight focus:outline-none
    }

    .error {
      @apply text-red-500 text-sm
    }



  </style>
  {{-- blade-formatter-disable --}}

  <title>Laravel Task List App</title>
  @yield('styles')
</head>
<body class="container mx-auto mt-10 mb-10 max-w-lg bg-slate-200">
  <h1 class="text-3xl mb-4">
    @yield('title')
  </h1>

  <div x-data="{flash:true}">
    @if(session()->has('success'))
      <div
      x-show="flash" 
      class="relative mb-10 rounded border border-green-400 bg-green-100 px-4 py-3 text-lg text-green-700 text-center" role="alert">
        <strong class="font-bold">Success!</strong>
        <div>
          {{session('success')}}
        </div>
        <span class="absolute top-0 bottom-0 right-0 px-3 py-2 cursor-pointer" @click="flash = false">x</span>
      </div>
    @endif
      
    @yield('content')
  </div>
</body>
</html>