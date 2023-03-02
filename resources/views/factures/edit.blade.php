<h1>Modifier facture "{{ $facture->client }}"</h1>

<form action="{{ route('factures.update', ['id' => $facture->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
            <input type="text" class="form-control" id="reference" name="reference" value="{{ $facture->reference }}">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" id="titre" name="titre" value="{{ $facture->titre }}">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" id="description" name="description" value="{{ $facture->description }}">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" id="tva" name="tva" value="{{ $facture->tva }}">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" id="price" name="price" value="{{ $facture->price }}">
        </div>


        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>