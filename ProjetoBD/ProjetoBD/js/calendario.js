function calendar(mois){
    var data = new Date();
    var dia = data.getDate();
    var mes = data.getMonth();
    var ano = data.getFullYear();

    meses = new Array ("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
    dias_meses = new Array(31,28,31,30,31,30,31,31,30,31,30,31);
    dias_semana=new Array("Segunda","Terça","Quarta","Quinta");

    if(ano%4 == 0 && ano!=1900)
    {
            dias_meses[1]=29;
    }
    total = dias_meses[mes];

    beg_j = data;
    
    
    if(mes > 0) { 
        soma = 0;
        for(var m=0; m<mes; m++) {
            soma += dias_meses[m];
        }
        beg_j.setDate(soma+1);
    }
    else {
        beg_j.setDate(1);
    }


    if(beg_j.getDate()==2)
    {
            beg_j=setDate(0);
    }
    beg_j = beg_j.getDay();

    document.write('<table class="table"><thead><tr><th colspan="7">'+meses[mes]+' '+ano+'</th></tr><br>');

    document.write('<tr class="cal_d_weeks"><th>Domingo</th><th>Sengunda</th><th>Terça</th><th>Quarta</th><th>Quinta</th><th>Sexta</th><th>Sabado</th></tr><tr></thead>'); 


document.write('</table>');
}