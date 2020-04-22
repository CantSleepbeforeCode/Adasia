@extends('layouts.masterLandingPage')

@section('title', 'Adasia - Home Page')

@section('style')
  <link rel="stylesheet" href="assets/css/style-home-page.css">
@endsection

@section('content')
  <section id="overview" class="section custom-bg-color-1 custom-background-style-1 m-0">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-8">
          <div class="custom-top-title-box">
            <span class="text-color-dark font-weight-semibold">CHECK OUT THE ONLY</span>
            <h1 class="text-color-dark">Mobile App</h1>
            <span class="text-color-dark font-weight-semibold mb-5">You will ever need!</span>
            <a href="#downloads" style="color: #e6c300 !important" class="btn custom-btn-style-1 text-color-dark mb-5" data-hash>GET STARTED</a>
            <a href="#key-features" class="btn custom-btn-style-1 _borders text-color-dark ml-2 mb-5" data-hash data-hash-offset="62">KEY FEATURES</a>
          </div>
        </div>
        <div class="col-8 col-md-4 col-lg-4 mx-auto">
          <div class="owl-carousel custom-arrows-style-1 custom-left-pos-1 custom-background-1 m-0" data-plugin-options="{'items': 1, 'loop': true, 'dots': false, 'nav': true, 'autoplay': true, 'autoplayTimeout': 3000}">
            <div>
              <img src="porto/img/demos/app-landing/product/overview-carousel-1.jpg" alt class="img-fluid" />
            </div>
            <div>
              <img src="porto/img/demos/app-landing/product/overview-carousel-2.jpg" alt class="img-fluid" />
            </div>
            <div>
              <img src="porto/img/demos/app-landing/product/overview-carousel-3.jpg" alt class="img-fluid" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="how-it-work" class="section bg-color-dark m-0">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-5">

          <img src="porto/img/demos/app-landing/product/how-works-product-image-2.png" data-appear-animation="fadeInUp" data-appear-animation-delay="300" data-plugin-options="{'accY': 200}" alt class="appear-animation custom-product-image-pos-1 _relative img-fluid" />

          <img src="porto/img/demos/app-landing/product/how-works-product-image-1.png" data-appear-animation="fadeInUp" data-appear-animation-delay="100" data-plugin-options="{'accY': 10}" alt class="appear-animation custom-product-image-pos-1 _absolute img-fluid" />
        </div>
        <div class="col-md-10 col-lg-7 text-center text-lg-left">
          <h2 class="custom-bar _left text-color-gold">How it Works</h2>
          <p class="mb-5 pb-5 text-color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam illo error adipisci, placeat aliquam asperiores aut ut, quia labore fuga hic quas molestias molestiae eveniet sed. Aliquam, nihil, culpa, placeat numquam aperiam quod, ipsa animi possimus officiis tenetur soluta.</p>
          <div class="row justify-content-center justify-content-lg-start">
            <div class="custom-wrap-icons">
              <div class="custom-box-icon">
                <svg version="1.1" id="sign-up" x="0px" y="0px" width="65px" height="65px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                  <path class="icon appear-animation" data-appear-animation="icons-anim" data-appear-animation-duration="1000ms" data-appear-animation-delay="500ms" fill="#e6c300" stroke="#F1645B" d="M25,0C15.263,0,6.343,5.724,2.274,14.583c-0.23,0.502-0.01,1.096,0.492,1.326
                  c0.5,0.228,1.095,0.01,1.326-0.492C7.835,7.267,16.042,1.9,25,1.9c12.683,0,23.1,10.417,23.1,23.1
                  c0,5.288-1.815,10.179-4.847,14.088c-1.48-1.421-4.474-2.818-10.732-5.03C31,33.52,31,33.52,31,32.141v-1.81
                  c0.616-0.971,0.988-2.755,1.172-3.872c0.12-0.049,0.245-0.111,0.375-0.19c1.001-0.608,1.855-1.901,2.177-3.292
                  c0.396-1.697-0.049-3.437-0.973-4.243c0.019-0.352,0.049-0.843,0.078-1.296C33.905,16.238,34,14.746,34,13.834
                  c0-3.865-1.818-4.967-3.544-5.142C29.505,7.497,28.016,7,25.495,7c-1.681,0-2.909,0.49-3.993,0.924
                  c-0.998,0.398-1.859,0.742-3.025,0.742c-0.596,0-1.668,0.259-2.158,1.988c-0.219,0.77-0.319,1.769-0.318,3.144
                  c0.001,1.488,0.126,3.395,0.201,4.534c0.01,0.155,0.02,0.296,0.027,0.418c-0.91,0.813-1.345,2.541-0.953,4.225
                  c0.322,1.393,1.177,2.686,2.178,3.294c0.13,0.079,0.255,0.142,0.375,0.19c0.184,1.117,0.556,2.901,1.172,3.872v1.81
                  c0,1.379,0,1.379-1.521,1.917c-6.191,2.188-9.189,3.579-10.686,4.984c-1.053-1.367-1.966-2.857-2.701-4.459
                  c-0.231-0.502-0.825-0.721-1.326-0.492c-0.502,0.23-0.723,0.824-0.492,1.326C6.343,44.276,15.263,50,25,50
                  c13.785,0,25-11.215,25-25S38.785,0,25,0z M21,32.141V30c0-0.256-0.111-0.515-0.286-0.7c-0.313-0.331-0.785-2.124-1.013-3.837
                  c-0.037-0.284-0.194-0.538-0.432-0.698c-0.206-0.139-0.458-0.194-0.699-0.161c-0.313-0.122-1.074-0.903-1.347-2.08
                  c-0.284-1.222,0.14-2.146,0.296-2.268c0.797-0.222,0.762-0.759,0.677-2.055c-0.072-1.115-0.195-2.981-0.196-4.405
                  c-0.003-2.753,0.478-3.126,0.477-3.13c1.551,0,2.678-0.45,3.768-0.885C23.249,9.379,24.198,9,25.495,9
                  c2.625,0,3.219,0.612,3.569,1.187c0.182,0.298,0.505,0.479,0.854,0.479c1.008,0,2.082,0.245,2.082,3.168
                  c0,0.849-0.093,2.306-0.167,3.477c-0.153,2.422-0.174,2.733,0.595,2.923c0.209,0.145,0.633,1.068,0.348,2.292
                  c-0.271,1.175-1.033,1.956-1.346,2.078c-0.244-0.034-0.492,0.022-0.699,0.161c-0.237,0.16-0.395,0.415-0.432,0.698
                  c-0.227,1.712-0.699,3.505-1.012,3.836C29.103,29.486,29,29.738,29,30v2.141c0,1.759,0.21,2.665,2.063,3.486
                  C29.413,37.143,27.273,38,25,38s-4.413-0.857-6.063-2.373C20.789,34.806,21,33.899,21,32.141z M25,48.1
                  c-6.512,0-12.618-2.846-16.909-7.525c1.101-1.096,3.71-2.339,8.795-4.181C18.972,38.687,21.883,40,25,40s6.028-1.313,8.114-3.606
                  c5.161,1.869,7.772,3.122,8.844,4.229C37.727,45.209,31.679,48.1,25,48.1z"/>
                  <path class="plus appear-animation" data-appear-animation="icons-anim" data-appear-animation-duration="1000ms" data-appear-animation-delay="800" fill="#e6c300" d="M11,24H7v-4c0-0.553-0.447-1-1-1s-1,0.447-1,1v4H1c-0.553,0-1,0.447-1,1c0,0.552,0.447,1,1,1h4v4
                  c0,0.552,0.447,1,1,1s1-0.448,1-1v-4h4c0.553,0,1-0.448,1-1C12,24.447,11.553,24,11,24z"/>
                </svg>
                <span class="appear-animation text-color-light" data-appear-animation="fadeInDown" data-appear-animation-delay="1000">Sign up</span>
              </div>
              <div class="custom-box-icon">
                <div class="wrap-dashed-lines">
                  <svg version="1.1" id="connect-people" x="0px" y="0px" width="65px" height="65px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                    <path class="icon appear-animation" data-appear-animation="icons-anim" data-appear-animation-duration="2500ms" data-appear-animation-delay="700" fill="#e6c300" d="M25,0C11.215,0,0,11.215,0,25s11.215,25,25,25s25-11.215,25-25S38.785,0,25,0z M25,1.9
                    c12.737,0,23.1,10.363,23.1,23.1c0,2.692-0.467,5.276-1.317,7.682c-1.166-0.639-3.022-1.385-6.269-2.545
                    c-0.639-0.229-0.767-0.346-0.772-0.346c-0.026-0.068-0.033-0.286-0.035-0.47c2.533-0.387,4.554-2.089,4.649-2.17
                    c0.293-0.251,0.416-0.647,0.316-1.021c-0.093-0.343-0.359-0.61-0.699-0.704c-0.397-0.193-1.385-1.569-1.385-5.731
                    c0-4.315-2.997-7.695-6.823-7.695c-0.898,0-1.776,0.216-2.596,0.585c-0.225-2.953-1.739-3.861-3.199-4.025
                    C29.094,7.459,27.732,7,25.445,7c-1.535,0-2.651,0.455-3.637,0.857c-0.887,0.361-1.653,0.674-2.68,0.674
                    c-0.565,0-1.583,0.246-2.04,1.892c-0.163,0.586-0.25,1.327-0.277,2.272c-0.045-0.019-0.086-0.032-0.133-0.051
                    C15.933,12.342,15.087,12,13.907,12c-1.82,0-3.114,0.386-3.856,1.148c-2.109,0.292-2.109,2.438-2.109,3.758
                    c0,0.621,0.063,1.626,0.113,2.435c0.018,0.269,0.033,0.516,0.045,0.714c-0.623,0.654-0.904,1.85-0.629,3.043
                    c0.232,1.02,0.86,1.969,1.6,2.419c0.073,0.044,0.145,0.083,0.214,0.115c0.234,0.749,0.601,1.78,1.01,2.425v1.106
                    c0,0.188,0,0.538-0.021,0.606c-0.02,0.021-0.146,0.138-0.786,0.367c-3.208,1.146-5.09,1.904-6.268,2.547
                    C2.368,30.278,1.9,27.693,1.9,25C1.9,12.263,12.263,1.9,25,1.9z M41.716,36.734c-1.255-1.385-3.913-2.695-9.775-4.816
                    c1.576-0.618,1.883-1.289,1.883-2.755v-0.764c0-0.552-0.447-1-1-1c-0.632,0-1.327-0.151-2.044-0.433
                    c0.269-0.676,0.501-1.38,0.662-1.909c0.124-0.047,0.253-0.11,0.389-0.192c0.93-0.565,1.723-1.778,2.02-3.089
                    c0.356-1.562-0.041-3.164-0.872-3.939c0.017-0.32,0.044-0.76,0.069-1.167c0.034-0.557,0.073-1.183,0.104-1.774
                    C33.923,14.326,34.833,14,35.765,14c2.338,0,4.823,1.996,4.823,5.695c0,3.71,0.729,5.631,1.473,6.625
                    c-0.826,0.497-2.067,1.079-3.354,1.079c-0.553,0-1,0.448-1,1v0.764c0,1.544,0.322,2.208,2.134,2.856
                    c2.851,1.019,5.02,1.856,6.183,2.536c-0.773,1.694-1.744,3.278-2.885,4.724C42.769,38.244,42.301,37.379,41.716,36.734z
                    M31.823,29.322c-0.001,0.183-0.005,0.396-0.021,0.447c-0.02,0.021-0.146,0.138-0.786,0.366c-0.351,0.126-0.687,0.247-1.01,0.364
                    C30.001,30.404,30,30.301,30,30.184v-1.375C30.618,29.056,31.228,29.232,31.823,29.322z M6.862,39.279
                    c-1.141-1.445-2.112-3.029-2.885-4.725c1.164-0.68,3.333-1.518,6.183-2.535c1.812-0.648,2.134-1.313,2.134-2.856V27.73
                    c0-0.24-0.12-0.51-0.277-0.691c-0.207-0.24-0.666-1.424-0.981-2.533c-0.126-0.442-0.564-0.719-0.97-0.727
                    c-0.174-0.131-0.511-0.537-0.646-1.128c-0.132-0.573,0.004-1.013,0.096-1.171c0.662-0.242,0.627-0.801,0.535-2.265
                    c-0.049-0.78-0.109-1.751-0.109-2.309c0-1.791,0.131-1.791,0.617-1.791c0.351,0,0.675-0.183,0.855-0.483
                    C11.557,14.397,12.241,14,13.907,14c0.791,0,1.362,0.23,2.022,0.498c0.288,0.116,0.588,0.229,0.904,0.332
                    c0.039,0.986,0.103,1.976,0.146,2.663c0.009,0.133,0.017,0.255,0.023,0.363c-0.818,0.782-1.208,2.372-0.854,3.92
                    c0.225,0.99,0.731,1.922,1.365,2.564c-0.027,0.055-0.062,0.106-0.079,0.167c-0.315,1.109-0.774,2.292-0.977,2.528
                    c-0.181,0.187-0.282,0.437-0.282,0.696v1.433c0,1.466,0.307,2.137,1.883,2.756c-5.862,2.12-8.521,3.431-9.775,4.814
                    C7.7,37.378,7.231,38.244,6.862,39.279z M18.984,30.137c-0.639-0.229-0.767-0.346-0.772-0.346c-0.035-0.09-0.035-0.439-0.035-0.628
                    v-1.106c0.298-0.47,0.571-1.144,0.789-1.764c0.292,0.815,0.653,1.689,1.034,2.26v1.631c0,0.117-0.001,0.221-0.006,0.316
                    C19.671,30.383,19.335,30.262,18.984,30.137z M25,48.1c-6.502,0-12.38-2.703-16.582-7.041c0.312-1.307,0.77-2.342,1.349-2.982
                    c0.981-1.082,3.704-2.376,9.104-4.324C20.761,33.069,22,32.453,22,30.184v-1.967c0-0.259-0.1-0.508-0.279-0.693
                    c-0.336-0.35-1.005-2.158-1.419-3.627c-0.134-0.476-0.575-0.771-1.068-0.723c-0.261-0.134-0.897-0.797-1.134-1.841
                    c-0.234-1.028,0.076-1.821,0.261-2.011c0.727-0.235,0.69-0.787,0.616-1.957c-0.065-1.023-0.176-2.735-0.177-4.039
                    c-0.002-2.381,0.376-2.79,0.329-2.795c1.419,0,2.49-0.437,3.435-0.822C23.458,9.344,24.302,9,25.445,9
                    c2.499,0,2.889,0.653,3.122,1.043c0.18,0.303,0.506,0.488,0.858,0.488c0.664,0,1.774,0,1.774,2.83c0,0.776-0.083,2.112-0.149,3.186
                    c-0.135,2.164-0.159,2.554,0.591,2.776c0.185,0.192,0.492,0.983,0.258,2.011c-0.235,1.042-0.872,1.705-1.133,1.839
                    c-0.479-0.047-0.935,0.248-1.068,0.724c-0.405,1.438-1.088,3.281-1.419,3.627C28.1,27.709,28,27.958,28,28.217v1.967
                    c0,2.27,1.239,2.886,3.129,3.568c5.4,1.948,8.123,3.242,9.104,4.324c0.581,0.642,1.038,1.678,1.349,2.982
                    C37.38,45.396,31.502,48.1,25,48.1z"/>
                  </svg>
                  <span class="appear-animation text-color-light" data-appear-animation="fadeInDown" data-appear-animation-delay="3700">Connect with people</span>
                  <svg version="1.1" id="dashed-line-1" class="dashed-line _left" x="0px" y="0px" width="98.5px" height="26.5px" viewBox="0 0 98.5 26.5" enable-background="new 0 0 98.5 26.5" xml:space="preserve">
                    <path class="line" data-appear-animation="line-anim" data-appear-animation-duration="1000ms" data-appear-animation-delay="2000" fill="none" stroke="#010101" stroke-miterlimit="10" stroke-dasharray="3,3" d="M4,16.93c0,0,40.589-36.872,83.192,1.084"/>
                    <path class="line-mask" fill="none" stroke="#FFF" stroke-miterlimit="10" stroke-dasharray="3,3" d="M4,16.93c0,0,40.589-36.872,83.192,1.084"/>
                    <circle class="circle appear-animation" data-appear-animation="line-circle-anim" data-appear-animation-duration="700ms" data-appear-animation-delay="2700" fill="none" stroke="#010101" stroke-miterlimit="10" stroke-dasharray="3,3" cx="91.01" cy="21.014" r="4.627"/>
                    <circle class="circle-mask" fill="none" stroke="#FFF" stroke-miterlimit="10" stroke-dasharray="3,3" cx="91.01" cy="21.014" r="4.627"/>
                  </svg>
                  <svg version="1.1" id="dashed-line-2" class="dashed-line _right" x="0px" y="0px" width="98.5px" height="26.5px" viewBox="0 0 98.5 26.5" enable-background="new 0 0 98.5 26.5" xml:space="preserve">
                    <path class="line" data-appear-animation="line-anim" data-appear-animation-duration="1s" data-appear-animation-delay="4000" fill="none" stroke="#010101" stroke-miterlimit="10" stroke-dasharray="3,3" d="M4,9.57c0,0,40.589,36.871,83.192-1.084"/>
                    <path class="line-mask" fill="none" stroke="#FFF" stroke-miterlimit="10" stroke-dasharray="3,3" d="M4,9.57c0,0,40.589,36.871,83.192-1.084"/>
                    <circle class="circle appear-animation" data-appear-animation="line-circle-anim" data-appear-animation-duration="1000ms" data-appear-animation-delay="4700" fill="none" stroke="#010101" stroke-miterlimit="10" stroke-dasharray="3,3" cx="91.01" cy="5.486" r="4.627"/>
                    <circle class="circle-mask" fill="none" stroke="#FFF" stroke-miterlimit="10" stroke-dasharray="3,3" cx="91.01" cy="5.486" r="4.627"/>
                  </svg>
                </div>
              </div>
              <div class="custom-box-icon">
                <svg version="1.1" id="share" x="0px" y="0px" width="65px" height="65px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                  <path  class="icon appear-animation" data-appear-animation="icons-anim" data-appear-animation-duration="2000ms" data-appear-animation-delay="3500" fill="#e6c300" d="M32,27c-1.923,0-3.577,1.104-4.413,2.699l-4.625-1.321C22.972,28.251,23,28.129,23,28
                  c0-0.854-0.235-1.647-0.615-2.352l4.512-3.76C27.752,22.573,28.822,23,30,23c2.757,0,5-2.243,5-5s-2.243-5-5-5s-5,2.243-5,5
                  c0,0.855,0.235,1.648,0.615,2.353l-4.511,3.759C20.249,23.427,19.179,23,18,23c-2.757,0-5,2.243-5,5s2.243,5,5,5
                  c1.923,0,3.576-1.104,4.412-2.699l4.626,1.322C27.028,31.749,27,31.871,27,32c0,2.757,2.243,5,5,5s5-2.243,5-5S34.757,27,32,27z
                  M30,15c1.654,0,3,1.346,3,3s-1.346,3-3,3s-3-1.346-3-3S28.346,15,30,15z M18,31c-1.654,0-3-1.346-3-3s1.346-3,3-3s3,1.346,3,3
                  S19.654,31,18,31z M32,35c-1.654,0-3-1.346-3-3s1.346-3,3-3s3,1.346,3,3S33.654,35,32,35z"/>
                  <circle  class="icons-circle appear-animation" data-appear-animation="icons-circle-anim" data-appear-animation-duration="800ms" data-appear-animation-delay="5300" fill="none" stroke="#F1645B" stroke-width="2" stroke-miterlimit="50" cx="25.027" cy="25.092" r="24.062"/>
                </svg>
                <span class="appear-animation text-color-light" data-appear-animation="fadeInDown" data-appear-animation-delay="5800">Share result</span>
              </div>
            </div>
          </div>
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
                <span class="counter-value" data-to="25000" data-append="+">0</span>
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
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry the Bird</td>
                      <td>Thornton</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="key-features" class="section bg-color-dark m-0">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col-lg-8 m-auto">
          <h2 class="custom-bar _center text-color-gold">Key Features</h2>
          <p class="text-color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque ad dolores temporibus asperiores quod quo maxime totam. Aperiam sunt et doloremque rerum dolores in qui molestias quis quibusdam porro?</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-6 m-auto appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100" data-appear-animation-duration="1s">
          <div class="feature-box feature-box-style-3 reverse custom-feature-box-style-1">
            <div class="feature-box-icon">
              <i class="fas fa-tv custom-icon-fix-pos"></i>
            </div>
            <div class="feature-box-info text-2">
              <h4 class="text-color-gold pt-1">Awesome Interface</h4>
              <p class="mb-4 text-color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias.</p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-6 m-auto appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" data-appear-animation-duration="1s">
          <div class="feature-box feature-box-style-3 custom-feature-box-style-1">
            <div class="feature-box-icon">
              <i class="fas fa-sync"></i>
            </div>
            <div class="feature-box-info text-2">
              <h4 class="text-color-gold pt-1">Free Updates</h4>
              <p class="mb-4 text-color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-6 m-auto appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100" data-appear-animation-duration="1s">
          <div class="feature-box feature-box-style-3 reverse custom-feature-box-style-1">
            <div class="feature-box-icon">
              <i class="fas fa-user-plus custom-icon-fix-pos"></i>
            </div>
            <div class="feature-box-info text-2">
              <h4 class="text-color-gold pt-1">User Friendly</h4>
              <p class="mb-4 text-color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias.</p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-6 m-auto appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" data-appear-animation-duration="1s">
          <div class="feature-box feature-box-style-3 custom-feature-box-style-1">
            <div class="feature-box-icon">
              <i class="far fa-life-ring"></i>
            </div>
            <div class="feature-box-info text-2">
              <h4 class="text-color-gold pt-1">Instant Support</h4>
              <p class="mb-4 text-color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-6 m-auto appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100" data-appear-animation-duration="1s">
          <div class="feature-box feature-box-style-3 reverse custom-feature-box-style-1">
            <div class="feature-box-icon">
              <i class="fas fa-users"></i>
            </div>
            <div class="feature-box-info text-2">
              <h4 class="text-color-gold pt-1">Connect with People</h4>
              <p class="mb-4 text-color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias.</p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-6 m-auto appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" data-appear-animation-duration="1s">
          <div class="feature-box feature-box-style-3 custom-feature-box-style-1">
            <div class="feature-box-icon">
              <i class="fas fa-paint-brush"></i>
            </div>
            <div class="feature-box-info text-2">
              <h4 class="text-color-gold pt-1">Skin Colors</h4>
              <p class="mb-4 text-color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-6 m-auto appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100" data-appear-animation-duration="1s">
          <div class="feature-box feature-box-style-3 reverse custom-feature-box-style-1">
            <div class="feature-box-icon">
              <i class="far fa-bell"></i>
            </div>
            <div class="feature-box-info text-2">
              <h4 class="text-color-gold pt-1">Notification</h4>
              <p class="mb-4 text-color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias.</p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-6 m-auto appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" data-appear-animation-duration="1s">
          <div class="feature-box feature-box-style-3 custom-feature-box-style-1">
            <div class="feature-box-icon">
              <i class="fas fa-bullseye"></i>
            </div>
            <div class="feature-box-info text-2">
              <h4 class="text-color-gold pt-1">Interactive</h4>
              <p class="mb-4 text-color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae.</p>
            </div>
          </div>
        </div>
      </div>
      <hr class="solid custom-tall">
      <div class="row mb-5 pb-5 justify-content-center">
        <div class="col-lg-5 text-center">
          <img src="porto/img/demos/app-landing/product/features-product-image-1.png" data-appear-animation="fadeInLeft" data-appear-animation-delay="500" data-plugin-options="{'accY': 200}" alt class="img-fluid" />
        </div>
        <div class="col-md-10 col-lg-7 text-center text-lg-left">
          <h2 class="custom-bar _left text-color-gold">Very Active Community</h2>
          <p class="mb-5 text-color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia earum unde reprehenderit blanditiis eveniet pariatur quaerat veniam, optio repudiandae quis dignissimos nesciunt doloremque, eligendi aliquam dolores. Voluptatum tempore nemo unde incidunt, cum quod magnam molestias!</p>
          <a href="#" class="btn btn-outline btn-gold text-color-gold">GO TO COMMUNITY</a>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-7 order-2 order-lg-1 text-center text-lg-right">
          <h2 class="custom-bar _right text-color-gold">Quick Installation</h2>
          <p class="mb-5 text-color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum ad, fugiat consequuntur repudiandae soluta assumenda reprehenderit, rem totam incidunt impedit tempora veniam sit minus unde eaque illum, ratione eius dicta animi! Tempora quod itaque obcaecati.</p>
          <a href="#downloads" class="btn btn-outline btn-gold text-color-gold mb-3" data-hash data-hash-offset="62">DOWNLOAD NOW</a>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center">
          <img src="porto/img/demos/app-landing/product/features-product-image-2.png" data-appear-animation="fadeInRight" data-appear-animation-delay="500" data-plugin-options="{'accY': 200}" alt class="img-fluid" />
        </div>
      </div>
    </div>
  </section>

  <section id="reviews" class="section bg-color-tertiary m-0">
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

  <section id="team" class="section m-0">
    <div class="container py-4">
      <div class="row">
        <div class="col pb-4 text-center">
          <h2 class="text-color-dark font-weight-normal text-5 mb-0 pt-2">Para Cerdikiawan <strong class="font-weight-extra-bold">Adasia</strong></h2>
          <p>Rockstars lorem ipsum dolor sit amet, consectetur adipiscing elit ac laoreet libero.</p>
        </div>
      </div>
      <div class="row pb-4 mb-2">
        <div class="col-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="200" data-appear-animation-duration="1s">
          <span class="team-card thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
            <span class="thumb-info-wrapper border-radius-0">
              <a>
                <img src="porto/img/team/team-1.jpg" class="img-fluid border-radius-0" alt="">
                <span class="thumb-info-title">
                  <span class="thumb-info-inner">Yusela Deisca Ramadina</span>
                  <span class="thumb-info-type text-color-dark">Hustler</span>
                </span>
              </a>
            </span>
            <span class="thumb-info-caption">
              <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
            </span>
          </span>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="400" data-appear-animation-duration="1s">
          <span class="team-card thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
            <span class="thumb-info-wrapper border-radius-0">
              <a>
                <img src="porto/img/team/team-2.jpg" class="img-fluid border-radius-0" alt="">
                <span class="thumb-info-title">
                  <span class="thumb-info-inner">Samsul Bahri</span>
                  <span class="thumb-info-type text-color-dark">Hacker</span>
                </span>
              </a>
            </span>
            <span class="thumb-info-caption">
              <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
            </span>
          </span>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="600" data-appear-animation-duration="1s">
          <span class=" team-card thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
            <span class="thumb-info-wrapper border-radius-0">
              <a>
                <img src="porto/img/team/team-3.jpg" class="img-fluid border-radius-0" alt="">
                <span class="thumb-info-title">
                  <span class="thumb-info-inner">Dinda Saputri</span>
                  <span class="thumb-info-type text-color-dark">Hustler</span>
                </span>
              </a>
            </span>
            <span class="thumb-info-caption">
              <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
            </span>
          </span>
        </div>
      </div>
      <div class="row pb-4 mb-2">
        <div class="col-lg-6 appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="100" data-appear-animation-duration="1s">
          <span class="team-card-4 thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
            <span class="thumb-info-wrapper border-radius-0">
              <a>
                <img src="porto/img/team/team-4.jpg" class="img-fluid border-radius-0" alt="">
                <span class="thumb-info-title">
                  <span class="thumb-info-inner">Reyza Zhakarriya Sukaesich</span>
                  <span class="thumb-info-type text-color-dark">Hipster</span>
                </span>
              </a>
            </span>
            <span class="thumb-info-caption">
              <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
            </span>
          </span>
        </div>
        <div class="col-lg-6 appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="400" data-appear-animation-duration="1s">
          <span class="team-card-5 thumb-info thumb-info-hide-wrapper-bg bg-transparent border-radius-0">
            <span class="thumb-info-wrapper border-radius-0">
              <a>
                <img src="porto/img/team/team-4.jpg" class="img-fluid border-radius-0" alt="">
                <span class="thumb-info-title">
                  <span class="thumb-info-inner">Muhammad Iqbal Al-Haswan</span>
                  <span class="thumb-info-type text-color-dark">Hacker</span>
                </span>
              </a>
            </span>
            <span class="thumb-info-caption">
              <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span>
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
          <p class="text-color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur repudiandae et saepe, veniam aliquam molestias quod, quasi minus sequi, doloremque dolorum eaque similique eligendi omnis ea!</p>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-lg-10 m-auto">
          <div class="accordion custom-accordion-style-1" id="accordion">
            <div class="card card-default">
              <div class="card-header">
                <h4 class="card-title m-0">
                  <a class="accordion-toggle text-color-dark" data-toggle="collapse" data-parent="#accordion" href="#collapse1One">
                    Lorem ipsum dolor sit amet, consectetur adipisicing ?
                  </a>
                </h4>
              </div>
              <div id="collapse1One" class="collapse show">
                <div class="card-body">
                  <p class="text-color-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque eos laborum non molestiae dignissimos accusamus architecto amet beatae eveniet omnis. Animi eos dolore totam dolorum magni impedit optio alias qui nobis dicta deserunt ipsum porro veritatis incidunt ullam ducimus, velit non voluptate a. Rem aut vel necessitatibus officiis, sit quo, at fugit labore minima obcaecati reprehenderit ipsum.</p>
                </div>
              </div>
            </div>
            <div class="card card-default">
              <div class="card-header">
                <h4 class="card-title m-0">
                  <a class="accordion-toggle text-color-dark collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1Two">
                    Lorem ipsum dolor sit amet, consectetur adipisicing ?
                  </a>
                </h4>
              </div>
              <div id="collapse1Two" class="collapse">
                <div class="card-body">
                  <p class="text-color-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque eos laborum non molestiae dignissimos accusamus architecto amet beatae eveniet omnis. Animi eos dolore totam dolorum magni impedit optio alias qui nobis dicta deserunt ipsum porro veritatis incidunt ullam ducimus, velit non voluptate a. Rem aut vel necessitatibus officiis, sit quo, at fugit labore minima obcaecati reprehenderit ipsum.</p>
                </div>
              </div>
            </div>
            <div class="card card-default">
              <div class="card-header">
                <h4 class="card-title m-0">
                  <a class="accordion-toggle text-color-dark collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1Three">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit ?
                  </a>
                </h4>
              </div>
              <div id="collapse1Three" class="collapse">
                <div class="card-body">
                  <p class="text-color-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque eos laborum non molestiae dignissimos accusamus architecto amet beatae eveniet omnis. Animi eos dolore totam dolorum magni impedit optio alias qui nobis dicta deserunt ipsum porro veritatis incidunt ullam ducimus, velit non voluptate a. Rem aut vel necessitatibus officiis, sit quo, at fugit labore minima obcaecati reprehenderit ipsum.</p>
                </div>
              </div>
            </div>
            <div class="card card-default">
              <div class="card-header">
                <h4 class="card-title m-0">
                  <a class="accordion-toggle text-color-dark collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1Four">
                    Lorem ipsum dolor sit amet, consectetur ?
                  </a>
                </h4>
              </div>
              <div id="collapse1Four" class="collapse">
                <div class="card-body">
                  <p class="text-color-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque eos laborum non molestiae dignissimos accusamus architecto amet beatae eveniet omnis. Animi eos dolore totam dolorum magni impedit optio alias qui nobis dicta deserunt ipsum porro veritatis incidunt ullam ducimus, velit non voluptate a. Rem aut vel necessitatibus officiis, sit quo, at fugit labore minima obcaecati reprehenderit ipsum.</p>
                </div>
              </div>
            </div>
            <div class="card card-default">
              <div class="card-header">
                <h4 class="card-title m-0">
                  <a class="accordion-toggle text-color-dark collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1Five">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum ?
                  </a>
                </h4>
              </div>
              <div id="collapse1Five" class="collapse">
                <div class="card-body">
                  <p class="text-color-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque eos laborum non molestiae dignissimos accusamus architecto amet beatae eveniet omnis. Animi eos dolore totam dolorum magni impedit optio alias qui nobis dicta deserunt ipsum porro veritatis incidunt ullam ducimus, velit non voluptate a. Rem aut vel necessitatibus officiis, sit quo, at fugit labore minima obcaecati reprehenderit ipsum.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="p-relative">
    <section id="downloads" class="section section-parallax bg-color-primary m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="porto/img/demos/app-landing/parallax/downloads-parallax.png">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h2 class="custom-bar _left _color-dark text-color-dark">Downloads</h2>
            <p class="text-color-dark custom-font-secondary text-4 mb-0">App available for <strong>Android, Iphone and Windows Phone.</strong></p>
            <p class="text-2 text-color-dark custom-font-secondary mb-4 pb-3">Also available on the Amazone App Store and Gallery App Store.</p>
            <div class="row">
              <div class="col-sm-4 text-center">
                <a href="#" class="text-decoration-none" target="_blank" title="Download on Google Play">
                  <img src="porto/img/demos/app-landing/buttons/android-download.png" alt class="custom-shadow-on-hover custom-xs-image-center img-fluid" />
                </a>
              </div>
              <div class="col-sm-4 text-center">
                <a href="#" class="text-decoration-none" target="_blank" title="Download on App Store">
                  <img src="porto/img/demos/app-landing/buttons/apple-download.png" alt class="custom-shadow-on-hover custom-xs-image-center img-fluid" />
                </a>
              </div>
              <div class="col-sm-4 text-center">
                <a href="#" class="text-decoration-none" target="_blank" title="Download on Windows Phone Store">
                  <img src="porto/img/demos/app-landing/buttons/windows-download.png" alt class="custom-shadow-on-hover custom-xs-image-center img-fluid" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <img src="porto/img/demos/app-landing/product/downloads-product-image-1.png" data-appear-animation="fadeInRight" data-appear-animation-delay="100" data-plugin-options="{'accY': 200}" alt="" class="custom-product-image-pos-2 img-fluid d-none d-lg-block" />
    <img src="porto/img/demos/app-landing/product/downloads-product-image-2.png" data-appear-animation="fadeInRight" data-appear-animation-delay="300" data-plugin-options="{'accY': 200}" alt="" class="custom-product-image-pos-2 _litle-small img-fluid d-none d-lg-block" />

  @endsection

  @section('script')

  @endsection
