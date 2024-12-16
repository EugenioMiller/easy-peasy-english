<x-header></x-header>

<x-nav-bar></x-nav-bar>

    <div class="container">
        <form action="/registration" method="POST">
            @csrf

            <input type="text" value="{{$user->id}}" name="user_id" hidden>

            <div class="mb-3">
                <label for="level" class="form-label">Seleccione el curso</label>
                <select class="form-select" aria-label="Default select example" name="course_id">
                    @foreach ($courses as $course)
                        <option value="{{$course->id}}">{{$course->name}}</option>
                    @endforeach
                </select>
            </div>


            <div class="mb-3">
                <label for="divitionName" class="form-label">Nombre del estudiante</label>
                <input type="text" name="name" class="form-control" id="divitionName" aria-describedby="divitionName">
            </div>

            <div class="mb-3">
                <label for="divitionName" class="form-label">Apellido del estudiante</label>
                <input type="text" name="surname"  class="form-control" id="divitionName" aria-describedby="divitionName">
            </div>

            <div class="mb-3 col-12">
                <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                <input name="birthday" type="date" class="form-control" id="exampleInputbirthday1" aria-describedby="nameHelp" required>
            </div>

            <button type="submit" class="btn btn-primary">Inscribir</button>

        </form>
    </div>

<x-footer></x-footer>

<x-end-body></x-end-body>
