<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen">
<div class="bg-white  " >
  <header class="flex items-center justify-between p-6 lg:px-8">
    <div class="flex items-center">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="sr-only">Your Company</span>
        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
      </a>
    </div>
    <div>
      <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
    </div>
  </header>

  <div class="flex flex-grow min-h-screen">
    <!-- Navigation -->
    <nav class="flex-shrink-0 w-full lg:w-1/4 p-6 bg-gray-200 flex flex-col items-center justify-center">
      <div class="space-y-4 text-center">
        <x-nav-link href="/" :active="request()->is('/')" class="text-xl font-semibold">Home</x-nav-link>
        <x-nav-link href="/contact" :active="request()->is('contact')" class="text-xl font-semibold">Contact</x-nav-link>
        <x-nav-link href="/about" :active="request()->is('about')" class="text-xl font-semibold">About</x-nav-link>
      </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow p-6">
      <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
          <div class="text-center">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">{{ $slot }}</h1>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>
</body>
</html>
    