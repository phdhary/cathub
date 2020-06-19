@include('includes.style')
<div class="container mt-4">
    <h1>Daftar Mahasiswa</h1>

    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Jurusan</th>
                <!-- <th scope="col">Aksi</th> -->
            </tr>
        </thead>
        <tbody> @foreach($students as $std) <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$std->name}}</td>
                <td>{{$std->nim}}</td>
                <td>{{$std->email}}</td>
                <!-- <td><a href="" class="btn btn-warning">edit</a><a href="" class="btn btn-danger">delete</a></td> -->
            </tr> @endforeach </tbody>
    </table>
    <!-- <button type="button" class="btn btn-primary">Download CSV</button><button type="button" class="btn btn-success">Tambah Data</button> -->
</div>