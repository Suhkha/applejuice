<nav class="flex flex-wrap justify-between px-3 lg:px-20 py-10 items-center text-lg text-gray-700 bg-white">

    <div>
        @guest
            <img src="{{URL::asset('/img/svelfit-logo-small.jpeg')}}" width="100" alt="">
        @else
            @if (Auth::user()->role == 'admin')
                <a href="/admin/home">
            @else
                <a href="/patient/home">
            @endif
                <img src="{{URL::asset('/img/svelfit-logo-small.jpeg')}}" width="100" alt="">
            </a>
        @endif
        
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="h-6 w-6 cursor-pointer md:hidden block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
    </svg>
    <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
        <ul class=" pt-4 text-base text-gray-700 md:flex md:justify-between md:pt-0">
            @guest
                <li>
                    <a class="md:p-4 p-2 block text-teal-400 hover:bg-teal-400 hover:text-white ease-linear transition-all duration-150 rounded outline-none focus:outline-none" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                </li>
            @else
                @if (Auth::user()->role == 'admin')
                    <li class="md:border-none border-b">
                        <a class="md:p-4 py-2 block hover:text-teal-400" href="{{ route('patients.index') }}">
                            Pacientes
                        </a>
                    </li>
                    <li class="md:border-none border-b">
                        <a class="md:p-4 py-2 block hover:text-teal-400" href="{{ route('background.index') }}">
                            Antecedentes
                        </a>
                    </li>
                    <li class="md:border-none border-b">
                        <a class="md:p-4 py-2 block hover:text-teal-400" href="{{ route('recipes.index') }}">
                            Recetas
                        </a>
                    </li>
                    <li class="md:border-none border-b">
                        <a class="md:p-4 py-2 block hover:text-teal-400" href="{{ route('products.index') }}">
                            Productos
                        </a>
                    </li>
                    @if (isset($userDetail->user_id))
                        <li class="md:border-none border-b">
                            <a href="{{ route('anthropometric', ['user_id' => $userDetail->user_id, 'type' => 'profile']) }}" class="bg-gradient-to-r from-orange-500 to-pink-500 text-white md:p-4 py-2 block rounded outline-none focus:outline-none ease-linear transition-all duration-150">Nuevo historial</a>
                        </li>
                    @endif
                    <li>
                        <a class="md:p-4 py-2 block text-teal-400" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Salir') }}</a>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @else
                    <li class="md:border-none border-b">
                        <a class="md:p-4 py-2 block hover:text-teal-400" href="{{ route('history') }}">
                            Progreso
                        </a>
                    </li>
                    <li class="md:border-none border-b">
                        <a class="md:p-4 py-2 block hover:text-teal-400" href="">
                            Recetas
                        </a>
                    </li>
                    <li class="md:border-none border-b">
                        <a class="md:p-4 py-2 block hover:text-teal-400" href="">
                            Productos
                        </a>
                    </li>
                    <li>
                        <a class="md:p-4 py-2 block text-teal-400" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Salir') }}</a>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endif
            @endif
        </ul>
    </div>
</nav>