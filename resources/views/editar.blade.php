<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Crud</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{url ('assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{url ('assets/css/style.css')}}">
	</head>
	
	<body>

		<div class="wrapper">
			<div class="inner">
				<form action="/editar-aluno/{{$aluno->id}}" method="POST">
					@csrf
					<h3>Edição</h3>

					<label class="form-group">
						<input type="text" pattern="[A-Za-z]+" class="form-control" 	value="{{$aluno->nome}}"  name="nome">
						<span>Nome</span>
						<span class="border"></span>
						@error('nome')
							<div class="invalid-feedback">
								{{$message}}
							</div>
						@enderror
					</label>
					

					<label class="form-group">
						<input type="tel" placeholder="999999999" class="form-control" value="{{$aluno->contato}}"  name="contato">
						<span for="">Telefone</span>
						<span class="border"></span>
						@error('contato')
							<div class="invalid-feedback">
								{{$message}}
							</div>
						@enderror
					</label>
					<label class="form-group" >
						<input type="text" class="form-control" value="{{$aluno->email}}" name="email">
						<span for="">E-mail</span>
						<span class="border"></span>
						@error('email')
							<div class="invalid-feedback">
								{{$message}}
							</div>
						@enderror
					</label>

					<button>Cadastrar 
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>