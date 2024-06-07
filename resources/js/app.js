import './bootstrap';
import 'flowbite';

import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new Calendar(calendarEl, {
    plugins: [ dayGridPlugin ],
    events: [
      { title: 'Tournament', date: '2024-04-19' },
      { title: 'Badminton', date: '2024-04-22' },
      { title: 'Comic Con', date: '2024-04-25' }
    ]
  });

  calendar.render();
});