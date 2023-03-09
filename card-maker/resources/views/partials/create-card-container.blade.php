<h1>Create card </h1>
            <form method="POST" class="createCard" action="/createCard">
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

<button class="cardSubmit" type="submit">Create card</button>
</form>
