
// Variables globales
let currentDate = new Date();
let events = JSON.parse(localStorage.getItem('calendarEvents')) || {};
let selectedEventId = null;

// Elementos del DOM
const calendarEl = document.getElementById('calendar');
const monthYearEl = document.getElementById('month-year');
const prevMonthBtn = document.getElementById('prev-month');
const nextMonthBtn = document.getElementById('next-month');
const addEventBtn = document.getElementById('add-event-btn');

const eventModal = document.getElementById('event-modal');
const eventForm = document.getElementById('event-form');
const eventDateInput = document.getElementById('event-date');
const eventTitleInput = document.getElementById('event-title');
const eventDescInput = document.getElementById('event-description');
const modalTitle = document.getElementById('modal-title');
const modalClose = document.querySelector('#event-modal .close');

const detailsModal = document.getElementById('event-details-modal');
const detailsTitle = document.getElementById('event-details-title');
const detailsDate = document.getElementById('event-details-date');
const detailsDesc = document.getElementById('event-details-description');
const detailsClose = document.getElementById('details-close');
const editEventBtn = document.getElementById('edit-event-btn');
const deleteEventBtn = document.getElementById('delete-event-btn');

// Inicialización
renderCalendar();

// Event Listeners
prevMonthBtn.addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    renderCalendar();
});

nextMonthBtn.addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    renderCalendar();
});

addEventBtn.addEventListener('click', () => {
    modalTitle.textContent = 'Agregar Evento';
    eventForm.reset();
    const today = new Date();
    eventDateInput.value = formatDateForInput(today);
    selectedEventId = null;
    openModal(eventModal);
});

modalClose.addEventListener('click', () => {
    closeModal(eventModal);
});

detailsClose.addEventListener('click', () => {
    closeModal(detailsModal);
});

eventForm.addEventListener('submit', (e) => {
    e.preventDefault();
    saveEvent();
});

editEventBtn.addEventListener('click', () => {
    if (selectedEventId) {
        const event = getEventById(selectedEventId);
        if (event) {
            modalTitle.textContent = 'Editar Evento';
            eventDateInput.value = formatDateForInput(new Date(event.date));
            eventTitleInput.value = event.title;
            eventDescInput.value = event.description || '';
            closeModal(detailsModal);
            openModal(eventModal);
        }
    }
});

deleteEventBtn.addEventListener('click', () => {
    if (selectedEventId && confirm('¿Estás seguro de que deseas eliminar este evento?')) {
        deleteEvent(selectedEventId);
        closeModal(detailsModal);
        renderCalendar();
    }
});

window.addEventListener('click', (e) => {
    if (e.target === eventModal) {
        closeModal(eventModal);
    }
    if (e.target === detailsModal) {
        closeModal(detailsModal);
    }
});

// Funciones
function renderCalendar() {
    // Limpiar el calendario
    calendarEl.innerHTML = '';
    
    // Actualizar el encabezado del mes y año
    const monthNames = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    monthYearEl.textContent = `${monthNames[currentDate.getMonth()]} ${currentDate.getFullYear()}`;
    
    // Agregar los encabezados de días
    const dayNames = ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'];
    dayNames.forEach(day => {
        const dayHeaderEl = document.createElement('div');
        dayHeaderEl.className = 'day-header';
        dayHeaderEl.textContent = day;
        calendarEl.appendChild(dayHeaderEl);
    });
    
    // Obtener el primer día del mes actual
    const firstDay = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
    const startingDay = firstDay.getDay(); // 0 = Domingo, 1 = Lunes, etc.
    
    // Obtener el último día del mes actual
    const lastDay = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);
    const totalDays = lastDay.getDate();
    
    // Agregar los días del mes anterior
    const prevMonthLastDay = new Date(currentDate.getFullYear(), currentDate.getMonth(), 0).getDate();
    for (let i = startingDay - 1; i >= 0; i--) {
        const dayNum = prevMonthLastDay - i;
        const prevMonthDate = new Date(currentDate.getFullYear(), currentDate.getMonth() - 1, dayNum);
        addDayToCalendar(dayNum, prevMonthDate, true);
    }
    
    // Agregar los días del mes actual
    const today = new Date();
    for (let i = 1; i <= totalDays; i++) {
        const date = new Date(currentDate.getFullYear(), currentDate.getMonth(), i);
        const isToday = date.toDateString() === today.toDateString();
        addDayToCalendar(i, date, false, isToday);
    }
    
    // Agregar los días del mes siguiente
    const totalCells = Math.ceil((startingDay + totalDays) / 7) * 7;
    const nextMonthDays = totalCells - (startingDay + totalDays);
    for (let i = 1; i <= nextMonthDays; i++) {
        const nextMonthDate = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, i);
        addDayToCalendar(i, nextMonthDate, true);
    }
}

function addDayToCalendar(dayNum, date, otherMonth = false, isToday = false) {
    const dayEl = document.createElement('div');
    dayEl.className = 'day';
    
    if (otherMonth) {
        dayEl.classList.add('other-month');
    }
    
    if (isToday) {
        dayEl.classList.add('today');
    }
    
    const dayNumberEl = document.createElement('div');
    dayNumberEl.className = 'day-number';
    dayNumberEl.textContent = dayNum;
    dayEl.appendChild(dayNumberEl);
    
    // Comprobar si hay eventos para este día
    const dateStr = formatDate(date);
    const dayEvents = getDayEvents(dateStr);
    
    if (dayEvents.length > 0) {
        dayEl.classList.add('has-events');
        // Mostrar eventos
        dayEvents.forEach(event => {
            const eventEl = document.createElement('div');
            eventEl.className = 'event';
            eventEl.textContent = event.title;
            eventEl.addEventListener('click', (e) => {
                e.stopPropagation();
                showEventDetails(event);
            });
            dayEl.appendChild(eventEl);
        });
    }
    
    // Permitir agregar eventos haciendo clic en un día
    dayEl.addEventListener('click', () => {
        modalTitle.textContent = 'Agregar Evento';
        eventForm.reset();
        eventDateInput.value = formatDateForInput(date);
        selectedEventId = null;
        openModal(eventModal);
    });
    
    calendarEl.appendChild(dayEl);
}

function saveEvent() {
    const date = eventDateInput.value;
    const title = eventTitleInput.value.trim();
    const description = eventDescInput.value.trim();
    
    if (!date || !title) return;
    
    // Asegurarnos de que la fecha no tenga problemas con la zona horaria
    const [year, month, day] = date.split('-').map(num => parseInt(num, 10));
    const dateObj = new Date(year, month - 1, day, 12, 0, 0); // Usar mediodía para evitar problemas de zona horaria
    const dateStr = formatDate(dateObj);
    
    if (!events[dateStr]) {
        events[dateStr] = [];
    }
    
    if (selectedEventId) {
        // Actualizar evento existente
        const allEvents = getAllEvents();
        const eventIndex = allEvents.findIndex(e => e.id === selectedEventId);
        
        if (eventIndex !== -1) {
            const oldEvent = allEvents[eventIndex];
            const oldDateStr = formatDate(new Date(oldEvent.date));
            
            // Eliminar del día anterior si cambió la fecha
            if (oldDateStr !== dateStr) {
                events[oldDateStr] = events[oldDateStr].filter(e => e.id !== selectedEventId);
                if (events[oldDateStr].length === 0) {
                    delete events[oldDateStr];
                }
            } else {
                // Actualizar en el mismo día
                const dayEventIndex = events[dateStr].findIndex(e => e.id === selectedEventId);
                if (dayEventIndex !== -1) {
                    events[dateStr].splice(dayEventIndex, 1);
                }
            }
        }
    }
    
    // Crear o actualizar evento
    const event = {
        id: selectedEventId || Date.now().toString(),
        date: dateObj.toISOString(),
        title,
        description
    };
    
    events[dateStr].push(event);
    
    // Guardar en localStorage
    localStorage.setItem('calendarEvents', JSON.stringify(events));
    
    // Cerrar modal y actualizar calendario
    closeModal(eventModal);
    renderCalendar();
}

function deleteEvent(eventId) {
    const allEvents = getAllEvents();
    const event = allEvents.find(e => e.id === eventId);
    
    if (event) {
        const dateStr = formatDate(new Date(event.date));
        
        if (events[dateStr]) {
            events[dateStr] = events[dateStr].filter(e => e.id !== eventId);
            
            if (events[dateStr].length === 0) {
                delete events[dateStr];
            }
            
            // Guardar en localStorage
            localStorage.setItem('calendarEvents', JSON.stringify(events));
        }
    }
}

function showEventDetails(event) {
    selectedEventId = event.id;
    detailsTitle.textContent = event.title;
    detailsDate.textContent = formatDisplayDate(new Date(event.date));
    detailsDesc.textContent = event.description || 'Sin descripción';
    openModal(detailsModal);
}

function getDayEvents(dateStr) {
    return events[dateStr] || [];
}

function getAllEvents() {
    let allEvents = [];
    Object.keys(events).forEach(dateStr => {
        allEvents = allEvents.concat(events[dateStr]);
    });
    return allEvents;
}

function getEventById(eventId) {
    const allEvents = getAllEvents();
    return allEvents.find(event => event.id === eventId);
}

function formatDate(date) {
    return `${date.getFullYear()}-${padZero(date.getMonth() + 1)}-${padZero(date.getDate())}`;
}

function formatDateForInput(date) {
    return `${date.getFullYear()}-${padZero(date.getMonth() + 1)}-${padZero(date.getDate())}`;
}

function formatDisplayDate(date) {
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    return date.toLocaleDateString('es-ES', options);
}

function padZero(num) {
    return num.toString().padStart(2, '0');
}

function openModal(modal) {
    modal.style.display = 'block';
}

function closeModal(modal) {
    modal.style.display = 'none';
}
