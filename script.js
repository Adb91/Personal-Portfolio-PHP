function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("active");
}

function toggleTheme() {
    const body = document.body;
    const icon = document.getElementById("theme-icon");
    body.classList.toggle("light-theme");
    
    if (body.classList.contains("light-theme")) {
        icon.innerHTML = "☀️";
    } else {
        icon.innerHTML = "🌙";
    }
}