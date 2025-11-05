
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Sesso</h1>
    <div class="d-flex justify-content-center">
        <a href="{{ route('sesso.create') }}" class="btn btn-sm btn-primary">
           Crea sesso
        </a>
    </div>
    
    <div class="container my-5">
        <div class="d-flex justify-content-center">
          <table class="table table-bordered table-striped table-hover text-center align-middle w-75">
            <thead class="table-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Genere</th>
                <th scope="col" colspan="3">Azioni</th>
              </tr>
            </thead>
            <tbody>
              @foreach($sesso as $s)
              <tr>
                <td>{{ $s->id}}</td>
                <td>{{ $s->genere }}</td>
                <td>
                    <a href="{{ route('sesso.show', ['id' => $s->id]) }}" class="btn btn-sm btn-primary">
                      Visualizza
                    </a>
                  </td>
                <td>
                  <a href="{{ route('sesso.edit', ['id' => $s->id]) }}" class="btn btn-sm btn-primary">
                    Modifica
                  </a>
                </td>
                <td>
                  <form action="{{ route('sesso.destroy', $s->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Sei sicuro di voler eliminare questo utente?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Elimina</button>
                  </form>
                </td> 
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
