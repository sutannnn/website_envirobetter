@extends('layouts/main')

@section('menu')
                <ul>
                    <li><a href="/home">Kampanye</a></li>
                    <li><a href="/donasi">Donasi</a></li>
                    <li><a href="/account" class="tbl-biru">Profil</a></li>
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="tbl-merah">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <section id="home">
            <img style="width: 200px;height: 200px;border-radius: 100%;" src="image/{{ $image }}" alt="{{ auth()->user()->name }}"/>
            <div class="kolom">
                <p class="deskripsi">{{ auth()->user()->email }}</p>
                <h2>{{ auth()->user()->name }}</h2>
                {{-- <p>Envirobetter adalah platform crowdplanting penggalangan dana online untuk konservasi lingkungan sekitar Gresik.</p> --}}
            </div>
        </section>

        <section id="activity">
            <div class="tengah">
                <div class="kolom">
                    <h2>Your Activity</h2>
                </div>

                <div class="plant-list">
                    <div class="grafik-list">
                        <img src="image/3.png"/>
                        <p class="deskripsi">Donasi</p>
                        <p>0</p>

                    </div>
                    <div class="grafik-list">
                        <img src="image/1.png"/>
                        <p class="deskripsi">Pohon terdonasi</p>
                        <p>0</p>

                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection