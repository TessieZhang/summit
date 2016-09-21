<?php
/**
 * Created by PhpStorm.
 * User: zhangzhaoying
 * Date: 21/09/2016
 * Time: 3:44 AM
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
                <h1>First Aid - Cuts and Scrapes</h1>
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
                        <h3>Cuts and Scrapes</h3>
                        <p>Minor cuts and scrapes usually don't require a trip to the emergency room. These guidelines can help you care for such wounds:
                        </p>
                    </div>
                    <div class="single-post-image">
                        <img src="img/cut.png" style="height:200; width:400px" alt="Post Title">
                    </div>
                    <div class="single-post-content">
                        <h3>Step 1: Wash your hands.</h3>
                        <p>
                            This helps avoid infection. Also put on disposable protective gloves if they're available.
                        </p>
                        <h3>Step 2: Stop the bleeding.</h3>
                        <p>
                            Minor cuts and scrapes usually stop bleeding on their own. If not, apply gentle pressure with a sterile bandage or clean cloth and elevate the wound.
                        </p>
                        <h3>Step 3: Clean the wound.</h3>
                        <p>
                            Use clear water to rinse the wound. Also clean around the wound with soap and a washcloth. Keep soap out of the wound, as it can cause irritation. If dirt or debris remains in the wound after washing, use tweezers cleaned with alcohol to remove the particles. If debris still remains, see your doctor. Thorough cleaning reduces the risk of infection and tetanus. There's no need to use hydrogen peroxide, iodine or an iodine-containing cleanser, which can be irritating to tissue already injured.
                        </p>
                        <h3>Step 4: Apply an antibiotic.</h3>
                        <p>
                            Apply a thin layer of an antibiotic cream or ointment (Neosporin, Polysporin) to help keep the surface moist. These products don't make the wound heal faster. But they can discourage infection and help the body's natural healing process. Certain ingredients in some ointments can cause a mild rash in some people. If a rash appears, stop using the ointment.
                        </p>
                        <h3>Step 5: Cover the wound.</h3>
                        <p>
                            Bandages can help keep the wound clean and keep harmful bacteria out. If the injury is just a minor scrape, or scratch, leave it uncovered.
                        </p>
                        <h3>Step 6: Change the dressing.</h3>
                        <p>
                            Do this at least once a day or whenever the bandage becomes wet or dirty. If the injured person is allergic to the adhesive in tapes and bandages, switch to adhesive-free dressings or sterile gauze held in place with paper tape, rolled gauze or a loosely applied elastic bandage. These supplies generally are available at pharmacies.
                        </p>
                        <h3>Step 7: Get stitches for deep wounds.</h3>
                        <p>
                            A deep — all the way through the skin — gaping or jagged wound with exposed fat or muscle will need stitches. Adhesive strips or butterfly tape may hold a minor cut together, but if you can't easily close the wound, see your doctor as soon as possible. Proper closure within a few hours minimizes scarring and reduces the risk of infection.
                        </p>
                        <h3>Step 8: Watch for signs of infection.</h3>
                        <p>
                            See your doctor if the wound isn't healing or you notice any redness, increasing pain, drainage, warmth or swelling.
                        </p>
                        <h3>Step 9: Get a tetanus shot.</h3>
                        <p>
                            If the injured person hasn't had a tetanus shot in the past five years and the wound is deep or dirty, he or she may need a booster shot, as soon as possible.
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
