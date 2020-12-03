<script>
document.addEventListener('DOMContentLoaded', function() {
    var initialLocaleCode = 'es';
    var localeSelectorEl = document.getElementById('locale-selector');
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
        },
        initialDate: '2020-12-04',
        locale: initialLocaleCode,
        buttonIcons: false, // show the prev/next text
        weekNumbers: true,
        navLinks: true, // can click day/week names to navigate views
        selectable: true,
        selectMirror: true,
        select: function(arg) {
            var title = prompt('titulo del evento:');
            if (title) {
                calendar.addEvent({
                    title: title,
                    start: arg.start,
                    end: arg.end,
                    allDay: arg.allDay
                })
            }
            calendar.unselect()
        },
        eventClick: function(arg) {
            if (confirm('esta seguro que quiere eliminar este evento?')) {
                arg.event.remove()
            }
        },
        editable: true,
        dayMaxEvents: true, // allow "more" link when too many events
        events: [{
                title: 'todo el dia en evento',
                start: '2020-12-01'
            },
            {
                title: 'dia de las velitas',
                start: '2020-12-07',
                end: '2020-12-07'
            },
            {
                groupId: 999,
                title: 'alguito',
                start: '2020-12-09T16:00:00'
            },
            {
                groupId: 999,
                title: 'alguito',
                start: '2020-12-16T16:00:00'
            },
            {
                title: 'Conferencia',
                start: '2020-12-11',
                end: '2020-12-13'
            },
            {
                title: 'reuniones',
                start: '2020-12-12T10:30:00',
                end: '2020-12-12T12:30:00'
            },
            {
                title: 'almuerzo',
                start: '2020-12-12T12:00:00'
            },
            {
                title: 'reunion',
                start: '2020-09-12T14:30:00'
            },
            {
                title: 'hora felis',
                start: '2020-12-12T16:20:00'
            },
            {
                title: 'cena',
                start: '2020-09-12T20:00:00'
            },
            {
                title: 'fiesta',
                start: '2020-09-13T07:00:00'
            }
        ]
    });

    calendar.render();

    // build the locale selector's options
    calendar.getAvailableLocaleCodes().forEach(function(localeCode) {
        var optionEl = document.createElement('option');
        optionEl.value = localeCode;
        optionEl.selected = localeCode == initialLocaleCode;
        optionEl.innerText = localeCode;
        localeSelectorEl.appendChild(optionEl);
    });

    // when the selected option changes, dynamically change the calendar option
    localeSelectorEl.addEventListener('change', function() {
        if (this.value) {
            calendar.setOption('locale', this.value);
        }
    });

});
</script>
<style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
}

#top {
    background: #eee;
    border-bottom: 1px solid #ddd;
    padding: 0 10px;
    line-height: 40px;
    font-size: 12px;
}

#calendar {
    max-width: 1100px;
    margin: 40px auto;
    padding: 0 10px;
}
</style>
</head>

<body>

    <div id='top'>

        Selector de idioma:
        <select id='locale-selector'></select>

    </div>

    <div id='calendar'></div>

</body>