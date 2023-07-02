@extends('layouts/main')

@section('menu')
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#campaign">Our Campaign</a></li>
                    <li><a href="#activity">Activity</a></li>
                    <li><a href="#tim">Team</a></li>
                    <li><a href="/form" class="tbl-biru">Account</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
    <section id="home">
            <img src="image/1.png"/>
            <div class="kolom">
                <p class="deskripsi">Small Action Bring Big Changes</p>
                <h2>EnviroBetter</h2>
                <p>Envirobetter adalah platform crowdplanting penggalangan dana online untuk konservasi lingkungan sekitar Gresik.</p>
                <p><a href="/home" class="tbl-biru">Our Campaign</a></p>
            </div>
        </section>

        <section id="campaign">
            <div class="kolom">
                <h2>Our Campaign</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed deserunt voluptatibus possimus blanditiis reiciendis. Qui, facilis! Delectus exercitationem dolores sapiente?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed deserunt voluptatibus possimus blanditiis reiciendis. Qui, facilis! Delectus exercitationem dolores sapiente?</p>
                <p><a href="/donasi" class="tbl-biru">Donation</a></p>
            </div>
            <img src="image/2.png"/>
        </section>

        <section id="activity">
            <div class="tengah">
                <div class="kolom">
                    <h2>Our Activity</h2>
                </div>

                <div class="plant-list">
                    <div class="grafik-list">
                        <img src="image/3.png"/>
                        <p class="deskripsi">Donatur</p>
                        <p>{{ $user->count('id') }}</p>

                    </div>
                    <div class="grafik-list">
                        <img src="image/1.png"/>
                        <p class="deskripsi">Pohon tertanam</p>
                        <p>{{ $donasi->count('id') }}</p>

                    </div>
                    {{-- <div class="grafik-list">
                        <img src="image/4.png"/>
                        <p class="deskripsi">Volunteer</p>
                        <p>0</p>

                    </div> --}}
                    <div class="grafik-list">
                        <img src="image/5.png"/>
                        <p class="deskripsi">Campaign</p>
                        <p>{{ $post->count('id') }}</p>
                    </div>
                </div>
            </div>
        </section>
    </div>


        <section id="tim">
        <div class="tengah">
                <div class="kolom">
                    <h2>Tim EnviroBetter</h2>
                    <p>Mahasiswa Informatika 2020 Universitas Internasional Semen Indonesia</p>
                </div>

                    <div class="tim-list">
                        <img src="image/6.jpg"/>
                        <p>Elfanisa Lukitasari</p>
                        <p>3012010010</p>

                    </div>
                    <div class="tim-list">
                        <img src="image/7.jpeg"/>
                        <p>Sutan Parsaulian Lubis</p>
                        <p>3012010030</p>
                    </div>
                </div>
            </div>
        </section>

@endsection