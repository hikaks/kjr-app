<!-- Masukkan link CSS Bootstrap terbaru -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
<!-- CSS tambahan untuk form cantik -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<div class="container">
    <h1>Form Data Pelanggan</h1>

    <div class="my-3">
        @if (Session::has('status'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif

        <form method="POST" action="{{ route('simpan.pelanggan') }}">
            @csrf

            <div class="mb-3">
                <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="telepon" class="form-label">No Telepon</label>
                <input type="tel" class="form-control" id="telepon" name="telepon" required>
            </div>

            <div class='mb-3'>
                <label> merk mobil</label>
                <select id="jenisMinuman" class="form-select" name="id_minuman" aria-label="Default select example">

                </select>
            </div>

            <div class='mb-3'>
                <label> Type mobil</label>
                <select id="jenisGerobak" class="form-select" name="id_gerobak" aria-label="Default select example">
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {

            $("#jenisMinuman").select2({
                placeholder: 'Pilih Jenis Minuman',
                ajax: {
                    url: "{{ route('minuman.index') }}",
                    processResults: function({
                        data
                    }) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                    id: item.id,
                                    text: item.nama_minuman
                                }
                            })
                        }
                    }
                }
            });

            $("#jenisMinuman").change(function() {
                let id = $('#jenisMinuman').val();

                $("#jenisGerobak").select2({
                    placeholder: 'Pilih Gerobak',
                    ajax: {
                        url: "{{ url('jenisGerobak') }}/" + id,
                        processResults: function({
                            data
                        }) {
                            return {
                                results: $.map(data, function(item) {
                                    return {
                                        id: item.id,
                                        text: item.nama_gerobak
                                    }
                                })
                            }
                        }
                    }
                });
            });
        });
    </script>
