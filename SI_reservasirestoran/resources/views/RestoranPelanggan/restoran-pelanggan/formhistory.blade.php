<div class="form-group {{ $errors->has('Nama_Cafe') ? 'has-error' : ''}}">
    <label for="Nama_Cafe" class="control-label">{{ 'Nama Cafe' }}</label>
    <p>{{ isset($reservasi->Nama_Cafe) ? $reservasi->Nama_Cafe : ''}}</p>
</div>
<div class="form-group {{ $errors->has('Alamat') ? 'has-error' : ''}}">
    <label for="Alamat" class="control-label">{{ 'Alamat' }}</label>
    <p>{{ isset($reservasi->Alamat) ? $reservasi->Alamat : ''}}</p>
</div>
<div class="form-group {{ $errors->has('Tanggal_Reservasi') ? 'has-error' : ''}}">
    <label for="Tanggal_Reservasi" class="control-label">{{ 'Tanggal_Reservasi' }}</label>
    <p>{{ isset($reservasi->Tanggal_Reservasi) ? $reservasi->Tanggal_Reservasi : ''}}</p>
</div>
<div class="form-group {{ $errors->has('Jam') ? 'has-error' : ''}}">
    <label for="Jam" class="control-label">{{ 'Jam' }}</label>
    <p>{{ isset($reservasi->Jam) ? $reservasi->Jam : ''}}</p>
</div>
    <input class="form-control" name="Status" type="hidden" id="Status" value="1" >
    
{{-- <div class="form-group">
    <input class="btn btn-primary" type="submit" value="Finish">
</div> --}}
