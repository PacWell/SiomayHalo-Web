const btnSidebar = document.getElementById("btnSidebar");
const sidebar = document.getElementById("sidebar");
const overlay = document.querySelector(".overlay");
btnSidebar.addEventListener("click", function (e) {
  e.preventDefault();
  sidebar.classList.toggle("hidden");
  overlay.style.display = "block";
});

const closeSidebar = document.querySelector(".sidebar__close").addEventListener("click",function() {
  sidebar.classList.add("hidden")
  overlay.style.display = "none";
})


const sidebarLinks = document.querySelectorAll('.sidebar__link');
  const currentURL = window.location.pathname;

  sidebarLinks.forEach(link => {
    // Ambil nama file dari href
    const linkPath = new URL(link.href).pathname;

    if (currentURL === linkPath) {
      link.classList.add('active');
    } else {
      link.classList.remove('active');
    }
  });
