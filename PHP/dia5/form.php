<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>form</title>
	<meta >
	<style>
		form{
			font-size:12px;

		}
	</style>
</head>
<body>
<form>
	<fieldset><legend>User personal info</legend><!--user data -->
		<p><label for="iname">username:</label><input type="text" name="nname" id="iname" size="20" maxlength="12" placeholder="username">
		<small>*your username can have max 12 char</small></p>

		<p><label for="ipass">password:</label><input type="password" name="npass" id="ipass" maxlength="12" placeholder="with max 12 char"><br></p>
		<p>
		<label for="iborn">birthday:</label><input type="date" name="nborn" id="iborn">
	</p>


		<p><label>gender:</label><br>

		<input type="radio" name="ngender" id="iMasc" checked><label for="iMasc">Male</label>
		<input type="radio" name="ngender" id="iFem"><label for="iFem">Female</label>
		</p>

	</fieldset>
	<fieldset><legend>User contact info</legend>
		<p><label for=imail>e-mail:</label>
			<input/ type="e-mail" name="nmail" id="imail"></p>
		<p><label for="itel">phone:</label><input type="tel" name="ntel" id="itel"></p>
	</fieldset>
</form>
</body>
</html>