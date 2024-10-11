document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('registroForm');
    const mensaje = document.getElementById('mensaje');

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        const nombre = document.getElementById('nombre').value;
        const email = document.getElementById('email').value;
        const telefono = document.getElementById('telefono').value;

        if (nombre === '' || email === '') {
            mensaje.textContent = 'Por favor, complete todos los campos obligatorios.';
            mensaje.style.color = 'red';
        } else {
            form.submit();
        }
    });
});