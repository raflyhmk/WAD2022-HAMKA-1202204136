@extends('parts.master')
@extends('parts.navbar')
<!-- insert form -->
@section('contents')
    <section id="insert">
      <div class="container insert">
        <h1 class="titleInsert">Tambah mobil</h1>
        <p class="descInsert">Tambah Mobil baru anda ke list show room</p>
        <hr>
        <form enctype="multipart/form-data" method="POST" action="" class="form-input" >
            @csrf
          <div class="mb-3">
            <label for="inputNamaMobil" class="form-label">Nama mobil</label>
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <input
              type="text"
              class="form-control"
              placeholder="masukan nama mobil..."
              name="name"
              required
            />
          </div>
          <div class="mb-3">
            <label for="inputNamaPemilik" class="form-label"
              >Nama Pemilik</label
            >
            <input
              type="text"
              class="form-control"
              placeholder="Nama - NIM"
              name="owner"
              required
            />
          </div>
          <div class="mb-3">
            <label for="inputMerk" class="form-label">Merk</label>
            <input
              type="text"
              class="form-control"
              placeholder="Masukan merk mobil..."
              name="brand"
              required
            />
          </div>
          <div class="mb-3">
            <label for="inputTanggalBeli" class="form-label"
              >Tanggal Beli</label
            >
            <input type="date" class="form-control" name="purchase_date" required />
          </div>
          <div class="mb-3">
            <label for="inputMerk" class="form-label">Deskripsi</label>
            <textarea
              class="form-control"
              placeholder="Masukan deskripsi mobil disini..."
              name="description"
              required
            ></textarea>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Foto</label>
            <input class="form-control" type="file" id="formFile" name="image" required/>
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
                required
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
                required
              />
              <label class="form-check-label" for="belum lunas" style="font-weight:300;font-size:16px;">Belum Lunas</label>
            </div>
          </div>

          <div class="mb-3">
            <button type="submit" class="btn btn-primary">Selesai</button>
          </div>
        </form>
      </div>
    </section>
    <!-- end insert forrm -->
@endsection

