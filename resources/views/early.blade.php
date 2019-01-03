@extends('earlyLayout')
@section('title')
@section('main')
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/early.css">
</head>
<body>
    <!-- navbar -->
    <!-- imageslider -->
    <!-- kotak1 -->
    <div id="kotak1">
        <div id="isi-kotak-1">
            <div id="kiri-kotak-1">
                <img src = "images/bantusemua.png" />
            </div>
            <div id="kanan-kotak-1">
                <h1>You can. You will. <br>We'll help.</h1>
                <div class="isi-kanan-kotak-1">
                    <p>Each day presents you a good opportunity, to make the world a better place.</p>
                    <form action="/register" method="GET">
                        <button class="btn btn-primary">Start your Journey</button>
                    </form>
                </div>
            </div>
            <div style="clear: both;"></div>
        </div>
    </div>
    <!-- kotak2 -->
    <div id="kotak2">
        <div id="isi-kotak-2">
            <div class="what-do-to">
                <h1 style="font-size: 2.5vw" >What can you do on Bantusemua.com?</h1>
                <p>Memberikan donation ,dan juga membantu orang lain dengan cara menjadi volunteer</p>
            </div>
            <div class="feature-help-out" id="kotak-2-kiri">
                <img src="images/donation.png" height="20%" width="20%">
                <h3 style="font-size: 2vw">Donation</h3>
                <p style="font-size: 1vw">Membantu donasi ke banyak wilayah wilayah indonesia yang terkena bencana dengan menyumbangkan berbagai macam kebutuhan mulai dari uang sembako dan lain lain</p>
            </div>
            <div class="feature-help-out" id="kotak-2-kanan">
                    <img src="images/volunteer.png" height="20%" width="20%">
                    <h3 style="font-size: 2vw">Volunteer</h3>
                    <p style="font-size: 1vw">Membantu banyak wilayah wilayah indonesia yang terkena bencana dengan mengirim volunteer yang ada dari berbagai area</p>
            </div>
            <div style="clear: both; height:1vw;"></div>
            <div id="getting-start">
                <h3 style="font-size: 3vw">Getting Started is very easy</h3>
                <form action="/register" method="GET">
                    <button class="btn btn-primary">Sign up</button>
                </form>
            </div>
        </div>
    </div>
    <!-- kotak3 -->
    <div id="kotak3">
         <div id="isi-kotak-3">
            <div id="kotak-3-atas">
                <div class="isi-kotak-3">
                    <img src="images/te.jpg" width=100%/>
                </div>
                <div class="isi-kotak-3" style="margin-right: 0%">
                    <h2  style="font-size: 2vw; font-weight:bold">You're in Good Company</h2>
                    <p style="font-size: 1.5vw">People all over the world are doing all sorts of amazing things on BantuSemua</p>
                </div>
            </div>
            <div id="kotak-3-atas">
                <div class="isi-kotak-3">                    
                    <img src="images/tandabaca copy.png" width="10%">
                    <p style="display: inline; font-size: 1.5vw">It's been a great privilege and a life-changing experince.
                    </p>
                    <br>
                    <div style="display: inline-flex; padding-left: 10%">
                        <img src="images/donation.png" width="10%" height="10%">
                        <h5 style="font-size: 1.5vw; font-weight:bold">aasa - seseorang</h5>
                    </div>
                </div>
                <div class="isi-kotak-3" style="margin-right: 0%">
                    <img src="images/tandabaca copy.png" width="10%">
                    <p style="display: inline; font-size: 1.5vw;">I love BantuSemua because I can share kindness to all the world</p>
                    <br>
                    <div style="display: inline-flex; padding-left: 10%">
                        <img src="images/donation.png" width="10%" height="10%">
                        <h5 style="font-size: 1.5vw; font-weight:bold">aasa - seseorang</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div id = "footer">
        <div id="isi-semua-footer">
            <div class="isi-footer" style="float: left;">
                <h3 style="font-size: 2vw">Bantusemua.com</h3>
                <p>Bantusemua.com adalah platform untuk mencari volunteer yang akan dikirim ke wilayah wilayah yang terkena bencana dan juga platform untuk menggalang dana kepada wilayah wilayah yang terkena bencana</p>
            </div>
            <div class="isi-footer" style="float: right;text-align: center">
                <h3 style="font-size: 2vw">Take Action</h3>
                <ul type=none>
                    <li>Galang Dana</li>
                    <li>Donasi</li>
                    <li>Volunteer</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
@endsection