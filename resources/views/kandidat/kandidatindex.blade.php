<b>DATA KANDIDAT PARTAI POLITIK</b>
<hr>
<a href="{{ route('kandidat.create') }}">Tambah</a>
<hr>
    <table border="1" align="center">
        <tr>
            <td>ID</td>
            <td>NIK</td>
            <td>NAMA</td>
            <td>ALAMAT</td>
            <td>EMAIL</td>
            <td>NO HP</td>
            <td>NAMA PARTAI</td>
        </tr>
        @foreach ($kandidat as $index => $isi)
            <tr>
                <td>{{ $index+1 }}</td>
                <td>{{ $isi->id }}</td>
                <td>{{ $isi->nik }}</td>
                <td>{{ $isi->nama }}</td>
                <td>{{ $isi->alamat }}</td>
                <td>{{ $isi->email }}</td>
                <td>{{ $isi->no_hp }}</td>
                <td>{{ $isi->nama_partai }}</td>
                <td>
                    <a href="{{ route('kandidat.show', $isi->id) }}">Detail</a>
                </td>
                <td>
                    <a href="{{ route('kandidat.edit', $isi->id) }}">UBAH</a>
                </td>
                <td>
                    <form method="POST" action="{{ route('kandidat.destroy', $isi->id) }}" style="margin: 0%">
                       @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>