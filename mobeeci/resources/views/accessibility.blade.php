<form method="POST" action="{{ route('accessibilities.store') }}">
    @csrf

    <div>
        <input type="checkbox" name="pmr" id="pmr" value="1" {{ $accessibilitySettings && $accessibilitySettings->pmr ? 'checked' : '' }}>

        <label for="pmr">
            Options pour les personnes à mobilité réduite
            @if ($accessibilitySettings && $accessibilitySettings->pmr)
                (Activé)
            @else
                (Désactivé)
            @endif
        </label>
    </div>

    <div>
        <input type="checkbox" name="sensorial_sensitive" id="sensorial_sensitive" value="1" {{ $accessibilitySettings && $accessibilitySettings->sensorial_sensitive ? 'checked' : '' }}>

        <label for="sensorial_sensitive">
            Options pour les personnes atteintes de troubles sensoriels
            @if ($accessibilitySettings && $accessibilitySettings->sensorial_sensitive)
                (Activé)
            @else
                (Désactivé)
            @endif
        </label>
    </div>

    <div>
        <input type="checkbox" name="population_tolerance" id="population_tolerance" value="1" {{ $accessibilitySettings && $accessibilitySettings->population_tolerance ? 'checked' : '' }}>
        <label for="population_tolerance">
            Tolérance à la population
            @if ($accessibilitySettings && $accessibilitySettings->population_tolerance)
                (Activé)
            @else
                (Désactivé)
            @endif
        </label>
    </div>

    <button type="submit">Enregistrer</button>
</form>
