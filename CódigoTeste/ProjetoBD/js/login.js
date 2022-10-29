let email = document.getElementById('email');
let senha = document.getElementById('senha');
let acessar = document.getElementById('btnacessar');
let alerta = document.getElementById('alerta');

let acesso = false;
let cont = 0;


function acessarSistema(){


 if(cont<2){ 

  let emailbd = 'teste@teste.com.br';
  let senhabd = '123456';

  if(email.value == ''){
     alert('Preencher E-mail');
     email.focus();
     return;
  }

  if(senha.value == ''){
   alert('Preencher Senha');
   senha.focus();
   return;
  }
  


  if(email.value==emailbd && senha.value==senhabd){
     alert('Acesso liberado');
     window.location.href = 'home.html';
     

  }else{
     //alert('Acesso negado! Tentativa: '+cont);
     alerta.removeAttribute('hidden');
     alerta.textContent = 'Acesso negado! Tentativas restantes: '+ (2-cont);
     cont++;
     
  }
 

 }else{
   alerta.textContent = 'Acesso bloqueado!';
 }


}



acessar.addEventListener('click', acessarSistema);
