<b>DATA KANDIDAT PARTAI POLITIK</b>
<hr>
<form method="POST" action="{{ route('kandidat.store') }}">
    @csrf
    <table>
        <tr>
            <td>ID</td>
            <td>:</td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td><input type="text" name="nik"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td>:</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td>:</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>NO HP</td>
            <td>:</td>
            <td><input type="text" name="no_hp"></td>
        </tr>
        <tr>
            <td>NAMA PARTAI</td>
            <td>:</td>
            <td><input type="text" name="nama_partai"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button type="submit">SIMPAN</button>
            </td>
        </tr>
    </table>
</form>