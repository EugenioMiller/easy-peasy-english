<x-header></x-header>

<x-nav-bar></x-nav-bar>

<div class="container">
    <h1 class="text-center">Agregar nuevo curso</h1>

    <form action="/courses" method="post">
        @csrf

        <div class="mb-3">
          <label for="name" class="form-label">Nombre del curso</label>
          <input type="text" name="name"  class="form-control" id="name" aria-describedby="divitionName">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descripción del curso</label>
            <input type="text" name="description"  class="form-control" id="description" aria-describedby="divitionName">
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Contenido del curso</label>
            <input type="text-area" name="content"  class="form-control" id="content" aria-describedby="divitionName">
        </div>

        <div class="mb-3">
            <label for="start" class="form-label">Fecha de inicio</label>
            <input type="date" name="start"  class="form-control" id="start" aria-describedby="divitionName">
        </div>

        <div class="mb-3">
            <label for="end" class="form-label">Fecha de fin</label>
            <input type="date" name="end"  class="form-control" id="end" aria-describedby="divitionName">
        </div>

        <div class="mb-3">
            <label for="limit" class="form-label">Limite de alumnos</label>
            <input type="number" name="limit"  class="form-control" id="limit" aria-describedby="divitionName">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Precio del curso</label>
            <input type="number" name="price"  class="form-control" id="price" aria-describedby="divitionName">
        </div>

        <div class="mb-3">
            <label for="level" class="form-label">Seleccione nivel</label>
            <select class="form-select" aria-label="Default select example" name="level_id">
                @foreach ($levels as $level)
                    <option value="{{$level->id}}">{{$level->type}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="divition" class="form-label">Seleccione división</label>
            <select class="form-select" aria-label="Default select example" name="divition_id">
                @foreach ($divitions as $divition)
                     <option value="{{$divition->id}}">{{$divition->description}}</option>
                 @endforeach
             </select>
        </div>

        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>

</div>

<x-footer></x-footer>

<x-end-body></x-end-body>
