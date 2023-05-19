<b>DATA KANDIDAT PARTAI POLITIK</b>
<hr>
@foreach ($kandidat as $index => $isi)
<table>
    <tr>
        <td>ID</td>
        <td>:</td>
        <td>{{ $isi->id }}</td>
    </tr>
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td>{{ $isi->nik }}</td>
    </tr> 
    <tr>
        <td>NAMA</td>
        <td>:</td>
        <td>{{ $isi->nama }}</td>
    </tr>  
    <tr>
        <td>ALAMAT</td>
        <td>:</td>
        <td>{{ $isi->alamat }}</td>
    </tr>
    <tr>
        <td>email</td>
        <td>:</td>
        <td>{{ $isi->email }}</td>
    </tr>
    <tr>
        <td>NO HP</td>
        <td>:</td>
        <td>{{ $isi->no_hp }}</td>
    </tr>  
    <tr>
        <td>NAMA PARTAI</td>
        <td>:</td>
        <td>{{ $isi->nama_partai }}</td>
    </tr> 
</table>
<a href="{{ route('kandidat.index') }}">BACK</a>
@endforeach