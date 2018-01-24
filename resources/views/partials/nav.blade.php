<nav class="p-6 h-1/10 flex items-baseline justify-between md:items-center">
    <div class="w-1/2">
        @guest
            <a href="{{ url('/') }}" class="no-underline text-2xl text-grey-darkest hover:text-black">
                {{ config('app.name', 'Auth Starter') }}
            </a>
        @else
            <a href="{{ url('/home') }}" class="no-underline text-2xl text-grey-darkest hover:text-black">
                {{ config('app.name', 'Auth Starter') }}
            </a>
        @endguest
    </div>
    <div class="w-1/2 text-right">
        @guest
            <a href="{{ route('login') }}" class="no-underline uppercase tracking-wide text-sm ml-4 text-grey-darker hover:text-grey-darkest {{set_active('login*', 'font-bold')}}">Login</a>
            <a href="{{ route('register') }}" class="no-underline uppercase tracking-wide text-sm ml-4 text-grey-darker hover:text-grey-darkest {{set_active('register*', 'font-bold')}}">Register</a>
        @else
            @if(Auth::user()->isAdmin())
                <a href="{{ route('admin') }}" class="no-underline uppercase tracking-wide text-sm ml-4 text-grey-darker hover:text-grey-darkest {{set_active('admin*', 'font-bold')}}">Admin</a>
            @endif
            <a href="#" class="no-underline uppercase tracking-wide text-sm ml-4 text-grey-darker hover:text-grey-darkest">{{ Auth::user()->name }}</a>
            <a href="{{ route('logout') }}"
               class="no-underline uppercase tracking-wide text-sm ml-4 text-grey-darker hover:text-grey-darkest"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @endguest
    </div>
</nav>