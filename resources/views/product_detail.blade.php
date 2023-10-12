@extends('layouts.site')
@section('title', 'Tin tức')
@section('main')

<link rel="stylesheet" href="{{url('assets')}}/css/ChiTietSanPham.css" media="screen">

<section class="u-align-center u-clearfix u-image u-section-1" id="sec-d710" data-image-width="1920"
    data-image-height="2442">
    <div class="u-container-style u-group u-shape-rectangle u-group-1">
      <div class="u-container-layout u-container-layout-1">
        <h1 class="u-custom-font u-text u-text-default u-text-1">{{$model->name}}</h1><span
          class="u-file-icon u-icon u-text-custom-color-5 u-icon-1"><img src="{{url('assets')}}/images/992001-7c0062d0.png" alt=""></span>
        <p class="u-custom-font u-heading-font u-text u-text-2">{{$model->price}}&nbsp;<span style="font-size: 1.5rem;">VND</span>
        </p><span class="u-file-icon u-icon u-text-custom-color-2 u-icon-2"><img src="{{url('assets')}}/images/2767220-195933c1.png"
            alt=""></span>
        <div
          class="u-carousel u-carousel-top u-gallery u-layout-thumbnails u-lightbox u-no-transition u-show-text-always u-thumbnails-position-left u-gallery-1"
          data-interval="5000" data-u-ride="carousel" id="carousel-7f0c" data-pause="hover">
          <div class="u-carousel-inner u-gallery-inner" role="listbox">
            <div class="u-active u-carousel-item u-gallery-item u-carousel-item-1">
              <div class="u-back-slide" data-image-width="150" data-image-height="150">
                <img class="u-back-image u-expanded u-image-contain" src="{{url('assets')}}/images/img-1.jpg">
              </div>
              <div class="u-container-align-left u-over-slide u-over-slide-1">
                <h3 class="u-align-left u-gallery-heading" style="margin-left: 0px; margin-right: auto;">Sample Title
                </h3>
                <p class="u-align-left u-gallery-text" style="margin-left: 0px; margin-right: auto;">Sample Text</p>
              </div>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-2" data-image-width="2836"
              data-image-height="1875">
              <div class="u-back-slide" data-image-width="150" data-image-height="150">
                <img class="u-back-image u-expanded u-image-contain" src="{{url('assets')}}/images/img-2.jpg">
              </div>
              <div class="u-container-align-left u-over-slide u-over-slide-2">
                <h3 class="u-align-left u-gallery-heading" style="margin-left: 0px; margin-right: auto;"></h3>
                <p class="u-align-left u-gallery-text" style="margin-left: 0px; margin-right: auto;"></p>
              </div>
              <style data-mode="XL"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
            <div class="u-carousel-item u-gallery-item u-carousel-item-3" data-image-width="147"
              data-image-height="147">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded u-image-contain" src="{{url('assets')}}/images/img-3.jpg">
              </div>
              <div class="u-container-align-left u-over-slide u-over-slide-3">
                <h3 class="u-align-left u-gallery-heading" style="margin-left: 0px; margin-right: auto;"></h3>
                <p class="u-align-left u-gallery-text" style="margin-left: 0px; margin-right: auto;"></p>
              </div>
              <style data-mode="XL"></style>
              <style data-mode="LG"></style>
              <style data-mode="MD"></style>
              <style data-mode="SM"></style>
              <style data-mode="XS"></style>
            </div>
          </div>
          <a class="u-carousel-control u-carousel-control-prev u-icon-rectangle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-1"
            href="#carousel-7f0c" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847">
                <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path>
              </svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847">
                <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path>
              </svg>
            </span>
          </a>
          <a class="u-carousel-control u-carousel-control-next u-icon-rectangle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-2"
            href="#carousel-7f0c" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847">
                <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
              </svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847">
                <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
              </svg>
            </span>
          </a>
          <ol class="u-carousel-thumbnails u-spacing-42 u-vertical-spacing u-carousel-thumbnails-1">
            <li class="u-active u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-7f0c"
              data-u-slide-to="0">
              <img class="u-carousel-thumbnail-image u-image" src="{{url('assets')}}/images/img-1.jpg">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-2" data-u-target="#carousel-7f0c" data-u-slide-to="1">
              <img class="u-carousel-thumbnail-image u-image" src="{{url('assets')}}/images/img-2.jpg">
            </li>
            <li class="u-carousel-thumbnail u-carousel-thumbnail-3" data-u-target="#carousel-7f0c" data-u-slide-to="2">
              <img class="u-carousel-thumbnail-image u-image" src="{{url('assets')}}/images/img-3.jpg">
            </li>
          </ol>
        </div><span class="u-file-icon u-icon u-text-custom-color-2 u-icon-3"><img src="{{url('assets')}}/images/2516688-352f2e1b.png"
            alt=""></span>
        <p class="u-heading-font u-text u-text-3">200g</p>
        <p class="u-custom-font u-text u-text-4"> {{$model->description}}<br>
          <br>{{$model->contents}}&nbsp;
        </p>
      </div>
    </div>
    <div class="u-container-style u-group u-shape-rectangle u-group-2">
      <div class="u-container-layout u-container-layout-2">
        <p class="u-custom-font u-text u-text-5">Hướng dẫn pha Trà Shan Tuyết</p>
        <p class="u-custom-font u-text u-text-6">Đổ vào ấm từ 150 - 200 ml, nước số nhiệt độ 85 `C</p><span
          class="u-file-icon u-icon u-text-custom-color-3 u-icon-4"><img src="{{url('assets')}}/images/606797-09df08bc.png" alt=""></span>
        <p class="u-custom-font u-text u-text-default u-text-7">1 - 2 nắm trà, khoảng 20 - 30gram</p><span
          class="u-file-icon u-icon u-text-custom-color-3 u-icon-5"><img src="images/2447663-7b9054d5.png"
            alt=""></span>
        <p class="u-custom-font u-text u-text-8">Để trà 4 - 6 phứt </p><span
          class="u-file-icon u-icon u-text-custom-color-3 u-icon-6"><img src="{{url('assets')}}/images/992700-8836bb4f.png" alt=""></span>
        <img class="u-image u-image-contain u-image-default u-image-4" src="{{url('assets')}}/images/phatra.jpg" alt=""
          data-image-width="747" data-image-height="561">
      </div>
    </div>


    <!-- Sản phẩm liên quan -->
    <div class="u-container-style u-expanded-width u-group u-shape-rectangle u-group-3">
      <div class="u-container-layout u-container-layout-3">
        <h2 class="u-custom-font u-text u-text-9">Sản phẩm liên quan</h2>
        <div class="u-expanded-width u-layout-horizontal u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <img class="u-align-center u-image u-image-default u-image-5" alt="" data-image-width="267"
                  data-image-height="273" src="{{url('assets')}}/images/CHITIETSANPHAM1.png">
                <h4 class="u-align-center u-text u-text-10">Trà Búp</h4>
                <p class="u-align-left u-text u-text-11">70.000&nbsp;VND</p>
                <p class="u-align-left u-text u-text-12">200g</p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-5">
                <img class="u-align-center u-image u-image-default u-image-6" alt="" data-image-width="288"
                  data-image-height="273" src="{{url('assets')}}/images/CHITIETSANPHAM2.png">
                <h4 class="u-align-center u-text u-text-13">Trà Shan Tuyết</h4>
                <p class="u-align-left u-text u-text-14">50.000 VND</p>
                <p class="u-align-left u-text u-text-15">200g</p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-6">
                <img class="u-align-center u-image u-image-default u-image-7" alt="" data-image-width="292"
                  data-image-height="273" src="{{url('assets')}}/images/CHITIETSANPHAM3.png">
                <h4 class="u-align-center u-text u-text-16">Trà Ô Long</h4>
                <p class="u-align-left u-text u-text-17">50.000 VND</p>
                <p class="u-align-left u-text u-text-18">200g</p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-7">
                <img class="u-align-center u-image u-image-default u-image-8" alt="" data-image-width="267"
                  data-image-height="273" src="{{url('assets')}}/images/CHITIETSANPHAM1.png">
                <h4 class="u-align-center u-text u-text-19">Trà Búp</h4>
                <p class="u-align-left u-text u-text-20">70.000 VND</p>
                <p class="u-align-left u-text u-text-21">200g</p>
              </div>
            </div>
          </div>
          <a class="u-absolute-vcenter u-border-2 u-border-custom-color-2 u-gallery-nav u-gallery-nav-prev u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-custom-color-2 u-white u-gallery-nav-1"
            href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847">
                <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path>
              </svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847">
                <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path>
              </svg>
            </span>
          </a>
          <a class="u-border-2 u-border-custom-color-2 u-gallery-nav u-gallery-nav-next u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-custom-color-2 u-white u-gallery-nav-2"
            href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847">
                <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
              </svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847">
                <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
              </svg>
            </span>
          </a>
        </div>
      </div>
    </div>
  </section>

@stop()