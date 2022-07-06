<form method="POST" action="{{ route('login') }}">
    @csrf


    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    <br>
    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    <br>
    <button type="submit" class="btn btn-primary">
        {{ __('Login') }}
    </button>

</form>
