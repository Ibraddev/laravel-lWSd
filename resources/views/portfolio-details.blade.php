@extends('app')

<title>@section('title') Projet : {{$project->title}} @endsection</title>
@include('layouts.header')
<!-- Template Main CSS File -->
<link href="{{asset('commons/css/style.css')}}" rel="stylesheet">
@section('content')

  <main id="main">

    <!-- ======= Portfolio Details ======= -->
    <div id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row">

          <div class="col-lg-8">
            <h2 class="portfolio-title">{{$project->title}}</h2>

            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <?php 
                  $title = $project->title;
                  $img = $project->img;
                  $nb_img = $project->nb_img + 1
                ?>
                @for ($i = 1; $i < $nb_img; $i++)
                  <div class="swiper-slide">
                    <img src="{{asset('commons/img/portfolio/'.$title.'/'.$img.' ('.$i.').png')}}" alt="Suivi de véhicule" style="width:100%">
                  </div>
                @endfor
              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>

          <div class="col-lg-4 portfolio-info">
            <h3>Information du projet</h3>
            <ul>
              <li><strong>Categorie</strong>: {{$project->categorie}}</li>
              <li><strong>Client</strong>: {{$project->title}}</li>
              <!--<li><strong>Date du projet</strong>: </li>-->
              <!--<li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>-->
            </ul>

            <p>
            </li>
            {{$project->description}}
            </p>
          </div>

        </div>

      </div>
    </div><!-- End Portfolio Details -->

  </main><!-- End #main -->

  @include('layouts.footer')
@endsection
