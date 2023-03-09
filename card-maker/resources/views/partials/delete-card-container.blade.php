<h1> Delete Card </h1>
<form method="POST"class="deleteCard" action="/deleteCard">
<label for="cardSelector">Card selector </label>
<select name="cardSelector" id="cardSelector">
    @foreach ($cards as $card)
    <option value="{{$card->title}}">{{$card->title}}</option>
    @endforeach
</select>
<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
<button class="deleteCardSubmit" type="submit">Delete card</button>
</form>
</div>
