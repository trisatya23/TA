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
            <h3 class="fw-bold mb-3">Validasi Perjalanan Dinas</h3>
        </div>
        <div class="col-md-12">
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <table class="table datatables" id="table-user">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Rencana Berangkat</th>
                                        <th class="text-center">Rencana Kembali</th>
                                        <th class="text-center">Tujuan</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Ica</td>
                                        <td>01 Agustus 2024</td>
                                        <td>04 Agustus 2024</td>
                                        <td>Air Bersih</td>
                                        <td><button class="btn btn-info">Disetujui</button></td>
                                        <td class="text-center">
                                            <button class="btn" data-bs-toggle="modal" data-bs-target="#viewperdi"
                                                title="View Data"><i class="fa-solid fa-eye"></button></i>
                                            <button class="btn" data-bs-toggle="modal" data-bs-target="#validasiperdi"
                                                title="Validasi Data"><i class="fa-solid fa-upload"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- view user modal --}}
                    <div class="modal fade modal-lg" id="viewperdi" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Perjalanan Dinas</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="">
                                        <div class="row m-1">
                                            <div class="mb-3 col-md-6">
                                                <label for="departure_date" class="form-label">Rencana Berangkat</label>
                                                <input type="date" class="form-control form-control-md"
                                                    id="departure_date" name="departure_date" aria-describedby="emailHelp"
                                                    value="2024-08-01" disabled>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="return_date" class="form-label">Rencana Kembali</label>
                                                <input type="date" class="form-control form-control-md" id="return_date"
                                                    name="return_date" aria-describedby="emailHelp" value="2024-08-04"
                                                    disabled>
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <label for="travel_desc" class="form-label">Keperluan Berangkat</label>
                                                <textarea class="form-control form-control-md" id="travel_desc" name="travel_desc" aria-describedby="emailHelp"
                                                    disabled>Proyek</textarea>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="destination" class="form-label">Tujuan</label>
                                                <input type="text" class="form-control form-control-md" id="destination"
                                                    name="destination" aria-describedby="emailHelp" value="Air Bersih"
                                                    disabled>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="surat_perjalanan_dinas" class="form-label">Surat Perjalanan
                                                    Dinas</label><br>
                                                <label for="destination" class="form-label"><i class="fa-solid fa-file"></i>
                                                    <a href="#">suratperjalanan.pdf</a></label>
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <hr>
                                                <h6 class="fw-bold">Benefits</h6>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="transportasi" class="form-label">Transportasi</label>
                                                <select class="form-control" id="transportasi" name="transportasi" disabled>
                                                    <option disabled selected>Pesawat</option>
                                                    <option value="Pesawat">Pesawat</option>
                                                    <option value="Bus">Bus</option>
                                                    <option value="Kereta Api">Kereta Api</option>
                                                    <option value="Mobil">Mobil</option>
                                                    <option value="Sepeda Motor">Sepeda Motor</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="hotel" class="form-label">Penginapan</label>
                                                <select class="form-control" id="hotel" name="hotel" disabled>
                                                    <option disabled selected>Perlu</option>
                                                    <option value="Perlu">Perlu</option>
                                                    <option value="Tidak Perlu">Tidak Perlu</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <label for="uang" class="form-label">Detail Pengiriman Uang
                                                    Saku</label>
                                                <textarea class="form-control form-control-md" id="uang" name="uang" aria-describedby="emailHelp"
                                                    placeholder="Contoh : Bank BNI : 1234563678897 / a.n Trisatya" disabled>Bank BNI : 1234563678897 / a.n Trisatya</textarea>
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

                    {{-- validasi perjalanan dinas --}}
                    <div class="modal fade modal-lg" id="validasiperdi" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Validasi Perjalanan Dinas</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="">
                                        <div class="row m-1">
                                            <div class="mb-3 col-md-6">
                                                <label for="transportasi" class="form-label">Transportasi</label>
                                                <input type="text" name="transportasi" id="transportasi" class="form-control" value="Pesawat" disabled>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="file_transportasi" class="form-label">File Transportasi</label>
                                                <input type="file" name="file_transportasi" id="file_transportasi" class="form-control">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="jumlah_transportasi" class="form-label">Biaya Transportasi</label>
                                                <input type="number" name="jumlah_transportasi" id="jumlah_transportasi" class="form-control">
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <hr>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="penginapan" class="form-label">Penginapan</label>
                                                <input type="text" name="penginapan" id="penginapan" class="form-control" value="Perlu" disabled>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="file_penginapan" class="form-label">File Penginapan</label>
                                                <input type="file" name="file_penginapan" id="file_penginapan" class="form-control">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="jumlah_penginapan" class="form-label">Biaya Penginapan</label>
                                                <input type="number" name="jumlah_penginapan" id="jumlah_penginapan" class="form-control">
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <hr>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="uang" class="form-label">Detail Pengiriman Uang
                                                    Saku</label>
                                                <textarea class="form-control form-control-md" id="uang" name="uang" aria-describedby="emailHelp"
                                                    placeholder="Contoh : Bank BNI : 1234563678897 / a.n Trisatya" disabled>Bank BNI : 1234563678897 / a.n Trisatya</textarea>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="file_uang" class="form-label">File Uang Saku</label>
                                                <input type="file" name="file_uang" id="file_uang" class="form-control">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="jumlah_uang" class="form-label">Biaya Uang Saku</label>
                                                <input type="number" name="jumlah_uang" id="jumlah_uang" class="form-control">
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
