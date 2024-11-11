<div class="container mt-5">
    <h1 class="text-center">Ingresar</h1>

    <div class="form-container">
        <form class="columns align-items-center" method="POST" action="/check-login">
            @csrf
            <div class="mb-3 col-12">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Dirección de correo electrónico</div>
            </div>
            <div class="mb-3 col-12">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Acceder</button>
        </form>
    <div class="form-container">
      <form>
        <!-- form fields -->
      </form>
    </div></div>
</div>
