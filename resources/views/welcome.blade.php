<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-3">Crea un nuovo utente</h1>
    {{-- <form action="{{ route('/') }}" method="POST" class="row g-3 needs-validation" novalidate> --}}

      @if ($errors->any())
      <div style="color:red;">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  <div class="mx-auto w-50">
    <form action="{{ route('users.store') }}" method="POST" class="needs-validation border rounded p-4">
      @csrf
  
      <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control" id="name" name="name" required>
      </div>
  
      <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
      </div>
      
        
        <div class="mb-3">
          <label for="sesso_id">Sesso</label>
          <select name="sesso_id" class="form-select" autocomplete="off">
            <option disabled selected>Seleziona Genere</option>
            @foreach($sesso as $s)
                <option value="{{ $s->id }}">{{ $s->genere }}</option>
            @endforeach
        </select>
         
      </div>

      <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" id="password" name="password" class="form-control" required>
          <div class="form-text">
              La password deve essere lunga 8–20 caratteri e contenere lettere e numeri.
          </div>
      </div>
  
      <button class="btn btn-primary me-2" type="submit">Invia</button>
      <a class="btn btn-secondary" href="{{ route('users.index') }}">Lista utenti</a>
  </form>
  
  
      
      </div>
      {{-- </form> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>