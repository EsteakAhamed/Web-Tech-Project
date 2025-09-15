function updateTheme() {

    const loginContainer = document.querySelector('.login-container');

    const selectedRole = document.querySelector('input[name="role"]:checked');

    if (selectedRole) {
        if (selectedRole.value === 'Patient') {
            loginContainer.style.backgroundColor = '#ADD8E6';
        } else if (selectedRole.value === 'Doctor') {
            loginContainer.style.backgroundColor = '#90EE90';
        } else if (selectedRole.value === 'Admin') {
            loginContainer.style.backgroundColor = '#B0B0E6';
        }
    }
}

function validateForm(event) {
    event.preventDefault();
    document.getElementById('roleError').textContent = '';
    document.getElementById('usernameError').textContent = '';
    document.getElementById('passwordError').textContent = '';

    let isValid = true;

    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value;

    const role = document.querySelector('input[name="role"]:checked');
    if (!role) {
        document.getElementById('roleError').textContent = 'Please select a role';
        isValid = false;
    }

    const usernameRegex = /^[A-Za-z\s]+$/;
    if (!usernameRegex.test(username)) {
        document.getElementById('usernameError').textContent = 'Username must contain only letters';
        isValid = false;
    }

    const passwordRegex = /^.{8,}$/;
    if (!passwordRegex.test(password)) {
        document.getElementById('passwordError').textContent = 'Password must be at least 8 characters long';
        isValid = false;
    }
    if (isValid) {
        alert('Logging in');
        return true;
    }
    return false;
}