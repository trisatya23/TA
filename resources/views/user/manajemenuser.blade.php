@extends('layout.layout')
@section('content')
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/sc-2.0.0/datatables.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @if (session('error'))
        <script>
            // Tampilkan pesan error dalam pop-up
            Swal.fire({
                icon: 'error',
                title: 'Tidak Berhasil',
                text: '{{ session('error') }}', // Ambil pesan error dari session
            });
        </script>
    @endif
    @if (session('success'))
        <script>
            // Tampilkan pesan error dalam pop-up
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ session('success') }}', // Ambil pesan error dari session
            });
        </script>
    @endif
    <div class="row">
        <div class="col-md-12">
            <h3 class="fw-bold mb-3">Manajemen User</h3>
        </div>
        <div class="col-md-12">
            <div class="row my-4">
                <div class="col-md-12">
                    <button class="btn btn-dark mb-4" data-bs-toggle="modal" data-bs-target="#adduser"><i
                            class="fa-solid fa-plus"></i> Add User</button>
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table datatables" id="table-user">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">NIK</th>
                                        <th class="text-center">Username</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Role</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>01234567891123</td>
                                        <td>trisatya</td>
                                        <td>trisatya@gmail.com</td>
                                        <td>Admin</td>
                                        <td class="text-center">
                                            <button class="btn" data-bs-toggle="modal" data-bs-target="#viewuser" title="View Data"><i class="fa-solid fa-eye"></button></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- add user modal --}}
                    <div class="modal fade modal-lg" id="adduser" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="">
                                        <div class="row m-1">
                                            <div class="mb-3 col-md-6">
                                                <label for="nik" class="form-label">Nomor Induk Kependudukan (NIK)</label>
                                                <input type="text" class="form-control form-control-md"
                                                    id="nik" name="nik" aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="username" class="form-label">Username</label>
                                                <input type="text" class="form-control form-control-md"
                                                    id="username" name="username" aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control form-control-md"
                                                    id="email" name="email" aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="role" class="form-label">Role</label>
                                                <select class="form-control" id="role" name="role">
                                                    <option disabled selected>Pilih Role</option>
                                                    <option value="Admin">Admin</option>
                                                    <option value="Karyawan">Karyawan</option>
                                                    <option value="Pimpinan">Pimpinan</option>
                                                    <option value="Bendahara">Pegawai</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control form-control-md"
                                                    id="password" name="password" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-black btn-border"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- view user modal --}}
                    <div class="modal fade modal-lg" id="viewuser" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">View User</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="">
                                        <div class="row m-1">
                                            <div class="mb-3 col-md-6">
                                                <label for="nik" class="form-label">Nomor Induk Kependudukan (NIK)</label>
                                                <input type="text" class="form-control form-control-md"
                                                    id="nik" name="nik" aria-describedby="emailHelp" value="01234567891123" disabled>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="username" class="form-label">Username</label>
                                                <input type="text" class="form-control form-control-md"
                                                    id="username" name="username" aria-describedby="emailHelp" value="trisatya" disabled>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control form-control-md"
                                                    id="email" name="email" aria-describedby="emailHelp" value="trisatya@gmail.com" disabled>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="role" class="form-label">Role</label>
                                                <select class="form-control" id="role" name="role" disabled>
                                                    <option disabled selected>Admin</option>
                                                    <option value="Admin">Admin</option>
                                                    <option value="Dosen/Staff">Dosen/Staff</option>
                                                    <option value="Mahasiswa">Mahasiswa</option>
                                                    <option value="Pegawai">Pegawai</option>
                                                    <option value="Publik">Publik</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-black btn-border"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/sc-2.0.0/datatables.min.js">
        </script>

        <script>
            var table = $('#table-user').DataTable({
                "pageLength": 5,
                "lengthMenu": [5, 10, 25, 50, 100],
                "language": {
                    "lengthMenu": "Menampilkan _MENU_ Data per halaman",
                    "zeroRecords": "Maaf, tidak dapat menemukan apapun",
                    "info": "Menampilkan halaman _PAGE_ dari _PAGES_ halaman",
                    "infoEmpty": "Tidak ada data yang dapat ditampilkan",
                    "infoFiltered": "(dari _MAX_ total data)",
                    "search": "Cari :",
                    "paginate": {
                        "first": "Pertama",
                        "last": "Terakhir",
                        "next": "",
                        "previous": ""
                    },
                    "dom": 'lrtip',
                    "columnDefs": [{
                            type: 'date',
                            targets: 5
                        } // Sesuaikan dengan indeks kolom tanggal Anda
                    ],
                },

            });
        </script>
    @endsection
