@extends('parts.master')
@extends('parts.navbar')

@section('contents')
<!-- insert form -->
    <section id="insert">
      <div class="container insert">
        
        <h1 class="titleInsert" align="center">Profile</h1>
        <form enctype="multipart/form-data" method="POST" action="/ProfileHamka/edit" class="form-input">
            @method('put')
            @csrf
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            
          <div class="mb-3">
            <label for="inputEmail" class="form-label">Email</label>
            <input
              type="email"
              class="form-control"
              value="{{Auth::user()->email}}"
              name="email"
            />
          </div>
          <div class="mb-3">
            <label for="inputNamaPemilik" class="form-label"
              >Nama</label
            >
            <input
              type="text"
              class="form-control"
              value="{{Auth::user()->name}}"
              name="name"
              required
            />
          </div>
          <div class="mb-3">
            <label for="inputMerk" class="form-label">Nomor handphone</label>
            <input
              type="text"
              class="form-control"
              value="{{Auth::user()->no_hp}}"
              name="no_hp"
              required
            />
          </div>
          <hr>
          <div class="mb-3">
            <label for="inputTanggalBeli" class="form-label"
              >Kata sandi</label
            >
            <input type="password" class="form-control" name="password" placeholder="masukan kata sandi..." required />
          </div>
          <div class="mb-3">
            <label for="inputMerk" class="form-label">Konfirmasi password</label>
           <input type="password" class="form-control" name="password_confirmation" placeholder="Ulangi kata sandi..." required />
          </div>
          <div class="mb-3">
              <label for="startTime" class="form-label">Warna navbar</label>
              <select class="form-select" name="WarnaBG">
                <option selected disabled value="">Pilih warna untuk navbar</option>
                <option value='#0d6efd'>Biru</option>
                <option value='#A4BE7B'>Hijau</option>
                <option value='#9E7676'>Cokelat</option>
              </select>
            </div>
            
          <div class="mb-3 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary" name="btn-update" >Update</button>
          </div>
        </form>
      </div>
    </section>
    <!-- end insert forrm -->
   
    <div class="container mt-5 mb-3">
        <img src="{{URL ('asset/images/logo-ead 1.png')}}" alt="logo" >    
        <span class="ms-3">hamka_1202204136</span>  
    </div> 
@endsection