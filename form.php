
<!DOCTYPE html>
<html>


<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>	


<?php include 'crm.html'; ?>
</head>

<body>


<form method="post"  id="form">

  <p>
    <label for="textfield">Nome:</label>
    <input type="text" name="name" id="textfield">
  </p>
  <p>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
  </p>
  <p>Curso 
    <label for="curso">Select:</label>
    <select name="curso" id="curso">
      <option selected>Todos os cursos</option>		
      <option>enfermagem</option>
      <option>Medicia</option>
      <option>Odotologia</option>
    </select>
  </p>
  <p>
    <label for="phone">Telefone:</label>
    <input type="text" name="phone" id="textfield3">
  </p>
  <p>
    <label for="mensag">Mensagens:</label>
    <textarea name="messagem" id="textarea"></textarea>
  </p>
  <p>
    <input type="submit" name="button" id="enviar" value="Enviar">
    <input name="cap" type="hidden" id="cap" value="FORM_FIBRA">
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>


	
	</body>
	
</html>