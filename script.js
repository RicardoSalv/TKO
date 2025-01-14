// Verificar si el usuario tiene un tema preferido guardado
const savedTheme = localStorage.getItem('theme');

// Aplicar la preferencia guardada al cargar la página
if (savedTheme === 'dark') {
    document.body.classList.add('dark-mode');
} else if (savedTheme === 'light') {
    document.body.classList.remove('dark-mode');
}

// Seleccionar el botón para alternar el modo oscuro
const toggleButton = document.getElementById('dark-mode-toggle');

// Alternar el modo oscuro cuando el usuario haga clic
toggleButton.addEventListener('click', () => {
    const isDarkMode = document.body.classList.toggle('dark-mode');
    // Guardar la preferencia del usuario
    localStorage.setItem('theme', isDarkMode ? 'dark' : 'light');
});
