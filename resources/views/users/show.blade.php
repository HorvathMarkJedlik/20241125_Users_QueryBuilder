<x-layout>
    <h1>Username: {{$user->name}}</h1>
    <h3>E-mail address: {{$user->email}}</h3>
    <p>Registration date: {{$user->created_at}}</p>

    <a class="btn btn-primary rounded" href="/users">Back!</a>
</x-layout>