<x-header></x-header>

<x-nav-bar></x-nav-bar>

    <div class="container">
        <form class="d-flex" role="search" action="/user-search" method="GET">
            @csrf
            <label>Seleccione usuario</label>
            <input class="form-control me-2" name="search" type="search" placeholder="Ingrese nombre de usuario" aria-label="Search">
            <button class="btn btn-success" type="submit">Buscar</button>
        </form>
    </div>

<x-footer></x-footer>

<x-end-body></x-end-body>
