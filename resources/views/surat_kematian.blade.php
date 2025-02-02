@extends('layouts.home')

@section('content')
<div class="dash-content">
    <div class="overview">
        <div class="title">                    
            <h2>Surat Kematian</h2>
        </div>
    </div>
</div>
<!--Main content-->
<div class="container">
    <br /><br />
        <table class="table table-bordered table-hover">
            <thead>
                
                
                <th>Nama Lengkap Almarhum</th>
                <th>Hubungan</th>
                <th>Tempat Meninggal</th>
                <th>Tanggal Meninggal</th>
                <th>Waktu Meninggal</th>
                <th>Jenis Kelamin Almarhum</th>
                <th>Alamat Almarhum</th>
                <th>Agama Almarhum</th>
                <th>Penyebab Meninggal</th>
                
                
                <th>Status</th>
                <th></th>
            </thead>
            <tbody>
                @foreach($surat as $key => $data)
                <tr>
                    
                    
                    <td>{{ $data['namaLengkapMeninggal'] }}</td>
                    <td>{{ $data['hubungan'] }}</td>
                    <td>{{ $data['tempatMeninggal'] }}</td>
                    <td>{{ $data['tanggalMeninggal'] }}</td>
                    <td>{{ $data['waktuMeninggal'] }}</td>
                    <td>{{ $data['jenisKelaminMeninggal'] }}</td>
                    <td>{{ $data['alamatWargaMeninggal'] }}</td>
                    <td>{{ $data['agamaMeninggal'] }}</td>
                    <td>{{ $data['penyebabMeninggal'] }}</td>
                    
                    
                    <td>{{ $data['status'] ? 'Diterima' : 'Ditolak' }}</td>
                    <td>
                        <form action="{{ route('updateSuratDomisili', ['key' => $data['key']]) }}" method="POST">
    @csrf
    @method('PATCH')
    <button type="submit" name="status" value="1" class="btn btn-success {{ $data['status'] ? 'active' : '' }}">Terima</button>
    <button type="submit" name="status" value="0" class="btn btn-danger {{ !$data['status'] ? 'active' : '' }}">Tolak</button>
</form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection
    