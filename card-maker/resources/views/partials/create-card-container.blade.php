<h1>Create card</h1>
<form method="POST" class="createCard" action="/createCard">
    <select class="cardCategory" name="category" id="category">
        <option style="display:none;">category</option>
        @foreach ($categories as $category)

        <option value="{{$category->category_name}}">{{$category->category_name}}</option>

        @endforeach
    </select>
    <div class="titleWraper">
        <label for="title">Title</label>
        <input name="title" id="title" type="text" />
    </div>

    <div class="bodyWraper">
        <label for="body">Body</label>
        <textarea name="body" id="textBody" rows="20" cols="30"></textarea>
    </div>
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

    <button class="cardSubmit" type="submit">Create card</button>
</form>
