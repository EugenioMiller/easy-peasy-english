<x-header></x-header>

<x-nav-bar></x-nav-bar>

    <div class="container">
        <h1 class="text-center">Editar división</h1>

        <form id="formEditDivition" action="/divition/{{$divition->id}}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="divitionName" class="form-label">Nombre de la división</label>
                <input type="text" name="description" value="{{$divition->description}}" class="form-control" id="divitionName" aria-describedby="divitionName">
            </div>

            <button type="submit" class="btn btn-primary">Editar</button>
        </form>

    </div>

<x-footer></x-footer>

<x-end-body></x-end-body>
