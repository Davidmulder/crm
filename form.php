
<!DOCTYPE html>
<html>


<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>	



<script> 
    $(function(){
      $("#includedcm").load("crm.html"); 
    });
    </script> 
     <div id="includedcm"></div>

<link rel="stylesheet" href="https://www.grupoliberal.com/crm/style.css">
</head>

<body>


<form method="post"  id="form">

  <div class="form-group">
    <input type="text" name="name" id="nome" class="form-control rounded-left" placeholder="Nome" required>
  </div>
  <div class="form-group">
    <input type="email" name="email" id="email" class="form-control rounded-left" placeholder="E-Mail" required>
  </div>
  <div class="form-group">
   <select name="curso" id="curso" class="form-control rounded-left">
      <option selected>Escolha o Curso</option>		
      <option>Enfermagem</option>
      <option>Medicia</option>
      <option>Odotologia</option>
    </select>
  </div>
  <div class="form-group">
    <input type="text" name="phone" id="textfield3" placeholder="Telefone" maxlength="15" class="form-control rounded-left" required>
  </div>
  <div class="form-group">
    <textarea name="messagem" id="textarea" class="form-control rounded-left" placeholder="Mensagem" ></textarea>
  </div>
  <div class="form-group">
    <input type="submit" name="button" id="enviar" value="Enviar" class="btn btn-primary rounded submit p-3 px-5">
    <input name="cap" type="hidden" id="cap" value="FORM_FIBRA_ODONTO">
  </div>
  
</form>


	
	</body>
	
</html>