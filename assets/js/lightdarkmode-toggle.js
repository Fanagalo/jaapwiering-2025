document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.getElementById("lightDarkModeToggle");

    // Init state from localStorage
    if (
        localStorage.getItem("theme") === "light" 
      ) {
              document.body.classList.add("light-mode");
    }

    if (toggle) {
        toggle.addEventListener("click", function () {
            document.body.classList.toggle("light-mode");
            const isLight = document.body.classList.contains("light-mode");
            localStorage.setItem("theme", isLight ? "light" : "dark");
        });
    }
});