<x-layout>
    <h1>Username: {{$user->name}}</h1>
    <h3>E-mail address: {{$user->email}}</h3>
    <p>Registration date: {{$user->created_at}}</p>

    <a class="btn btn-primary rounded" href="/users">Back!</a>
    <form action="/users/{{$user->id}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger my-2">Delete</button>
    </form>
    <a class="btn btn-warning" href="/users/{{$user->id}}">Edit</a>
</x-layout>