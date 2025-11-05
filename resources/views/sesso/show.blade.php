<div class="container">
    <h1>Dettagli Sesso</h1>

    <div class="card p-4">
        <p><strong>ID:</strong> {{ $sesso->id }}</p>
        <p><strong>Descrizione:</strong> {{ $sesso->genere }}</p>
    </div>

    <div class="mt-3">
        <a href="{{ route('sesso.index') }}" class="btn btn-secondary">Torna indietro</a>
    </div>
</div>