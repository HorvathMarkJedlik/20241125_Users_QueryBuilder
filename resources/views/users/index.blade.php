<x-layout>
    <h1>Registered users</h1>
    <ul>
        @foreach ($users as $user )
            <li><a href="/users/{{$user->id}}">{{$user->name}}</a></li>
        @endforeach
    </ul>
</x-layout>
