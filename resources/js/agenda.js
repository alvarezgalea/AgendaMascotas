$( document ).ready(function() {
    
  $('#btnGuardar').click(function(e){
          e.preventDefault()
          var urls =  $('form').attr('action');
          var form =  $('form');
          console.log(form.serialize());

        $.ajax({
          method: "POST",
          url: urls,
          data: form.serialize()
        }).done(function(res) {
            $('.modal').modal('hide')
            console.log(res)
        });
    
    });
   
});


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
      $('#evento').modal();
    }
  
  });
  
calendar.render();


});




