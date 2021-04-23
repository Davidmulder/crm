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
body += 'message=DescriC'C#o da mensagem' + "&";
body += 'message_html=<strong>Registrar lead</strong>' + "&";
body += 'city=Porto Alegre' + "&";
body += 'region=RS' + "&";
body += 'country=Brasil';

request.send(body);
