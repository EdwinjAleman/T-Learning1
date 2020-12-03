<div class="row mt">
    <aside class="col-lg-3 mt">
        <div id="calendar"></div>

        <script type="text/javascript">
        $(document).ready(function() {
            $('#calendar').fullCalendar({
                theme: true,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                editable: false,
                events: "/Calendar/GetEvents/"
            });
        });
        </script>
    </aside>