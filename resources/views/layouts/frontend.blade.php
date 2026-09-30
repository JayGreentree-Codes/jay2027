<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="bg-gray-900">

<header class="fixed w-full z-20 top-0 start-0">
  <nav class="bg-neutral-primary">
      <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
          <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
              
              <span class="self-center text-xl text-heading font-semibold whitespace-nowrap">
              {{ config('app.name') }}
              </span>
          </a>
          <div class="flex items-center space-x-6 rtl:space-x-reverse">
              <a href="" class="text-sm  text-body hover:underline">
                  
              </a>
   @auth
        <!-- Links visible only to Logged-In Users -->
        <a href="{{ url('/dashboard') }}" class="text-sm font-medium text-fg-brand hover:underline">Dashboard</a>
        
        <!-- Logout Form (Required because logout should be a POST request for security) -->
        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @endauth
    @guest
              <a href="/login" class="text-sm font-medium text-fg-brand hover:underline">
                Login
              </a>
    @endguest
          </div>
      </div>
  </nav>
  <nav class="bg-neutral-secondary-soft border-y border-default border-default">
      <div class="max-w-screen-xl px-4 py-3 mx-auto">
          <div class="flex items-center">
              <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                  <li>
                      <a href="" class="text-heading hover:underline" aria-current="page">
                        Home
                      </a>
                  </li>
                  <li>
                      <a href="" class="text-heading hover:underline">
                        Projects
                      </a>
                  </li>
                  <li>
                      <a href="" class="text-heading hover:underline">
                        Work
                      </a>
                  </li>
                  <li>
                      <a href="" class="text-heading hover:underline">
                        Contact
                      </a>
                  </li>
                  <li>
                      <a href="#" class="text-heading hover:underline">
                        Sponsor Me
                      </a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
</header>

    <main>
        @yield('content') <!-- This is where other pages inject their HTML -->
    </main>

    <footer class="py-8 border-t border-slate-800/60 text-center text-sm text-slate-500">
        <p>&copy; {{ date('Y') }} John Doe. Built with Laravel and Tailwind CSS.</p>
    </footer>

</body>
</html>