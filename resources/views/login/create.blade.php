<x-layout>
    <form action="{{ route('login.store') }}" method="POST">
        @csrf
        <fieldset>
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email">
        </fieldset>
        <fieldset>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </fieldset>
        <button type="submit">Log In</button>
        @error('email')
            <div>
                <h3>{{ $message }}</h3>
            </div>
        @enderror
    </form>
</x-layout>
