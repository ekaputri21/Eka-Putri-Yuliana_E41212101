<b>DATA KANDIDAT PARTAI POLITIK</b>
<hr>
@foreach ($kandidat as $index => $isi)
<form method="POST" action="{{ route('kandidat.update', $isi->id) }}">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <table>
        <tr>
            <td>ID</td>
            <td>:</td>
            <td><input type="text" name="id" value="{{ $isi->id }}" disabled></td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td><input type="text" name="nik" value="{{ $isi->nik }}"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td>:</td>
            <td><input type="text" name="nama" value="{{ $isi->nama }}"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td>:</td>
            <td><input type="text" name="alamat" value="{{ $isi->alamat }}"></td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td>:</td>
            <td><input type="text" name="email" value="{{ $isi->email }}"></td>
        </tr>
        <tr>
            <td>NO HP</td>
            <td>:</td>
            <td><input type="text" name="no_hp" value="{{ $isi->no_hp }}"></td>
        </tr>
        <tr>
            <td>NAMA PARTAI</td>
            <td>:</td>
            <td><input type="text" name="nama_partai" value="{{ $isi->nama_partai }}"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button type="submit">SIMPAN</button>
            </td>
        </tr>
    </table>
</form>
@endforeach