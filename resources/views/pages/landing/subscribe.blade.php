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