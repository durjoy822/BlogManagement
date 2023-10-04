<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    @include('Frontend.Layout.head')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        #container {
            width: 400px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .tab {
            display: flex;
        }

        .tab button {
            flex: 1;
            padding: 10px;
            cursor: pointer;
            border: none;
            outline: none;
            background-color: #72676766;
        }

        .tab button:hover {
            background-color: #ccc;
        }

        .tab button.active {
            background-color: #2a663c;;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
                margin-bottom: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div id="container">
        <div class="tab">
            <button onclick="openForm('loginForm', this)" >Login</button>
            <button onclick="openForm('registerForm', this)">Register</button>
            <button onclick="openForm('profileForm', this)">Profile</button>
        </div>

        <form id="loginForm" class="form-group">
            <h2>Login</h2>
            <label for="loginUsername">Username:</label>
            <input type="text" id="loginUsername" name="loginUsername" required>
            <label for="loginPassword">Password:</label>
            <input type="password" id="loginPassword" name="loginPassword" required>
            <button class="py-4" type="button" onclick="login()">Login</button>
        </form>

        <form id="registerForm" class="form-group" style="display:none;">
            <h2>Register</h2>
            <label for="registerUsername">Username:</label>
            <input type="text" id="registerUsername" name="registerUsername" required>
            <label for="registerUsername">Username:</label>
            <input type="text" id="registerUsername" name="registerUsername" required>
            <label for="registerPassword">Password:</label>
            <input type="password" id="registerPassword" name="registerPassword" required>
            <button type="button" onclick="register()">Register</button>
        </form>

        <form id="profileForm" class="form-group" style="display:none;">
            <h2>Profile</h2>
            <div class="row">
                <div class="col-md-8">
                    <table>
                        <tr>
                            <td>Name</td>
                            <td>User</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>User</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>User</td>
                        </tr>
                    </table>

                </div>
                <div class="col-md-4">
                    <img src="https://media.istockphoto.com/id/1124239071/photo/happy-businesswoman-stock-image.jpg?s=612x612&w=0&k=20&c=TVIsFxFyKbQlsyLMeBTt7G3ctQJvNzn9L0Ev3ReauNg=" style="height: 100px">

                </div>
            </div>
            <!-- Add profile fields here -->
            <button type="button" onclick="logout()">Logout</button>
        </form>
    </div>

    <script>
        function openForm(formName, btn) {
            var forms = document.querySelectorAll('.form-group');
            for (var i = 0; i < forms.length; i++) {
                forms[i].style.display = 'none';
            }

            document.getElementById(formName).style.display = 'block';

            var tabs = document.querySelectorAll('.tab button');
            for (var i = 0; i < tabs.length; i++) {
                tabs[i].classList.remove('active');
            }

            btn.classList.add('active');
        }

        function login() {
            // Handle login logic here
            alert('Login logic goes here');
        }

        function register() {
            // Handle registration logic here
            alert('Registration logic goes here');
        }

        function logout() {
            // Handle logout logic here
            alert('Logout logic goes here');
        }
    </script>


</body>
</html>
