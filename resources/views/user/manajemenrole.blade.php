@extends('layout.layout')
@section('content')
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/sc-2.0.0/datatables.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>\
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
    <div class="row" style="place-content: center">
        <div class="col-md-12">
            <h3 class="fw-bold mb-3">Manajemen Role</h3>
        </div>
        <div class="col-md-8">
            <div class="row my-4">
                <div class="col-md-12">
                    <button class="btn btn-dark mb-4" data-bs-toggle="modal" data-bs-target="#addrole"><i
                            class="fa-solid fa-plus"></i> Add Role</button>
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table datatables" id="table-user">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center col-6">Role</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="text-center">Admin</td>
                                        <td class="text-center">
                                            <button class="btn" data-bs-toggle="modal" data-bs-target="#viewrole"
                                                title="View Data"><i class="fa-solid fa-eye"></i></button>
                                                <button class="btn" data-bs-toggle="modal" data-bs-target="#editrole"
                                                title="View Data"><i class="fa-solid fa-pen"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- add role modal --}}
                    <div class="modal fade modal-lg" id="addrole" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Role</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="">
                                        <div class="row m-1">
                                            <div class="mb-3 col-md-6">
                                                <label for="name" class="form-label">Nama Role</label>
                                                <input type="text" class="form-control form-control-md" id="name"
                                                    name="name" aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <hr>
                                                <h6 class="fw-bold">Batasan Penggunaan Fitur</h6>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="manajemenuser" class="form-label">Manajemen User</label>
                                                <select class="form-control" id="manajemenuser" name="manajemenuser">
                                                    <option disabled selected>Pilih Fungsi Manajemen User</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="manajemenrole" class="form-label">Manajemen Role</label>
                                                <select class="form-control" id="manajemenrole" name="manajemenrole">
                                                    <option disabled selected>Pilih Fungsi Manajemen User</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="perdi_request" class="form-label">Request Perjalanan Dinas</label>
                                                <select class="form-control" id="perdi_request" name="perdi_request">
                                                    <option disabled selected>Pilih Fungsi Manajemen User</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="perdi_approve" class="form-label">Approve Perjalanan Dinas</label>
                                                <select class="form-control" id="perdi_approve" name="perdi_approve">
                                                    <option disabled selected>Pilih Fungsi Manajemen User</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="perdi_validasi" class="form-label">Validasi Perjalanan Dinas</label>
                                                <select class="form-control" id="perdi_validasi" name="perdi_validasi">
                                                    <option disabled selected>Pilih Fungsi Manajemen User</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="reim_request" class="form-label">Request Reimbursement</label>
                                                <select class="form-control" id="reim_request" name="reim_request">
                                                    <option disabled selected>Pilih Fungsi Manajemen User</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="reim_approve" class="form-label">Approve Reimbursement</label>
                                                <select class="form-control" id="reim_approve" name="reim_approve">
                                                    <option disabled selected>Pilih Fungsi Manajemen User</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="reim_validasi" class="form-label">Validasi Reimbursement</label>
                                                <select class="form-control" id="reim_validasi" name="reim_validasi">
                                                    <option disabled selected>Pilih Fungsi Manajemen User</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="manajemenlogo" class="form-label">Manajemen Logo</label>
                                                <select class="form-control" id="manajemenlogo" name="manajemenlogo">
                                                    <option disabled selected>Pilih Fungsi Manajemen User</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-black btn-border" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- view role modal --}}
                    <div class="modal fade modal-lg" id="viewrole" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Data Role</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="">
                                        <div class="row m-1">
                                            <div class="mb-3 col-md-6">
                                                <label for="name" class="form-label">Nama Role</label>
                                                <input type="text" class="form-control form-control-md" id="name"
                                                    name="name" aria-describedby="emailHelp" value="Admin" disabled>
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <hr>
                                                <h6 class="fw-bold">Batasan Penggunaan Fitur</h6>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="manajemenuser" class="form-label">Manajemen User</label>
                                                <select class="form-control" id="manajemenuser" name="manajemenuser" disabled>
                                                    <option disabled selected>Add, View</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="manajemenrole" class="form-label">Manajemen Role</label>
                                                <select class="form-control" id="manajemenrole" name="manajemenrole" disabled>
                                                    <option disabled selected>Add, Edit, View</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="perdi_request" class="form-label">Request Perjalanan Dinas</label>
                                                <select class="form-control" id="perdi_request" name="perdi_request" disabled>
                                                    <option disabled selected>Add, Edit, View</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="perdi_approve" class="form-label">Approve Perjalanan Dinas</label>
                                                <select class="form-control" id="perdi_approve" name="perdi_approve" disabled>
                                                    <option disabled selected>Add, Edit, View</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="perdi_validasi" class="form-label">Validasi Perjalanan Dinas</label>
                                                <select class="form-control" id="perdi_validasi" name="perdi_validasi" disabled>
                                                    <option disabled selected>Add, Edit, View</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="reim_request" class="form-label">Request Reimbursement</label>
                                                <select class="form-control" id="reim_request" name="reim_request" disabled>
                                                    <option disabled selected>Add, Edit, View</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="reim_approve" class="form-label">Approve Reimbursement</label>
                                                <select class="form-control" id="reim_approve" name="reim_approve" disabled>
                                                    <option disabled selected>Add, Edit, View</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="reim_validasi" class="form-label">Validasi Reimbursement</label>
                                                <select class="form-control" id="reim_validasi" name="reim_validasi" disabled>
                                                    <option disabled selected>Add, Edit, View</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="manajemenlogo" class="form-label">Manajemen Logo</label>
                                                <select class="form-control" id="manajemenlogo" name="manajemenlogo" disabled>
                                                    <option disabled selected>Add, Edit, View</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-black btn-border" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- edit role modal --}}
                    <div class="modal fade modal-lg" id="editrole" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Data Role</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="">
                                        <div class="row m-1">
                                            <div class="mb-3 col-md-6">
                                                <label for="name" class="form-label">Nama Role</label>
                                                <input type="text" class="form-control form-control-md" id="name"
                                                    name="name" aria-describedby="emailHelp" value="Admin">
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <hr>
                                                <h6 class="fw-bold">Batasan Penggunaan Fitur</h6>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="manajemenuser" class="form-label">Manajemen User</label>
                                                <select class="form-control" id="manajemenuser" name="manajemenuser">
                                                    <option disabled selected>Add, View</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="manajemenrole" class="form-label">Manajemen Role</label>
                                                <select class="form-control" id="manajemenrole" name="manajemenrole">
                                                    <option disabled selected>Add, Edit, View</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="perdi_request" class="form-label">Request Perjalanan Dinas</label>
                                                <select class="form-control" id="perdi_request" name="perdi_request">
                                                    <option disabled selected>Add, Edit, View</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="perdi_approve" class="form-label">Approve Perjalanan Dinas</label>
                                                <select class="form-control" id="perdi_approve" name="perdi_approve">
                                                    <option disabled selected>Add, Edit, View</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="perdi_validasi" class="form-label">Validasi Perjalanan Dinas</label>
                                                <select class="form-control" id="perdi_validasi" name="perdi_validasi">
                                                    <option disabled selected>Add, Edit, View</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="reim_request" class="form-label">Request Reimbursement</label>
                                                <select class="form-control" id="reim_request" name="reim_request">
                                                    <option disabled selected>Add, Edit, View</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="reim_approve" class="form-label">Approve Reimbursement</label>
                                                <select class="form-control" id="reim_approve" name="reim_approve">
                                                    <option disabled selected>Add, Edit, View</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="reim_validasi" class="form-label">Validasi Reimbursement</label>
                                                <select class="form-control" id="reim_validasi" name="reim_validasi">
                                                    <option disabled selected>Add, Edit, View</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="manajemenlogo" class="form-label">Manajemen Logo</label>
                                                <select class="form-control" id="manajemenlogo" name="manajemenlogo">
                                                    <option disabled selected>Add, Edit, View</option>
                                                    <option value="Admin">View</option>
                                                    <option value="Dosen/Staff">Edit</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-black btn-border
                                    " data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
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
