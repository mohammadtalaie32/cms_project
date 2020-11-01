<!DOCTYPE html>
<html>
<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="font.css"/>

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href={{ asset('authen/images/icons/favicon.ico') }}/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ asset('authen/vendor/bootstrap/css/bootstrap.min.css') }}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{asset('authen/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ asset('authen/vendor/animate/animate.css') }}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ asset('authen/vendor/css-hamburgers/hamburgers.min.css') }}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ asset('authen/vendor/select2/select2.min.css') }}>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href={{ asset('authen/css/util.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('authen/css/main.css') }}>
    <!--===============================================================================================-->


</head>


<body style="font-family: '20S-Yekan' !important;">

<div class="limiter">
    <div class="container-login100">
        <form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
            @csrf
            <br>
            <span style="font-family: '20S-Yekan' !important;font-weight: bolder;color:white" class="login100-form-title">
                    ثبت نام
            </span>

            <div class="wrap-input100 validate-input">
                <input id="name" type="text" style="font-family: '20S-Yekan' !important;text-align: right;direction: rtl" placeholder="نام و نام خانوادگی" class="form-control input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

            <div class="wrap-input100 validate-input">
                <input id="email" type="email" style="font-family: '20S-Yekan' !important;text-align: right;" placeholder="ادرس ایمیل" class="form-control input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="wrap-input100 validate-input">
                <input id="password" type="password" style="font-family: '20S-Yekan' !important;text-align: right" placeholder="پسورد" class="form-control input100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>


            <div class="wrap-input100 validate-input">
                <input id="password-confirm" style="font-family: '20S-Yekan' !important;text-align: right" placeholder="تکرار پسورد" type="password" class="form-control input100" name="password_confirmation" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="wrap-input100 validate-input">
                 <select id="gender" class="input100" style="outline:none;padding-left:10px;font-family: '20S-Yekan' !important;text-align: right;direction: rtl" name="gender" required autocomplete="gender">
                    <option value="male">مرد</option>
                    <option value="female">زن</option>
                </select>
            </div>

            <div class="wrap-input100 validate-input">
                 <select id="year" class="input100 form-control" style="float: left;width: 45% !important;outline:none;padding-left:10px;font-family: '20S-Yekan' !important;text-align: right;direction: rtl" name="year" required>
                    <option value="1388">1388</option>
                    <option value="1387">1387</option>
                    <option value="1386">1386</option>
                    <option value="1385">1385</option>
                    <option value="1384">1384</option>
                    <option value="1383">1383</option>
                    <option value="1382">1382</option>
                    <option value="1381">1381</option>
                    <option value="1380">1380</option>
                    <option value="1379">1379</option>
                    <option value="1378">1378</option>
                    <option value="1377">1377</option>
                    <option value="1376">1376</option>
                    <option value="1375">1375</option>
                    <option value="1374">1374</option>
                    <option value="1373">1373</option>
                    <option value="1372">1372</option>
                    <option value="1371">1371</option>
                    <option value="1370">1370</option>
                    <option value="1369">1369</option>
                    <option value="1368">1368</option>
                    <option value="1367">1367</option>
                    <option value="1366">1366</option>
                    <option value="1365">1365</option>
                    <option value="1364">1364</option>
                    <option value="1363">1363</option>
                    <option value="1362">1362</option>
                    <option value="1361">1361</option>
                    <option value="1360">1360</option>
                    <option value="1359">1359</option>
                    <option value="1358">1358</option>
                    <option value="1357">1357</option>
                    <option value="1356">1356</option>
                    <option value="1355">1355</option>
                    <option value="1354">1354</option>
                    <option value="1353">1353</option>
                    <option value="1352">1352</option>
                    <option value="1351">1351</option>
                    <option value="1350">1350</option>
                    <option value="1349">1349</option>
                    <option value="1348">1348</option>
                    <option value="1347">1347</option>
                    <option value="1346">1346</option>
                    <option value="1345">1345</option>
                    <option value="1344">1344</option>
                    <option value="1343">1343</option>
                    <option value="1342">1342</option>
                    <option value="1341">1341</option>
                    <option value="1340">1340</option>
                    <option value="1339">1339</option>
                    <option value="1338">1338</option>
                    <option value="1337">1337</option>
                    <option value="1336">1336</option>
                    <option value="1335">1335</option>
                </select>
                <select id="month" class="input100 form-control" style="float:left;width: 27% !important;outline:none;padding-left:10px;font-family: '20S-Yekan' !important;text-align: right;direction: rtl" name="month" required >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
                <select id="day" class="input100 form-control" style="width: 27% !important;outline:none;padding-left:10px;font-family: '20S-Yekan' !important;text-align: right;direction: rtl" name="day" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
            </div>


            <div class="container-login100-form-btn">

                <button style="font-family: '20S-Yekan' !important;font-weight: bolder;margin-top: -20px;outline: none !important;" type="submit" class="btn btn-primary login100-form-btn">
                    {{ __('ثبت نام') }}
                </button>

            </div>


            <div class="text-center p-t-50">
                <a class="txt2" href="{{route('login')}}" style="font-family: '20S-Yekan' !important;font-weight: bolder;font-size: 14px;color: white">
                    صفحه ورود
                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                </a>
                <br>
                <a class="txt2" href="{{route('home')}}" style="font-family: '20S-Yekan' !important;font-weight: bolder;font-size: 14px;color: white">
                    بازگشت به خانه
                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                </a>

            </div>
        </form>

    </div>
</div>




<!--===============================================================================================-->
<script src={{ asset('authen/vendor/jquery/jquery-3.2.1.min.js') }}></script>
<!--===============================================================================================-->
<script src={{ asset('authen/vendor/bootstrap/js/popper.js') }}></script>
<script src={{ asset('authen/vendor/bootstrap/js/bootstrap.min.js') }}></script>
<!--===============================================================================================-->
<script src={{ asset('authen/vendor/select2/select2.min.js') }}></script>
<!--===============================================================================================-->
<script src={{ asset('authen/vendor/tilt/tilt.jquery.min.js') }}></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src={{ asset('authen/js/main.js') }}></script>

</body>
</html>
