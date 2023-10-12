@extends('layouts.site')
@section('title', 'Liên hệ')
@section('main')

<link rel="stylesheet" href="{{url('assets')}}/css/LienHe.css" media="screen">
<section style="top: 90px;" class="u-clearfix u-image u-section-1" id="sec-1d18" data-image-width="1920" data-image-height="976">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-group u-shape-rectangle u-group-1">
            <div class="u-container-layout u-container-layout-1">
                <h2 class="u-custom-font u-text u-text-1">LIÊN HỆ VỚI CHÚNG TÔI<span style="font-weight: 700;"></span>
                </h2>
                <div class="u-form u-form-1">
                    <form action="https://forms.nicepagesrv.com/v2/form/process" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 15px;" source="email" name="form">
                        <div class="u-form-group u-form-name u-label-none">
                            <label for="name-6797" class="u-label">Name</label>
                            <input type="text" placeholder="Họ Tên" id="name-6797" name="name" class="u-border-3 u-border-custom-color-2 u-custom-font u-input u-input-rectangle u-text-custom-color-4 u-input-1" required="">
                        </div>
                        <div class="u-form-email u-form-group u-label-none">
                            <label for="email-6797" class="u-label">Email</label>
                            <input type="email" placeholder="Email" id="email-6797" name="email" class="u-border-3 u-border-custom-color-2 u-custom-font u-input u-input-rectangle u-text-custom-color-4 u-input-2" required="">
                        </div>
                        <div class="u-form-group u-form-message u-label-none">
                            <label for="message-6797" class="u-label">Address</label>
                            <textarea placeholder="Số Điện Thoại" rows="1" cols="50" id="message-6797" name="message" class="u-border-3 u-border-custom-color-2 u-custom-font u-input u-input-rectangle u-text-custom-color-4 u-input-3" required=""></textarea>
                        </div>
                        <div class="u-form-group u-label-none">
                            <label for="text-8ede" class="u-label">Input</label>
                            <input type="text" id="text-8ede" name="text" class="u-border-3 u-border-custom-color-2 u-custom-font u-input u-input-rectangle u-text-custom-color-4 u-input-4" placeholder="Nội Dung">
                        </div>
                        <div class="u-align-left u-form-group u-form-submit">
                            <a href="#" class="u-btn u-btn-submit u-button-style u-custom-color-2 u-custom-font u-text-body-alt-color u-btn-1">Gửi</a>
                            <input type="submit" value="submit" class="u-form-control-hidden">
                        </div>
                        <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
                        <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try
                            again.</div>
                        <input type="hidden" value="" name="recaptchaResponse">
                        <input type="hidden" name="formServices" value="46c79684a10a33118ded9a0206104e6e">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@stop()