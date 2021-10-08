<header>
    <nav>
        @auth
            <h1>Hello {{ Auth::user()->name }}</h1>

            <form action="{{ route('login.destroy') }}" method="POST">'
                @csrf
                @method('DELETE')
                <button type="submit">Log Out</button>
            </form>
        @else
            <h1>Hello Stranger</h1>

            <a href="{{ route('login.create') }}">Log In</a>
        @endauth
    </nav>
</header>
