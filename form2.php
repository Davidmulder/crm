<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!DOCTYPE html>
<html>


<head>
<script type='text/javascript' src='https://www.grupoliberal.com/wp-includes/js/jquery/jquery.min.js?ver=3.5.1' id='jquery-core-js'></script>
<script type='text/javascript' src='https://www.grupoliberal.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>	
	
	
	
<script>
setTimeout(function(){var a=document.createElement("script"),b=document.getElementsByTagName("script")[0]; a.src=document.location.protocol+"//cdn.reweb-corp.com/rwlead.js?"+Math.floor(new Date().getTime()/3600000); a.async=true; a.type="text/javascript"; b.parentNode.insertBefore(a,b); }, 1);
	
$('.form').submit(function(e){
	//cancela ação padrão de submit
	e.preventdefault();
	var meio_captacao = 'FORM_CONTATO';
	var name = $(this).find('input[name="name"]').val();
	var email = $(this).find('input[name="email"]').val();
	var phone = $(this).find('input[name="phone"]').val();
	var message = $(this).find('input[name="message"]').val();
	var message_html = '<p><b>Nome: </b>'+ name +'</p>';  message_html+= '<p><b>Email:</b>'+ email +'</p>';  message_html+= '<p><b>Telefone:</b>'+ phone +'</p>';message_html+= '<p><b>Mensagem:</b>'+ message +'</p>';	
//matriz
	var unit_id = 1;
	//setando diretamente
	var city = 'BELEM';
	//setando através do formulário
	var city = $(this).find('input[name="city"]').val();
	//setando diretamente
	var states = 'PA';
	//setando através do formulário
	var states = $(this).find('input[name="states"]').val();
	//setando diretamente
	var country = 'Brasil';
	//setando através do formulário
	var country = $(this).find('input[name="country"]').val();
	//executa o método registraLead
	registraLead(meio_captacao, name, email, phone, message, message_html, unit_id, city, states, country);
	return true;
	
});
	
 	// Registra acesso
setTimeout(function () {
  var a = document.createElement('script');
  var b = document.getElementsByTagName('script')[0];
  a.src = document.location.protocol + '//cdn.reweb-corp.com/rwra.0.0.1.js?' + Math.floor(new Date().getTime() / 3600000);
  a.async = true;
  a.type = 'text/javascript';
  b.parentNode.insertBefore(a, b);
}
, 1);

// Obtem o token
function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for (var i = 0; i < ca.length; i++)
  {
	var c = ca[i];
	while (c.charAt(0) == ' ')
	  c = c.substring(1);
	if (c.indexOf(name) == 0)
	  return c.substring(name.length, c.length);
  }
  return "";
}

//registraLead JS
var token = getCookie('rw[token]');
var request = new XMLHttpRequest();

request.open('POST', 'https://service.reweb-corp.com/register/lead');
request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

request.onreadystatechange = function () {
  if (this.readyState === 4) {
	console.log('Status:', this.status);
	console.log('Headers:', this.getAllResponseHeaders());
	console.log('Body:', this.responseText);
  }
};

	
var body = 'token=' + token + "&";
body += 'captation_means=FORM_CONTATO' + "&";
body += 'name=Nome do Remetente' + "&";
body += 'email=email@dominio.com' + "&";
body += 'phone=5199999999' + "&";
body += 'message=Descrição da mensagem' + "&";
body += 'message_html=<strong>Registrar lead</strong>' + "&";
body += 'city=Porto Alegre' + "&";
body += 'region=RS' + "&";
body += 'country=Brasil';

request.send(body);	
	
	
	
	
	
	
	
</script>

</head>

<body>


<form id="FORM_CONTATO" name="FORM_CONTATO" method="post"  >

  <p>
    <label for="textfield">Nome:</label>
    <input type="text" name="name" id="textfield">
  </p>
  <p>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
  </p>
  <p>
    <label for="textfield3">Telefone:</label>
    <input type="text" name="phone" id="textfield3">
  </p>
  <p>
    <label for="textarea">Mensagens:</label>
    <textarea name="message" id="textarea"></textarea>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar">
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
	
	
	
	</body>
	
</html>