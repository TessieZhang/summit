<?php
/**
 * Created by PhpStorm.
 * User: zhangzhaoying
 * Date: 21/09/2016
 * Time: 3:46 AM
 */
?>

<!-- loading header -->
<?php $this->load->view('header'); ?>

<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>First Aid - Fall</h1>
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
                        <h3>Fall</h3>
                        <p>Fall may lead a number of different injuries; the most common injury related to fall could be Fractures (broken bones) and Sprains. Part one will guide you the first-aid to treat if you suffer in Sprains, Part two will guide you the treatment about Fractures (broken bones).
                        </p>
                    </div>
                    <div class="single-post-image">
                        <img src="img/fall.png" style="height:200; width:400px" alt="Post Title">
                    </div>
                    <div class="single-post-info">
                    <h3>Sprain</h3>
                        </div>
                    <div class="single-post-content">
                        <h3>Step 1: Rest the injured limb.</h3>
                        <p>
                            Your doctor may recommend not putting any weight on the injured area for 48 hours, so you may need to use crutches. A splint or brace may also be helpful initially. But don't avoid all activity. Even with an ankle sprain, you can usually still exercise other muscles to minimize deconditioning. For example, you can use an exercise bicycle with arm exercise handles, working both your arms and the uninjured leg while resting the injured ankle on another part of the bike. That way you still get three-limb exercise to keep up your cardiovascular conditioning.
                        </p>
                        <h3>Step 2: Ice the area.</h3>
                        <p>
                            Use a cold pack, a slush bath or a compression sleeve filled with cold water to help limit swelling after an injury. Try to ice the area as soon as possible after the injury and continue to ice it for 15 to 20 minutes, four to eight times a day, for the first 48 hours or until swelling improves. If you use ice, be careful not to use it too long, as this could cause tissue damage.
                        </p>
                        <h3>Step 3: Compress the area with an elastic wrap or bandage.</h3>
                        <p>
                            Compressive wraps or sleeves made from elastic or neoprene are best.
                        </p>
                        <h3>Step 4: Elevate the injured limb</h3>
                        <p>
                            Elevate the injured limb above your heart whenever possible to help prevent or limit swelling.
                        </p>

                        <br/>
                        <div class="single-post-image">
                            <img src="img/fracture.png" style="height:200; width:400px" alt="Post Title">
                        </div>
                        <div class="single-post-info">
                    <h3>Fractures</h3>
                            </div>
                        <h3>Step 1: Stop any bleeding.</h3>
                        <p>
                            Apply pressure to the wound with a sterile bandage, a clean cloth or a clean piece of clothing.
                        </p>
                        <h3>Step 2: Immobilize the injured area.</h3>
                        <p>
                            Don't try to realign the bone or push a bone that's sticking out back in. If you've been trained in how to splint and professional help isn't readily available, apply a splint to the area above and below the fracture sites. Padding the splints can help reduce discomfort.
                        </p>
                        <h3>Step 3: Apply ice packs to limit swelling and help relieve pain.</h3>
                        <p>
                            Don't apply ice directly to the skin. Wrap the ice in a towel, piece of cloth or some other material.
                        </p>
                        <h3>Step 4: Treat for shock.</h3>
                        <p>
                            If the person feels faint or is breathing in short, rapid breaths, lay the person down with the head slightly lower than the trunk and, if possible, elevate the legs.
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