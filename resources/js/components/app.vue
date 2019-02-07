<template>
<div class="app">
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Tienda SPA Laravel</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<router-link class="nav-link" to="/">Inicio <span class="sr-only">(current)</span></router-link>
					</li>
					<li class="nav-item">
						<router-link to="/producto" class="nav-link">productos</router-link>
					</li>
				</ul>
				<form id="form-buscador" class="form-inline mx-auto">
					<div class="form-group">
						<input  type="text" class="text-buscar form-control">
						<select  class="categoria-buscar form-control">
							<option value="">Buscar por categoria</option>
						</select>
						<button class="btn btn-buscar">Buscar</button>
					</div>
				</form>
				<ul class="navbar-nav ml-auto mr-2">
					<li class="nav-item">
						<a class="nav-link" href="#">Únete <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Ingresar</a>
					</li>
				</ul>
			</div>
		</nav>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb mb-0 py-3 px-5" >
				<li class="breadcrumb-item"><a href="#">Inicio</a></li>
				<li class="breadcrumb-item"><a href="#">producto</a></li>
				<li class="breadcrumb-item active" aria-current="page">celular</li>
			</ol>
		</nav>
	</header>
	<router-view></router-view>
</div>
</template>
<script>
export default {
}
</script>
<style scoped>
	.form-group{
		border:solid 1px #e74c3c;
	}
	.text-buscar, .categoria-buscar, .btn-buscar{
		height: 35px;
		border-radius: 0px;
		border-right: none;
	}
	.btn-buscar{
		background-color:#e74c3c;
	}
</style>