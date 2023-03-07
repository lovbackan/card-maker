<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/dashboard/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Card-maker</title>
</head>
<body>
<section>
    <div class="sidebar">
<a href="/logout">Log out</a>
<p>Hello, {{ $user->name;}}!</p>
<button class="createCardButton">Create Card</button>
<button class="showCardsButton">Show cards</button>


    </div>

</section>

<section>

<div class="createCardContainer">
    <h1>Create card </h1>
<form method="POST"class="createCard" action="/createCard">
<label for="category">Card category </label>
<select name="category" id="category">
    @foreach ($categories as $category)

    <option value="{{$category->category_name}}">{{$category->category_name}}</option>

    @endforeach
</select>
<label for="title">Title</label>
<input name="title" id="title" type="text" />
<label for="body">Body</label>
<textarea name="body" id="textBody" rows="20" cols="30">
</textarea>
<button class="cardSubmit" type="submit">Create card</button>
<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
</form>
</div>

</section>

<section>
    <div class="cardDisplayer">
        @foreach ($cards as $card)
        <div class="cardContainer">
            <div class="title">
            <h2>{{$card->title}} </h2>
            </div>
            <div class="category">
            <h3>{{$card->card_category}}</h3>
            </div>
            <div class="textBody">
            <p>{{$card->body}}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>





<script src="/js/dashboard/script.js"></script>
</body>
</html>


@include('errors')
