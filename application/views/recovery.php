<?php
/**
 * Created by PhpStorm.
 * User: zhangzhaoying
 * Date: 21/09/2016
 * Time: 3:48 AM
 */
?>
<!-- loading header -->
<?php $this->load->view('header'); ?>

    <script type="text/javascript">
        $('li#treatment-after-injury').addClass('active');
    </script>
<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Recovery</h1>
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
                        <h3>Recovery</h3>
                        <p>A work-related injury or illness can have a big impact on your life. Research has shown that getting back to work is important for your health and wellbeing. The earlier you start planning to return to work, the better your chances of getting back sooner.So what kinds of rehabilitation you need to focus on is the big serious category you need to consider.
                        </p>
                    </div>
                    <div class="single-post-image">
                        <img src="img/recovery.png" style="height:250px; width:400px" alt="Post Title">
                    </div>
                    <div class="single-post-content">
                        <h3>Step 1: Rest</h3>
                        <p>
                            Rest is the most important thing to do, and somehow are always difficult to implement if you are the active person even you know you need a rest. It is necessary for recovery people because your wound body needs some time for recovery without any activation.
                        </p>
                        <h3>Step 2: Rehab</h3>
                        <p>
                            Rehabbing injuries is THE most important part of recovery. If you don’t rehab an injury properly, then it will be extremely difficult to reach your maximum potential.
                        </p>
                        <h3>Step 3: Change focus</h3>
                        <p>
                            Changing focus does not means changing occupation! It simple means you can jump out the work environment and start to relax yourself during the rehabilitation. It’s positive for doing that because the terrible experience of getting injured scars the many workers for a long period if you keep thinking your injured incident.
                        </p>
                        <h3>Step 4: Staying positive</h3>
                        <ul>
                            <li><p>Focus on what you can do, rather than what you can’t.</p></li>
                            <li><p>Talk to your treating health practitioner about how you may be able to stay active.</p></li>
                            <li><p>Talk to your family about how they can support you and help you to get better.</p></li>
                            <li><p>If you’re away from work, keep in touch with your employer and workmates. Talk to them about how you can stay connected with what’s happening at work. There may be newsletters and updates they can send you.</p></li>
                            <li><p>Try not to get frustrated if things don’t always go smoothly. Rehabilitation can take time and requires persistence. Try to stay positive.</p></li>
                        </ul>
                        <h3>Step 5: Thinking the future</h3>
                        <ul>
                            <li><p>You should start planning your future and thinking when you can go back to work. You may not have to wait until you are 100 per cent recovered to return to work. It’s important to try to keep positive and motivated – focus on what you can do, rather than what you can’t. Whether it’s on reduced hours in your regular job or on modified or alternative duties, getting back to work is part of your rehabilitation.</p> </li>
                            <li><p>Talk to your health practitioner to seek a advise about the recovery</li>
                            <li><p>Additional support is needs in particular situation, if you find any difficulty to get back to work, you should speak to your employer to see a immediate help, or go to the Work Safe victoria website and find out the qualified agent to help your further situtaion.</p></li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- End Blog Post -->
        </div>
    </div>
</div>

    <!-- loading footer -->
<?php $this->load->view('footer'); ?>