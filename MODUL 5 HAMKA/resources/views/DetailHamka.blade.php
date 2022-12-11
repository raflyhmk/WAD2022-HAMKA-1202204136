@extends('parts.master')
@extends('parts.navbar')
   <!-- list car -->
@section('contents')
    <section id="insert">
      <div class="container insert">
        <h1 class="titleInsert">Edit</h1>
        <p class="descInsert">
          Edit mobil {{$DetailCar->name}}
          
        </p>
        <div class="row">
            <div class="col-md-5">
                <img
                src="{{asset ('storage/images/'.$DetailCar -> image)}}"
                alt=""
                width="100%"
                height="312px"
              />
            </div>
            <div class="col-md-7 form-input mt-0">
            <form enctype="multipart/form-data" method="POST" action="/DetailHamka/edit/{{$DetailCar->id}}">
                @method('put')
                @csrf
              <div class="mb-3">
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <label for="inputNamaMobil" class="form-label">Nama Mobil</label>
                <input
                  type="text"
                  class="form-control"
                  value="{{$DetailCar->name}}"
                  name="name"
                />
              </div>
              <div class="mb-3">
                <label for="inputNamaPemilik" class="form-label">Nama Pemilik</label>
                <input
                  type="text"
                  class="form-control"
                  value="{{$DetailCar->owner}}"
                  name="owner"
                />
              </div>
              <div class="mb-3">
                <label for="inputMerkMobil" class="form-label">Merk Mobil</label>
                <input
                  type="text"
                  class="form-control"
                  value="{{$DetailCar->brand}}"
                  name="brand"
                />
              </div>
              <div class="mb-3">
                <label for="inputMerkMobil" class="form-label">Tanggal Beli</label>
                <input
                  type="date"
                  class="form-control"
                  value="{{$DetailCar->purchase_date}}"
                  name="purchase_date"
                />
              </div>
              <div class="mb-3">
                <label for="inputDeskripsi" class="form-label">Deskripsi</label>
                <textarea
                class="form-control"
                name="description"
              >{{$DetailCar -> description}}</textarea>
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">Foto</label>
                <input class="form-control" type="file" id="formFile" name="image" disabled/>
              </div>
              <div class="mb-3">
                <label for="statusPembayaran" class="form-label"
                  >Status Pembayaran</label
                >
                <div class="w-100"></div>
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="status"
                    id="lunas"
                    value="Lunas"
                    <?php if($DetailCar->status=='Lunas') echo 'checked'?>
                  />
                  <label class="form-check-label" for="lunas" style="font-weight:300; font-size:16px;">Lunas</label>
                </div>
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="status"
                    id="belum lunas"
                    value="Belum Lunas"
                    <?php if($DetailCar->status=='Belum Lunas') echo 'checked'?>
                  />
                  <label class="form-check-label" for="belum lunas" style="font-weight:300;font-size:16px;">Belum Lunas</label>
                </div>
              </div>
              <div class="mb-3">
                <button type="submit" class="btn btn-primary btn-edit">Edit</button>
              </div>
            </form>
            </div>
        </div>
@endsection
