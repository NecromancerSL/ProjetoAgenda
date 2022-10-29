function calendar(mois){

    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth();
    var year = date.getYear();

    if(year<=200)
    {
            year += 1900;
    }
    var months = new Array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
    var days_in_month = new Array(31,28,31,30,31,30,31,31,30,31,30,31);

    var moisaujorduiu = month;

    month = mois;

    //ano bissesto, muda dia fevereiro
    if(year%4 == 0 && year!=1900)
    {
            days_in_month[1]=29;
    }


    total = days_in_month[month]; //days month

    var date_today = day+' '+months[month]+' '+year;//22 ouctober 2014

    beg_j = date; //today date

    if(month > 0) { 
        soma = 0;
        for(var m=0; m<month; m++) {
            soma += days_in_month[m];
        }
        beg_j.setDate(soma+1);
    }
    else {
        beg_j.setDate(1);
    }


    if(beg_j.getDate()==2) //1
    {
            beg_j=setDate(0);
    }
    beg_j = beg_j.getDay();

    document.write('<table style ="text-align:center" class="table"><tr><th colspan="7"style ="color:Orange">'+'<h2>'+months[mois]+' '+year+'</h2>'+'</th></tr><br>');
    document.write('<tr class="cal_d_weeks"><th>Domingo</th><th>Sengunda</th><th>Terça</th><th>Quarta</th><th>Quinta</th><th>Sexta</th><th>Sabado</th></tr><tr></thead>'); 
    week = 0;

    for(i=1;i<=beg_j;i++)
    {
           document.write('<td><div class ="divday" />'+(days_in_month[month-1]-beg_j+i)+'</div></td>');
            week++;
    }
    for(i=1;i<=total;i++)
    {
            if(week==0)
            {
                document.write("<tr>");
            }

            if(day==i && moisaujorduiu==month) //si le jour = le jour de aujordhui est si le mois = mois aujordui 
            {

                document.write("<td><b><div class ='divtoday' onclick='open_popup(\""+i+" "+months[month]+"\")' href='#'>"+i+"</div><b></td>"); //day of today
            }
            //les autre jours
            else
            {
                document.write("<td><div class ='divday' onclick='open_popup(\""+i+" "+months[month]+"\")' href='#'>"+i+"</div></td>");
            }
            week++;
            if(week==7)
            {
                    document.write('</tr>');
                    week=0;
            }
    }

        //pour les jour du prochain mois

         for(i=1;week!=0;i++)
        {
                document.write('<td><div class ="divday">'+i+'</td>');
                week++;
                if(week==7)
                {
                        document.write('</tr>');
                        week=0;
                }
        }
    document.write('</table>');
}