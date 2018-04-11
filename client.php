<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Formulaire client</title>
    <script src="jquery.js"></script>
</head>

<body>
<h1>Formulaire client</h1>
<fieldset>
	<div>
    <p>Nom: <input type="text" name="nom" id="nom"></p><br>
    <p>Prénom: <input type="text" name="prenom" id="prenom"></p><br>
	<p>Email: <input type="email" name="email" id="email"></p><br>
	
    <input type="submit" value="S'inscrire" name="submit" id="btn-submit">
	</div>
</fieldset>

<script>
    $('#btn-submit').click(function(){
        var nom = $('#nom').val();
        var prenom = $('#prenom').val();
		var email = $('#email').val();
        $.ajax({
            type: "POST",
			contentType: 'application/json; charset=utf-8',
            url: "http://localhost/tdSlim/slim/client?nom="+nom+"&prenom="+prenom+"&email="+email,
            success: function(data){
				alert("Le client a été enregistré");
            }
        });
    });
</script>

</body>

</html>