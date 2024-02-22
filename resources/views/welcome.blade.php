@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Eneergeek | Apply Job</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="{{ asset("asset/plugins/fontawesome-free/css/all.min.css")}}">

<link rel="stylesheet" href="{{ asset("asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
<link rel="stylesheet" href="{{ asset("asset/plugins/fontawesome-free/css/all.min.css")}}">

<link rel="stylesheet" href="{{ asset("asset/plugins/daterangepicker/daterangepicker.css")}}">

<link rel="stylesheet" href="{{ asset("asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">

<link rel="stylesheet" href="{{ asset("asset/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css")}}">

<link rel="stylesheet" href="{{ asset("asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}">

<link rel="stylesheet" href="{{ asset("asset/plugins/select2/css/select2.min.css")}}">
<link rel="stylesheet" href="{{ asset("asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">

<link rel="stylesheet" href="{{ asset("asset/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css")}}">

<link rel="stylesheet" href="{{ asset("asset/plugins/bs-stepper/css/bs-stepper.min.css")}}">

<link rel="stylesheet" href="{{ asset("asset/plugins/dropzone/min/dropzone.min.css")}}">


<link rel="stylesheet" href="{{ asset("asset/dist/css/adminlte.min.css?v=3.2.0")}}">
<script nonce="2f43205f-cc97-4194-872f-22644a2edad7">try{(function(w,d){!function(j,k,l,m){j[l]=j[l]||{};j[l].executed=[];j.zaraz={deferred:[],listeners:[]};j.zaraz.q=[];j.zaraz._f=function(n){return async function(){var o=Array.prototype.slice.call(arguments);j.zaraz.q.push({m:n,a:o})}};for(const p of["track","set","debug"])j.zaraz[p]=j.zaraz._f(p);j.zaraz.init=()=>{var q=k.getElementsByTagName(m)[0],r=k.createElement(m),s=k.getElementsByTagName("title")[0];s&&(j[l].t=k.getElementsByTagName("title")[0].text);j[l].x=Math.random();j[l].w=j.screen.width;j[l].h=j.screen.height;j[l].j=j.innerHeight;j[l].e=j.innerWidth;j[l].l=j.location.href;j[l].r=k.referrer;j[l].k=j.screen.colorDepth;j[l].n=k.characterSet;j[l].o=(new Date).getTimezoneOffset();if(j.dataLayer)for(const w of Object.entries(Object.entries(dataLayer).reduce(((x,y)=>({...x[1],...y[1]})),{})))zaraz.set(w[0],w[1],{scope:"page"});j[l].q=[];for(;j.zaraz.q.length;){const z=j.zaraz.q.shift();j[l].q.push(z)}r.defer=!0;for(const A of[localStorage,sessionStorage])Object.keys(A||{}).filter((C=>C.startsWith("_zaraz_"))).forEach((B=>{try{j[l]["z_"+B.slice(7)]=JSON.parse(A.getItem(B))}catch{j[l]["z_"+B.slice(7)]=A.getItem(B)}}));r.referrerPolicy="origin";r.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(j[l])));q.parentNode.insertBefore(r,q)};["complete","interactive"].includes(k.readyState)?zaraz.init():j.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script></head>
<body class="hold-transition register-page">
<div class="register-box">
<div class="register-logo">
<a href="{{ asset("index2.html")}}"><b>Energeek</b></a>
</div>
<div class="card">
<div class="card-body register-card-body">
<p class="login-box-msg">Apply Lamaran</p>
<form id="form-data">
    <div class="form-group">
    <label for="exampleInputEmail1">Nama Lengkap</label>
<input type="text" class="form-control" placeholder="Full name" required id="name" name="name">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Jabatan</label>
        <select class="form-control select2" id="job" style="width: 100%;" required name="job_id">
            @foreach ($job as $j)
                <option value="{{ $j->id }}">{{ $j->name }}</option>
            @endforeach
        </select>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Telepon</label>
<input type="number" class="form-control" placeholder="Phone" id="phone" required name="phone">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Email</label>
<input type="text" class="form-control" placeholder="Email" required id="email" name="email">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Tahun</label>
        <select class="form-control select2" style="width: 100%;" required id="year" name="year">
        <option>2003</option>
        <option>2002</option>
        <option>2001</option>
        <option>2000</option>
        <option>1999</option>
        <option>1998</option>
        <option>1997</option>
        </select>
</div>
<div class="form-group">
    <label>Skill</label>
    <select class="select2" multiple="multiple" data-placeholder="Select your skill" style="width: 100%;" id="skill[]" name="skill[]" required>
            @foreach ($skill as $s)
                <option value="{{ $s->id }}">{{ $s->name }}</option>
            @endforeach
    </select>
</div>

<div class="col-4">
<button type="button" onclick="prosesData()" class="btn btn-primary btn-block ">Apply</button>
</div>
</form>

</div>

</div>


<script src="{{ asset("asset/plugins/jquery/jquery.min.js") }}"></script>

<script src="{{ asset("asset/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

<script src="{{ asset("asset/dist/js/adminlte.min.js?v=3.2.0")}}"></script>
<script src="{{ asset("asset/plugins/select2/js/select2.full.min.js")}}"></script>

<script src="{{ asset("asset/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js")}}"></script>

<script src="{{ asset("asset/plugins/moment/moment.min.js")}}"></script>
<script src="{{ asset("asset/plugins/inputmask/jquery.inputmask.min.js")}}"></script>

<script src="{{ asset("asset/plugins/daterangepicker/daterangepicker.js")}}"></script>


<script src="{{ asset("asset/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js")}}"></script>

<script src="{{ asset("asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}"></script>

<script src="{{ asset("asset/plugins/bootstrap-switch/js/bootstrap-switch.min.js")}}"></script>

<script src="{{ asset("asset/plugins/bs-stepper/js/bs-stepper.min.js")}}"></script>

<script src="{{ asset("asset/plugins/dropzone/min/dropzone.min.js")}}"></script>

<script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()
    });
    function prosesData() {
        var data = $('#form-data').serialize();
        // Menggunakan jQuery untuk Ajax
        $.ajax({
            type: 'POST',
            url: '{{ route("simpan.data") }}',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: data,
            success: function (response) {
                console.log(response.message);
                // Lakukan apa yang perlu Anda lakukan setelah berhasil
            },
            error: function (error) {
                console.log(error.responseText);
                // Handle kesalahan jika diperlukan
            }
        });
    }

</script>
</body>
</html>
