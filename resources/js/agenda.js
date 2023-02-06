


document.addEventListener('DOMContentLoaded', function() {

        let formulario = document.querySelector("form");



        var calendarEl = document.getElementById('agenda');
        var calendar = new FullCalendar.Calendar(calendarEl, {

          initialView: 'dayGridMonth',
          droppable: true,
          showNonCurrentDates: false,
          locale:"es",

          headerToolbar: {
            left:'prev,next today',
            center:'title',
            right: 'dayGridMonth,timeGridWeek,listWeek'
          },

  
           dateClick:function(info) {
            alert('Clicked on: ' + info.dateStr);
            //alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
            //alert('Current view: ' + info.view.type);
            // change the day's background color just for fun
            //info.dayEl.style.backgroundColor = 'red';
            $('#evento').modal();
          }





        });
        calendar.render();



        document.getElementById("btnGuardar").addEventListener("click",function(){

          const datos= new FormData(formulario);
          console.log(datos);



          axios.post("http://localhost/Proyecto/example-app/public/citas/agregar", datos).
          then(function (response) {
            console.log(response);
        })
        .catch(function (error) {
            console.log(error);
        });

          

        });




      });