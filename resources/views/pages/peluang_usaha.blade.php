@extends('layouts.master')

@section('content')
<section class="container-fluid py-5">
    <div class="row align-items-center">
        <div class="col-6 ps-5">
            <p class="title-peluang-usaha">Mau bisnis dari rumah? bisnis full bimbingan?Yuk gabung bersama BP</p>
        </div>
        <div class="col-6 pe-5 text-end">
            <img src="{{ asset('assets/img/pages/peluang-usaha/pu-s1.png') }}" alt="Peluang Usaha" width="75%">
        </div>
    </div>
</section>

<section class="container-fluid">
    <h1 class="sub-title-peluang-usaha text-center">APA ITU BRITISH PROPOLIS?</h1>
    <div class="row align-items">
        <div class="col-6 ps-5">
            <p class="content-peluang-usaha">British Propolis adalah propolis premium dari Inggris. Dikatakan premium
                karena memang propolis ini dihasilkan langsung dari lebah madu yang hidup di berbagai musim yaitu musim
                semi, musim panas, musim gugur dan musim salju. Beberapa riset mengatakan bahwa lebah terbaik adalah
                lebah yang bisa hidup di 4 musim, termasuk Inggris. Di Indonesia sendiri, BP termasuk propolis kualitas
                terbaik dan rekomendasi tokoh.</p>
        </div>
        <div class="col-6 pe-5">
            <img src="{{ asset('assets/img/pages/peluang-usaha/pu-s2.png') }}" alt="Apa itu british propolis?"
                width="75%">
        </div>
    </div>
</section>

<section class="container-fluid section-business-process my-5">
    <h1 class="sub-title-peluang-usaha text-center text-white mb-5">BAGAIMANA CARA MENJALANKAN BISNISNYA?</h1>
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2 text-center px-0">
                            <img src="{{ asset('assets/img/pages/peluang-usaha/num-1.png') }}" alt="1" class="w-50">
                        </div>
                        <div class="col-10 ps-0">
                            <p class="content-peluang-usaha mb-0">
                                    Pertama, dapatkan harga spesial yang lebih murah dengan menjadi mitra. Anda bisa hemat konsumsi produknya dan bisa dijual kembali                       
                            </p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2 text-center px-0">
                            <img src="{{ asset('assets/img/pages/peluang-usaha/num-2.png') }}" alt="2" class="w-50">
                        </div>
                        <div class="col-10 ps-0">
                            <p class="content-peluang-usaha mb-0">
                                    Kedua, Anda perkenalkan manfaat British Propolis, kepada pelanggan Anda atau calon pembeli secara offline dan online                        
                                </p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2 text-center px-0">
                            <img src="{{ asset('assets/img/pages/peluang-usaha/num-3.png') }}" alt="3" class="w-50">
                        </div>
                        <div class="col-10 ps-0">
                            <p class="content-peluang-usaha mb-0">
                                    Ketiga, ikuti arahan dan bimbingan mentor agar perjalanan untuk sukses Anda lebih cepat dan mudah.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection