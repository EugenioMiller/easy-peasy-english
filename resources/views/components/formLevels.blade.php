<form id="formAddLevel" action="/levels" method="post">
    @csrf

    <div class="mb-3">
        <label for="divitionName" class="form-label">Nombre del nivel</label>
        <input type="text" name="type"  class="form-control" id="divitionName" aria-describedby="divitionName">
    </div>

</form>
