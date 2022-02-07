<nav class="flex flex-wrap justify-between px-3 lg:px-20 py-10 items-center text-lg text-gray-700 bg-white">
    <div>
        <a href="{{ url('/') }}">
            <img src="{{URL::asset('/img/svelfit-logo.png')}}" width="70" alt="">
        </a>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="h-6 w-6 cursor-pointer md:hidden block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
    </svg>
    <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
        <ul class=" pt-4 text-base text-gray-700 md:flex md:justify-between md:pt-0">
            @guest
                <li>
                    <a class="md:p-4 py-2 block hover:text-teal-400" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @else
                <li>
                    <a class="md:p-4 py-2 block hover:text-teal-400" href="{{ route('patients.index') }}">
                        Pacientes
                    </a>
                </li>
                <li>
                    <a class="md:p-4 py-2 block hover:text-teal-400" href="{{ route('background.index') }}">
                        Antecedentes
                    </a>
                </li>
                <li>
                    <a class="md:p-4 py-2 block hover:text-teal-400" href="{{ route('recipes.index') }}">
                        Recetas
                    </a>
                </li>
                <li>
                    <a class="md:p-4 py-2 block hover:text-teal-400" href="{{ route('products.index') }}">
                        Productos
                    </a>
                </li>
                <li>
                    <a class="md:p-4 py-2 block text-teal-400" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            @endif
        </ul>
    </div>
</nav>