document.addEventListener('DOMContentLoaded', function() {
    let initialCode = 'fr';
    let calendarEl = document.getElementById('calendar');

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
        eventLimit: true, // allow "more" link when too many events
        events: {
            url: '/?controller=planning&mode=admin&action=load',
            extraParams: {
                id: 'coucou'
            }
        },
        locale: 'fr',
        defaultDate: Date.now(),
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
        selectable: true,
        selectHelper: true,

        // select: function(start, end, allDay)
        // {
        //     let title = prompt("Enter Event Title");
        //     if(title)
        //     {
        //         let start = formatDate(start, "Y-MM-DD HH:mm:ss");
        //         let end = formatDate(end, "Y-MM-DD HH:mm:ss");
        //         console.log(start)
        //         console.log(end)
        //         $.ajax({
        //             url:'/?controller=planning&mode=admin&action=insert',
        //             type:"POST",
        //             data:{title:title, start:start, end:end},
        //             success:function()
        //             {
        //                 calendar.fullCalendar('refetchEvents');
        //                 alert("Added Successfully");
        //             }
        //         })
        //     }
        // },
        select: function(start, end, allDay)
        {
            // START
            let title = prompt("Titre de l'événement");


            startFormat = refactorDate(start.start.getFullYear(),
                start.start.getMonth(),
                start.start.getDate(),
                start.start.getHours(),
                start.start.getMinutes(),
                start.start.getSeconds());

            endFormat = refactorDate(start.end.getFullYear(),
                start.end.getMonth(),
                start.end.getDate(),
                start.end.getHours(),
                start.end.getMinutes(),
                start.end.getSeconds());

            if(title)
            {
                start = startFormat
                end = endFormat
                // if (end.length > 1) {
                //     end = calendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                // }
                $.ajax({
                    url:'/?controller=planning&mode=admin&action=insert',
                    type:"POST",
                    data:{title:title, start:start, end:end},
                    // success:function()
                    // {
                    //     calendar.fullCalendar('refetchEvents');
                    //     alert("Ajouté avec succes");
                    // }
                    success:function () {
                        calendar.refetchEvents();
                    }
                })
            }
        },


        editable:true,


        eventClick:function(event)
        {
            if(confirm("Voulez vous vraiment supprimer cet événement?"))
            {
                var id = event.event.id;
                $.ajax({
                    url:"/?controller=planning&mode=admin&action=delete",
                    type:"POST",
                    data:{id:id},
                    success:function()
                    {
                        calendar.refetchEvents();
                    }
                })
            }
        },


    });

    calendar.render();


});

function refactorDate(y, m, j, h, min, s) {
    // START
    let mois = "";
    if (m + 1 < 10) {
        mois += "0"
    }
    mois += parseInt(m) + 1;

    let jour = "";
    if (j + 1 < 10) {
        jour += "0"
    }
    jour += j;

    let heure = ""
    if (h < 1) {
        heure = "00"
    } else if(h < 10) {
        heure = "0" + h
    } else {
        heure = h
    }

    let minutes = ""
    if (min < 1) {
        minutes = "00"
    } else if(m < 10) {
        minutes = "0" + min
    } else {
        minutes = min
    }

    let secondes = "00"

    let jourPlus = parseInt(jour) + 1;
    if (jourPlus < 10) {
        jourPlus = "0" + jourPlus;
    }

    return (y + "-" + mois + "-" + jour + " " + heure + ":" + minutes + ":" + secondes)
}

function eventModif(event)
{
    let start = refactorDate(event.event.start.getFullYear(),
        event.event.start.getMonth(),
        event.event.start.getDay(),
        event.event.start.getHours(),
        event.event.start.getMinutes(),
        event.event.start.getSeconds());

    let end = refactorDate(event.event.end.getFullYear(),
        event.event.end.getMonth(),
        event.event.end.getDay(),
        event.event.end.getHours(),
        event.event.end.getMinutes(),
        event.event.end.getSeconds());

    let title = event.event.title;

    let id = event.event.id;
    $.ajax({
        url:"/?controller=planning&mode=admin&action=update",
        type:"POST",
        data:{title:title, start:start, end:end, id:id},
        success:function(){
            calendar.refetchEvents()
        }
    })
}