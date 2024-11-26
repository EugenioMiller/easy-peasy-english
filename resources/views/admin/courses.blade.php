<x-header></x-header>

<x-nav-bar></x-nav-bar>

<div class="container">

    <h1 class="text-center">Cursos actuales</h1>

    <ul class="text-center mt-5 list-group">
        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">Nombre</th>
                  <th scope="col">Descripción</th>
                  <th scope="col">Fecha de inicio</th>
                  <th scope="col">Fecha de fin</th>
                  <th scope="col">Precio</th>
                  <th scope="col">División</th>
                  <th scope="col">Nivel</th>
                </tr>
              </thead>
        @foreach ($courses as $course)

            <tbody>
                <tr class="text-center">
                  <th scope="row">{{$course->name}}</th>
                  <th scope="row">{{$course->description}}</th>
                  <th scope="row">{{$course->start}}</th>
                  <th scope="row">{{$course->end}}</th>
                  <th scope="row">{{$course->price}}</th>
                  <th scope="row">{{$course->divition_description}}</th>
                  <th scope="row">{{$course->level_type}}</th>
                  <td><a href="/edit-course/{{$course->id}}"><button class="btn btn-warning">Editar</button></a></td>
                  <td>
                    <form class="d-inline" action="/course/{{$course->id}}" method="post">
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

    <button class="btn btn-primary mt-5"><a href="/admin-course" class="text-white text-decoration-none">+Agregar nuevo curso</a></button>

</div>

<x-footer></x-footer>

<x-end-body></x-end-body>
