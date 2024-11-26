<x-header></x-header>

<x-nav-bar></x-nav-bar>

<div class="container">
    <h1 class="text-center">Editar curso</h1>

    <form action="/course/{{$course->id}}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="name" class="form-label">Nombre del curso</label>
          <input type="text" name="name"  value="{{$course->name}}" class="form-control" id="name" aria-describedby="divitionName">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descripción del curso</label>
            <input type="text" name="description" value="{{$course->description}}" class="form-control" id="description" aria-describedby="divitionName">
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Contenido del curso</label>
            <input type="text-area" name="content" value="{{$course->content}}" class="form-control" id="content" aria-describedby="divitionName">
        </div>

        <div class="mb-3">
            <label for="start" class="form-label">Fecha de inicio</label>
            <input type="date" name="start" value="{{$course->start}}" class="form-control" id="start" aria-describedby="divitionName">
        </div>

        <div class="mb-3">
            <label for="end" class="form-label">Fecha de fin</label>
            <input type="date" name="end" value="{{$course->end}}" class="form-control" id="end" aria-describedby="divitionName">
        </div>

        <div class="mb-3">
            <label for="limit" class="form-label">Limite de alumnos</label>
            <input type="number" name="limit" value="{{$course->limit}}" class="form-control" id="limit" aria-describedby="divitionName">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Precio del curso</label>
            <input type="number" name="price" value="{{$course->price}}" class="form-control" id="price" aria-describedby="divitionName">
        </div>

        <div class="mb-3">
            <label for="level" class="form-label">Seleccione nivel</label>
            <select class="form-select" aria-label="Default select example" name="level_id">
                <option selected value="{{$levelSelect->id}}">{{$levelSelect->type}}</option>
                @foreach ($levels as $level)
                    <option value="{{$level->id}}">{{$level->type}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="divition" class="form-label">Seleccione división</label>
            <select class="form-select" aria-label="Default select example" name="divition_id">
                <option selected value="{{$divitionSelect->id}}">{{$divitionSelect->description}}</option>
                @foreach ($divitions as $divition)
                    <option value="{{$divition->id}}">{{$divition->description}}</option>
                 @endforeach
             </select>
        </div>

        <button type="submit" class="btn btn-primary">Editar</button>
    </form>

</div>

<x-footer></x-footer>

<x-end-body></x-end-body>
