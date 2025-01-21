document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.getElementById("navbar");
    const sidebar = document.getElementById("sidebar");

    sidebar.style.top = parseInt(navbar.clientHeight) - 1 + "px";
});