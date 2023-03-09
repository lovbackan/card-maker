<h1>Edit card </h1>
            <form method="POST" class="editCard" action="/editCard">
<label for="cardSelector">Card selector </label>
                <select name="cardSelector" id="cardSelector">
                    <option selected="true" disabled="disabled">Select Card</option>
                    @foreach ($cards as $card)
                    <option value="{{$card->title}}">{{$card->title}}</option>
                    @endforeach
                </select>
                <label for="category">Card category </label>
                <select name="category" id="editCategory">
                    @foreach ($categories as $category)
                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                    @endforeach
                </select>
                <label for="title">Title</label>
                <input name="title" id="editTitle" type="text" />
                <label for="body">Body</label>
                <textarea name="body" id="editTextBody" rows="20" cols="30"></textarea>
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        <button class="editCardSubmit" type="submit">Edit card</button>
    </form>
</div>
