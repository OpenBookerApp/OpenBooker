<div>
    <!-- HEADER -->
    <x-mary-header title="Appointments" />
    <div id="calendar"></div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar/index.global.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const calendarEl = document.getElementById('calendar')
                const calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth timeGridWeek timeGridDay listWeek',
                    },
                    events: @json($events),
                })
                calendar.render()
            })
        </script>
    @endpush
</div>
