@extends('layouts.app')

@section('content')
        <!-- Banner -->
<div id="particles-js">
    <section id="banner" style="text-align: center;
    margin: auto;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    height: 148px;">
        <div class="content">
            <header>
                <h2>International Virtual Robot Intelligence Competition</h2>
                <p style="text-align: center;">Some description<br/>
                    Another description!!</p>
            </header>
            <span class=""><img src="images/IVRI2016-07.png" alt="" style="width: 500px;"></span>
        </div>
    </section>
</div>

<!-- contest Information -->
<section id="contest" class="spotlight style1 bottom">
    <!-- Scheduling image -->
    <span class="image fit main"><img src="images/pic02.jpg" alt=""/></span>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="4u 12u$(medium)">
                    <header>
                        <h2>Title</h2>
                        <p>Description</p>
                    </header>
                </div>
                <div class="4u 12u$(medium)">
                    <p>Some stuff about the contest itself, how it is gonna be held and more information like that.</p>
                </div>
                <div class="4u$ 12u$(medium)">
                    <p>Timing and schedule goes here. When you are doing what?</p>
                </div>
            </div>
        </div>
    </div>
    <a href="#organizers" class="goto-next scrolly">Next</a>
</section>

<!-- Two -->
<section id="#organizers" class="spotlight style2 right">
    <span class="image fit main"><img src="images/pic03.jpg" alt=""/></span>
    <div class="content">
        <header>
            <h2>Interdum amet non magna accumsan</h2>
            <p>Nunc commodo accumsan eget id nisi eu col volutpat magna</p>
        </header>
        <p>Feugiat accumsan lorem eu ac lorem amet ac arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer
            mi sed nascetur cep aliquet augue varius tempus lobortis porttitor lorem et accumsan consequat adipiscing
            lorem.</p>
        <ul class="actions">
            <li><a href="#" class="button">Learn More</a></li>
        </ul>
    </div>
    <a href="#three" class="goto-next scrolly">Next</a>
</section>

<!-- Three -->
<section id="three" class="spotlight style3 left">
    <span class="image fit main bottom"><img src="images/pic04.jpg" alt=""/></span>
    <div class="content">
        <header>
            <h2>Interdum felis blandit praesent sed augue</h2>
            <p>Accumsan integer ultricies aliquam vel massa sapien phasellus</p>
        </header>
        <p>Feugiat accumsan lorem eu ac lorem amet ac arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer
            mi sed nascetur cep aliquet augue varius tempus lobortis porttitor lorem et accumsan consequat adipiscing
            lorem.</p>
        <ul class="actions">
            <li><a href="#" class="button">Learn More</a></li>
        </ul>
    </div>
    <a href="#four" class="goto-next scrolly">Next</a>
</section>

<!-- Four -->
<section id="four" class="wrapper style1 special fade-up">
    <div class="container">
        <header class="major">
            <h2>Organizers</h2>
            <p>Or maybe sponsers with their logo!</p>
        </header>
        <div class="box alt">
            <div class="row uniform">
                <section class="4u 6u(medium) 12u$(xsmall)">
                    <span class="icon alt major fa-area-chart"></span>
                    <h3>Ipsum sed commodo</h3>
                    <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                </section>
                <section class="4u 6u$(medium) 12u$(xsmall)">
                    <span class="icon alt major fa-comment"></span>
                    <h3>Eleifend lorem ornare</h3>
                    <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                </section>
                <section class="4u$ 6u(medium) 12u$(xsmall)">
                    <span class="icon alt major fa-flask"></span>
                    <h3>Cubilia cep lobortis</h3>
                    <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                </section>
                <section class="4u 6u$(medium) 12u$(xsmall)">
                    <span class="icon alt major fa-paper-plane"></span>
                    <h3>Non semper interdum</h3>
                    <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                </section>
                <section class="4u 6u(medium) 12u$(xsmall)">
                    <span class="icon alt major fa-file"></span>
                    <h3>Odio laoreet accumsan</h3>
                    <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                </section>
                <section class="4u$ 6u$(medium) 12u$(xsmall)">
                    <span class="icon alt major fa-lock"></span>
                    <h3>Massa arcu accumsan</h3>
                    <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                </section>
            </div>
        </div>
        <footer class="major">
            <ul class="actions">
                <li><a href="#" class="button">Magna sed feugiat</a></li>
            </ul>
        </footer>
    </div>
</section>

<!-- Five -->
<section id="subscribe" class="wrapper style2 special fade">
    <div class="container">
        <header>
            <h2>Let us inform you!</h2>
            <p>You can subscribe and give us your mail and just wait for the good news!</p>
        </header>
        <form method="post" action="{{ route('app::subscribe') }}" class="container 50%">
            <div class="row uniform 50%">
                <div class="8u 12u$(xsmall)"><input type="email" name="email" id="subscribe-email"
                                                    placeholder="Your Email Address"/></div>
                <div class="4u$ 12u$(xsmall)"><input type="submit" value="Subscribe" class="fit special"
                                                     id="subscribe-submit" onclick="sendSubcription()"/></div>
            </div>
        </form>
    </div>
</section>
@endsection

{{--@push('scripts')--}}
{{--<script type="text/javascript">--}}
{{--function sendSubcription() {--}}
{{--debugger;--}}
{{--var email = $('#subscribe-email').val();--}}
{{--$.ajax({--}}
{{--url : "{!! route('contest::register') !!}",--}}
{{--type : "POST",--}}
{{--data : {--}}
{{--"email" : email,--}}
{{--},--}}
{{--beforeSend : function (xhr, stgs) {--}}

{{--},--}}
{{--success : function (result,status,xhr) {--}}

{{--},--}}
{{--error : function (xhr,status,error) {--}}

{{--}--}}
{{--});--}}
{{--}--}}
{{--</script>--}}
{{--@endpush--}}