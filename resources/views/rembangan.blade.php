@extends('template.detail')

@section('detail-content')
    <div class="detail-container">
        <section class="row-wrap">
            <div class="detail-content">
                <img src="{{ asset('images/rembangan.jpg') }}" alt="rembangan" width="400px" />
                <h2>Puncak Rembangan</h2>

                <p>
                    Puncak Wisata Rembangan Jember sendiri lokasinya berada di Desa Kemuning Lor, Kecamatan Arjasa,
                    Kabupaten Jember, Provinsi Jawa Timur. Apa saja sebenarnya yang akan pengunjung dapatkan jika berlibur
                    di tempat wisata ini?
                    Wisata Rembangan ini biasa disebut dengan Puncak Rembang yang mana tempat ini merupakan tempat wisata
                    yang berada di dataran tinggi Jember.
                    Jika membahas tentang pemandangan, di sini pengunjung akan disuguhkan dengan pemandangan gunung-gunung
                    di Jember yang menakjubkan.
                    Saat malam, dari atas puncak pengunjung akan dapat melihat ribuan cahaya yang datang dari rumah-rumah
                    warga yang berada di bawah puncaknya.
                </p>
            </div>

            <div class="review-content">
                @foreach ($review as $item)
                    @php
                        switch ($item->rating) {
                            case 5:
                                $star = 'images/five-star.png';
                                break;

                            case 4:
                                $star = 'images/four-star.png';
                                break;
                            case 3:
                                $star = 'images/three-star.png';
                                break;
                            case 2:
                                $star = 'images/two-star.png';
                                break;

                            default:
                                $star = 'images/two-star.png';
                                break;
                        }

                    @endphp
                    <div class="col">
                        <img src="{{ asset('images/profile.png') }}" alt="profile" />
                        <h3>{{ $item->user_name }}</h3>
                        <div class="star-flex">
                            <img src="{{ asset($star) }}" alt="fivestar" />
                        </div>
                        <p>{{ $item->review }}</p>
                    </div>
                @endforeach

        </section>

        <section class="add-comment">
            <div class="comment-content">
                <form action="{{ route('review-post') }}" method="POST">
                    @csrf
                    <input type="text" placeholder="Masukkan Komentar" name="review" id="comment" required />
                    <input type="text" placeholder="Nama" name="user_name" id="" required />
                    <input type="hidden" name="wisata_id" value="{{ $detail->id }}">
                    <input type="hidden" name="rating" id="rating">
                    <button type="submit">Kirim Review</button>
                </form>
            </div>
            <div class="star-rating" id="starRating">
                <span class="star" data-value="5">&#9733;</span>
                <span class="star" data-value="4">&#9733;</span>
                <span class="star" data-value="3">&#9733;</span>
                <span class="star" data-value="2">&#9733;</span>
                <span class="star" data-value="1">&#9733;</span>
            </div>
        </section>
    </div>
@endsection
