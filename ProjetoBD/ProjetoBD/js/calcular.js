let notas = document.getElementById('notas');
let lista = document.getElementById('lista');
let adicionar = document.getElementById('btnadicionar');
let limpar = document.getElementById('btnlimpar');
let barra = document.getElementById('barra');


var elementos = new Array();
var contadorava =  1;


function adicionarNota(){

    let soma = 0;
    let media = 0;
    
    elementos.push(parseFloat(notas.value));
    
    let campo = document.createElement('li');
    campo.setAttribute('class', 'list-group-item');
    campo.innerHTML = 'Avaliação '+contadorava+': '+parseFloat(notas.value).toFixed(1);
    contadorava++;
    lista.appendChild(campo);      


    for (let i = 0; i < elementos.length; i++) {     
        
        soma = soma + elementos[i];       
        media = soma/elementos.length;

        if(media>=7){
            barra.setAttribute('style', 'width: '+media*10+'%;');
            barra.setAttribute('class', 'progress-bar bg-primary');
            barra.textContent = media.toFixed(1) + ' Aprovado'; 
           
        }else if(media<4){
            barra.setAttribute('style', 'width: '+media*10+'%;');
            barra.setAttribute('class', 'progress-bar bg-danger');
            barra.textContent = media.toFixed(1) + ' Reprovado'; 
        }else{
            barra.setAttribute('style', 'width: '+media*10+'%;');
            barra.setAttribute('class', 'progress-bar bg-warning');
            barra.textContent = media.toFixed(1) + ' Exame  '; 
        }       
        
    } 
     
    notas.value = '';
    notas.focus();
  
}

function limparNotas(){

    while(lista.firstChild){
        lista.removeChild(lista.firstChild);
    }

    barra.setAttribute('style', 'width: 0%');
    notas.value = null;
    elementos = new Array();
    contadorava = 1;
   
}


adicionar.addEventListener('click', adicionarNota);
limpar.addEventListener('click', limparNotas);