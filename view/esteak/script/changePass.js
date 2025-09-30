// Form validation function
function validateForm(event) {
    document.getElementById('current-span').textContent = '';
    document.getElementById('new-span').textContent = '';
    document.getElementById('confirm-span').textContent = '';
    let isValid = true;

    const currentPassword = document.getElementById('current-pass').value.trim();
    const passwordRegex = /^.{8,}$/;
    if (!currentPassword || !passwordRegex.test(currentPassword)) {
        document.getElementById('current-span').textContent = 'Current password must be at least 8 characters long';
        isValid = false;
    }

    const newPassword = document.getElementById('new-pass').value.trim();
    if (!newPassword || !passwordRegex.test(newPassword)) {
        document.getElementById('new-span').textContent = 'New password must be at least 8 characters long';
        isValid = false;
    }

    const confirmPassword = document.getElementById('confirm-pass').value.trim();
    if (!confirmPassword || confirmPassword !== newPassword) {
        document.getElementById('confirm-span').textContent = 'Passwords do not match';
        isValid = false;
    }

    if (!isValid) {
        event.preventDefault();
        return false;
    }

    alert('Password Changed!');
    return true;
}

// Password suggestion dropdown
const newPassInput = document.getElementById("new-pass");
const suggestionBox = document.getElementById("password-suggestions");

newPassInput.addEventListener("focus", fetchSuggestions);
newPassInput.addEventListener("input", fetchSuggestions);

function fetchSuggestions() {
    fetch("../controller/passwordSuggestions.php") // adjust path if needed
        .then(response => response.json())
        .then(data => {
            suggestionBox.innerHTML = ""; // clear previous suggestions
            data.forEach(password => {
                const option = document.createElement("div");
                option.className = "suggestion";
                option.textContent = password;

                // Fill input on click
                option.addEventListener("click", () => {
                    newPassInput.value = password;
                    suggestionBox.innerHTML = "";
                });

                suggestionBox.appendChild(option);
            });
        })
        .catch(err => console.error("Error fetching suggestions:", err));
}

// Hide suggestions when clicking outside
document.addEventListener("click", function(e) {
    if (!newPassInput.contains(e.target) && !suggestionBox.contains(e.target)) {
        suggestionBox.innerHTML = "";
    }
});
