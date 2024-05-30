// Toggle sidebar
function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("active");
}

// Highlight the current nav link
document.addEventListener("DOMContentLoaded", function () {
    // Get the current URL path
    const currentPath = window.location.pathname;

    // Get all the nav links
    const navLinks = document.querySelectorAll("#header .nav-link");

    // Loop through each nav link
    navLinks.forEach((link) => {
        // Check if the href attribute matches the current URL path
        if (link.getAttribute("href") === currentPath) {
            // Add 'active' class to the nav link if it matches the current URL path
            link.classList.add("active");
        }
    });
});
