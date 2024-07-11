<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/home.css">
    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <div class="class-0">
        <div class="container">
            <div class="img-1">
                <img src="images/miit.png" alt="MIIT Logo">
            </div>

            <form class="class-3" action="authenticationSignUp.php" method="post" enctype="multipart/form-data" id="loginForm">
                <h2>Sign Up</h2>
                <p>Already have an account? <span><a class="class-2" href="../../../HOME.php">Log in</a></span></p>
                <div class="class-3.1">
                    <div>
                        <label for="institute">Institute</label>
                        <input type="text" name="institute" id="institute">
                    </div>
                    <div class="label">
                        <label for="mem_type">Member Type</label>
                        <input type="text" name="mem_type" id="mem_type" list="Type" placeholder="select">
                        <div class="class-4.1" id="dropdownContainer" style="display: none;">
                            <datalist name="Type" id="Type" onchange="updateSelectedOption()" placeholder="select">
                                <option value="Student">Student</option>
                                <option value="Instructor">Instructor</option>
                                <option value="Registrar">Registrar</option>
                            </datalist>
                        </div>
                    </div>
                </div>

                <div class="class-4.1">
                    <label for="stud_id">Student No.</label>
                    <input type="text" name="stud_id" id="stud_id" required>
                </div>
                <div class="class-4.1">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass">
                    <span id="passwordError" class="error"></span>
                    <span class="toggle-password" onclick="togglePasswordVisibility()">
                        <i class="fa fa-eye" id="eye-icon"></i>
                    </span>
                </div>
                <button type="submit" class="login-btn">Register</button>
            </form>
        </div>
    </div>
    <script>
        function showDropdown() {
            var dropdown = document.getElementById('dropdownContainer');
            dropdown.style.display = 'block';
        }

        function updateSelectedOption() {
            var selectedOption = document.getElementById('Type').value;
            document.getElementById('selectedType').value = selectedOption;
            document.getElementById('dropdownContainer').style.display = 'none'; // Hide dropdown after selection
        }
    </script>

    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("pass"); // Selecting the password input
            var eyeIcon = document.getElementById("eye-icon"); // Selecting the eye icon

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        }
    </script>

</body>

</html>