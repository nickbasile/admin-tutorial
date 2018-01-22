<nav class="p-6 h-1/10 flex items-baseline justify-between md:items-center">
    <div class="w-1/2">
        <a href="{{ url('/') }}" class="no-underline text-2xl text-grey-darkest hover:text-black">
            {{ config('app.name', 'Laravel') }}
        </a>
    </div>
    <div class="w-1/2 text-right">
        @guest
            <a href="{{ route('login') }}" class="no-underline uppercase tracking-wide text-sm ml-4 text-grey-darker hover:text-grey-darkest">Login</a>
            <a href="{{ route('register') }}" class="no-underline uppercase tracking-wide text-sm ml-4 text-grey-darker hover:text-grey-darkest">Register</a>
        @else
            <a href="#">{{ Auth::user()->name }}</a>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @endguest
    </div>
</nav>