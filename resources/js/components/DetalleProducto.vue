<template>
<div class="detalle-producto">
	<section id="producto-detalles">
		<div class="container-fluid">
			<div class="row">
				<div class="col-7">
					<div class="caja-imagen-producto mt-5">
					<carousel-3d :controls-visible="true" :controls-prev-html="'&#10092;'" :controls-next-html="'&#10093;'" 
               			:controls-width="30" :controls-height="60" :clickable="false">
					<slide v-for="(slide, i) in slides" :index="i" :key="i">
					<figure>
						<img src="https://placehold.it/360x270">
					</figure>
					</slide>
				</carousel-3d>
					</div>
				</div>
				<div class="col-5">
					<div class="caja-detalle-compra pt-5">
						<h1 class="titulo-producto text-center">Nombre produco a la venta, el vendedor es genial</h1>
						<div class="precio">
							<h3 class="precio-producto text-center">Precios: $2000</h3>
						</div>
						<div class="boton-comprar">
							<button class="btn btn-comprar">Comprar <font-awesome-icon icon="shopping-cart" /></button>
						</div>
						<div class="informacion-comprador">
							<h5 class="pl-2"><font-awesome-icon icon="user"/> Detalle del Vendedor</h5>
							<div class="detalle-ventas d-flex justify-content-start">
								<p class="text-left mx-2">Ventas: <span class="informacion">300</span></p>
								<p class="text-left mx-2">Recomendaciones: <span class="informacion">200</span></p>
								<p class="text-left mx-2">productos: <span class="informacion">200</span></p>
							</div>
						</div>
						<div class="envio my-3 px-2 py-3">
							<h5 class="pl-2"><font-awesome-icon icon="dolly"/> Envio</h5>
							<h4><strong>precio del envio $25 </strong></h4>
							<p>el envio se hace a todas partes del pais o puedes visitar nuestra sucursal.
							</p>						
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="descripcion">
		<div class="container">
			<div class="row">
				<div class="col-8">
					<h1>Descripcion General</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, eligendi.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, eligendi.</p>
					<p>Lorem ipsum dolor sit amet.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus dicta ipsam vel voluptas beatae explicabo iste, quisquam libero? Perspiciatis, blanditiis!</p>
				</div>
			</div>
		</div>
	</section>
	<section id="preguntas">
		<div class="container">
			<div class="row">
				<div class="col-8">
					<h1>Preguntas al Vendedor</h1>
					<div class="caja-preguntas-respuestas">
						<div class="pregunta">
							<div class="interesado">
								<p class="text-muted">Javier Medina</p>
								<p>Hola Amigo Dispones del Producto?</p>
							</div>
							<div class="respuesta-vendedor">
								<p class="text-muted">Luis Master</p>
								<p>Si amigo aun disponible</p>
							</div>
						</div>
					</div>
					<div class="realizar-pregunta">
						<form action="">
							<div class="form-group d-flex">
								<input type="text" name="pregunta" class="form-control">
								<button class="btn btn-success">Enviar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
</template>
<script>
import {Carousel3d,Slide} from 'vue-carousel-3d';
export default {
	components:{
		Carousel3d,
		Slide
	},
	data(){
		return{
			slides:5,
		};
	},
	methods:{

	},
}
</script>
<style scoped>
	@import url('https://fonts.googleapis.com/css?family=Josefin+Sans');
	*{
		font-family: 'Josefin Sans', cursive;
	}
#producto-detalles{
	background-color: #f1f2f6;
}
.caja-imagen-producto{
}

.caja-detalle-compra{
	background-color: #dfe4ea;
}
.titulo-producto{
	color:#2f3542;
	font-size: 2em;
	font-weight: bold;
}
.informacion-comprador{
	background-color: #3498db;
	padding: 10px 0;
	box-shadow: 0px 0px 10px #2f3542;
	margin: 10px 0px;

}
.informacion-comprador h5{
	color:white;
	font-size: 1.6em;
}
.detalle-ventas{
	padding: 10px 0;
}
.detalle-ventas p {
	color:white;
	font-size: 15px;
}
.detalle-ventas p span{
	color:#2ed573;
}

.boton-comprar{
	width: 100%;

}
.btn-comprar{
	background-color: #e74c3c;
	width: 250px;
	color: white;
	font-weight: bold;
	font-size: 25px;
	display: table;
	margin:20px auto;
	box-shadow: 0px 0px 10px #2f3542;
}
.envio h5{
  font-size: 1.6em;
}
</style>