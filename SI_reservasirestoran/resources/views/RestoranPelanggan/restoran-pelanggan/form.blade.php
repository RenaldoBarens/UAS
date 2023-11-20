<div class="form-group {{ $errors->has('Nama_Cafe') ? 'has-error' : ''}}">
    <label for="Nama_Cafe" class="control-label">{{ 'Nama Cafe' }}</label>
    <input class="form-control" name="Nama_Cafe" type="text" id="Nama_Cafe" value="{{ isset($restoranpelanggan->Nama_Cafe) ? $restoranpelanggan->Nama_Cafe : ''}}" >
    {!! $errors->first('Nama_Cafe', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Alamat') ? 'has-error' : ''}}">
    <label for="Alamat" class="control-label">{{ 'Alamat' }}</label>
    <input class="form-control" name="Alamat" type="text" id="Alamat" value="{{ isset($restoranpelanggan->Alamat) ? $restoranpelanggan->Alamat : ''}}" >
    {!! $errors->first('Alamat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Rating') ? 'has-error' : ''}}">
    <label for="Rating" class="control-label">{{ 'Rating' }}</label>
    <input class="form-control" name="Rating" type="number" id="Rating" value="{{ isset($restoranpelanggan->Rating) ? $restoranpelanggan->Rating : ''}}" >
    {!! $errors->first('Rating', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Tipe_Restoran') ? 'has-error' : ''}}">
    <label for="Tipe_Restoran" class="control-label">{{ 'Tipe Restoran' }}</label>
    <input class="form-control" name="Tipe_Restoran" type="text" id="Tipe_Restoran" value="{{ isset($restoranpelanggan->Tipe_Restoran) ? $restoranpelanggan->Tipe_Restoran : ''}}" >
    {!! $errors->first('Tipe_Restoran', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Jarak') ? 'has-error' : ''}}">
    <label for="Jarak" class="control-label">{{ 'Jarak' }}</label>
    <input class="form-control" name="Jarak" type="number" id="Jarak" value="{{ isset($restoranpelanggan->Jarak) ? $restoranpelanggan->Jarak : ''}}" >
    {!! $errors->first('Jarak', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
