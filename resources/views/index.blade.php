<!DOCTYPE html>
<html>
<head>
	<title>WWW.SEVEN.UZ</title>
	<meta charset="utf-8">
	<meta name="description" content="Free Web tutorials">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<meta name="author" content="John Doe">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{asset('dist/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('dist/css/media.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('dist/css/typography.css')}}">
	<link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Faustina' rel='stylesheet'>
	<link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="{{asset('dist/js/jquery.min.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
</head>
<body>

<div class="wrapper">

<!-- 	/*First section*/ -->


	<div class="section1">
		<div class="content">
			<div class="navbar">
				<h3>(71) 200-35-53</h3>
			</div>
			<div class="content1">
				<img src="{{asset('dist/img/seven.png')}}" class="img-responsive">
				<h1>INGLIZ <b>TILI</b></h1>
				<p>Har 10 dan 1 kishi BEPUL <br> 
					o'qish imkoniyatiga ega!</p>
			</div>
			<div class="wrap">
				<a href="#contacts" class="feature-content-link green-btn">OMADINGNI SINA</a>
			</div>
		</div>

		<div class="sidebar">
			<div id="mySidenav" class="sidenav">
	            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	            <a href="index.html" onclick="closeNav()">SEVENUZ.UZ</a>
	            <a href="#contacts" onclick="closeNav()">Bog'lanish</a>
	            <a href="#address" onclick="closeNav()">Manzilimiz</a>
        	</div>
	        <div class="main">
	          <span style="font-size:30px;cursor:pointer;color:#fff;padding-right:5px;" onclick="openNav()">&#9776;</span>
				<nav class="soc">
					<ul>
						<li><a href="#"><i style="color:white;" class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i style="color:white;" class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i style="color:white;" class="fa fa-telegram"></i></a></li>
					</ul>
				</nav>
	        </div>
		</div>
	</div>

		<!-- /*Middle section*/ -->

	<div class="middle" id="contacts">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<h2>OMADINGNI <b>SINAB KO`R</b></h2>
					<p>SHOSHIL !!! Bunday imkoniyatni qo'ldan boy berma.
	           Zero har bir tashlangan qadam yuqori cho'qqi sari qo'yilgan qadam bo'lishi mumkin</p>
				</div>
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				<div class="col-md-6 col-sm-12 col-xs-12">
					<form action="{{route('submit')}}" method="post">
						{{csrf_field()}}
		                <input type="text" id="fname" name="name" placeholder="ISMINGIZ..." required>
						<input type="text" class="phone" value="+998 " name="phone" data-mask="+000 (00) 000-00-00" pattern=".{19,}" required title="Ввели неправильный номер телефона. Telefon noto'g'ri kiritildi"/>
						<input type="submit" value="BOSHLASH">
            		</form>
				</div>
			</div>
		</div>
	</div>


	<!-- /*Bottom section*/ -->


	<div class="footer" id="address">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4" id="col4">
					<ul class="text-right">
		              <li><h3>(71) 200-35-53</h3></li>
		              <li><h3>SEVENUZ.UZ</h3></li>
		              <li><h3>AKSIYA</h3></li>
		              <li><h3>AMIR TEMUR 100</h3></li>
            		</ul>
				</div>
				 <div class="col-sm-8" id="col8">
					<img src="{{asset('dist/img/mapuz.jpg')}}" class="img-responsive map">
				</div>
			</div>
		</div>
	</div>
	
</div>	

<script>
	/*Script for side navigation menu*/

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

<!-- smooth scroll -->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

<script src="{{ asset('js/jquery.mask.js') }}"></script>
<script>
    $('.phone').keyup(function(e) {
        if (this.value.length < 4) {
            this.value = '+998 ';
        } else if (this.value.indexOf('+998 ') !== 0) {
            this.value = '+998 ' + String.fromCharCode(e.which);
        }
    });
</script>