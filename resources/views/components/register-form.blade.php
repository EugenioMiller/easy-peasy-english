<div class="container mt-5">
    <h1 class="text-center">Crear cuenta</h1>

    <div class="form-container">
        <form class="columns align-items-center" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3 col-12">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input name="name" type="text" class="form-control" id="exampleInputname1" aria-describedby="nameHelp" required>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="mb-3 col-12">
                <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                <input name="surname" type="text" class="form-control" id="exampleInputsurname1" aria-describedby="nameHelp" required>
            </div>

            <div class="mb-3 col-12">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputemail1" aria-describedby="nameHelp" required>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mb-2 col-12">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                <span id="passwordHelpInline" class="form-text">
                    Must be 8-20 characters long.
                </span>
            </div>

            <div class="mb-2 col-12">
                <label for="exampleInputPassword1" class="form-label">Repetir contraseña</label>
                <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1" required>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="mb-3 col-12">
                <label for="exampleInputEmail1" class="form-label">Número de celular</label>
                <input name="phone" type="text" class="form-control" id="exampleInputphone1" aria-describedby="nameHelp" required>
            </div>

            <input name="is_admin" type="number" class="form-control" value="0" id="exampleInputphone1" aria-describedby="nameHelp" hidden>

            <button type="submit" class="btn btn-primary mt-3">Registrarse</button>
        </form>
    </div>
</div>
