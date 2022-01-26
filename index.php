<!DOCTYPE html>
<html>

<head>
	<title>Somebody to You</title>
	<meta charset="utf-8">
	<link rel="icon"
		href="https://gamepedia.cursecdn.com/minecraft_gamepedia/a/a7/Heart.svg?version=dac1a46352ab4c25ad78a3cef0ceea86">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<style type="text/css">
		/** Regular */
		@font-face {
			font-family: "SF Display";
			font-weight: 400;
			src: url("https://sf.abarba.me/SF-UI-Display-Regular.otf");
		}

		/** Semibold */
		@font-face {
			font-family: "SF Display";
			font-weight: 600;
			src: url("https://sf.abarba.me/SF-UI-Display-Semibold.otf");
		}

		/** Thin */
		@font-face {
			font-family: "SF Display";
			font-weight: 300;
			src: url("https://sf.abarba.me/SF-UI-Display-Thin.otf");
		}

		/** Bold */
		@font-face {
			font-family: "SF Display";
			font-weight: 700;
			src: url("https://sf.abarba.me/SF-UI-Display-Bold.otf");
		}

		* {
			font-family: SF Display;
			cursor: default;
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			-o-user-select: none;
			user-select: none;
		}

		body {
			overflow: hidden;
			background-image: url();
			background-size: 100%;
			margin: 0;
			padding: 0;
		}

		.cc {
			position: fixed;
			color: #FFFFFF30;
			z-index: 10;
			top: 0;
			right: 0;
			font-size: 10pt;
			font-weight: lighter;
		}

		img {
			width: 100vw;
			height: 100vh;
			object-fit: cover;
			position: absolute;
		}

		.preload {
			position: absolute;
			height: 100vh;
			line-height: 100vh;
			width: 100vw;
			background: #000000E0;
			backdrop-filter: blur(10px);
			font-weight: lighter;
			font-size: 20pt;
			z-index: 100;
			text-align: center;
			color: #FFFFFF;
			opacity: 1;
			transition: all ease 1s;
			font-family: monospace;
		}

		.container {
			position: absolute;
			width: 100vw;
			height: 100vh;
		}

		.myoverlay {
			backdrop-filter: blur(7px);
		}

		.mywindow {
			background: #ECECEC;
			position: absolute;
			left: calc(50% - 250px);
			top: calc(50% - 120px);
			font-size: 12pt;
			border-radius: 10px;
			border: 1px solid #C6C6C6;
			box-shadow: 0px 0px 10px #00000020;

		}

		.myanimated {
			transition: all ease 0.3s;
		}

		.mycontrol {
			position: absolute;
			display: inline-block;
			height: 30px;
			left: 10px;
			padding: 0px 5px;
		}

		.myheader {
			color: #767676;
			text-align: center;
			font-weight: bold;
			display: inline-block;
			width: 100%;
			height: 30px;
			line-height: 30px;
			border-radius: 10px 10px 0 0;
			background: rgb(209, 209, 209);
			background: linear-gradient(0deg, rgba(209, 209, 209, 1) 0%, rgba(229, 229, 232, 1) 100%);
			border-bottom: 1px solid #C6C6C6;

		}

		.myclose,
		.mymini,
		.mymax {
			display: inline-block;
			width: 12px;
			height: 12px;
			margin-top: 8px;
			border-radius: 10px;
			margin-right: 2px;
		}

		.myclose {
			background: #FE5D56;
			border: 1px solid #EA3E4A;
		}

		.myclose:hover {
			background: #EA3E4A;
		}

		.mymini {
			background: #F6BD28;
			border: 1px solid #F8AE1C;
		}

		.mymini:hover {
			background: #F8AE1C;
		}

		.mymax {
			background: #26CD3C;
			border: 1px solid #4BBA54;
		}

		.mymax:hover {
			background: #4BBA54;
		}

		.mybody {
			padding: 30px;
			padding-bottom: 100px;
		}

		.mytitle {
			font-weight: bold;
			font-size: 14pt;
			margin-bottom: 10px;
		}

		.mycontent {}

		.mytext {
			width: 350px;
			border-radius: 7px;
			padding: 5px;
			margin-left: 10px;
			box-sizing: border-box;
			border: 3px solid #dcdcdca0;
			-webkit-transition: 0.3s;
			transition: 0.3s;
			outline: none;
		}

		.mytext:focus {
			border: 3px solid rgba(10, 107, 254, 0.5);
			/*transform: translateY(-2px);*/
		}

		.mytext:hover {
			cursor: text;
		}

		.mybutton {
			position: absolute;
			height: 30px;
			line-height: 30px;
			bottom: 20px;
			right: 20px;
		}

		.mybuttonyes,
		.mybuttonno {
			display: inline-block;
			width: 80px;
			background: cyan;
			height: 30px;
			line-height: 30px;
			margin-top: 0px;
			text-align: center;
			border-radius: 5px;
			margin-left: 10px;
			font-weight: 600;
		}

		.mybuttonyes {
			background: rgb(10, 107, 254);
			background: linear-gradient(0deg, rgba(10, 107, 254, 1) 0%, rgba(106, 163, 252, 1) 100%);
			color: #FFFFFF;
			border: 1px solid #015FFC;
		}

		.mybuttonyes:hover {
			background: rgb(10, 107, 254);
		}

		.mybuttonno {
			background: #FFFFFF;
			border: 1px solid #C6C6C6;
		}

		.mybuttonno:hover {
			background: #EDEDED;
		}

		.myresize {
			width: 15px;
			height: 15px;
			position: absolute;
			right: 0;
			bottom: 0;
			cursor: se-resize;
		}

		.vidcont {
			width: 100vw;
			height: 100vh;
			position: absolute;
			display: none;
			background: #000000A0;
			z-index: 2;
		}

		.myhide {
			display: none;
		}

		.vidcont:hover {
			cursor: none;
		}

		video:hover {
			cursor: none;
		}

		video {
			position: relative;
			left: 0;
			top: 0;
			opacity: 1;
		}

		.divvideo {
			width: 688px;
			height: 576px;
			border-radius: 20px;
			overflow: hidden;
			position: relative;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			z-index: 10;
		}

		.myclock {
			display: none;
			position: absolute;
			z-index: 2;
			color: #FFFFFF;
			text-align: center;
			width: calc(100vw - 50px);
			padding: 25px;
		}

		.contjam {
			position: absolute;
			width: 100%;
			top: 50vh;
			left: 0;
			transform: translateY(-50%);
			text-align: center;
			margin: 0;
			padding: 0;
		}

		.jam {
			position: relative;
			font-size: 100px;
			font-weight: 300;
		}

		.tanggal {
			position: relative;
			font-size: 20px;
			margin-top: 15px;
		}

		.ucapan {
			position: relative;
			color: #000000;
			font-size: 20px;
			margin-top: 50px;
			background: #EAEAEA90;
			left: calc(50% - 220px - 20px);
			width: 440px;
			padding: 30px 20px;
			border-radius: 25px;
			transition: all ease 0.3s;
		}

		.ucapan:active {
			transform: scale(1.02);
		}

		.ucapan:hover,
		.ucapan *:hover {
			cursor: pointer;
		}

		.ucapan::before {
			content: 'ketuk untuk mencari';
			font-size: 12pt;
			width: 200px;
			height: 50px;
			line-height: 50px;
			left: 50%;
			bottom: -80px;
			background: #FFFFFFB0;
			position: absolute;
			z-index: 99;
			border-radius: 10px;
			transform: translateX(-50%);
			opacity: 0;
			transition: all ease 0.3s;
			pointer-events: none;
		}

		.ucapan:hover::before {
			bottom: -60px;
			opacity: 1;
		}

		.myakun {
			color: #FFFFFF;
			background: #00000080;
			transform: translateY(0px);
			width: 200px;
			height: 30px;
			line-height: 30px;
			border-radius: 5px;
			display: inline-block;
			margin: 3px 2px;
			transition: background ease 0.3s;
			backdrop-filter: blur(10px);
		}

		.myakun:hover {
			background: #000000E0;
			cursor: pointer;
		}

		#nama * {
			transition: all ease 0.3s;
		}

		#nama:hover {
			cursor: default;
		}

		#nama::before {
			content: 'ketuk untuk mengubah';
			width: 200px;
			height: 50px;
			line-height: 50px;
			left: 0;
			top: 45px;
			background: #00000090;
			position: absolute;
			z-index: 99;
			border-radius: 10px;
			transition: all ease 0.3s;
			opacity: 0;
			pointer-events: none;
		}

		#nama:hover::before {
			top: 35px;
			opacity: 1;
		}

		#nama *:hover,
		#textcari:hover {
			cursor: text;
			color: #FFFFFFA0;
		}

		#oke:hover {
			background: #FFFFFF30;
			cursor: pointer;
		}

		.tombolcari:hover {
			background: rgb(10, 107, 254);
			color: #FFFFFF;
		}

		.shortcut {
			position: fixed;
			bottom: 0;
			width: 100px;
			height: 70px;
			line-height: 70px;
			background: #FFFFFF10;
			margin: 10px;
			border-radius: 20px;
			cursor: pointer;
			transition: transform ease 0.3s;
			backdrop-filter: blur(3px);
		}

		.shortcut:hover {
			transform: scale(1.1);
			backdrop-filter: blur(5px);
		}

		.shortcut:active {
			transform: scale(0.9);
			backdrop-filter: blur(5px);
		}

		.kiri {
			left: 0;
		}

		.kanan {
			right: 0;
		}
	</style>
</head>

<body onload="init()">
	<audio id="myAudio">
		<source src="assets/music.mp3" type="audio/mpeg">
		Your browser does not support the audio element.
	</audio>
	<audio id="myOpening">
		<source src="assets/opening.mp3" type="audio/mpeg">
		Your browser does not support the audio element.
	</audio>
	<div class="preload">PLEASE WAIT</div>
	<div class="vidcont myoverlay">
		<div class="divvideo">
			<video id="myVideo" width="100%" height="100%">
				<source src="assets/video.mp4" type="video/mp4">
				Your browser doe`s not support HTML5 video.
			</video>
		</div>
	</div>
	<img src="assets/wp2.png">
	<div class="container">
		<div class="myclock">
			<div class="myakun" id="nama">
				<span id="spannama3" onclick="gantinama()"></span>
			</div>
			<div class="myakun" onclick="kembali()">Kembali</div>
			<div class="myakun" onclick="reverse()">Reset</div>
			<div class="contjam">
				<div class="jam">-:-</div>
				<div class="tanggal">-</div>
				<div class="ucapan myoverlay" onclick="carigoogle()"><span id="spannama2"></span></div>
			</div>
			<div class="shortcut kanan" onclick="toggleFullscreen()">fullscreen</div>
			<div class="shortcut kiri" onclick="wpblur()">blur</div>
		</div>
		<div class="mywindow" id="myform" style="width: 500px; height: 240px">
			<div class="myheader">
				Registrasi
			</div>
			<div class="mybody">
				<div class="mytitle">
					Isi identitas anda terlebih dahulu
				</div>
				<div class="mycontent">
					Tekan tombol merah untuk reset nama.<br><br>
					Nama :
					<input class="mytext" type="text" id="mynama" name="nama">
				</div>
				<div class="mybutton">
					<div class="mybuttonyes" onclick="mywrite()">oke</div>
				</div>
			</div>
		</div>
		<div class="mywindow myanimated myhide" id="mywindow" style="width: 500px; height: 240px">
			<div class="mycontrol">
				<div class="myclose" onclick="reverse()"></div>
				<div class="mymini"></div>
				<div class="mymax"></div>
			</div>
			<div class="myheader" id="mywindowheader">
				halo <span id="spannama"></span>
			</div>
			<div class="mybody">
				<div class="mytitle">
					Aku sejak lama suka padamu.
				</div>
				<div class="mycontent">
					Maukah kau menjadi orang yang selalu ada disisiku, yang selalu ada disaat senang ataupun susah, yang
					selalu ada sampai akhir hayatku?
				</div>
				<div class="mybutton">
					<div class="mybuttonno" onmouseover="move()" onclick="move2()">tidak</div>
					<div class="mybuttonyes" onclick="playVid()">iya</div>
				</div>
			</div>
			<div class="myresize"></div>
		</div>
	</div>
	<span style="position: absolute; text-align: center; line-height: 100vh; width: 100vw; z-index:-10;">jangan dijual
		bos</span>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
		/*

	referensi

		https://www.w3schools.com/howto/howto_js_draggable.asp
		https://stackoverflow.com/questions/2310734/how-to-make-html-text-unselectable
		http://stackoverflow.com/questions/8960193/how-to-make-html-element-resizable-using-pure-javascript/33523184

		*/
		namaku = localStorage.getItem("nama");
		blur = "true";
		$(window).on('load', function () {
			$('.preload').css('background', '#00000000').css('color', '#FFFFFF00').css('backdrop-filter', 'blur(0px)').text('SELESAI').css('z-index', '-2');
		});
		function init() {
			startTime();
			stopOpening();
			add = '<div class="cc">copyright Andika Sujanadi @2020</div>';
			$('body').append(add);
			if (localStorage.getItem("nama") != null && localStorage.getItem("checked") == "yoi") {
				namaku = localStorage.getItem("nama");
				myclock();
			} else if (localStorage.getItem("nama") != null) {
				mystart();
			}
			if (localStorage.getItem("blur") == "true") {
				wpblur();
			}

		}
		$('img').on('dragstart', function (event) { event.preventDefault(); });
		dragElement(document.getElementById("mywindow"));
		function dragElement(elmnt) {
			var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
			if (document.getElementById(elmnt.id + "header")) {
				document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
			} else {
				elmnt.onmousedown = dragMouseDown;
			}

			function dragMouseDown(e) {
				animasi();
				e = e || window.event;
				e.preventDefault();
				pos3 = e.clientX;
				pos4 = e.clientY;
				document.onmouseup = closeDragElement;
				document.onmousemove = elementDrag;
			}

			function elementDrag(e) {
				e = e || window.event;
				e.preventDefault();
				pos1 = pos3 - e.clientX;
				pos2 = pos4 - e.clientY;
				pos3 = e.clientX;
				pos4 = e.clientY;
				elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
				elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
			}

			function closeDragElement() {
				document.onmouseup = null;
				document.onmousemove = null;
				animasi();
			}
		}

		var mywindow = document.querySelector('#mywindow');
		var myresize = document.querySelector('.myresize');
		myresize.addEventListener('mousedown', initDrag, false);
		var startX, startY, startWidth, startHeight;
		function initDrag(e) {
			startX = e.clientX;
			startY = e.clientY;
			startWidth = parseInt(document.defaultView.getComputedStyle(mywindow).width, 10);
			startHeight = parseInt(document.defaultView.getComputedStyle(mywindow).height, 10);
			document.documentElement.addEventListener('mousemove', doDrag, false);
			document.documentElement.addEventListener('mouseup', stopDrag, false);
		}

		function doDrag(e) {
			mywindow.style.width = (startWidth + e.clientX - startX) + 'px';
			mywindow.style.height = (startHeight + e.clientY - startY) + 'px';
			animasi();
		}

		function stopDrag(e) {
			document.documentElement.removeEventListener('mousemove', doDrag, false);
			document.documentElement.removeEventListener('mouseup', stopDrag, false);
			animasi();
		}
		var elem = document.documentElement;
		function openFullscreen() {
			if (elem.requestFullscreen) {
				elem.requestFullscreen();
			} else if (elem.mozRequestFullScreen) { /* Firefox */
				elem.mozRequestFullScreen();
			} else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
				elem.webkitRequestFullscreen();
			} else if (elem.msRequestFullscreen) { /* IE/Edge */
				elem.msRequestFullscreen();
			}
		}
		function move() {
			kali = 20;
			addanimation();
			random1 = (mywindow.offsetTop + (Math.floor(Math.random() * 10) - 5) * kali);
			random2 = (mywindow.offsetLeft + (Math.floor(Math.random() * 10) - 5) * kali);
			if (random1 > 0 && random1 < 33) random1 = 33 + 20;
			if (random1 < 0 && random1 > -33) random1 = -33 - 20;
			if (random2 > 0 && random2 < 83) random2 = 83 + 20;
			if (random2 < 0 && random2 > -83) random2 = -83 - 20;
			if (random1 == 0 && random2 == 0) random1 = -100;
			mywindow.style.top = random1 + 'px';
			mywindow.style.left = random2 + 'px';
			if (random1 < 0 || ((random1 + mywindow.clientHeight) > window.innerHeight)) {
				mywindow.style.top = "calc(50% - " + mywindow.clientHeight / 2 + "px)";
			}
			if (random2 < 0 || ((random2 + mywindow.clientWidth) > window.innerWidth)) {
				mywindow.style.left = "calc(50% - " + mywindow.clientWidth / 2 + "px)";
			}
		}
		function move2() {
			kali = 50;
			addanimation();
			random1 = (mywindow.offsetTop + (Math.floor(Math.random() * 10) - 5) * kali);
			random2 = (mywindow.offsetLeft + (Math.floor(Math.random() * 10) - 5) * kali);
			if (random1 > 0 && random1 < 33) random1 = 33 + 20;
			if (random1 < 0 && random1 > -33) random1 = -33 - 20;
			if (random2 > 0 && random2 < 83) random2 = 83 + 20;
			if (random2 < 0 && random2 > -83) random2 = -83 - 20;
			if (random1 == 0 && random2 == 0) random1 = -100;
			mywindow.style.top = random1 + 'px';
			mywindow.style.left = random2 + 'px';
			if (random1 < 0 || ((random1 + mywindow.clientHeight) > window.innerHeight)) {
				mywindow.style.top = "calc(50% - " + mywindow.clientHeight / 2 + "px)";
			}
			if (random2 < 0 || ((random2 + mywindow.clientWidth) > window.innerWidth)) {
				mywindow.style.left = "calc(50% - " + mywindow.clientWidth / 2 + "px)";
			}
		}
		function addanimation() {
			var element = document.getElementById("mywindow");
			element.classList.add("myanimated");
		}
		function animasi() {
			var element = document.getElementById("mywindow");
			element.classList.toggle("myanimated");
		}
		var vid = document.getElementById("myVideo");
		function playVid() {
			stopOpening();
			openFullscreen();
			$('#myVideo').show();
			$('.vidcont').fadeIn();
			localStorage.setItem("checked", "yoi");
			$('#mywindow').fadeOut(300);
			vid.play();
		}
		vid.onended = function () {
			playAudio();
			$('.vidcont').fadeOut();
			myclock();
		}
		function capital_letter(str) {
			if (!str) {
				str = 'noname';
			}
			str = str.split(" ");
			for (var i = 0, x = str.length; i < x; i++) {
				str[i] = str[i][0].toUpperCase() + str[i].substr(1);
			}
			return str.join(" ").substr(0, 20);
		}
		function mywrite() {
			openFullscreen();
			playOpening();
			nama = $('#mynama').val();
			$('#mynama').val('');
			nama = capital_letter(nama);
			localStorage.setItem("nama", nama);
			namaku = localStorage.getItem("nama");
			mystart();
		}
		function mystart() {
			$('#spannama').text(localStorage.getItem("nama"));
			$('#myform').hide();
			$('#mywindow').show();
			resetposisi();
		}
		function reverse() {
			stopOpening();
			$('#myform').fadeIn();
			$('#mywindow').hide();
			$('.myclock').hide();
			if (blur == "false") {
				wpblur();
			}
			localStorage.clear();
		}
		function kembali() {
			stopOpening();
			localStorage.removeItem("checked");
			if (blur == "false") {
				wpblur();
			}
			$('#myform').hide();
			$('#mywindow').fadeIn();
			$('.myclock').hide();
		}
		function gantinama() {
			nama = $('#spannama3').text();
			$("#nama *").remove();
			$("#nama").append("<input type='text' id='textnama' value='" + nama + "' style='background:#00000000; color:#FFF; outline: none; box-sizing:border-box; border: 0px solid #000;' placeholder='nama' autofocus></input><span id='oke' style='transition: all ease 0.3s; border-radius:5px; width:30px; height:25px; margin-top:2.5px; line-height:25px; position:absolute; right:3px;' onclick='gantinamaok()'>oke</span>");
			textnama = document.querySelector('#textnama');
			textnama.autofocus = true;
			textnama.setSelectionRange(0, textnama.value.length);
			textnama.addEventListener('keypress', function (e) {
				if (e.key === 'Enter') {
					gantinamaok();
				}
			});
		}
		function gantinamaok() {
			textnama = document.querySelector('#textnama');
			textnama.autofocus = false;
			nama = $('#textnama').val();
			nama = capital_letter(nama);
			localStorage.setItem("nama", nama);
			$("#nama *").remove();
			$("#nama").append('<span id="spannama3" onclick="gantinama()">' + localStorage.getItem("nama") + '</span>')
		}
		cari = true;
		selesai = false;
		function carigoogle() {
			if (cari) {
				cari = false;
				selesai = false;
				$('.ucapan').text('');
				$('.ucapan *').remove();
				$(".ucapan").append("<input type='text' id='textcari' style='background:#00000000; width:300px; transform:translateX(-70px); color:#000; outline: none; box-sizing:border-box; border: 0px solid #000; font-size:20px' placeholder='cari di sini' autofocus></input><span class='tombolcari'; style='transition: all ease 0.3s; border-radius:10px; width:60px; height:50px; top:calc(50% - 25px); right:90px; line-height:50px; position:absolute;' onclick='cariok()'>cari</span><span class='tombolcari'; style='transition: all ease 0.3s; border-radius:10px; width:60px; height:50px; top:calc(50% - 25px); right:20px; line-height:50px; position:absolute;' onclick='caribatal()'>batal</span>");
				document.querySelector('#textcari').addEventListener('keyup', function (e) {
					if (e.key === 'Enter') {
						cariok();
					}
					if (e.key === "Escape") {
						caribatal();
					}
				});
				document.querySelector('body').addEventListener('keyup', function (e) {
					if (e.key === "Escape") {
						caribatal();
					}
				});
			}
			if (selesai) {
				cari = true;
			}
		}
		function cariok() {
			window.open("https://www.google.com/search?q=" + $('#textcari').val());
			caribatal();
		}
		function caribatal() {
			$('.ucapan *').remove();
			$(".ucapan").append('<span id="spannama2"></span>');
			var today = new Date();
			var h = today.getHours();
			if (h > 23) tulis('malam', 'seharusnya kamu sudah tidur');
			else if (h > 19) tulis('malam', 'waktunya mengisi energi');
			else if (h > 18) tulis('petang', 'selamat menikmati senja');
			else if (h > 14) tulis('sore', 'selamat menjalani hari');
			else if (h > 13) tulis('siang', 'tetap semangat')
			else if (h > 9) tulis('siang', 'selamat bekerja')
			else if (h > 4) tulis('pagi', 'selamat beraktivitas');
			else tulis('malam', 'seharusnya kamu sudah tidur');
			selesai = true;
		}
		function resetposisi() {
			mywindow.style.top = "calc(50% - " + mywindow.clientHeight / 2 + "px)";
			mywindow.style.left = "calc(50% - " + mywindow.clientWidth / 2 + "px)";
		}
		document.querySelector('#mynama').addEventListener('keypress', function (e) {
			if (e.key === 'Enter') {
				mywrite();
			}
		});
		function myclock() {
			$('#spannama3').text(localStorage.getItem("nama"));
			localStorage.setItem("checked", "yoi");
			$('#myform').hide();
			$('#mywindow').hide();
			$('#myVideo').hide();
			$('.myclock').show();
		}
		jalan = false;
		function startTime() {
			var today = new Date();
			var h = today.getHours();
			var m = today.getMinutes();
			var s = today.getSeconds();
			h = checkTime(h);
			m = checkTime(m);
			s = checkTime(s);
			document.querySelector('.jam').innerHTML = h + ":" + m;
			var t = setTimeout(startTime, 500);
			mytanggal();
			if (cari) {
				if (h > 23) tulis('malam', 'seharusnya kamu sudah tidur');
				else if (h > 18) tulis('malam', 'waktunya mengisi energi');
				else if (h > 17) tulis('petang', 'selamat menikmati senja');
				else if (h > 14) tulis('sore', 'selamat menjalani hari');
				else if (h > 13) tulis('siang', 'tetap semangat')
				else if (h > 9) tulis('siang', 'selamat bekerja')
				else if (h > 4) tulis('pagi', 'selamat beraktivitas');
				else tulis('malam', 'seharusnya kamu sudah tidur');
				if (h > 18) document.querySelector('img').src = "assets/wp1.png";
				else if (h > 4) document.querySelector('img').src = "assets/wp2.png";
				else document.querySelector('img').src = "assets/wp1.png";
			}
			if (window.btoa($('.cc').text()) != 'Y29weXJpZ2h0IEFuZGlrYSBTdWphbmFkaSBAMjAyMA==') {
				if (jalan) $('.container').remove();
				if (jalan) $('img').remove();
				jalan = true;
			}
		}
		function tulis(waktu, ucapan) {
			$("#spannama2").text('Selamat ' + waktu + ' ' + localStorage.getItem("nama") + ', ' + ucapan + '.');
		}
		function checkTime(i) {
			if (i < 10) { i = "0" + i };
			return i;
		}
		var elem = document.documentElement;
		fs = false;
		function openFullscreen() {
			fs = true;
			if (elem.requestFullscreen) {
				elem.requestFullscreen();
			} else if (elem.mozRequestFullScreen) { /* Firefox */
				elem.mozRequestFullScreen();
			} else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
				elem.webkitRequestFullscreen();
			} else if (elem.msRequestFullscreen) { /* IE/Edge */
				elem.msRequestFullscreen();
			}
		}
		function toggleFullscreen() {
			if (window.innerHeight == screen.height) {
				fs = true;
			}
			else {
				fs = false;
			}
			if (fs) {
				fs = false;
				if (document.exitFullscreen) {
					document.exitFullscreen();
				} else if (document.mozCancelFullScreen) {
					document.mozCancelFullScreen();
				} else if (document.webkitExitFullscreen) {
					document.webkitExitFullscreen();
				} else if (document.msExitFullscreen) {
					document.msExitFullscreen();
				}
			}
			else {
				openFullscreen();
			}

		}
		function mytanggal() {
			var hari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
			var bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember'];
			var d = new Date();
			var dayName = hari[d.getDay()];
			var monthName = bulan[d.getMonth()];
			tanggal = (dayName + ', ' + d.getDate() + ' ' + monthName);
			$('.tanggal').text(tanggal);
		}
		function wpblur() {
			$('.container').toggleClass("myoverlay");
			localStorage.setItem("blur", blur);
			if (blur == "true") {
				blur = "false";
			}
			else {
				blur = "true";
			}
		}
		function playAudio() {
			var x = document.getElementById("myAudio");
			x.volume = 0.15;
			x.play();
		}
		function playOpening() {
			var x = document.getElementById("myOpening");
			x.volume = 0.3;
			x.play();
			x.addEventListener("ended", function () {
				stopOpening();
			});
		}
		function stopOpening() {
			var x = document.getElementById("myOpening");
			x.pause();
			x.currentTime = 0;
			var x = document.getElementById("myAudio");
			x.pause();
			x.currentTime = 0;
		}
	</script>
</body>

</html>