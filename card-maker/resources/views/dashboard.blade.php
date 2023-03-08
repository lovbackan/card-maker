<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/dashboard/style.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;800&display=swap"
      rel="stylesheet"
    />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Card-maker</title>
</head>
<body>

<section class="sidebarSection">
    <div class="sidebar">
<a class="logout" href="/logout">Log out</a>
<!-- <p>Hello, {{ $user->name;}}!</p> -->
<button class="createCardButton">Create Card</button>
<button class="showCardsButton">Show Cards</button>
<button class="editCardsButton">Edit Cards</button>


    </div>

</section>

<section class="createCardSection">
<div class="createCardContainer">
    <h1>Create card </h1>
<form method="POST"class="createCard" action="/createCard">
    @include('partials.form-fields')
<button class="cardSubmit" type="submit">Create card</button>
</form>
</div>
</section>

<section class="editCardSection">
    <div class="editCardContainer">
        <h1>Edit card </h1>
    <form method="POST"class="editCard" action="/editCard">
        <label for="cardSelector">Card selector </label>
<select name="cardSelector" id="cardSelector">
    @foreach ($cards as $card)
    <option value="{{$card->title}}">{{$card->title}}</option>
    @endforeach
</select>
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
<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        <button class="editCardSubmit" type="submit">Edit card</button>
    </form>
    </div>
</section>

{{-- <section class="deleteCardSection">
    <form method="POST"class="editCard" action="/deleteCard">
        @include('partials.form-fields')
        <button class="deleteCardSubmit" type="submit">Delete card</button>
    </form>
</section> --}}

<section class="cardDisplayerSection">
    <div class="cardDisplayer">
        @foreach ($cards as $card)
        <div class="cardContainer">
            <div class="title">
            <h2>{{$card->title}} </h2>
            </div>
            <div class="category">
                @foreach ($categories as $category)
                    @if ($card->card_category === $category->id)
                        <h3>{{$category->category_name}}</h3>
                    @endif
                @endforeach
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
