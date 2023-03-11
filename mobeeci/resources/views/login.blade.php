<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="mb-4">
        <label for="email">Adresse e-mail</label>
        <input id="email" type="email" name="email" required autofocus>
    </div>

    <div>
        <label for="password">Mot de passe</label>
        <input id="password" type="password" name="password" required>
    </div>

    <button type="submit">Se connecter</button>

    @if (session('error'))
    <div>
        {{ session('error') }}
    </div>
@endif

</form>