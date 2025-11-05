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
    <form action="{{ route('sesso.store') }}" method="POST" class="needs-validation border rounded p-4">
      @csrf
  
      <div class="mb-3">
          <label for="name" class="form-label">Genere</label>
          <input type="text" class="form-control" id="genere" name="genere" required>
      </div>
  
  
      <button class="btn btn-primary me-2" type="submit">Invia</button>
  </form>
  
  
      
      </div>
      {{-- </form> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>