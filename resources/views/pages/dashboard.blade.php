@extends('layouts.master')
@section('content')
<section class="container-fluid" style="margin-top: -75px">
    <div class="row align-items-center">
        <div class="col-6 ps-5">
            <span class="tag-new">New</span>
            <div>
                <h1 class="title-dashboard-s1">Super MM Infinity</h1>
                <p class="content-dashboard-s1">Produk Propolis Asal Inggris Bermutu Tinggi Standar Internasional,
                    British Propolis dijamin halal 100%</p>
            </div>
        </div>
        <div class="col-6 pe-0">
            <img src="{{ asset('assets/img/pages/dashboard/dsb-s1.png') }}" alt="image Section 1" width="100%">
        </div>
    </div>
</section>

<section class="container-fluid py-5">
    <h1 class="text-center title-dashboard">APA ITU BRITISH PROPOLIS?</h1>
    <div class="row pt-4">
        <div class="col-6 ps-5">
            <p class="content-dashboard"> Propolis adalah propolis premium dari Inggris. Dikatakan premium karena memang
                propolis ini
                dihasilkan langsung dari lebah madu yang hidup di berbagai musim yaitu musim semi, musim panas, musim
                gugur
                dan musim salju. Beberapa riset mengatakan bahwa lebah terbaik adalah lebah yang bisa hidup di 4 musim,
                termasuk Inggris. Di Indonesia sendiri, BP termasuk propolis kualitas terbaik dan rekomendasi tokoh.</p>
        </div>
        <div class="col-6 pe-5">
            <img src="{{ asset('assets/img/pages/dashboard/dsb-s2.png') }}" alt="Image Dashboard Section 2"
                width="100%">

        </div>
    </div>

</section>

<section class="container-fluid">
    <div class="row align-items-end">
        <div class="col-6 ps-5">
            <div class="horizontal-line-dashboard"></div>
                <h1 class="title-dashboard">BRITISH PROPOLIS REGULER</h1>
                <p class="content-dashboard">Propolis terbaik dengan kandungan flavonoids 4x lebih banyak dibandingkan dengan propolis biasa. Sangat bermanfaat untuk meningkatkan stamina, daya tahan/kekebalan tubuh serta membantu mengatasi masalah kesehatan seperti Diabetes, Asam urat, Kolesterol, Sakit saat PMS dll.</p>
        </div>
        <div class="col-6 pe-5">
            <img src="{{ asset('assets/img/pages/dashboard/dsb-s3.png') }}" alt="Image Dashboard Section 3"
                width="100%">
        </div>
    </div>
</section>

<section class="container-fluid py-5">
    <div class="row">
        <div class="col-4 ps-5">
            <img src="{{ asset('assets/img/pages/dashboard/dsb-s4.png') }}" alt="Image Dashboard Section 3" width="100%">
        </div>
        <div class="col-8 pe-5">
            <div class="horizontal-line-dashboard"></div>
            <h1 class="title-dashboard">BRITISH PROPOLIS GREEN</h1>
            <p class="content-dashboard">Merupakan propolis yang diperuntukkan untuk anak-anak usia 1-12 tahun sehingga aman dikonsumsi dan rasanya disuka anak-anak. Bermanfaat untuk menjaga kesehatan anak dan mengoptimalkan tumbu kembangnya.</p>
        </div>
    </div>
</section>

    <section class="container-fluid py-5">
        <div class="row align-items-end">
            <div class="col-8 ps-5">
                <div class="horizontal-line-dashboard"></div>
                <h1 class="title-dashboard">BELGIE PRO NIGHT CREAM</h1>
                <p class="content-dashboard">Belgie Pro Night Cream yang diformasikan dengan kandungan propolis Extract Palmitoyl Tripeptide -5, Hydrolyzed Collagen dan Hyaluronic Acid sangat baik untuk membantu meregenerasi kulit wajah, menghilangkan noda hitam di wajah, dan melembabkan kulit wajah.</p>
            </div>
            <div class="col-4 pe-5">
                <img src="{{ asset('assets/img/pages/dashboard/dsb-s4.png') }}" alt="Image Dashboard Section 3" width="100%">
            </div>
        </div>
    </section>
@endsection