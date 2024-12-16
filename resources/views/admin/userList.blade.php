<x-header></x-header>

<x-nav-bar></x-nav-bar>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellidos</th>
                  <th scope="col">Email</th>
                  <th scope="col">Teléfono</th>
                  <th scope="col"></th>
                </tr>
              </thead>
            @foreach ($users as $user)

                <tbody>
                    <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->surname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td><a href="/new-register/{{$user->id}}"><button class="btn btn-success">Seleecionar</button></a></td>
                    </tr>
                </tbody>

            @endforeach
        </table>
    </div>


<x-footer></x-footer>

<x-end-body></x-end-body>
