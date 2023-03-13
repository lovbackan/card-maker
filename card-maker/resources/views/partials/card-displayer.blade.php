
        <div class="cardContainer {{$card->category->category_name}}" id="{{ str_replace(' ', '_', $card->title) }}" style="background: {{$card->category->color}}">
            <div class="title">
            <h2>{{$card->title}} </h2>
            </div>
            <div class="category">

                <h3>{{$card->category->category_name}}</h3>

            </div>
            <div class="categoryIcon">
                <img src="/icons/{{$card->category->category_name}}.svg">
            </div>
            <div class="textBody">
            <p>{{$card->body}}</p>
            </div>
        </div>
