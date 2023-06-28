<!-- TUGAS PRAKTIKUM 10 (Membuat tampilan about) -->

@extends('template/main')

@section('content3')
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
<style>
   body{
        background-color: #F9F9F9;
        font-family: 'Nunito', Arial;
    }

	h1{
		text-align: center;
		padding: 50px;
        margin: 3%;
	}

	p{
		text-align: justify;
		font-size: 26px;
	}
</style>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
					Welcome To RajaMobil!
				</h1>
				<p>
				RajaMobil.com adalah portal mobil.
				<br>
				Portal ini memudahkan pengunjung dalam proses jual-beli mobil baru dan bekas yang tersaji eksklusif dengan gambar menarik dan informasi lengkap.
				<br>
                Rajamobil.com juga memiliki banyak fitur menarik yang tentu saja berkaitan dengan bisnis mobil, seperti perhitungan simulasi kredit dan asuransi, serta fitur lainnya!
				<br>
				<br>
				Jam operasional
				Setiap hari: 09.00 – 18.00
				</p>
				<br>
		</div>
	</div>
</div>
@endsection