@extends('layouts/main')

@section('menu')
                <ul>
                    <li><a href="/home">Kampanye</a></li>
                    <li><a href="/donasi" class="tbl-biru">Donasi</a></li>
                    <li><a href="/account">Profil</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <section id="home">
            <img src="image/1.png"/>
            <div class="kolom">
                <form action="/donasiPohon" method="POST">
                  @csrf
                    {{-- <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" style="width:200px;">
                      </div>
                    </div>
                    <br>
                    <div class="line-height = 4">
                      <label for="inputNama3" class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}" style="width:200px;">
                      </div>
                    </div>
                    <br> --}}
                    <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
                    <div class="line-height = 4">
                        <label for="inputNama3" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="address" name="address" style="width:200px;">
                        </div>
                      </div>
                      <br>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Jenis Pohon</legend>
                        <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jenisPohon" id="gridRadios1" value="Jenis Pohon 1" checked>
                          <label class="form-check-label" for="gridRadios1">
                            Jenis Pohon 1
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jenisPohon" id="gridRadios2" value="Jenis Pohon 2">
                          <label class="form-check-label" for="gridRadios2">
                            Jenis Pohon 2
                          </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenisPohon" id="gridRadios3" value="Jenis Pohon 3">
                            <label class="form-check-label" for="gridRadios3">
                              Jenis Pohon 3
                            </label>
                        </div>
                        </div>
                    </fieldset>
                    <br>
                    <div class="row mb-3">
                      <div class="col-sm-10 offset-sm-2">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck1">
                          <label class="form-check-label" for="gridCheck1">
                            Apakah Anda yakin untuk berdonasi?
                          </label>
                        </div>
                      </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" style="width:150px;">Donasi</button>
                  </form>
            </div>
        </section>
    </div>
@endsection