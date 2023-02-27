
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/style.css">
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


<div class="loginForm active">
    <form method="POST" class="loginUser">
<div>
    <label for="email">Email</label>
    <input name="email" id="email" type="email" />
</div>
<div>
    <label for="password">Password</label>
    <input name="password" id="password" type="password" />
</div>
<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

<button class="loginSubmit" type="submit">Login</button>
</form>
</div>

<div class="registerForm">
<form method="POST" class="createAccount">
    <div>
        <label for="email">Email</label>
        <input name="email" id="email" type="email" />
    </div>
    <div>
        <label for="password">Password</label>
        <input name="password" id="password" type="password" />
    </div>
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

    <button class="registerSubmit" type="submit">Create account</button>
    </div>
    </form>
</div>

</section>


<script src="/js/script.js"></script>
</body>
</html>

{{-- @include('errors') --}}
