<x-layout>
    <h1>New User</h1>
    <form method="POST" action="/users" >
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input for="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{old('username')}}">
            @error('username')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" for="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}">
            @error('email')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password">
            @error('password')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="passwordconfirmation" class="form-label">Password confirmation</label>
            <input type="password" class="form-control  @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
            @error('password_confirmation')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>