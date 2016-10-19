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
                <p style="text-align: center;">Computer Engineering and IT Department of Amirkabir University of Technology<br/>
                    October 2016</p>
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
                    <p>APIs are only provided for Python. But you are allowed to use any language as long as you can connect it to the interface.</p>
                </div>
                <div class="4u 12u$(medium)">
                    <p>Top teams of the online phase will be invited for attending the final in Department's site.</p>
                </div>
                <div class="4u$ 12u$(medium)">
                    <p>Teams are expected to write AI algorithms for robot's behavior. There is no need to Robotics knowledge.</p>
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
            <h2>Simulation Environment</h2>
        </header>
        <p>The environment is simulated in Gazebo. There will be challenges for you to solve ...</p>
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
            <h2>What You Will Know About Environment</h2>
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
            <h2>Organizers and Sponsors</h2>

            {{--TODO Link to site(onClick Icon)--}}
            {{--TODO Set Icons--}}

        </header>
        <div class="box alt">
            <div class="row uniform">
                <section class="4u 6u(medium) 12u$(xsmall)">
                    <span class="icon alt major fa-area-chart"></span>
                    <h3>Cognitive Robotics Lab</h3>
                    <p>Competition's framework is developed by CR lab of Amirkabir University of Technology.</p>
                </section>
                <section class="4u 6u$(medium) 12u$(xsmall)">
                    <span class="icon alt major fa-comment"></span>
                    <h3>Computer Engineering Department</h3>
                    <p>The competition is supervised by Prof.Shiry, Prof.Nikabadi and Prof.Nazerfard.</p>
                </section>
                <section class="4u$ 6u(medium) 12u$(xsmall)">
                    <span class="icon alt major fa-flask"></span>
                    <h3>Student Scientific Chapter</h3>
                    <p>The competition is executed by Student Scientific Chapter of department.</p>
                </section>
                <section class="4u 6u$(medium) 12u$(xsmall)">
                    <span class="icon alt major fa-paper-plane"></span>
                    <h3>Sponsor1</h3>
                    <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                </section>
                <section class="4u 6u(medium) 12u$(xsmall)">
                    <span class="icon alt major fa-file"></span>
                    <h3>Sponsor2</h3>
                    <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                </section>
                <section class="4u$ 6u$(medium) 12u$(xsmall)">
                    <span class="icon alt major fa-lock"></span>
                    <h3>Sponsor3</h3>
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
            <p>You can subscribe and give us your mail and just wait until the registration is opened!</p>
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