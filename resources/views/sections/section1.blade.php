<!-- resources/views/sections/section1.blade.php -->

<div class="container">

    <div class="jumbotron text-center">
        <h1 class="display-4">Selamat Datang di Kopi Jahe Viral</h1>
        <p class="lead">Nikmati berbagai jenis minuman dan gerobak unik kami.</p>
        <hr class="my-4">
        <p>Jelajahi pilihan minuman dan temukan gerobak yang cocok untuk Anda.</p>
        <a class="btn btn-primary btn-lg" href="/tambah-pelanggan" role="button">Lihat Menu</a>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/minuman1.jpg') }}" class="card-img-top" alt="Minuman 1">
                <div class="card-body">
                    <h5 class="card-title">Minuman Spesial 1</h5>
                    <p class="card-text">Nikmati sensasi unik dari minuman ini.</p>
                    <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                </div>
            </div>
        </div>


        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/minuman2.jpg') }}" class="card-img-top" alt="Minuman 2">
                <div class="card-body">
                    <h5 class="card-title">Minuman Spesial 2</h5>
                    <p class="card-text">Rasakan kelezatan minuman dengan campuran unik.</p>
                    <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                </div>
            </div>
        </div>

</div>
