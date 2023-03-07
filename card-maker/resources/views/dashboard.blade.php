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

<section class="sidebarSection">
    <div class="sidebar">
<a href="/logout">Log out</a>
<p>Hello, {{ $user->name;}}!</p>
<button class="createCardButton">Create Card</button>
<button class="showCardsButton">Show cards</button>


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
    <form method="POST"class="editCard" action="/editCard">


<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
    </form>
</section>

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
