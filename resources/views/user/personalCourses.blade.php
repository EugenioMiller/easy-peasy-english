<x-header></x-header>

<x-nav-bar></x-nav-bar>

    @if (!$courses->isEmpty())

        <div class="container">
            <h1 class="h1 m-3">Lista de cursos inscriptos</h1>

            @foreach ($courses as $course)

            <table class="table table-success mt-2">
                <thead>
                    <tr>
                    <th scope="col">Nombre de estudiante</th>
                    <th scope="col">Apellido de estudiante</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Nivel</th>
                    <th scope="col">División</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                    <th>{{ $course->student_name }}</th>
                    <td>{{ $course->student_surname }}</td>
                    <td>{{ $course->student_birthday }}</td>
                    <td>{{ $course->course }}</td>
                    <td>{{ $course->level }}</td>
                    <td>{{ $course->divition }}</td>
                    </tr>
                </tbody>

            </table>
            @endforeach
        </div>

    @else
        <div class="container mt-5">
            <div class="alert alert-danger" role="alert">
                Aún no se ha inscripto a ningun curso.
            </div>
        </div>
    @endif

<x-footer></x-footer>

<x-end-body></x-end-body>
