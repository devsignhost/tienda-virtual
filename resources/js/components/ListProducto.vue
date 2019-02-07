<template>
<div class="list-producto">
	<div class="container">
		<div class="row mt-5">
			<div class="col-3">
				<h4>Categorias</h4>
				<ul class="content-categorias">
					<li class="categoria-list"><a href="#">Celulares</a></li>
					<li class="categoria-list"><a href="#">Ropa</a></li>
					<li class="categoria-list"><a href="#">Cosas para el hogar</a></li>
					<li class="categoria-list"><a href="#">Juegos</a></li>
					<li class="categoria-list"><a href="#">computadoras</a></li>
				</ul>
			</div>
			<div class="col-9">
				<div class="row">
					<div v-for="(item,i) in 10" :key="i" class="col-4 my-3">
						<router-link to="producto/titulo" class="card card-producto">
						<img src="https://via.placeholder.com/350x200" class="respnsive" alt="">
						<div class="card-body">
							<h3 class="card-text text-center">Titulo del Producto 1</h3>
							<p class="card-text text-right"> $200</p>
						</div>
						</router-link>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</template>
<script>
	
</script>
<style scoped>
/*Columna izquierda*/
ul.content-categorias{
	padding: 0px;
}
li.categoria-list{
	list-style: none;
	padding: 5px 0px;
	border-top:solid 1px #d1d8e0;

}
li.categoria-list a {
	text-decoration: none;
}
	

/*Columna Derecha*/
.card-producto{
	box-shadow: 0px 2px 10px #1e272e;
	transition: .5s all;
}
.card-producto:hover{
	transform: scale(1.1);
	box-shadow: 0px 0px 5px #1e272e;
}
	
</style>