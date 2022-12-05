 <div class="single-div">
    <div class="single-img">
        <img src="{{$movie->poster}}" alt="{{$movie->primaryTitle}} poster">
        <div class="single-desc">
            <div class="single-title">
                <h1>{{$movie->originalTitle}}</h1>
                <p>{{$movie->primaryTitle}}</p>

            </div>
            <p>{{$movie->plot}}</p>
            {{-- <p>endYear= {{$movie->endYear}}</p> --}}
            <div class="single-first">
                <p>{{$movie->averageRating}}/10 for {{$movie->numVotes}} votes</p>
                <p>{{$movie->startYear}}</p>
                <p>{{$movie->runtimeMinutes}} mins</p>
                <p>id= {{$movie->id}}</p>
            </div>
            
        </div>
    </div>
</div>
