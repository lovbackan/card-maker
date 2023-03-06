<a href="/logout">Log out</a>
<p>Hello, {{ $user->name;}}!</p>

<div class="createCardContainer">
    <h1>Create card </h1>
<form class="createCard">
<label for="category">Card category </label>
<select name="category" id="category">
    @foreach ($categories as $category)

    <option value="{{$category->category_name}}">{{$category->category_name}}</option>

    @endforeach
</select>


</form>
</div>

@include('errors')
