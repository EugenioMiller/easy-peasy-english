<x-header></x-header>

<x-nav-bar></x-nav-bar>

    <div class="container">
        <h1 class="text-center m-3">Lista de inscriptos</h1>

        <h2 class="m-3">{{ $registers[0]->name }}: {{ $registers[0]->description }}</h2>

        <table class="table table-primary mt-2">
            <thead>
                <tr>
                  <th scope="col">Nombre de estudiante</th>
                  <th scope="col">Apellido de estudiante</th>
                </tr>
              </thead>
              @foreach ($registers as $register)
                <tbody>
                    <tr>
                        <td>{{ $register->student_name }}</td>
                        <td>{{ $register->student_surname }}</td>
                    </tr>
                </tbody>
              @endforeach
        </table>
    </div>

    <p class="text-center mt-5">La cantidad de alumnos inscriptos es {{ count($registers) }}</p>
    <p class="text-center mt-3">Aún se pueden inscribir {{ $registers[0]->limit - count($registers) }} alumnos</p>

<x-footer></x-footer>

<x-end-body></x-end-body>
