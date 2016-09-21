<?php
/**
 * Created by PhpStorm.
 * User: zhangzhaoying
 * Date: 21/09/2016
 * Time: 3:47 AM
 */
?>
<!-- loading header -->
<?php $this->load->view('header'); ?>
    <script type="text/javascript">
        $('li#treatment-after-injury').addClass('active');
    </script>
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>First Aid - Chemical Burns</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-sm-3 blog-sidebar">
                    <h4>First Aid</h4>
                    <ul class="recent-posts">
                        <li><a href="<?php echo site_url('Welcome/newPage/cut'); ?>">Cuts and Scrapes</a></li>
                        <li><a href="<?php echo site_url('Welcome/newPage/burn'); ?>">Burns</a></li>
                        <li><a href="<?php echo site_url('Welcome/newPage/fall'); ?>">Fall</a></li>
                        <li><a href="<?php echo site_url('Welcome/newPage/chemical-burn'); ?>">Chemical Burns</a></li>
                    </ul>
                    <h4>Recovery</h4>
                    <ul class="blog-categories">
                        <li><a href="<?php echo site_url('Welcome/newPage/recovery'); ?>">Recovery</a></li>
                    </ul>
                </div>
                <!-- End Sidebar -->
                <div class="col-sm-9">
                    <div class="blog-post blog-single-post">
                        <div class="single-post-info">
                            <h3>Chemical Burns</h3>
                            <p>Chemical burns can be caused by many substances, such as strong acids, drain cleaners, paint thinner and gasoline. Usually, you are aware of the burn and its cause. But sometimes you may not immediately recognize a burn caused by a milder chemical. As with some sunburns, the pain and redness may develop hours after the exposure.
                            </p>
                        </div>
                        <div class="single-post-image">
                            <img src="img/chemical-burn.png" style="height:200; width:400px" alt="Post Title">
                        </div>
                        <div class="single-post-content">
                            <h3>Step 1: Remove the chemical causing the burn.</h3>
                            <p>
                                For dry chemicals, brush off any remaining material. Wear gloves or use a towel or other suitable object, such as a brush.
                            </p>
                            <h3>Step 2: Remove contaminated clothing or jewelry.</h3>
                            <p>
                                This behavior can help to prevent further burning.
                            </p>
                            <h3>Step 3: Rinse the burn immediately.</h3>
                            <p>
                                Run a gentle, steady stream of cool tap water over the burn for 10 or more minutes. A shower may be an effective way to do this. Always protect your eyes.
                            </p>
                            <h3>Step 4: If needed, take an over-the-counter pain reliever.</h3>
                            <p>
                                Such as ibuprofen (Advil, Motrin IB, others), naproxen sodium (Aleve) or acetaminophen (Tylenol, others).
                            </p>
                            <h3>Step 5: Consider a tetanus shot.</h3>
                            <p>
                                Make sure that your tetanus booster is up to date. Doctors recommend people get a tetanus shot at least every 10 years.
                            </p>
                            <h3>Step 6: Seek emergency care.</h3>
                            <p>
                                Seek emergency care if patient has following symptom:
                            <ul>
                                <li>The person shows signs of shock, such as fainting, pale complexion or very shallow breathing.</li>
                                <li>The chemical burn penetrated through the first layer of skin and the burn covers an area more than 3 inches (about 8 centimeters) in diameter.</li>
                                <li>The chemical burn encircles a limb or involves the eyes, hands, feet, face, groin or buttocks, or a major joint.</li>
                            </ul>
                            </p>
                        </div>

                    </div>
                </div>
                <!-- End Blog Post -->
            </div>
        </div>
    </div>
    <!-- loading footer -->
<?php $this->load->view('footer'); ?>