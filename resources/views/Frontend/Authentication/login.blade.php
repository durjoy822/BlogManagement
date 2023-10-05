<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login/register </title>
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
        .Register{
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <div id="container">
        <div class="tab">
            @if (auth()->guard('user')->user())
            <button onclick="openForm('profileForm', this)">Profile</button>
            @else
            <button onclick="openForm('loginForm', this)" >Login</button>
            <button onclick="openForm('registerForm', this)">Register</button>
            @endif
        </div>
        @if (!auth()->guard('user')->user())
        <form action="{{route('user.login.check')}}" method="post" id="loginForm" class="form-group">
            @csrf
            <h2>Login</h2>
            <label for="email">Email:</label>
            <input type="email" value="{{old('email')}}" id="email" name="email" >

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" >
            <input type="submit" class="Register" value="Login">
        </form>
        @endif
        <form action="{{route('user.info')}}" method="post" id="registerForm" class="form-group" style="display:none;">
            @csrf
            <h2>Register</h2>
            <label for="registerUsername">Username:</label>
            <input type="text" id="registerUsername" name="name" >
            @error('name')<div class="error" >{{ $message }}</div> @enderror

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" >
            @error('email')<div class="error">{{ $message }}</div> @enderror

            <label for="registerPassword">Password:</label>
            <input type="password" id="registerPassword" name="password" >
            @error('password')<div class="error">{{ $message }}</div> @enderror

            <input type="submit" class="Register" value="Register">
        </form>
        <form action="{{route('user.logout')}}" method="post" id="profileForm" class="form-group" style="display:none;">
            @csrf
            <h2>Profile</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://media.istockphoto.com/id/1124239071/photo/happy-businesswoman-stock-image.jpg?s=612x612&w=0&k=20&c=TVIsFxFyKbQlsyLMeBTt7G3ctQJvNzn9L0Ev3ReauNg=" style="height: 100px">
                </div>
                <div class="col-md-8">

                <input type="file"  class="form-control" id="email" name="image" >
                <input type="text"  value="" placeholder="Name" id="email" name="email" >
                <input type="email"  placeholder="jone@example.com" id="email" name="email" >
                <input type="text"  placeholder="Phone number" id="email" name="email" >
                <input type="text"  placeholder="Occupation" id="email" name="email" >
                <textarea style="width: 232px;height: 46px;" placeholder="About your self"></textarea>
                </div>
                <div class="text-center">
                </div>
            </div>
            <!-- Add profile fields here -->
            <input type="submit" class="Register" value="Logout">
        </form>
    </div>

@include('Frontend.Layout.script');

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
    </script>


</body>
</html>
