@extends('layouts.app')

@section('title', 'Contact us - LUAssist ')
@section('content')
<html>
    <head>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    </head>
<style>
	#wrapper{
	width: 100%;
	height: calc(100vh - 40px);
	margin: 20px auto;
	border-radius: 20px;
	background-color: var(--main-color);
	backdrop-filter: blur(5px);
	--webkit-backdrop-filter: blur(5px);
	overflow: hidden;
}
   .c{
	background-image: url('resources/views/background.jpg');
	background-size: 800px 600px; 
	background-repeat: no-repeat;
    
}
    main{
        padding-top: 90px;
    }
</style>
<main>
    <div class="container c" id="wrapper">
								<div style="width: 100%;">
									<div >
										<h2 class="display-4"><i class="fal fa-pencil"></i> Get in Touch</h2>
									</div>
									<form action="/contact" method="POST">
									{{ csrf_field() }}
									  <div class="form-group">
									    <label>Your Name</label>
									    <input type="text" class="form-control"  name="name">
									  </div>
									  <div class="form-group">
									    <label>Email address</label>
									    <input type="email" class="form-control" name="email" >
									    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
									  </div>
									  <div class="form-group">
									    <label>Message</label>
									    <textarea class="form-control" name="message"></textarea>
									  </div>									  
									  <button type="submit" class="btn btn-primary btn-sm">Submit</button>
									</form>
								</div>
						</div> 
			</div>
		</div>
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/custom-function.js"></script>

</main>
</html>
@endsection