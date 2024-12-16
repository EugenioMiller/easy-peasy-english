<x-header></x-header>

<x-nav-bar></x-nav-bar>

<div class="container">

    <h1 class="text-center">Divisiones actuales</h1>

    <ul class="text-center mt-5 list-group">
        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">Descripción</th>
                  <th scope="col">Editar</th>
                  <th scope="col">Eliminar</th>
                </tr>
              </thead>
        @foreach ($divitions as $divition)

            <tbody>
                <tr class="text-center">
                  <th scope="row">{{$divition->description}}</th>
                  <td><a href="/edit-divition/{{$divition->id}}"><button class="btn btn-warning">Editar</button></a></td>
                  <td>
                    <form class="d-inline" action="/divition/{{$divition->id}}" method="post">
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

    <button data-bs-toggle="modal" data-bs-target="#modalCreateDivition" class="btn btn-primary mt-5">+Agregar nueva división</button>

</div>

<!-- Start Modal Crete Divition -->

<div class="modal" tabindex="-1" id="modalCreateDivition">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Agregar una nueva división</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <x-formDivitions></x-formDivitions>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" form="formAddDivition" class="btn btn-primary">Agregar</button>
        </div>
      </div>
    </div>
  </div>

<!-- End Modal Crete Divition -->

<x-footer></x-footer>

<x-end-body></x-end-body>
