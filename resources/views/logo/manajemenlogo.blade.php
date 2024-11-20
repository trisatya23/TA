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
            <h3 class="fw-bold mb-3">Manajemen Logo</h3>
        </div>
        <div class="col-md-12">
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="">
                        <form action="">
                            <div class="mb-3 col-md-6">
                                <label for="nama" class="form-label fw-bold">Nama Logo</label>
                                <input type="text" class="form-control form-control-md" id="nama" name="nama"
                                    aria-describedby="emailHelp" value="Perjalanan Dinas">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="nama" class="form-label fw-bold">Gambar Logo</label><br>
                                <img src="../logo/logo.png" class="rounded" alt="..."><br>
                                <input type="file" name="logo" id="logo" class="form-control mt-2">
                            </div>
                            <div class="mb-3 col-md-12">
                                <hr>
                            </div>
                            <div class="mb-3 col-md-6">
                                <button class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>

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
