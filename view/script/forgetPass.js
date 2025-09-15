function validateForm(event) {
    event.preventDefault();
    document.getElementById('email-span').textContent = '';
    document.getElementById('otp-span').textContent = '';
    document.getElementById('new-pass-span').textContent = '';
    document.getElementById('confirm-pass-span').textContent = '';
    let isValid = true;
    const email = document.getElementById('email-id').value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        document.getElementById('email-span').textContent = 'Please enter a valid email address';
        isValid = false;
    }
    const otp = document.getElementById('otp-id').value.trim();
    const otpRegex = /^\d{4}-[A-Z]$/;
    if (!otpRegex.test(otp)) {
        document.getElementById('otp-span').textContent = 'OTP must be in the format 9876-E';
        isValid = false;
    }
    const newPassword = document.getElementById('new-pass-id').value;
    const passwordRegex = /^.{8,}$/;
    if (!passwordRegex.test(newPassword)) {
        document.getElementById('new-pass-span').textContent = 'New password must be at least 8 characters long';
        isValid = false;
    }
    const confirmPassword = document.getElementById('confirm-pass-id').value;
    if (confirmPassword !== newPassword) {
        document.getElementById('confirm-pass-span').textContent = 'Passwords do not match';
        isValid = false;
    }
    if (isValid) {
        alert('Form is valid!');
    }
    return isValid;
}
