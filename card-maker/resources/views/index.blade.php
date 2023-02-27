<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Card-maker</title>
</head>
<body>
    <form method="POST" class="loginUser">
        <div class="loginContainer">
            <h1>Login</h1>
        <div>
            <label for="email">Email</label>
            <input name="email" id="email" type="email" />
        </div>
        <div>
            <label for="password">Password</label>
            <input name="password" id="password" type="password" />
        </div>
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

        <button type="submit">Login</button>
        </div>
    </form>

    <form method="POST" class="createAccount">
        <div class="createAccountContainer">
            <h1>Create account</h1>
        <div>
            <label for="email">Email</label>
            <input name="email" id="email" type="email" />
        </div>
        <div>
            <label for="password">Password</label>
            <input name="password" id="password" type="password" />
        </div>
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

        <button type="submit">Create account</button>
        </div>
    </form>



</body>
</html>

{{-- @include('errors') --}}
