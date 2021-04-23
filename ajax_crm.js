// Registra Acesso
setTimeout(function() {
    var a=document.createElement("script"); 
    var b=document.getElementsByTagName("script")[0]; 
    a.src=document.location.protocol+"//cdn.reweb-corp.com/rwra.0.0.1.js?"+Math.floor(new Date().getTime()/3600000); 
    a.async=true;
    a.type="text/javascript";
    b.parentNode.insertBefore(a,b);
    }, 1);


    setTimeout(function(){var a=document.createElement("script"),
b=document.getElementsByTagName("script")[0]; 
a.src=document.location.protocol+"//cdn.reweb-corp.com/rwlead.js?"+Math.floor(new Date().getTime()/3600000); 
a.async=true; a.type="text/javascript"; 
b.parentNode.insertBefore(a,b); }, 1);





	
$(document).on('submit','#form',function(e){

	
	//cancela ação padrão de submit
	e.preventDefault();
	var meio_captacao = 'FORM_CONTATO';
	var name = $(this).find('input[name="name"]').val();	
	var email = $(this).find('input[name="email"]').val();
	var phone = $(this).find('input[name="phone"]').val();
	var message = $(this).find('textarea[name="messagem"]').val();
	var message_html = '<p><b>Nome: </b>'+ name +'</p>';  message_html+= '<p><b>Email:</b>'+ email +'</p>';  message_html+= '<p><b>Telefone:</b>'+ phone +'</p>';message_html+= '<p><b>Mensagem:</b>'+ message +'</p>';	
//matriz
 
alert("Mensagem Cadastrada");
//return false;

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
body += 'captation_means='+ meio_captacao + "&";
body += 'name=' +name + "&";
body += 'email='+email + "&";
body += 'phone='+phone + "&";
body += 'message='+message + "&";
body += 'message_html=<strong>' + message_html + "</strong>&";
body += 'city=Belém' + "&";
body += 'region=PA' + "&";
body += 'country=Brasil';

request.send(body);


return true;

});
