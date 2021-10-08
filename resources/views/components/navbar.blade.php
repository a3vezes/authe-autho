<header>
    <h1>Hello Stranger</h1>

    <nav>
        @auth
            <form action="{{ route('login.destroy', Auth::user()) }}" method="POST">'
                @csrf
                @method('DELETE')
                <button type="submit">Log Out</button>
            </form>
        @else
            <a href="{{ route('login.create') }}">Log In</a>
        @endauth
    </nav>
</header>
