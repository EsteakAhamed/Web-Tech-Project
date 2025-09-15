function validateForm(event) {
      event.preventDefault();

      document.getElementById('nameError').textContent = '';
      document.getElementById('emailError').textContent = '';
      document.getElementById('passwordError').textContent = '';
      document.getElementById('specialityError').textContent = '';
      document.getElementById('regnumberError').textContent = '';
      document.getElementById('salaryError').textContent = '';
      document.getElementById('pictureError').textContent = '';

      let isValid = true;

      const name = document.getElementById('name').value.trim();
      const email = document.getElementById('email').value.trim();
      const password = document.getElementById('password').value;
      const speciality = document.getElementById('speciality').value.trim();
      const regnumber = document.getElementById('regnumber').value.trim();
      const salary = document.getElementById('salary').value.trim();

      const nameRegex = /^[A-Za-z\s]+$/;
      if (!nameRegex.test(name)) {
        document.getElementById('nameError').textContent = 'Name must contain only alphabets';
        isValid = false;
      }

      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        document.getElementById('emailError').textContent = 'Please enter a valid email address';
        isValid = false;
      }

      const passwordRegex = /^.{8,}$/;
      if (!passwordRegex.test(password)) {
        document.getElementById('passwordError').textContent = 'Password must be at least 8 characters long';
        isValid = false;
      }

      if (!speciality) {
        document.getElementById('specialityError').textContent = 'Please select a speciality';
        isValid = false;
      }

      const regnumberRegex = /^[A-Z0-9]{6}$/;
      const hasLetter = /[A-Z]/.test(regnumber);
      const hasNumber = /\d/.test(regnumber);
      if (!regnumberRegex.test(regnumber) || !hasLetter || !hasNumber) {
        document.getElementById('regnumberError').textContent = 'Registration number must be exactly 6 characters with uppercase letters and numbers';
        isValid = false;
      }

      if (!salary || parseFloat(salary) <= 0) {
        document.getElementById('salaryError').textContent = 'Salary must postive number';
        isValid = false;
      }

      const picture = document.getElementById('picture').files[0];
      if (!picture) {
        document.getElementById('pictureError').textContent = 'Please select an image file';
        isValid = false;
      } else if (!picture.type.startsWith('image/')) {
        document.getElementById('pictureError').textContent = 'File must be an image';
        isValid = false;
      }

      if (isValid) {
        alert('Doctor added successfully!');
      }

      return isValid;
    }