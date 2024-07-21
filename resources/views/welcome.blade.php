@extends('layouts.main')

@section('container')

<div class="">

    <div id="carouselExampleIndicators" class="carousel slide my-3 container">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444">First slide</text></svg>
          </div>
          <div class="carousel-item">
            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444">Second slide</text></svg>
          </div>
          <div class="carousel-item">
            <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333">Third slide</text></svg>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="container">
        <div class="my-5 row">
          <div class="col">
            <h2>Tentang Limo Kaum</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam qui error ad aperiam accusantium? Nostrum asperiores totam corporis soluta porro quas cumque labore ut possimus maxime, quos amet expedita odio!
            Ea repudiandae fugiat enim quas? Doloribus beatae quod nulla veritatis adipisci veniam deleniti magnam consectetur laboriosam laudantium commodi tempore facilis enim suscipit, voluptas delectus unde, consequatur excepturi eaque hic nostrum.
            Voluptatum labore quos obcaecati quidem accusantium itaque inventore velit quis ex nostrum, expedita ducimus voluptates aut dolorum deleniti suscipit iure sit reprehenderit. Provident, reiciendis cupiditate. Aperiam quo facere ex suscipit.</p>
          </div>
          <div class="col">
            <img src="{{url('/img/1.jpg')}}" class="float-end" />
        </div>
      </div>
     
    </div>

    <div class="bg-light py-5">
      <div class="container">
        <div class="row gap-3">
          <div class="col">
            <div class="row">
              <a href="#" class="h2 text-decoration-none">Berita Terkini</a>
              <hr />
              <ul>
                <li>Tidak ada data yang ditampilkan</li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="row">
              <a href="#" class="h2 text-decoration-none">Pengumuman</a>
              <hr /> 
              <ul>
                <li>Tidak ada data yang ditampilkan</li>
              </ul>
            </div>
            <div class="row">
              <a href="#" class="h2 text-decoration-none">Agenda Kegiatan</a>
              <hr />
              <ul>
                <li>Tidak ada data yang ditampilkan</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row py-5">
          <div class="col">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1577.8311952971476!2d100.56422746829443!3d-0.4630589133839604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd52da2e410413f%3A0x689346fa04375a04!2sKantor%20Wali%20Nagari%20Limo%20Kaum!5e0!3m2!1sen!2sid!4v1721569418428!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col">
            <a href="#" class="h2 text-decoration-none">Agenda Kegiatan</a>
            <hr />
            <ul>
              <li>Tidak ada data yang ditampilkan</li>
            </ul>
          </div>
        </div>
       
      </div>
    </div>

      
</div>

@endsection
