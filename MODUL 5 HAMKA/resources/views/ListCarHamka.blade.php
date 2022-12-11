@extends('parts.master')
@extends('parts.navbar') 
   <!-- list car -->
@section('contents')
    <section id="insert">
      <div class="container insert">
        <h1 class="titleInsert">My Show Room</h1>
        <p class="descInsert">
          List Show Room Muhammad Rafly Hamka - 1202204136
        </p>
        
        <div class="row">
            @foreach($ListCar as $lc)
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 22rem;">
                <img src="{{asset ('storage/images/'.$lc -> image)}}" class="card-img-top m-auto mt-3" alt="gambar mobil" style="width:328px; height:195px;">
                    <div class="card-body">
                        <h5 class="card-title">{{$lc -> name}}</h5>
                        <p class="card-text"><?php echo substr($lc -> description,0,90)?>...</p>
                        <form action="ListCarHamka/{{$lc->id}}" method="post">
                          <a href="/DetailHamka/{{$lc->id}}" class="btn btn-primary btn-edit me-4">Detail</a>
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn btn-danger btn-edit">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
      </div>
    </section>
    <!-- end list car -->
@endsection

