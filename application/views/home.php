<?php
/**
 * Created by PhpStorm.
 * User: zhangzhaoying
 * Date: 20/09/2016
 * Time: 9:43 PM
 */
?>
<!-- loading header -->
<?php $this->load->view('header'); ?>
<script type="text/javascript">
    $('li#home').addClass('active');
</script>
<!-- content page -->
<div class="homepage-slider">
    <div id="sequence">
        <ul class="sequence-canvas">
            <!-- Slide 1 -->
            <li class="bg2">
                <!-- Slide Title -->
                <h2 class="title">Are you safe at part-time work?</h2>
                <!-- Slide Text -->
                <h3 class="subtitle">Prevention is the best intervention. </h3>
                <!-- Slide Image -->
                <img class="slide-img" src="img/homepage-slider/preventinjury.jpg" style="height:200; width:400px"
                     alt="Slide 1"/>
            </li>
            <!-- End Slide 1 -->
            <!-- Slide 2 -->
            <li class="bg1">
                <!-- Slide Title -->
                <h2 class="title">Statistics</h2>
                <!-- Slide Text -->
                <h3 class="subtitle">The statistics are used to inform policies and measures that are related to work
                    health and safety.</h3>
                <!-- Slide Image -->
                <img class="slide-img" src="img/homepage-slider/statistics.png" style="height:200; width:400px"
                     alt="Slide 2"/>
            </li>
            <!-- End Slide 2 -->
            <!-- Slide 3 -->
            <li class="bg3">
                <!-- Slide Title -->
                <h2 class="title">Treatment After Injury</h2>
                <!-- Slide Text -->
                <h3 class="subtitle">Useful information for you to get the first aid and recovery.</h3>
                <!-- Slide Image -->
                <img class="slide-img" src="img/homepage-slider/treatment.jpg" style="height:200; width:400px"
                     alt="Slide 3"/>
            </li>
            <!-- End Slide 3 -->
        </ul>
        <div class="sequence-pagination-wrapper">
            <ul class="sequence-pagination">
                <li>1</li>
                <li>2</li>
                <li>3</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Homepage Slider -->

<div class="section">
    <div class="container">
        <h2>Explore a Job</h2>
        <p>Prevention is the best intervention. In order to avoid and mitigate the risk of injury, you should beware
            your surrounding areas and ensure you’ve got enough knowledge of dealing with injury.
            Moreover, the best common method that prevents injury may not be what you expect. Safe Work Australia are
            recommended all workers use voices to avoid injury in your organization. Select one of the occupation to see
            more further details.
        </p>
        <br>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="<?php echo site_url('Welcome/newPage/waiter'); ?>"><img src="img/waiter.png"
                                                                            style="height:200px" alt="Project Name"></a>
                    </div>
                    <div class="portfolio-info">
                        <ul>
                            <li class="portfolio-project-name">Waiter</li>
                            <li class="read-more"><a href="<?php echo site_url('Welcome/newPage/waiter'); ?>" class="btn">Read
                                    more</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="<?php echo site_url('Welcome/newPage/kitchen-hand'); ?>"><img src="img/kitchenhand.jpg"
                                                                                  style="height:200px"
                                                                                  alt="Project Name"></a>
                    </div>
                    <div class="portfolio-info">
                        <ul>
                            <li class="portfolio-project-name">Kitchen Hand</li>
                            <li class="read-more"><a href="<?php echo site_url('Welcome/newPage/kitchen-hand'); ?>" class="btn">Read
                                    more</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="<?php echo site_url('Welcome/newPage/convenience-store-worker'); ?>"><img src="img/worker.png"
                                                                                             style="height:200px"
                                                                                             alt="Project Name"></a>
                    </div>
                    <div class="portfolio-info">
                        <ul>
                            <li class="portfolio-project-name">Convenience Store Worker</li>
                            <li class="read-more"><a href="<?php echo site_url('Welcome/newPage/convenience-store-worker'); ?>"
                                                     class="btn">Read more</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="<?php echo site_url('Welcome/newPage/cleaner'); ?>"><img src="img/cleaner.png" style="height:200px"
                                                                             alt="Project Name"></a>
                    </div>
                    <div class="portfolio-info">
                        <ul>
                            <li class="portfolio-project-name">Cleaner</li>
                            <li class="read-more"><a href="<?php echo site_url('Welcome/newPage/cleaner'); ?>" class="btn">Read
                                    more</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="<?php echo site_url('Welcome/newPage/delivery-driver'); ?>"><img src="img/delivery-driver.png"
                                                                                     style="height:200px"
                                                                                     alt="Project Name"></a>
                    </div>
                    <div class="portfolio-info">
                        <ul>
                            <li class="portfolio-project-name">Delivery Driver</li>
                            <li class="read-more"><a href="<?php echo site_url('Welcome/newPage/delivery-driver'); ?>" class="btn">Read
                                    more</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="<?php echo site_url('Welcome/newPage/warehouse-worker'); ?>"><img src="img/warehouse-worker.png"
                                                                                      style="height:200px"
                                                                                      alt="Project Name"></a>
                    </div>
                    <div class="portfolio-info">
                        <ul>
                            <li class="portfolio-project-name">Warehouse Worker</li>
                            <li class="read-more"><a href="<?php echo site_url('Welcome/newPage/warehouse-worker'); ?>" class="btn">Read
                                    more</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- loading footer -->
<?php $this->load->view('footer'); ?>
