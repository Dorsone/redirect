<!doctype html>
<html lang="en">
<head>
    <title>Jasur Dustmurodov</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('logo.png')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>
<video autoplay muted loop id="background-video">
    <source src="{{asset('wallpaper.mov')}}" type="video/mp4">
</video>
<div style="padding-top: 100px; padding-bottom: 10px" class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="wrapper">
                <div class="row no-gutters">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="contact-wrap w-100 p-md-5 p-4 py-5">
                            <h3 class="mb-4">Write us</h3>
                            @if(session('sent'))
                                <div id="form-message-success" class="mb-4" style="display: block;">
                                    Your message was sent, thank you!
                                </div>
                            @endif
                            <form method="POST" action="#" id="contactForm" name="contactForm" class="contactForm">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name"
                                                   placeholder="Name">
                                            @error('name')
                                            <label id="name-error" class="error" for="name">{{__($message)}}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email"
                                                   placeholder="Email">
                                            @error('email')
                                            <label id="name-error" class="error" for="name">{{__($message)}}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" id="subject"
                                                   placeholder="Subject">
                                            @error('subject')
                                            <label id="name-error" class="error" for="name">{{__($message)}}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30"
                                                      rows="6" placeholder="Message"></textarea>
                                            @error('message')
                                            <label id="name-error" class="error" for="name">{{__($message)}}</label>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" value="Send Message" class="btn btn-primary">
                                            <div class="submitting"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="info-wrap w-100 p-md-5 p-4 py-5 img">
                            <h3>Contact information</h3>
                            <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                            <div class="dbox w-100 d-flex align-items-start">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa-brands fa-github"></span>
                                </div>
                                <div class="text pl-3">
                                    <p><span>GitHub:</span> <a target="_blank" href="https://github.com/github">@github</a></p>
                                </div>
                            </div>
                            <div class="dbox w-100 d-flex align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="text pl-3">
                                    <p><span>Phone:</span> <a href="tel://998900858585">+998900858585</a></p>
                                </div>
                            </div>
                            <div class="dbox w-100 d-flex align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-paper-plane"></span>
                                </div>
                                <div class="text pl-3">
                                    <p><span>Telegram:</span>  <a target="_blank" href="https://t.me/telegram">@telegram</a></p>
                                </div>
                            </div>
                            <div class="dbox w-100 d-flex align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-envelope"></span>
                                </div>
                                <div class="text pl-3">
                                    <p><span>Email:</span>  <a target="_blank" href="mailto:admin@info.uz">admin@info.uz</a></p>
                                </div>
                            </div>
                            <div class="dbox w-100 d-flex align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa-brands fa-instagram"></span>
                                </div>
                                <div class="text pl-3">
                                    <p><span>Instagram:</span> <a target="_blank" href="https://instagram.com/instagram">@instagram</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

