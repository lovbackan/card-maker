
        <div class="cardContainer categoryColor{{$card->category->color}}" id="{{ str_replace(' ', '_', $card->title) }}">
            <div class="title">
            <h2>{{$card->title}} </h2>
            </div>
            <div class="category">
                <h3>{{$card->category->category_name}}</h3>
            </div>
            <div class="textBody">
            <p>{{$card->body}}</p>
            </div>
        </div>
