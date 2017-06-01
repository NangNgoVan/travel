@foreach($places as $place)
    <div class="col-md-3 tour-item" style="padding: 5px;">
      <div style="">
        <figure>
          <div>
            <img src="{{$place->thumbnail}}" style="width: 100%; height: 250px;" alt="điểm đến">
          </div>
          <figcaption>
            <h3>{{$place->title}}</h3>
            {{$place->description}}
            <a class="btn" href="/place/{{$place->id}}">chi tiết</a>
          </figcaption>
        </figure>
      </div>
    </div>
@endforeach