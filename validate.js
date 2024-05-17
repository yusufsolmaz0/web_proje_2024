document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    form.addEventListener("submit", function (event) {
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const date = document.getElementById("date").value;
        const message = document.getElementById("message").value;

        if (!name || !email || !date || !message) {
            alert("Tüm alanları doldurmalısınız.");
            event.preventDefault();
        }
    });
});
