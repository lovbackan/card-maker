<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/css/dashboard/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;800&display=swap" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Card-maker</title>
</head>

<body>

    <section class="sidebarSection">
        <div class="sidebar">
            <div class="buttomContainer">
                <button class="createCardButton">Create Card</button>
                <button class="showCardsButton">Show Cards</button>
                <button class="editCardsButton">Edit Cards</button>
                <button class="deleteCardButton">Delete Card</button>
            </div>
            <a class="logout" href="/logout">Log out</a>

        </div>

    </section>

    <section class="createCardSection">
        <div class="createCardContainer">
                @include('partials.create-card-container')
        </div>
    </section>

    <section class="editCardSection">
        <div class="editCardContainer">
                @include('partials.edit-card-container')
</section>

<section class="deleteCardSection">
    <div class="deleteCardContainer">
       @include('partials.delete-card-container')
</section>

<section class="cardDisplayerSection">
    <div class="cardDisplayer">
        @foreach ($cards as $card)
        @include('partials.card-displayer')
        @endforeach
    </div>
    </section>

<script src="/js/dashboard/script.js"></script>
</body>

</html>
@include('errors')
