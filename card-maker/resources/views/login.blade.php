<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/login/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Card-maker</title>
</head>
<body>

<section class="loginAndCreate">

<div class="loginAndRegisterContainer">
<div class="containerHeader">
    <div class="headerLogin active">
        <p>Login</p>
    </div>
    <div class="headerRegister">
        <p>Register</p>
    </div>

</div>


<div class="formContainer">

{{-- loginform --}}
<div class="loginForm active">
    <form method="POST" class="loginUser" action="/login">
<div>
    <label for="email">Email</label>
    <input name="email" id="email" type="text" />
</div>
<div>
    <label for="password">Password</label>
    <input name="password" id="password" type="password" />
</div>
<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

<button class="submitButton" type="submit">Login</button>
</form>
</div>

{{-- Registerform --}}
<div class="registerForm">
<form method="POST" class="createAccount" action="/createAccount">
    <div>
        <label for="name">name</label>
        <input name="name" id="name" type="text" />
    </div>
    <div>
        <label for="email">email</label>
        <input name="email" id="email" type="text" />
    </div>
    <div>
        <label for="password">Password</label>
        <input name="password" id="password" type="password" />
    </div>
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

    <button class="submitButton" type="submit">Create account</button>
    </div>
    </form>
</div>

</section>


<script src="/js/login/script.js"></script>
</body>
</html>


@include('errors')
