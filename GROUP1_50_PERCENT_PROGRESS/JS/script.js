const validUsername = "admin";
const validPassword = "password";

document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); 

    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let errorMsg = document.getElementById("errorMsg");

    if (username === validUsername && password === validPassword) {
        alert("Login successful!");
        window.location.href = "../GROUP1_50_PERCENT_PROGRESS/index.php";
    } else {
    errorMsg.textContent = "Invalid username or password!";
    }
});

const togglePassword = document.getElementById("togglePassword");
const passwordInput = document.getElementById("password");

togglePassword.addEventListener("click", function () {
       if (passwordInput.getAttribute("type") === "password") {
        // SHOW PASSWORD
        passwordInput.setAttribute("type", "text");

        // SWITCH ICON
        this.classList.remove("ri-lock-line");
        this.classList.add("ri-lock-unlock-line");
    } else {
        // HIDE PASSWORD
        passwordInput.setAttribute("type", "password");

        // SWITCH ICON
        this.classList.remove("ri-lock-unlock-line");
        this.classList.add("ri-lock-line");
    }
});