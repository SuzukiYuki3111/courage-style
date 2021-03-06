<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- devicon -->
  　    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.10.1/devicon.min.css">
  		 	<!-- purecss -->
  		 <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css" integrity="sha384-LTIDeidl25h2dPxrB2Ekgc9c7sEC3CWGM6HeFmuDNUjX76Ert4Z4IY714dhZHPLd" crossorigin="anonymous">
        <title>Courage Style</title>

    </head>
    <body>

        <nav class="navigation">
            <ul>
              <li class="button">
                <p><a href="#video">Home</a></p>
              </li>
              <li class="button">
                <p><a href="#Profile">Profile</a></p>
              </li>
              <li class="button">
                <p><a href="#Portfolio">Portfolio</a></p>
              </li>
              <li class="button">
                <p><a href="#Contact">Contact</a></p>
              </li>
            </ul>
          </nav>
          <div class="video" id="video">
            <video src="{{ asset('images/IMG_0526.mp4') }}" loop autoplay muted playsinline></video>
          </div>


        <div class="profile" id="Profile">
          <img class="profile-icon" src="{{ asset('images/20210211_210222_109.jpg') }}" alt="Suzuki Yuki" style="width: 250px; height: 250px;">
            <div class="profile-text">
                <h2>Profile</h2>
                <div class="sns-icon">
                    <a href="https://twitter.com/courage3111" target="_blank" rel="noopener"><i class="devicon-twitter-original colored"></i></a>　&nbsp;&nbsp;
                    <a href="https://github.com/SuzukiYuki3111" target="_blank" rel="noopener"><i class="devicon-github-original-wordmark colored"></i></a>
                </div>
                <h4>Suzuki Yuki</h4>
                    <p>
                        生年月日：11月13日<br>
                        出身地：神奈川県茅ヶ崎市<br>
                    </p>
                    <p>
                        高校時代からダンスを始め、腰痛に悩まされていた。<br>
                        怪我をしない体作りを学ぶため柔道整復師の道を目指す。<br>
                        2017年3月に柔道整復師免許を取得し、4月より接骨院に勤務。<br>
                        2020年12月に退社し、エンジニアとしてジョブチェンジを目指す。
                    </p>
                    <div class="modal-open"><a href="#modal">More Details</a></div>
            </div>

          <div class="modal" id="modal">
            <a href="#!" class="overlay"></a>
              <div class="modal-wrapper">
                <div class="modal-contents">
                  <a href="#!" class="modal-close">✕</a>
                  <div class="modal-content">
                    <div class="modal-profile">
                      <img src="{{ asset('images/20210211_210222_74.jpg') }}" alt="icon">
                    </div>
                    <div class="modal-text">
                      <h3>Suzuki Yuki</h3>
                      <p>
                        生年月日：1995年11月13日<br>
                        出身地：神奈川県茅ヶ崎市<br><br>
                        高校時代からブレイクダンスを始め、腰痛に悩まされていた。<br>
                        怪我をしない体作りを学ぶため柔道整復師の道を目指す。<br>
                        2017年3月に柔道整復師免許を取得し、4月より接骨院に勤務。<br>
                        2020年11月より「SAMURAI ENGINEER」を受講しエンジニアの道を志す。<br>
                        2020年12月に退社し、本格的にエンジニアとしてジョブチェンジを目指す。<br><br>
                      </p>
                    </div>
                      <hr>
                    <h2>Dance Career</h2>
                      <p>
                        2014 湘南ブレイキンバトル 縦系コンテスト優勝<br>
                        2017 MOP (Master Of Potensial) 縦系コンテスト Best4<br>
                        2018 MOP (Master Of Potensial) 縦系コンテスト準優勝<br>
                        2018 SummerBomb CrewBattle Best8<br>
                      </p>
                      <hr>
                    <h2>Skills</h2>
                    <p>※　現在勉強中です。</p>
                    <div class="icons">
                      <i class="devicon-html5-plain-wordmark colored"></i>
                      <i class="devicon-css3-plain-wordmark colored"></i>
                      <i class="devicon-javascript-plain colored"></i> <br>
                      <i class="devicon-php-plain colored"></i>
                      <i class="devicon-laravel-plain-wordmark colored"></i>
                    </div>
                  </div>
                </div>
             </div>
          </div>
        </div>

        <div class="portfolio" id="Portfolio">
          <div>
            <h2>Portfolio</h2><br>
            <img src="{{ asset('images/map icon.jpeg') }}" alt="map-icon"><br>
          </div>
          <div class="portfolio-text">
            <br><br><br><br>
            <h4>Dancing Map</h4>
            <p>
              まだ製作中です。<br>
            </p>
          </div>
        </div>


        <div class="mail-form" id="Contact">
          <br>
          <h2>Contact</h2>
          <form action="/contact" method="post">
            @csrf
            <input name="name" type="text" class="feedback-input" placeholder="Name" />
            <br>
            <input name="email" type="text" class="feedback-input" placeholder="Email" />
            <br>
            <textarea name="contents" class="feedback-input" placeholder="Message"></textarea>
            <br>
            <input type="submit" value="send"/>
            {{-- エラー時の処理 --}}
            @foreach ($errors->all() as $message)
                <div class="error-msg">
                    {{ $message }}
                </div>
            @endforeach

            {{-- 成功時のメッセージ --}}
            @if (session('contact_result'))
                <div class="contact-result" onclick="this.remove()">
                    {{ session('contact_result') }}
                </div>
            @endif
          </form>
          <br>
        </div>
    </body>
</html>
