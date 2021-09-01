@extends('pages.landing.main')
@section('content')

    <!-- Start Banner Hero -->
    <section class="bg-light">
        <div class="container py-4">
            <div class="row align-items-center justify-content-between">
                <div class="contact-header col-lg-7">
                    <h1 class="h2 pb-3 text-primary">PPMB</h1>
                    <h3 class="h4 regular-400">Pembinaan dan Pengembangan Mahasiswa Baru</h3>
                    <p class="light-300">
                        Program yang ditujukan untuk membina dan mengembangkan mahasiswa baru terhadap aktifitas maupun segala aspek dari
                        Fakultas Ilmu Komputer Universitas Jember
                    </p>
                </div>
                <div class="contact-img col-lg-5 align-items-end col-md-4">
                    <img src="{{asset("template-assets/img/banner-img-01.svg")}}">
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Hero -->

    <!-- Start View Work -->
    <section class="bg-secondary">
        <div class="container py-5">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-7 col-12 text-light pt-2">
                    <h3 class="h4 light-300"><b>"Great losses are great lessons"</b></h3>
                    <p class="light-300">Amit Kalantri</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End View Work -->

    <!-- Start Contact -->
    <section class="container py-5">

        <h1 class="col-12 col-xl-8 h2 text-left text-primary pb-5 pt-3 typo-space-line">Cek Poin PPMB</h1>
{{--        <h2 class="col-12 col-xl-8 h4 text-left regular-400">Elit, sed do eiusmod tempor </h2>--}}
{{--        <br><br>--}}
        <p class="col-12 col-xl-8 text-left text-muted light-300">
            <b>
                Silahkan masukkan nama atau nim mahasiswa yang akan dicari :)
            </b>
        </p>

        <livewire:search-student/>
{{--        <div class="row pb-4">--}}
{{--            <div class="col-lg-4">--}}

{{--                <div class="contact row mb-4">--}}
{{--                    <div class="contact-icon col-lg-3 col-3">--}}
{{--                        <div class="py-3 mb-2 text-center border rounded text-secondary">--}}
{{--                            <i class='display-6 bx bx-news'></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <ul class="contact-info list-unstyled col-lg-9 col-9  light-300">--}}
{{--                        <li class="h5 mb-0">Media Contact</li>--}}
{{--                        <li class="text-muted">Mr. John Doe</li>--}}
{{--                        <li class="text-muted">010-020-0340</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}

{{--                <div class="contact row mb-4">--}}
{{--                    <div class="contact-icon col-lg-3 col-3">--}}
{{--                        <div class="border py-3 mb-2 text-center border rounded text-secondary">--}}
{{--                            <i class='bx bx-laptop display-6' ></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <ul class="contact-info list-unstyled col-lg-9 col-9 light-300">--}}
{{--                        <li class="h5 mb-0">Technical Contact</li>--}}
{{--                        <li class="text-muted">Mr. John Stiles</li>--}}
{{--                        <li class="text-muted">010-020-0340</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}

{{--                <div class="contact row mb-4">--}}
{{--                    <div class="contact-icon col-lg-3 col-3">--}}
{{--                        <div class="border py-3 mb-2 text-center border rounded text-secondary">--}}
{{--                            <i class='bx bx-money display-6'></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <ul class="contact-info list-unstyled col-lg-9 col-9 light-300">--}}
{{--                        <li class="h5 mb-0">Billing Contact</li>--}}
{{--                        <li class="text-muted">Mr. Richard Miles</li>--}}
{{--                        <li class="text-muted">010-020-0340</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}

{{--            </div>--}}


{{--            <!-- Start Contact Form -->--}}
{{--            <div class="col-lg-8 ">--}}
{{--                <form class="contact-form row" method="post" action="#" role="form">--}}

{{--                    <div class="col-lg-6 mb-4">--}}
{{--                        <div class="form-floating">--}}
{{--                            <input type="text" class="form-control form-control-lg light-300" id="floatingname" name="inputname" placeholder="Name">--}}
{{--                            <label for="floatingname light-300">Name</label>--}}
{{--                        </div>--}}
{{--                    </div><!-- End Input Name -->--}}

{{--                    <div class="col-lg-6 mb-4">--}}
{{--                        <div class="form-floating">--}}
{{--                            <input type="text" class="form-control form-control-lg light-300" id="floatingemail" name="inputemail" placeholder="Email">--}}
{{--                            <label for="floatingemail light-300">Email</label>--}}
{{--                        </div>--}}
{{--                    </div><!-- End Input Email -->--}}

{{--                    <div class="col-lg-6 mb-4">--}}
{{--                        <div class="form-floating">--}}
{{--                            <input type="text" class="form-control form-control-lg light-300" id="floatingphone" name="inputphone" placeholder="Phone">--}}
{{--                            <label for="floatingphone light-300">Phone</label>--}}
{{--                        </div>--}}
{{--                    </div><!-- End Input Phone -->--}}

{{--                    <div class="col-lg-6 mb-4">--}}
{{--                        <div class="form-floating">--}}
{{--                            <input type="text" class="form-control form-control-lg light-300" id="floatingcompany" name="inputcompany" placeholder="Company Name">--}}
{{--                            <label for="floatingcompany light-300">Company Name</label>--}}
{{--                        </div>--}}
{{--                    </div><!-- End Input Company Name -->--}}

{{--                    <div class="col-12">--}}
{{--                        <div class="form-floating mb-4">--}}
{{--                            <input type="text" class="form-control form-control-lg light-300" id="floatingsubject" name="inputsubject" placeholder="Subject">--}}
{{--                            <label for="floatingsubject light-300">Subject</label>--}}
{{--                        </div>--}}
{{--                    </div><!-- End Input Subject -->--}}

{{--                    <div class="col-12">--}}
{{--                        <div class="form-floating mb-3">--}}
{{--                            <textarea class="form-control light-300" rows="8" placeholder="Message" id="floatingtextarea"></textarea>--}}
{{--                            <label for="floatingtextarea light-300">Message</label>--}}
{{--                        </div>--}}
{{--                    </div><!-- End Textarea Message -->--}}

{{--                    <div class="col-md-12 col-12 m-auto text-end">--}}
{{--                        <button type="submit" class="btn btn-secondary rounded-pill px-md-5 px-4 py-2 radius-0 text-light light-300">Send Message</button>--}}
{{--                    </div>--}}

{{--                </form>--}}
{{--            </div>--}}
{{--            <!-- End Contact Form -->--}}


{{--        </div>--}}
    </section>


    <!-- End Contact -->

@endsection
