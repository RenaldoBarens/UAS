<div class="form-group {{ $errors->has('Nama_Cafe') ? 'has-error' : ''}}">
    <label for="Nama_Cafe" class="control-label">{{ 'Nama Cafe' }}</label>
    <input type="hidden" name="Nama_Cafe" type="text" id="Nama_Cafe" value="{{ isset($restoranpelanggan->Nama_Cafe) ? $restoranpelanggan->Nama_Cafe : ''}}" >
    <p>{{ isset($restoranpelanggan->Nama_Cafe) ? $restoranpelanggan->Nama_Cafe : ''}}</p>
    {!! $errors->first('Nama_Cafe', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Alamat') ? 'has-error' : ''}}">
    <label for="Alamat" class="control-label">{{ 'Alamat' }}</label>
    <input type="hidden" name="Alamat" type="textarea" id="Alamat" value="{{ isset($restoranpelanggan->Alamat) ? $restoranpelanggan->Alamat : ''}}" >
    <p>{{ isset($restoranpelanggan->Alamat) ? $restoranpelanggan->Alamat : ''}}</p>
    {!! $errors->first('Alamat', '<p class="help-block">:message</p>') !!}
</div>            
<div class="form-group {{ $errors->has('Tanggal_Reservasi') ? 'has-error' : ''}}">
    <label for="Tanggal_Reservasi" class="control-label">{{ 'Tanggal_Reservasi' }}</label>
    <input class="form-control" name="Tanggal_Reservasi" type="date" id="Tanggal_Reservasi" value="" >
    {!! $errors->first('Tanggal_Reservasi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Jam') ? 'has-error' : ''}}">
    <label for="Jam" class="control-label">{{ 'Jam' }}</label>
    <input class="form-control" name="Jam" type="time" id="Jam" value="" >
    {!! $errors->first('Jam', '<p class="help-block">:message</p>') !!}
</div>
    <input class="form-control" name="Status" type="hidden" id="Status" value="0" >
    



<div class="form-group">
    <input class="btn btn-primary" type="submit" value="Reservasi">
</div>
