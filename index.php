<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
	<script type="text/javascript">
		tinymce.init({
		  selector: '#basic-conf',
		  width: 600,
		  height: 300,
		  plugins: [
		    'advlist autolink link image lists charmap print preview hr anchor pagebreak',
		    'searchreplace wordcount visualblocks code fullscreen insertdatetime media nonbreaking',
		    'table emoticons template paste help'
		  ],
		  toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
		    'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
		    'forecolor backcolor emoticons | help',
		  menu: {
		    favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
		  },
		  menubar: 'favs file edit view insert format tools table help',
		  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
		});
	</script>


	<title>Upload de Imagens</title>
</head>
<body>
	<h1>Cadastar Imagem</h1>
	<form action="inserir.php" method="POST" enctype="multipart/form-data">
		<div>
			<label>Título</label>
			<input type="text" name="title">
		</div>
		<div>
			<label>Descrição</label>
			<textarea name="description" id="basic-conf">
				
			</textarea>
		</div>
		<div>
			<label>Imagem</label>
			<input type="file" name="image">
		</div>
		<div>
			<input type="submit" value="CADASTRAR">
		</div>
	</form>
</body>
</html>