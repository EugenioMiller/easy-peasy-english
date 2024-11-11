
    <div class="card border-primary m-3 mt-5" style="max-width: 18rem;">
        <div class="card-header text-center">{{ $name }}</div>
        <div class="card-body text-primary">
            <h5 class="card-title text-center">{{ $description }}</h5>
            <p class="card-text text-center">{{ $content }}</p>
            <p class="card-text text-center">{{ $level }}</p>
            <p class="card-text text-center">{{ $divition }}</p>
            <div class="text-center">
                <a href="#" class="btn btn-primary">Consulta inscripción</a>
            </div>
        </div>
        <div class="card-footer text-body-secondary text-center">
            Inicia: {{$start}}
            <br>
            Finaliza: {{$end}}
          </div>
    </div>
    {{-- <div class="card text-center mb-3">
        <div class="card-header">
          {{ $name }}
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $description }}</h5>
          <p class="card-text">{{ $content }}</p>
          <a href="#" class="btn btn-primary">Consulta inscripción</a>
        </div>
        <div class="card-footer text-body-secondary">
          Inicia: {{$start}} - Finaliza: {{$end}}
        </div>
    </div> --}}



