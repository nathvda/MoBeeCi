<form method="POST" action="{{ route('register') }}">
    @csrf
    <div>
        <label>Adresse e-mail</label>
        <input id="email" type="text" name="email" required>
    </div>

    <div>
        <label>Mot de passe:</label>
        <input id="password" type="password" name="password" required>
    </div>

    <div>
        <label for="password_confirmation">Confirmation du mot de passe</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
    </div>

    <button type="submit">S'inscrire</button>

    @if ($errors->has('email'))
        <div>
            {{ $errors->first('email') }}
        </div>
    @endif

    @if ($errors->has('password'))
        <div>
            {{ $errors->first('password') }}
        </div>
    @endif
</form>
