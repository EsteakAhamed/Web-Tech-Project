function validateForm(event) {
            event.preventDefault();
            document.getElementById('name-span').textContent = '';
            document.getElementById('dob-span').textContent = '';
            document.getElementById('gender-span').textContent = '';
            document.getElementById('phone-span').textContent = '';
            document.getElementById('email-span').textContent = '';
            document.getElementById('add-span').textContent = '';
            document.getElementById('blood-span').textContent = '';
            document.getElementById('password-span').textContent = '';

            let isValid = true;

            const name = document.getElementById('name-id').value.trim();
            const nameRegex = /^[A-Za-z\s]+$/;
            if (!nameRegex.test(name)) {
                document.getElementById('name-span').textContent = 'Name must contain only letters';
                isValid = false;
            }

            const dob = document.getElementById('dob-id').value.trim();
            if (!dob) {
                document.getElementById('dob-span').textContent = 'Date of birth is required';
                isValid = false;
            }

            const gender = document.getElementById('gender-id').value;
            if (!gender) {
                document.getElementById('gender-span').textContent = 'Please select a gender';
                isValid = false;
            }

            const phone = document.getElementById('phone-id').value.trim();
            const phoneRegex = /^01[0-9]{9}$/;
            if (!phoneRegex.test(phone)) {
                document.getElementById('phone-span').textContent = 'Phone number must start with 01 and contain 11 digits';
                isValid = false;
            }

            const email = document.getElementById('email-id').value.trim();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email && !emailRegex.test(email)) {
                document.getElementById('email-span').textContent = 'Please enter a valid email address';
                isValid = false;
            }

            const address = document.getElementById('add-id').value.trim();
            if (!address) {
                document.getElementById('add-span').textContent = 'Please enter an address';
                isValid = false;
            }

            const blood = document.getElementById('blood-id').value;
            if (!blood) {
                document.getElementById('blood-span').textContent = 'Please select a blood group';
                isValid = false;
            }

            const password = document.getElementById('password-id').value;
            const passwordRegex = /^.{8,}$/;
            if (!passwordRegex.test(password)) {
                document.getElementById('password-span').textContent = 'Password must be at least 8 characters long';
                isValid = false;
            }

            if (isValid) {
                return true;
            }
            return false;
        }