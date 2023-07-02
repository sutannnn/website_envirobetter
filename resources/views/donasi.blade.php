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
        <img width="300" src="image/donasi.jpg" sizes="100px"/>
        <div class="kolom">
            <p class="deskripsi">Small Action Bring Big Changes</p>
            <h2>Donasi Uang</h2>
            <p><a href="/donasiUang" class="tbl-biru">Donasi</a></p>
        </div>
      </section>
      <section id="home">
        <img width="300" src="image/1.png"/>
        <div class="kolom">
            <p class="deskripsi">Small Action Bring Big Changes</p>
            <h2>Donasi Bibit</h2>
            <p><a href="/donasiPohon" class="tbl-biru">Donasi</a></p>
        </div>
      </section>
    </section>
    </div>
@endsection