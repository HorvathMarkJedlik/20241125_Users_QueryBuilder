<x-layout>
    <h1>New User</h1>
    <form method="POST" action="/users" >
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input for="text" class="form-control" id="username" name="username"></input>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input for="email" class="form-control" id="email" name="email"></input>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>