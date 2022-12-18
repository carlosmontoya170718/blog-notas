
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>bloc notas</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ url('/') }}/css/style.css">



<link rel="stylesheet" href="{{ url('/') }}/css/style1.css">
  
  
  </head>
  <body>
    
  

    @foreach ($notass as $key => $value)
    
    @endforeach
		<div class="container" id="app">
			<div class="row">
				<div class="col-12">
					<h1>Simple note  <small>by Carlos Montoya</small></h1>
				</div>
			</div>
     
   
      
     
     
      @include('save')
     
			
      
            <div id="notes" class="row container-fluid">
            <div class="row">

            @include('notaproducida')

            




<footer class="footer-14398">
<div class="container">
<div class="row mb-5">
<div class="col-md-3">
<a href="#" class="footer-site-logo">Carlos M Montoya</a>
<p>
  CONOCIMIENTOS TÉCNICOS

 PHP MVC Laravel Symfony
 Áspid. Visual Basic 6 ASP VBScript
BBDD MySQL SQL
JavaScript HTML5
Kotlin Android Java JSP Java Arduino
Swift IOS
CSS Bootstrap Angular jQuery Ajax PrestaShop
 WordPress (en inglés)
 Técnico en Arduino Java Robotics
 Experiencia UX/UI
 </p>
</div>
<div class="col-md-2 ml-auto">
<h3>Proyectos</h3>
<ul class="list-unstyled links">
<li><a href="#">Ejemplo larabel block-notas</a></li>
<li><a href="#">Objeto escritor</a></li>
<li><a href="#">Rey Ajedrez</a></li>
<li><a href="#">Nuevo clock</a></li>

</ul>
</div>
<div class="col-md-2 ml-auto">
<h3>Electrónica magnetismo </h3>
<ul class="list-unstyled links">
<li><a href="#">Bobiba Tesla</a></li>
<li><a href="#">Alternador Motor</a></li>

</ul>
</div>
<div class="col-md-2 ml-auto">
<h3>About</h3>
<ul class="list-unstyled links">
<li><a href="#">Contact</a></li>
<li><a href="#">Services</a></li>
<li><a href="#">Team</a></li>
<li><a href="#">Career</a></li>
<li><a href="#">Contacts</a></li>
</ul>
</div>
</div>
<div class="row mb-4">
<div class="col-12 pb-4">
<div class="line"></div>
</div>
<div class="col-md-6 text-md-left">
<ul class="list-unstyled link-menu nav-left">
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Terms &amp; Conditions</a></li>
<li><a href="#">Code of Conduct</a></li>
</ul>
</div>
<div class="col-md-6 text-md-right">
<ul class="list-unstyled social nav-right">
<li><a href="#"><span class="icon-twitter"></span></a></li>
<li><a href="#"><span class="icon-instagram"></span></a></li>
<li><a href="#"><span class="icon-facebook"></span></a></li>
<li><a href="#"><span class="icon-pinterest"></span></a></li>
</ul>
</div>
</div>
<div class="row">
<div class="col-md-7">
<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, fuga. Ex at maxime eum odio quibusdam pariatur expedita explicabo harum! Consectetur ducimus delectus nemo, totam odit!</small></p>
</div>
</div>
</div>

</footer>
        
  </body>
</html>