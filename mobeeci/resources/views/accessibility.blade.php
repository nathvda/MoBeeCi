<form method="POST" action="{{ route('accessibilities.store') }}">
    @csrf

    <button type="submit">Enregistrer</button>
</form>
