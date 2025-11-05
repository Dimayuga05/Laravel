<!DOCTYPE html>
<html>
<head>
    <title>Modifica Utente</title>
</head>
<body>
    <h1>Modifica Utente: {{ $user->name }}</h1>

    <!-- Mostra messaggi di errore -->
    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')


        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}"><br><br>


        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email', $user->email) }}"><br><br>

        <label>Nuova password (opzionale):</label>
        <input type="password" name="password" placeholder="Lascia vuoto per non cambiare"><br><br>

        <button type="submit">Aggiorna</button>
    </form>

    <br>
    <a href="{{ route('users.index') }}">← Torna alla lista utenti</a>
</body>
</html>
