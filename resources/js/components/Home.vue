<template>
<div class="home">
	<div class="present ">
		<div class="content-login">
			<button class="btn btn-registro">Únete</button>
			<button class="btn btn-login">Ingresar</button>
		</div>
		<div class="content-left">
			<div class="text-intro">
				<h1 class="text-prensent">Crea tus Publicaciones <span class="span-red">Gratis</span> en linea Hoy</h1>
				<h2 class="text-prensent"><span class="span-red">Vende</span> lo que quieras</h2>
				<p class="text-prensent">
					Puedes publicar tus productos online impresionante en tan
					<br>
					sólo unos minutos. Únete a nuestros Cursos Online
					<br>
					empieza crear tus App Profecionales.
				</p>
				<button class="btn btn-lg btn-publicar">Publicar Producto</button>
			</div>
		</div>
	</div>
	<div class="search">
		<form class="form-search" action="">
			<input type="text" class="form-control input-buscar" placeholder="Buscar">
			<button class="btn">Buscar</button>
		</form>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-4">
								Compra de forma rapida y segura
							</div>
							<div class="col-4">
								Vende tus productos
							</div>
							<div class="col-4">
								chatea con tus clientes
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<!-- <div class="col-3">
					tes
			</div> -->
			<div class="col-12 my-5">
				<h4 class="text-muted">Los mas Populares</h4>
				<carousel :perPage="4">
					<slide class="py-3">

						<router-link to="/producto/celular" class="card mx-2 card-content-product">
							<img class="img-responsive" src="https://via.placeholder.com/318x200" alt="">
							<div class="card-body">
								<p class="title-product">Celular Nuevo</p>
							</div>
							<div class="card-footer p-0">
								<div class="precio-content">
									<span class="precio">$200   <font-awesome-icon icon="shopping-cart" class="icon alt" /></span>
								</div>
							</div>
						</router-link>
					</slide>
					<slide class="py-3">
						<a href="#" class="card mx-2 card-content-product">
							<img class="img-responsive" src="https://via.placeholder.com/318x200" alt="">
							<div class="card-body">
								<p class="title-product">Celular Nuevo</p>
							</div>
							<div class="card-footer p-0">
								<div class="precio-content">
									<span class="precio">$200   <font-awesome-icon icon="shopping-cart" class="icon alt" /></span>
								</div>
							</div>
						</a>
					</slide>
					<slide class="py-3">
						<a href="#" class="card mx-2 card-content-product">
							<img class="img-responsive" src="https://via.placeholder.com/318x200" alt="">
							<div class="card-body">
								<p class="title-product">Celular Nuevo</p>
							</div>
							<div class="card-footer p-0">
								<div class="precio-content">
									<span class="precio">$200   <font-awesome-icon icon="shopping-cart" class="icon alt" /></span>
								</div>
							</div>
						</a>
					</slide>
				</carousel>
			</div>
		</div>
		
	</div>
</div>
</template>
<script>
	export default {
		data(){
			return {
				sliders:[
					{image:'https://via.placeholder.com/318x200',titulo:'Celular',precio:'$200'},
					{image:'https://via.placeholder.com/318x200',titulo:'Celular',precio:'$200'},
					{image:'https://via.placeholder.com/318x200',titulo:'Celular',precio:'$200'},
					{image:'https://via.placeholder.com/318x200',titulo:'Celular',precio:'$200'},
					{image:'https://via.placeholder.com/318x200',titulo:'Celular',precio:'$200'},
					{image:'https://via.placeholder.com/318x200',titulo:'Celular',precio:'$200'},
				],
			}
		}
	}
</script>
<style scoped>
	a{
		outline: none;
		text-decoration: none;
	}
	@import url('https://fonts.googleapis.com/css?family=Josefin+Sans');
	*{
		font-family: 'Josefin Sans', cursive;
	}
	.text-prensent{
		font-family: 'Josefin Sans', cursive;
		color:#f1f2f6;
	}
	.span-red{
		color: #e74c3c;
		font-weight: bold;
	}
	.content-login{
		width: 100%;
		display: flex;
		justify-content: flex-end;
		padding:20px 20px;
	}
	.btn-registro,.btn-login{
		width: 200px;
		height: 50px;
		margin:0 10px;
		font-size: 25px;
		font-family: 'Josefin Sans', cursive;
	}
	.btn-registro{
		background-color: #3498db;
		color:white;
	}
	.btn-login,.btn-publicar{
		background-color: #e74c3c;
		color:white;
	}
	
	.input-buscar{
		border-radius: 0px;
	}
	.input-buscar:focus{
		border-color: #e74c3c;
		box-shadow: 0px 0px 8px #e74c3c;
	}

	/*
	* Content Carousel
	*/

	.card-content-product{
		box-shadow: 0px 5px 15px #2d3436;
	}
	.card-footer{
		background-color:  #3498db;

	}
	.precio-content{
		padding: 10px 10px;
		text-align: center;

	}
	.precio{
		color: white;
		font-weight: bold;
		font-size: 20px;
	}
</style>