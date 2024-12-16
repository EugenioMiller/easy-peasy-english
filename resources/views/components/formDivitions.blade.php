<form id="formAddDivition" action="/divitions" method="post">
    @csrf

    <div class="mb-3">
        <label for="divitionName" class="form-label">Nombre de la división</label>
        <input type="text" name="description"  class="form-control" id="divitionName" aria-describedby="divitionName">
    </div>

</form>
