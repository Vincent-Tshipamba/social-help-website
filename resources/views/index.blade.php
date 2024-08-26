<x-app-layout>
    <!-- Slider Area -->
    @include('partialsVisitor.hero')
    <!--/ End Slider Area -->

    <!-- Start Schedule Area -->
    @include('partialsVisitor.donates')
    <!--/End Start schedule Area -->

    <!-- Start Feautes -->
    @include('partialsVisitor.features')
    <!--/ End Feautes -->

    <!-- Start Fun-facts -->
    @include('partialsVisitor.fun-facts')
    <!--/ End Fun-facts -->

    <!-- Start Call to action -->
    @include('partialsVisitor.call-to-action')
    <!--/ End Call to action -->

    <!-- Start service -->
    @include('partialsVisitor.services')
    <!--/ End service -->

    <!-- Start Blog Area -->
    @include('partialsVisitor.blog')
    <!-- End Blog Area -->

    <!-- Start Appointment -->
    @include('partialsVisitor.contact')
    <!-- End Appointment -->

    <!-- Start Newsletter Area -->
    <section class="newsletter section">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6  col-12">
                    <!-- Start Newsletter Form -->
                    <div class="subscribe-text ">
                        <h6>Sign up for newsletter</h6>
                        <p class="">Cu qui soleat partiendo urbanitas. Eum aperiri indoctum eu,<br> homero
                            alterum.</p>
                    </div>
                    <!-- End Newsletter Form -->
                </div>
                <div class="col-lg-6  col-12">
                    <!-- Start Newsletter Form -->
                    <div class="subscribe-form ">
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <input name="EMAIL" placeholder="Your email address" class="common-input"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'"
                                required="" type="email">
                            <button class="btn">Subscribe</button>
                        </form>
                    </div>
                    <!-- End Newsletter Form -->
                </div>
            </div>
        </div>
    </section>
    <!-- /End Newsletter Area -->
</x-app-layout>
