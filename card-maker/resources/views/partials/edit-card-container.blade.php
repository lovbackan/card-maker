<h1>Edit card </h1>
<form method="POST" class="editCard" action="/editCard">

    <select class="cardCategory" name="cardSelector" id="cardSelector">
        <option style="display: none;">Select Card</option>
        @foreach ($cards as $card)
        <option value="{{$card->title}}">{{$card->title}}</option>
        @endforeach
    </select>

    <select class="cardCategory" name="category" id="editCategory">
        @foreach ($categories as $category)
        <option value="{{$category->category_name}}">{{$category->category_name}}</option>
        @endforeach
    </select>

    <div class="titleWraper">
        <label for="title">Title</label>
        <input name="title" id="editTitle" type="text" />
    </div>

    <div class="bodyWraper">
        <label for="body">Body</label>
        <textarea name="body" id="editTextBody" rows="20" cols="30"></textarea>
    </div>
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

    <button class="editCardSubmit" type="submit">Edit card</button>
</form>
</div>