@extends('user.master')

@section('content')
    <br>
    <!---page section-->
    <div class="container mb-3">
        <div class="mb-5" style="height:600px;background-size:cover; background-image: url({{ asset('user/images/hero.png') }});background-repeat:no-repeat;padding:100px;">
            <div class="d-flex gap-5 justify-content-between">
                <div style="position: relative;bottom:-170px;">
                    <h1 class="text-white">
                        Pilih Hotel Suka-Suka Liburan bersama Keluarga
                    </h1>
                    <p class="text-white">
                        Jangan takuti liburanmu terhambat dengan penginapan! percayakan kepada kami untuk memilih tempatmu beristirhata
                    </p>
                </div>

                <div>
                    <div class="card p-2" style="width: 400px;">
                        <center>
                            <h4>Cari Penginapanmu Disini</h4>
                            <br>
                        </center>
                        <div class="form-group">
                            <label class="form-label">Nama Lokasi/Tempat</label>
                            <input type="text" class="form-control" placeholder="Mau nginep di hotel mana?">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Check in</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-label">Check Out</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Jumlah Tamu/Kamar</label>
                            <select name="" id="" class="form-control">
                                <option value="" hidden>Pilih Jumlah Tamu dan Kamarmu</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                        <br>
                        <a href="cek_ketersediaan.html" class="btn text-white" style="background: rgba(114, 150, 92, 1);">Cari Villa</a>
                        
                        <br>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="villa2" class="container mb-5">
        <div class="d-flex justify-content-between mb-5">
            <div>
                <h3>Tipe Bangunan</h3>
                <p>Pilih penginapan seusai dengan tipe bangunan yang kamu inginkan dan tidur dengan nyenyak!</p>
            </div>
        </div>

        <div class="d-flex gap-3 mb-3">
            <img src="{{asset('user/images/Card Kota.png')  }}" alt="" class="img-fluid">
            <img src="{{ asset('user/images/Card Kota-1.png') }}" alt="" class="img-fluid">
        </div>
        <div class="d-flex gap-3 mb-3">
            <img src="{{ asset('user/images/Card Kota-2.png') }}" alt="" class="img-fluid">
            <img src="{{ asset('user/images/Card Kota-3.png') }}" alt="" class="img-fluid">
        </div>

        <div class="d-flex gap-3 mb-3">
            <img src="{{asset('user/images/kota5.png')  }}" alt="" class="img-fluid">
        </div>
    </div>

    <div id="resto" class="container mb-5">
        <div class="d-flex justify-content-between">
            <div>
                <h3>Resto Villa</h3>
                <p>pilih sesuai dengan budgetmu!</p>
            </div>
            <div style="position: relative;bottom:-10px;">
                <small>
                    <span class="text-success">Lihat Semua</span>
                </small>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                <div class="card" style="border: none;outline:none;">
                    <img src="{{ asset('user/images/resto1.jpeg') }}" alt="" class="img-fluid">
                    <div class="d-flex justify-content-between mt-2">
                        <div>
                            <p><b>Premium Homestay</b> <br><small>
                                Batam
                            </small></p>
                        </div>
                        <div>
                            <span style="position:relative;top:10px;">
                                <i class="fas fa-star text-warning"></i> 4,8
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                <div class="card" style="border: none;outline:none;">
                    <img src="{{ asset('user/images/resto2.jpeg') }}" alt="" class="img-fluid">
                    <div class="d-flex justify-content-between mt-2">
                        <div>
                            <p><b>Villa Nusa Indah</b> <br><small>
                                Batam
                            </small></p>
                        </div>
                        <div>
                            <span style="position:relative;top:10px;">
                                <i class="fas fa-star text-warning"></i> 4,7
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                <div class="card" style="border: none;outline:none;">
                    <img src="{{asset('user/images/resto3.jpeg')  }}" alt="" class="img-fluid">
                    <div class="d-flex justify-content-between mt-2">
                        <div>
                            <p><b>Permata Jinggah Homestay</b> <br><small>
                                Batam
                            </small></p>
                        </div>
                        <div>
                            <span style="position:relative;top:10px;">
                                <i class="fas fa-star text-warning"></i> 4,7
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                <div class="card" style="border: none;outline:none;">
                    <img src="{{ asset('user/images/resto2.jpeg') }}" alt="" class="img-fluid">
                    <div class="d-flex justify-content-between mt-2">
                        <div>
                            <p><b>Hotel Senayan, Jakarta</b> <br><small>
                                Batam
                            </small></p>
                        </div>
                        <div>
                            <span style="position:relative;top:10px;">
                                <i class="fas fa-star text-warning"></i> 4,7
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="promo" class="container mb-5">
        <div>
            <h3>Promo Terbaru</h3>
            <p>Nikmati promomu disini!</p>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('user/images/promo10.png')}}" class="d-block w-100" alt="Image 1">
                <div class="carousel-caption">
                  <h5>Image 1</h5>
                  <p>Description for Image 1</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('user/images/promo9.png') }}" class="d-block w-100" alt="Image 2">
                <div class="carousel-caption">
                  <h5>Image 2</h5>
                  <p>Description for Image 2</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('user/images/promo10.png') }}" class="d-block w-100" alt="Image 3">
                <div class="carousel-caption">
                  <h5>Image 3</h5>
                  <p>Description for Image 3</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>
          </div>
    </div>
        </div>
    </div>    
  @endsection
      
