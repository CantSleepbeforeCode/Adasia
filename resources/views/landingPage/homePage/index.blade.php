@extends('layouts.masterLandingPage')

@section('title', 'Adasia - Home Page')

@section('style')
  <link rel="stylesheet" href="/assets/css/style-home-page.css">
@endsection

@section('content')
  <section id="deskripsi" class="section custom-bg-color-1 custom-background-style-1 m-0">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-8">
          <div class="custom-top-title-box">
            <h1 class="text-color-dark">Adasia</h1>
            <span class="text-color-dark font-weight-semibold mb-5">Platform Video Musik Bertemakan Budaya Indonesia</span>
            <a href="#download" style="color: #e6c300 !important" class="btn custom-btn-style-1 text-color-dark mb-5" data-hash>Download</a>
            <a href="#fitur" class="btn custom-btn-style-1 _borders text-color-dark ml-2 mb-5" data-hash data-hash-offset="62">Fitur</a>
          </div>
        </div>
        <div class="col-8 col-md-4 col-lg-4 mx-auto">
          <div class="owl-carousel custom-arrows-style-1 custom-left-pos-1 custom-background-1 m-0" data-plugin-options="{'items': 1, 'loop': true, 'dots': false, 'nav': true, 'autoplay': true, 'autoplayTimeout': 3000}">
            <div>
              <img src="/images/prototype/8.jpeg" alt class="img-fluid" />
            </div>
            <div>
              <img src="/images/prototype/16.jpeg" alt class="img-fluid" />
            </div>
            <div>
              <img src="/images/prototype/18.jpeg" alt class="img-fluid" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="cara-kerja" class="section bg-color-dark m-0">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-5">

          <img src="/images/prototype/phone-11.png" data-appear-animation="fadeInUp" data-appear-animation-delay="400" data-plugin-options="{'accY': 200}" alt class="appear-animation custom-product-image-pos-1 _relative img-fluid" />

          <img src="/images/prototype/phone-19.png" data-appear-animation="fadeInUp" data-appear-animation-delay="00" data-plugin-options="{'accY': 10}" alt class="appear-animation custom-product-image-pos-1 _absolute img-fluid" />
        </div>
        <div class="col-md-10 col-lg-7 text-center text-lg-left">
          <h2 class="custom-bar _left text-color-gold">Cara Kerja</h2>
          <p class="mb-5 pb-5 text-color-light">Adasia yang merupakan aplikasi sebagai platform yang digunakan untuk mengabadikan suatu moment budaya penting dalam bentuk representasi video dengan tema budaya. Dapat diciptakan dengan kreativitas dan kreasi selera user dengan budaya yang ada untuk saling berkolaboraasi memadukan budaya yang diciptakan pada platform ini.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section bg-light m-0">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="row counters counters-text-dark custom-counters-style-1">
            <div class="col-sm-4 col-lg-4 col-lg-2 m-auto text-center">
              <div class="counter text-center">
                <i class="icon-cloud-download icons mr-2"></i>
                @php
                  $no = 1;
                  $serve = $hasil['all_user'];
                  $hitungUser = count($serve);
                @endphp
                <span class="counter-value" data-to="{{ $hitungUser }}" data-append=" Peminat">0</span>
                <span class="counter-title">Pre-Register</span>
              </div>
              <button class="btn btn-outline-dark mb-3 mt-4" type="button" data-toggle="collapse" data-target="#tabelPreRegister" aria-expanded="false" aria-controls="tabelPreRegister">Tampilkan</button>

            </div>
          </div>
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <div class="collapse" id="tabelPreRegister">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Pekerjaan</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ( $serve as $user)
                    <tr>
                      <th scope="row">{{ $no++ }}</th>
                      <td>{{ $user['Nama'] }}</td>
                      <td>{{ $user['Pekerjaan'] }}</td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="fitur" class="section bg-color-dark m-0">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col-lg-8 m-auto">
          <h2 class="custom-bar _center text-color-gold">Fitur</h2>
          <p class="text-color-light">Fitur utama yang terdapat pada aplikasi Adasia</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-6 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100" data-appear-animation-duration="1s">
          <div class="feature-box feature-box-style-3 reverse custom-feature-box-style-1">
            <div class="feature-box-icon">
              <i class="fas fa-tv custom-icon-fix-pos"></i>
            </div>
            <div class="feature-box-info text-2">
              <h4 class="text-color-gold pt-1">Pengenalan Budaya</h4>
              <p class="mb-4 text-color-light">Indonesia memiliki  beraneka ragam budaya, suku bangsa, ras, etnis, agama dan Bahasa daerah. Setiap suku bangsa memiliki ciri khas budayanya sendiri. Budaya antara satu daerah dengan daerah lain pasti berbeda-beda.  Melalui platform Adasia ini karya-karya budaya Indonesia seperti tarian daerah, lagu daerah, cerita rakyat dan karya seni visual Indonesia dapat di kenal oleh masyarakat luas. Dengan adanya platform ini budaya yang ada di Indonesia dapat lebih di explore dan dipadukan lebih real secara konkret dengan kesesuaian selera user. Platform ini sekaligus menjadi sarana dan prasarana dalam memperluas serta melestarikan budaya Indonesia.</p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-6 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" data-appear-animation-duration="1s">
          <div class="feature-box feature-box-style-3 custom-feature-box-style-1">
            <div class="feature-box-icon">
              <i class="fas fa-sync"></i>
            </div>
            <div class="feature-box-info text-2">
              <h4 class="text-color-gold pt-1">Pelestarian Budaya</h4>
              <p class="mb-4 text-color-light">Budaya Indonesia dengan representasi yang masih sederhana dan masih awam karena membawa nilai nilai luhur khas masing masing tiap daerah dan leluhur sehingga menjadikan seni budaya kurang diminati seiriing dengan perkembangan zaman yang semakin modern dan sudah terindikasi dengan budaya mancanegara. Sehingga lewat platform Adasia ini kebudayaan Indonesia menjadi lebih inovatif dengan kolaborasi perkembangan saat ini sehingga menarik minat terutama kaum hawa agar bisa melestarikan serta mengembangkan budaya Indonesia lewat kreasi mereka dengan platform ini.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-6 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100" data-appear-animation-duration="1s">
          <div class="feature-box feature-box-style-3 reverse custom-feature-box-style-1">
            <div class="feature-box-icon">
              <i class="fas fa-user-plus custom-icon-fix-pos"></i>
            </div>
            <div class="feature-box-info text-2">
              <h4 class="text-color-gold pt-1">Perluas Koneksi Budaya</h4>
              <p class="mb-4 text-color-light">Tidak hanya budaya Indonesia yang beraasal dari daerah yang sama ataupun itu itu saja melainkan dapat berbaur untuk berexplorasi untuk keragaman budaya agar menciptakan video dengan berbagai daerah sehingga lebih besar peluang budaya Indonesia tersebar luas dengan cara yang lebih inovatif dan diminati.</p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-6 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" data-appear-animation-duration="1s">
          <div class="feature-box feature-box-style-3 custom-feature-box-style-1">
            <div class="feature-box-icon">
              <i class="far fa-life-ring"></i>
            </div>
            <div class="feature-box-info text-2">
              <h4 class="text-color-gold pt-1">Pengembangan Kreatifitas</h4>
              <p class="mb-4 text-color-light">Kreatifitas seseorang tidaklah ada batasan selama masih dapat menikmati suatu seni budaya dan dapat berexplorasi dapat memberikan peluang besar bagi tiap orang untuk akses dan mengembangkan kreatifitas dengan perpaduan budaya Indonesia melalui representasi video sekreatif mungkin.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-6 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100" data-appear-animation-duration="1s">
          <div class="feature-box feature-box-style-3 reverse custom-feature-box-style-1">
            <div class="feature-box-icon">
              <i class="fas fa-users"></i>
            </div>
            <div class="feature-box-info text-2">
              <h4 class="text-color-gold pt-1">Perlindungan Hak Cipta</h4>
              <p class="mb-4 text-color-light">Suatu karya atau apapun itu sebagai suatu hasil dari karya cipta sudah sepatutnya diapresiasi agar tidak sembarangan diambil maupun di claim tanpa adanya penghargaan terhadap kepemilikian hak cipta seseorang. Oleh karena itu sangat diperlukan perlindungan hak cipta guna menghindari plagiat maupun penjiplakan tanpa ada persetujuan.</p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-6 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" data-appear-animation-duration="1s">
          <div class="feature-box feature-box-style-3 custom-feature-box-style-1">
            <div class="feature-box-icon">
              <i class="fas fa-paint-brush"></i>
            </div>
            <div class="feature-box-info text-2">
              <h4 class="text-color-gold pt-1">Challenge & Reward</h4>
              <p class="mb-4 text-color-light">Platform Adasia memiliki challenge agar user dapat menyalurkan bakat dan kreatifitas  mengenai budaya yang ada di Indonesia. Selain itu, challenge ini sebagai suatu cara untuk memperluas dan melestarikan karya budaya Indonesia ke masyarakat luas. Setelah melewati challenge tersebut akan ada hadiah reward bagi yang beruntung . Reward ini sebagai bentuk apresiasi kami kepada user karena turut serta mengikuti challenge yang diadakan.</p>
            </div>
          </div>
        </div>
      </div>

      <hr class="solid custom-tall">
      <div class="row mb-5 pb-5 justify-content-center">
        <div class="col-lg-5 text-center">
          <img src="/images/prototype/phone-14.png" data-appear-animation="fadeInLeft" data-appear-animation-delay="500" data-plugin-options="{'accY': 200}" alt class="img-fluid" />
        </div>
        <div class="col-md-10 col-lg-7 text-center text-lg-left">
          <h2 class="custom-bar _left text-color-gold">Permasalahan</h2>
          <p class="mb-5 text-color-light">Saat ini banyak ditemukan mengenai permasalahan kebudayaan Indonesia dimana masih banyaknya bagi sebagian besar orang yang masih tidak familiar dan tidak terbiasa dengan budaya Indonesia sehingga menjadikan kurangnya minat terhadap budaya Indonesia khusus nya pada remaja di zaman modern ini. Dan seiring dengan perkembangan teknologi bahkan tidak terdapat yang memperkenalkan budaya bangsa melainkan selalu berbau dengan budaya mancanegara. Sehingga minim nya pengembangan kebudayaan dalam negeri</p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-7 order-2 order-lg-1 text-center text-lg-right">
          <h2 class="custom-bar _right text-color-gold">Solusi</h2>
          <p class="mb-5 text-color-light">Adapun berdasarkan permasalahan berikut dapat dinyatakan bahwa dengan menghadirkan platform yang berkaitan dengan kebudayaan Indonesia yaitu Adasia dimana dengan mengikuti perkembangan teknoogi dengan memadukan unsur kebudayaan Indonesia di dalam nya guna mengembangkan kebudayaan tersebut dengan representasi dalam bentuk video sekreatif mungkin dan sekalian berguna untuk perkembangan budaya lebih di kenal di kalangan millennial dan untuk semua orang agar dapat mengembangkan dan mengexplorasi budaya kita.</p><br><br>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center">
          <img src="/images/prototype/phone-15.png" data-appear-animation="fadeInRight" data-appear-animation-delay="500" data-plugin-options="{'accY': 200}" alt class="img-fluid" />
        </div>
      </div>
    </div>
  </section>

  <section id="pre-register" class="section bg-color-tertiary m-0">
   <div class="container">
     <div class="row">
       <div class="col text-center">
         <h2 class="text-color-gold">Pre-Register</h2><br>
         <div class="row">
           <div class="col-md-6 offset-md-3">
             <form action="/pre-register" method="POST">
               {{ csrf_field() }}
               <div class="form-row">
                 <div class="form-group col-md-6">
                   <p class="text-light text-left mb-2">Nama</p>
                   <input name="nama" type="text" class="form-control" placeholder="Nama">
                 </div>
                 <div class="form-group col-md-6">
                   <p class="text-light text-left mb-2">Umur</p>
                   <input name="umur" type="umur" class="form-control" placeholder="Umur">
                 </div>
               </div>
               <div class="form-group">
                 <p class="text-light text-left mb-2">Email</p>
                 <input name="email" type="email" class="form-control" placeholder="Email">
               </div>
               <div class="form-group">
                 <p class="text-light text-left mb-2">Pekerjaan</p>
                 <input name="pekerjaan" type="text" class="form-control" placeholder="Pekerjaan">
               </div>
               <div class="form-row text-center">
                 <div class="col-12">
                   <button type="submit" class="btn btn-outline btn-gold text-color-gold mb-3">Daftar</button>
                 </div>
             </form>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

  <section id="tim" class="section m-0">
    <div class="container py-4">
      <div class="row">
        <div class="col pb-4 text-center">
          <h2 class="text-color-dark font-weight-normal text-5 mb-0 pt-2">Para Cerdikiawan <strong class="font-weight-extra-bold">Adasia</strong></h2>
          <p>Tim dibalik pembuatan Aplikasi Adasia.</p>
        </div>
      </div>
      <div class="row pb-4 mb-2">
        <div class="col-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="200" data-appear-animation-duration="1s">
          <span class="team-card thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
            <span class="thumb-info-wrapper border-radius-0">
              <a>
                <img src="/images/team/yusel.jpeg" class="img-fluid border-radius-0" alt="">
                <span class="thumb-info-title">
                  <span class="thumb-info-inner">Yusela Deisca Ramadina</span>
                  <span class="thumb-info-type text-color-dark">Hustler</span>
                </span>
              </a>
            </span>
          </span>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="400" data-appear-animation-duration="1s">
          <span class="team-card thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
            <span class="thumb-info-wrapper border-radius-0">
              <a>
                <img src="/images/team/sam.jpeg" class="img-fluid border-radius-0" alt="">
                <span class="thumb-info-title">
                  <span class="thumb-info-inner">Samsul Bahri</span>
                  <span class="thumb-info-type text-color-dark">Hacker</span>
                </span>
              </a>
            </span>
          </span>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="600" data-appear-animation-duration="1s">
          <span class=" team-card thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
            <span class="thumb-info-wrapper border-radius-0">
              <a>
                <img src="/images/team/dinda.jpeg" class="img-fluid border-radius-0" alt="">
                <span class="thumb-info-title">
                  <span class="thumb-info-inner">Dinda Saputri</span>
                  <span class="thumb-info-type text-color-dark">Hustler</span>
                </span>
              </a>
            </span>
          </span>
        </div>
      </div>
      <div class="row pb-4 mb-2">
        <div class="col-lg-6 appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="100" data-appear-animation-duration="1s">
          <span class="team-card-4 thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
            <span class="thumb-info-wrapper border-radius-0">
              <a>
                <img src="/images/team/eja.jpg" class="img-fluid border-radius-0" alt="">
                <span class="thumb-info-title">
                  <span class="thumb-info-inner">Reyza Zhakarriya S.</span>
                  <span class="thumb-info-type text-color-dark">Hipster</span>
                </span>
              </a>
            </span>
          </span>
        </div>
        <div class="col-lg-6 appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="400" data-appear-animation-duration="1s">
          <span class="team-card-5 thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
            <span class="thumb-info-wrapper border-radius-0">
              <a>
                <img src="/images/team/iqbal.jpeg" class="img-fluid border-radius-0" alt="">
                <span class="thumb-info-title">
                  <span class="thumb-info-inner">Muhammad Iqbal Al-Haswan</span>
                  <span class="thumb-info-type text-color-dark">Hacker</span>
                </span>
              </a>
            </span>
          </span>
        </div>
      </div>
    </div>
  </section>

  <section id="faq" class="section bg-color-dark m-0">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col-lg-8 m-auto">
          <h2 class="custom-bar _center text-color-gold">FAQ'S</h2>
          <p class="text-color-light"></p>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-lg-10 m-auto">
          <div class="accordion custom-accordion-style-1" id="accordion">
            <div class="card card-default">
              <div class="card-header">
                <h4 class="card-title m-0">
                  <a class="accordion-toggle text-color-dark" data-toggle="collapse" data-parent="#accordion" href="#collapse1One">
                    Apakah harus mendaftarkan akun untuk menggunakan platform ini?
                  </a>
                </h4>
              </div>
              <div id="collapse1One" class="collapse show">
                <div class="card-body">
                  <p class="text-color-dark">Ya, anda harus membuat akun terlebih dahulu sebelum mulai menggunakan aplikasi ini.</p>
                </div>
              </div>
            </div>
            <div class="card card-default">
              <div class="card-header">
                <h4 class="card-title m-0">
                  <a class="accordion-toggle text-color-dark collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1Two">
                    Apa saja yang bisa diciptakan dengan menggunakan platform ini?
                  </a>
                </h4>
              </div>
              <div id="collapse1Two" class="collapse">
                <div class="card-body">
                  <p class="text-color-dark">Anda bisa membuat berbagai macam budaya seperti seni tari, lipsync lagu daerah, memperagakan cerita rakyat, sampai mencoba filter – filter berbau budaya pada platform ini.</p>
                </div>
              </div>
            </div>
            <div class="card card-default">
              <div class="card-header">
                <h4 class="card-title m-0">
                  <a class="accordion-toggle text-color-dark collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1Three">
                    Apakah saya dapat mengadakan challenge dan mendapatkan reward di platform ini?
                  </a>
                </h4>
              </div>
              <div id="collapse1Three" class="collapse">
                <div class="card-body">
                  <p class="text-color-dark">Kami terbuka dalam kerja sama jika ada pihak yang ingin membuat challenge di platform ini.</p>
                </div>
              </div>
            </div>
            <div class="card card-default">
              <div class="card-header">
                <h4 class="card-title m-0">
                  <a class="accordion-toggle text-color-dark collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1Four">
                    Bagaimana saya dapat mempelajari budaya dalam platform ini?
                  </a>
                </h4>
              </div>
              <div id="collapse1Four" class="collapse">
                <div class="card-body">
                  <p class="text-color-dark">Ketika anda melihat video yang mengandung seni budaya, anda dapat mengklik info seni untuk mempelajari seni apa yang sedang diperagakan pada video tersebut.</p>
                </div>
              </div>
            </div>
            <div class="card card-default">
              <div class="card-header">
                <h4 class="card-title m-0">
                  <a class="accordion-toggle text-color-dark collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1Five">
                    Dimana saya bisa mendownload platform ini?
                  </a>
                </h4>
              </div>
              <div id="collapse1Five" class="collapse">
                <div class="card-body">
                  <p class="text-color-dark">Sementara platform ini masih dalam tahap pengembangan.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="p-relative">
    <section id="download" class="section section-parallax bg-color-primary m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="/porto/img/demos/app-landing/parallax/downloads-parallax.png">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h2 class="custom-bar _left _color-dark text-color-dark">Download</h2>
            <p class="text-color-dark custom-font-secondary text-4 mb-0">Adasia tersedia untuk <strong>Android, Iphone dan Windows Phone.</strong></p>
            <p class="text-2 text-color-dark custom-font-secondary mb-4 pb-3">Support Tim kami agar Adasia dapat direalisasikan.</p>
            <div class="row">
              <div class="col-sm-4 text-center">
                <a href="comingSoon" class="text-decoration-none" target="_blank" title="Download on Google Play">
                  <img src="/porto/img/demos/app-landing/buttons/android-download.png" alt class="custom-shadow-on-hover custom-xs-image-center img-fluid" />
                </a>
              </div>
              <div class="col-sm-4 text-center">
                <a href="/comingSoon" class="text-decoration-none" target="_blank" title="Download on App Store">
                  <img src="/porto/img/demos/app-landing/buttons/apple-download.png" alt class="custom-shadow-on-hover custom-xs-image-center img-fluid" />
                </a>
              </div>
              <div class="col-sm-4 text-center">
                <a href="comingSoon" class="text-decoration-none" target="_blank" title="Download on Windows Phone Store">
                  <img src="/porto/img/demos/app-landing/buttons/windows-download.png" alt class="custom-shadow-on-hover custom-xs-image-center img-fluid" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <img src="/images/prototype/phone-8.png" data-appear-animation="fadeInRight" data-appear-animation-delay="100" data-plugin-options="{'accY': 200}" alt="" class="custom-product-image-pos-2 img-fluid d-none d-lg-block" />
    <img src="/images/prototype/phone-12.png" data-appear-animation="fadeInRight" data-appear-animation-delay="300" data-plugin-options="{'accY': 200}" alt="" class="custom-product-image-pos-2 _litle-small img-fluid d-none d-lg-block" />

  @endsection

  @section('script')

  @endsection
