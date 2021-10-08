<x-layout>
    <h1>Users</h1>
    @if (session('success'))
        <div>
            <h2>
                {{ session('success') }}
            </h2>
        </div>
    @endif

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Delete</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at->diffForHumans() }}</td>
                <td>{{ $user->updated_at->diffForHumans() }}</td>
                <form action="{{ route('registered.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td>
                        <button type="submit">X</button>
                    </td>
                </form>
            </tr>
        @endforeach
    </table>
</x-layout>
