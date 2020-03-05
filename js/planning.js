
document.addEventListener('DOMContentLoaded', function() {
    var initialCode = 'fr';
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
        },
        defaultDate: '2019-08-12',
        buttonIcons: false, // show the prev/next text
        weekNumbers: true,
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        navLinks: true, // can click day/week names to navigate views
        events: '/?controller=planning&mode=admin&action=load',
        selectable: true,
        selectMirror: true,
        selectHelper: true,
        locale: 'fr',
        showNonCurrentDates: false,
        weekends: false,
        firstDay: 1,
        eventTextColor: "#FFFFFF",
        buttonText: {
            today:    'Aujourd\'hui',
            month:    'Mois',
            week:     'Semaine',
            day:      'Jour',
            list:     'Liste',
            prev:     'Précédent',
            next:     'Suivant'
        },
        select: function(start, end, allDay)
        {
            let title = prompt("Enter Event Title");
            if(title)
            {
                let start = calendarEl.formatDate(start, "Y-MM-DD HH:mm:ss");
                let end = calendarEl.formatDate(end, "Y-MM-DD HH:mm:ss");
                $.ajax({
                    url:'/?controller=planning&mode=admin&action=insert',
                    type:"POST",
                    data:{title:title, start:start, end:end},
                    success:function()
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Added Successfully");
                    }
                })
            }
        },

        eventResize:function(event)
        {
            var start = calendarEl.formatDate(event.start, "Y-MM-DD HH:mm:ss");
            var end = calendarEl.formatDate(event.end, "Y-MM-DD HH:mm:ss");
            var title = event.title;
            var id = event.id;
            $.ajax({
                url:"/?controller=planning&mode=admin&action=update",
                type:"POST",
                data:{title:title, start:start, end:end, id:id},
                success:function(){
                    calendar.fullCalendar('refetchEvents');
                    alert('Event Update');
                }
            })
        },

        eventDrop:function(event)
        {
            var start = calendarEl.formatDate(event.start, "Y-MM-DD HH:mm:ss");
            var end = calendarEl.formatDate(event.end, "Y-MM-DD HH:mm:ss");
            var title = event.title;
            var id = event.id;
            $.ajax({
                url:"/?controller=planning&mode=admin&action=update",
                type:"POST",
                data:{title:title, start:start, end:end, id:id},
                success:function()
                {
                    calendar.fullCalendar('refetchEvents');
                    alert("Event Updated");
                }
            });
        },

        eventClick:function(event)
        {
            if(confirm("Are you sure you want to remove it?"))
            {
                var id = event.id;
                $.ajax({
                    url:"/?controller=planning&mode=admin&action=delete",
                    type:"POST",
                    data:{id:id},
                    success:function()
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event Removed");
                    }
                })
            }
        },


});

    calendar.render();


});
