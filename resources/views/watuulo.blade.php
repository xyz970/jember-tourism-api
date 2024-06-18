@extends('template.detail')

@section('detail-content')
    <div class="detail-container">
        <section class="row-wrap">
            <div class="detail-content">
                <img src="{{ asset('watuulo.jpg') }}" alt="watutulo" width="400px" />
                <h2>Pantai Watu Ulo</h2>

                <p>
                    Pantai ini berada di gugusan Samudera Indonesia dengan panorama alam yang indah. Menariknya di Pantai
                    ini
                    terdapat sebuah batu panjang yang berbentuk seperti ular (Jw.Ulo) yang penuh dengan sisik. Menurut
                    cerita
                    rakyat pada jaman dahulu kala ada seekor Ular yang sedang bertapa di pantai itu. Setelah permohonannnya
                    dikabulkan oleh Yang Maha Kuasa maka wujudnya berubah menjadi batu dengan bagian kepala menjulur ke laut
                    dan
                    badan berada di daratan. Tempat ini juga memiliki nilai sejarah karena pada jaman dulu dijadikan sebagai
                    benteng pertahanan serdadu tentara Jepang. Ada lima buah benteng pertahanan yang dibangun sehinggga
                    masyarakat
                    setempat menyebutnya Goa Jepang. Tidak kalah menariknya di samping Goa Jepang terdapat Goa Lawa (Goa
                    Kalelawar) yang dihuni ratusan ribu Kalelawar.Pengunjung bisa melihat dengan melewati dan menyusuri
                    pantai
                    berpasir.Goa ini mempunyai kedalaman 100 meter yang biasanya dijadikan sebagai tempat bermeditasi karena
                    letaknya yang jauh dari keramaian. Pada saat saat tertentu seperti menjelang Tahun Baru masehi dan Hari
                    Raya
                    Idul Fitri digelar event event special seperti Lomba Layang Layang Pantai dan panggung hiburan rakyat.
                    Dan
                    yang tak kalah menarik setiap Tahun Baru Hijriyah diadakan Festival Pegon, Pegon adalah kendaraan angkut
                    tradisional dengan tenaga sapi serta tasyakuran sebagai wujud terimakasih atas semua rizki yang telah
                    diterima
                    di sepanjang tahun dan harapan untuk tetap diberikan kemudahan dan limpahan rahmat dari Yang Maha Kuasa.
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
