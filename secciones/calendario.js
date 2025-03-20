document.addEventListener('DOMContentLoaded', function() {
    // Verifica que jQuery esté cargado
    if (typeof jQuery === 'undefined') {
        console.error('jQuery no está cargado. El calendario no funcionará correctamente.');
        alert('Error: jQuery no está cargado. Por favor, revisa la consola.');
        return;
    }
    
    // Verifica que jQuery UI esté cargado
    if (typeof jQuery.ui === 'undefined') {
        console.error('jQuery UI no está cargado. El calendario no funcionará correctamente.');
        alert('Error: jQuery UI no está cargado. Por favor, revisa la consola.');
        return;
    }
    
    console.log('jQuery y jQuery UI están cargados correctamente');

    // Variables globales
    let currentDate = new Date();
    let selectedDate = null;
    let selectedEventId = null;
    let events = [];

    // Referencias a elementos del DOM
    const calendar = document.getElementById('calendar');
    const monthYear = document.getElementById('month-year');
    const prevBtn = document.getElementById('prev-month');
    const nextBtn = document.getElementById('next-month');
    const addEventBtn = document.getElementById('add-event-btn');
    const eventModal = document.getElementById('event-modal');
    const eventDetailsModal = document.getElementById('event-details-modal');
    const eventForm = document.getElementById('event-form');
    const closeBtn = document.querySelectorAll('.close');
    const detailsCloseBtn = document.getElementById('details-close');
    const editEventBtn = document.getElementById('edit-event-btn');
    const deleteEventBtn = document.getElementById('delete-event-btn');

    // Event listeners
    prevBtn.addEventListener('click', prevMonth);
    nextBtn.addEventListener('click', nextMonth);
    addEventBtn.addEventListener('click', showAddEventModal);
    eventForm.addEventListener('submit', saveEvent);
    editEventBtn.addEventListener('click', showEditModal);
    deleteEventBtn.addEventListener('click', deleteEvent);

    // Listener para el evento personalizado showEventDetails
    document.addEventListener('showEventDetails', function(e) {
        showEventDetails(e.detail.eventId);
    });

    // Cerrar modales
    closeBtn.forEach(btn => {
        btn.addEventListener('click', function() {
            eventModal.style.display = 'none';
            eventDetailsModal.style.display = 'none';
        });
    });

    // Cerrar modales al hacer clic fuera de ellos
    window.addEventListener('click', function(event) {
        if (event.target === eventModal) {
            eventModal.style.display = 'none';
        }
        if (event.target === eventDetailsModal) {
            eventDetailsModal.style.display = 'none';
        }
    });

    // Inicializar calendario
    loadEvents();

    // Funciones
    function loadEvents() {
        console.log('Cargando eventos...');
        // Cargar eventos desde el servidor
        fetch('../api/obtener_eventos.php')
            .then(response => {
                console.log('Respuesta obtener_eventos status:', response.status);
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                console.log('Eventos cargados:', data);
                events = data;
                renderCalendar();
            })
            .catch(error => {
                console.error('Error al cargar eventos:', error);
                console.error('Mensaje:', error.message);
                renderCalendar(); // Renderiza el calendario incluso si hay error
            });
    }

    function renderCalendar() {
        // Actualizar encabezado del mes y año
        const months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
        monthYear.textContent = `${months[currentDate.getMonth()]} ${currentDate.getFullYear()}`;

        // Crear tabla del calendario
        let firstDay = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
        let lastDay = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);
        
        let startDate = new Date(firstDay);
        startDate.setDate(startDate.getDate() - startDate.getDay());
        
        let endDate = new Date(lastDay);
        if (endDate.getDay() < 6) {
            endDate.setDate(endDate.getDate() + (6 - endDate.getDay()));
        }

        let table = '<table>';
        table += '<tr><th>Domingo</th><th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th><th>Sábado</th></tr>';

        let date = new Date(startDate);
        
        while (date <= endDate) {
            table += '<tr>';
            
            for (let i = 0; i < 7; i++) {
                const today = new Date();
                const isToday = date.toDateString() === today.toDateString();
                const isOtherMonth = date.getMonth() !== currentDate.getMonth();
                
                table += `<td class="${isToday ? 'today' : ''} ${isOtherMonth ? 'other-month' : ''}" data-date="${formatDate(date)}">`;
                table += `<span class="day-number">${date.getDate()}</span>`;
                
                // Mostrar eventos para este día
                const dayEvents = events.filter(event => {
                    const eventDate = new Date(event.fecha + 'T00:00:00Z');
                    const compareDate = new Date(Date.UTC(
                        date.getFullYear(),
                        date.getMonth(),
                        date.getDate()
                    ));
                    return eventDate.toISOString().slice(0, 10) === compareDate.toISOString().slice(0, 10);
                });
                
                dayEvents.forEach(event => {
                    // Quitamos el onclick en línea y solo usamos el data-id
                    table += `<div class="event" data-id="${event.id}">${event.titulo}</div>`;
                });
                
                table += '</td>';
                
                date.setDate(date.getDate() + 1);
            }
            
            table += '</tr>';
        }
        
        table += '</table>';
        calendar.innerHTML = table;

        // Agregar evento de clic para cada día
        document.querySelectorAll('#calendar td').forEach(day => {
            day.addEventListener('click', function(e) {
                if (e.target.classList.contains('event') || e.target.closest('.event')) {
                    return; // El clic fue en un evento, no en el día
                }
                selectedDate = this.getAttribute('data-date');
                document.getElementById('event-date').value = selectedDate;
                showAddEventModal();
            });
        });

        // Agregar evento de clic para cada evento
        document.querySelectorAll('.event').forEach(eventEl => {
            eventEl.addEventListener('click', function(e) {
                e.stopPropagation();
                const eventId = this.getAttribute('data-id');
                showEventDetails(eventId);
            });
        });
    }

    function prevMonth() {
        currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar();
    }

    function nextMonth() {
        currentDate.setMonth(currentDate.getMonth() + 1);
        renderCalendar();
    }

    function showAddEventModal() {
        // Resetear el formulario
        eventForm.reset();
        
        // Si se seleccionó una fecha, establecerla en el formulario
        if (selectedDate) {
            document.getElementById('event-date').value = selectedDate;
        }
        
        document.getElementById('modal-title').textContent = 'Agregar Evento';
        selectedEventId = null;
        eventModal.style.display = 'block';
    }

    function showEditModal() {
        eventDetailsModal.style.display = 'none';
        
        const event = events.find(e => e.id == selectedEventId);
        if (event) {
            document.getElementById('event-date').value = event.fecha;
            document.getElementById('event-title').value = event.titulo;
            document.getElementById('event-description').value = event.descripcion;
            document.getElementById('modal-title').textContent = 'Editar Evento';
            eventModal.style.display = 'block';
        }
    }

    function showEventDetails(eventId) {
        selectedEventId = eventId;
        const event = events.find(e => e.id == eventId);
        
        if (event) {
            document.getElementById('event-details-title').textContent = event.titulo;
            document.getElementById('event-details-date').textContent = formatDateDisplay(event.fecha);
            document.getElementById('event-details-description').textContent = event.descripcion || 'Sin descripción';
            eventDetailsModal.style.display = 'block';
        }
    }

    function saveEvent(e) {
        e.preventDefault();
        
        const eventData = {
            fecha: document.getElementById('event-date').value,
            titulo: document.getElementById('event-title').value,
            descripcion: document.getElementById('event-description').value,
            id: selectedEventId
        };
        
        // Determinar la URL
        const url = selectedEventId ? '../api/actualizar_evento.php' : '../api/guardar_evento.php';
        console.log('Enviando datos:', eventData);
        console.log('URL a utilizar:', url);
        
        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(eventData),
        })
        .then(response => {
            console.log('Respuesta recibida status:', response.status);
            // Obtener primero el texto completo de la respuesta
            return response.text().then(text => {
                console.log('Respuesta texto completo:', text);
                try {
                    // Intentar parsear como JSON
                    return JSON.parse(text);
                } catch (e) {
                    console.error('Error al parsear JSON:', e);
                    // Mostrar los primeros 100 caracteres de la respuesta para debug
                    console.error('Primeros caracteres recibidos:', text.substring(0, 100));
                    throw new Error('Respuesta no válida: ' + e.message);
                }
            });
        })
        .then(data => {
            console.log('Datos procesados:', data);
            if (data.success) {
                alert('Evento guardado correctamente');
                loadEvents(); // Recargar eventos
                eventModal.style.display = 'none';
            } else {
                alert('Error al guardar el evento: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error detallado:', error);
            console.error('Mensaje de error:', error.message);
            alert('Ocurrió un error al procesar la solicitud: ' + error.message);
        });
    }

    function deleteEvent() {
        if (confirm('¿Estás seguro de que deseas eliminar este evento?')) {
            fetch('../api/eliminar_evento.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ id: selectedEventId }),
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    loadEvents(); // Recargar eventos
                    eventDetailsModal.style.display = 'none';
                } else {
                    alert('Error al eliminar el evento: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Ocurrió un error al procesar la solicitud: ' + error.message);
            });
        }
    }

    // Funciones auxiliares
    function formatDate(date) {
        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const day = String(date.getDate()).padStart(2, '0');
        return `${year}-${month}-${day}`;
    }

    function formatDateDisplay(dateStr) {
        const date = new Date(dateStr);
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        return date.toLocaleDateString('es-ES', options);
    }
});

// Función global para mostrar detalles del evento (redefinida para compatibilidad)
function showEventDetails(eventId) {
    // Dispara un evento personalizado que será capturado dentro del closure principal
    const event = new CustomEvent('showEventDetails', { detail: { eventId } });
    document.dispatchEvent(event);
}