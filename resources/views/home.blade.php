@extends('layouts/main')

@section('menu')
                <ul>
                    <li><a href="/home" class="tbl-biru">Kampanye</a></li>
                    <li><a href="/donasi">Donasi</a></li>
                    <li><a href="/account">Profil</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">

        @foreach ($posts as $post)
        <section id="campaign">
            <div class="kolom">
                <h2>
                    <a href="/home/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                </h2>
                <p>{!! $post->head !!}</p>
                @if($post->image)
                <div>
                    <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->title }}" width="400px" height="400px">
                </div>
                @else
                    <img src="/image/3.png" alt="{{ $post->title }}">
                @endif
                <p><a href="/donasiUang" class="tbl-biru">Donation</a></p>
            </div>
        </section>
        @endforeach

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
                        <p>{{ $posts->count('id') }}</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection