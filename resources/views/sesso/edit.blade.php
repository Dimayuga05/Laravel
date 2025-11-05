<h1>Modifica il genere</h1>
<form action="{{ route('sesso.update', $sesso->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Genere:</label>
    <input type="text" name="genere" value="{{ old('genere', $sesso->genere) }}">

    <button type="submit">Aggiorna</button>
</form>
