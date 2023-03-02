<h1>Modifier client "{{ $client->Company }}"</h1>

<form action="{{ route('clients.update', ['id' => $client->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
            <input type="text" class="form-control" id="Company" name="Company" value="{{ $client->Company }}">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $client->phone }}">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" id="mail" name="mail" value="{{ $client->mail }}">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" id="adress" name="adress" value="{{ $client->adress }}">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" id="tva" name="tva" value="{{ $client->tva }}">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" id="Invoice" name="Invoice" value="{{ $client->Invoice }}">
        </div>


        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>