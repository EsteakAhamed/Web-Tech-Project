function validateForm(event) {
            event.preventDefault();
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
            if (isValid) {
                alert('Password Changed!');
                window.location.href = 'home.html';
            }
            return isValid;
        }