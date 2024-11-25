<x-header></x-header>

<x-nav-bar></x-nav-bar>

<div class="container">
    <h1 class="text-center">Editar nivel</h1>

    <form action="/edit-level/{{$level->id}}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="divitionName" class="form-label">Nombre del nivel</label>
          <input type="text" name="type" value="{{$level->type}}" class="form-control" id="divitionName" aria-describedby="divitionName">
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>

</div>

<x-footer></x-footer>

<x-end-body></x-end-body>
