
<div class="container mt-5">
    <h1 class="text-center">Ingresar</h1>

    <div class="form-container">
        <form class="columns align-items-center" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3 col-12">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Dirección de correo electrónico</div>
            </div>
            <div class="mb-2 col-12">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>

            <!-- Remember Me -->
            <div class="block">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-3">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                @endif
            </div>
            <div class="flex items-center justify-end mt-3">

                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                    {{ __('Registrarse') }}
                </a>

            </div>
            <button type="submit" class="btn btn-primary mt-5">Acceder</button>
        </form>
    <div class="form-container">
      <form>
        <!-- form fields -->
      </form>
    </div></div>
</div>
