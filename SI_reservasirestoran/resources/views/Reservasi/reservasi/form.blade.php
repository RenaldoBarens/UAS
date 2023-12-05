<div class="form-group {{ $errors->has('Nama_Cafe') ? 'has-error' : ''}}">
    <label for="Nama_Cafe" class="control-label">{{ 'Nama Cafe' }}</label>
    <input class="form-control" name="Nama_Cafe" type="text" id="Nama_Cafe" value="{{ isset($reservasi->Nama_Cafe) ? $reservasi->Nama_Cafe : ''}}" >
    <p>{{ isset($restoran->Nama_Cafe) ? $restoran->Nama_Cafe : ''}}</p>
    <p>halo</p>
    {!! $errors->first('Nama_Cafe', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Alamat') ? 'has-error' : ''}}">
    <label for="Alamat" class="control-label">{{ 'Alamat' }}</label>
    <textarea class="form-control" rows="5" name="Alamat" type="textarea" id="Alamat" >{{ isset($reservasi->Alamat) ? $reservasi->Alamat : ''}}</textarea>
    {!! $errors->first('Alamat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Tanggal_Reservasi') ? 'has-error' : ''}}">
    <label for="Tanggal_Reservasi" class="control-label">{{ 'Tanggal Reservasi' }}</label>
    <input class="form-control" name="Tanggal_Reservasi" type="date" id="Tanggal_Reservasi" value="{{ isset($reservasi->Tanggal_Reservasi) ? $reservasi->Tanggal_Reservasi : ''}}" >
    {!! $errors->first('Tanggal_Reservasi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Jam') ? 'has-error' : ''}}">
    <label for="Jam" class="control-label">{{ 'Jam' }}</label>
    <input class="form-control" name="Jam" type="time" id="Jam" value="{{ isset($reservasi->Jam) ? $reservasi->Jam : ''}}" >
    {!! $errors->first('Jam', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Status') ? 'has-error' : ''}}">
    <label for="Status" class="control-label">{{ 'Status' }}</label>
    <input class="form-control" name="Status" type="number" id="Status" value="{{ isset($reservasi->Status) ? $reservasi->Status : ''}}" >
    {!! $errors->first('Status', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
