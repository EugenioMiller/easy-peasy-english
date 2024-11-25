<x-header></x-header>

<x-nav-bar></x-nav-bar>

<div class="container">

    <h1 class="text-center">Niveles actuales</h1>

    <ul class="text-center mt-5 list-group">
        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">Descripción</th>
                  <th scope="col">Editar</th>
                  <th scope="col">Eliminar</th>
                </tr>
              </thead>
        @foreach ($levels as $level)

            <tbody>
                <tr class="text-center">
                  <th scope="row">{{$level->type}}</th>
                  <td><a href="/edit-level/{{$level->id}}"><button class="btn btn-warning">Editar</button></a></td>
                  <td>
                    <form class="d-inline" action="/eliminate-level/{{$level->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Eliminar</button>
                    </form>
                  </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </ul>

    <button class="btn btn-primary mt-5"><a href="/admin-level" class="text-white text-decoration-none">+Agregar nuevo nivel</a></button>

</div>

<x-footer></x-footer>

<x-end-body></x-end-body>
