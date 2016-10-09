<?php
/**
 * Created by PhpStorm.
 * User: zhangzhaoying
 * Date: 21/09/2016
 * Time: 2:48 AM
 */
?>
<?php $this->load->view('header'); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $("#myBtn").click(function () {

            var occupation = document.getElementById("title").textContent;
            xmlhttpConnect();
            xmlhttp.open("GET", "<?php echo site_url('/search_controller/searchNumOfClaims'); ?>?occupation=" + occupation, true);
            xmlhttp.send();
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    var json = xmlhttp.responseText;
                    chartGraph(json);
                }
            };
            $("#myModal").modal();
        });
    });
</script>

<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 id="title">Kitchen Hand</h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <!-- Image Column -->
            <div class="col-sm-6">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="img/kitchenhand.jpg" alt="Project Name">
                    </div>
                </div>
            </div>
            <!-- End Image Column -->
            <!-- Project Info Column -->
            <div class="portfolio-item-description col-sm-6">
                <h3>Kitchen Hand</h3>
                <p style="text-align: justify">
                    We believe that kitchen workers are quite dangerous for the part time worker. Many workplaces use
                    knives and blades on a regular basis. These hazards present risks of cuts and other injuries. This
                    information is for people who work in kitchen and food service areas of health care facilities. It
                    identities common risk areas and provides practical examples of how you can help control and improve
                    safety in your workplace. To compare the safe situation with other six
                    part-time jobs, click the button 'statistic' to see details.
                </p>
                <ul class="no-list-style">

                    <!--li class="portfolio-visit-btn"><a href="http://localhost/project/prevent-injury.php" class="btn">Visit More Jobs</a></li-->
                    <button type="button" class="btn btn-default btn-lg" id="myBtn">Statistics</button>
                    <button type="button" class="btn btn-default btn-lg" id="myBtn1-kitchen-hand">Wages</button>
                    <button type="button" class="btn btn-default btn-lg" id="myBtn2">Self-evaluation</button>
                </ul>
            </div>
            <!-- End Project Info Column -->
        </div>
        <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 faq-wrapper">
                    <div class="panel-group" id="accordion2">
                        <h3>Common Situation</h3>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                   href="#collapse11">
                                    Prevent injury coming into contact with hot liquids and surfaces.
                                </a>
                            </div>
                            <div id="collapse11" class="accordion-body collapse in">
                                <div class="accordion-inner">
                                    <div class="answer">To solve this situation:</div>
                                    <ul>
                                        <li>Prevent injury coming into contact with hot liquids and surfaces</li>
                                        <li>Where possible, use alternative cooking methods to deep frying (eg
                                            microwaving, grilling or baking).
                                        </li>
                                        <li>Post signs to warn workers about hot equipment and use stickers for
                                            stainless steel utensils.
                                        </li>
                                        <li>Keep pot handles away from the stove’s edge.</li>
                                        <li>Design the workplace or work processes to avoid carrying around hot
                                            liquids.
                                        </li>
                                    </ul>
                                    <div class="answer">The Most Common Injuries:</div>
                                    <ul>
                                        <li><a href="<?php echo site_url('Welcome/newPage/burn'); ?>">Burns</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                   href="#collapse14">
                                    Hot condition
                                </a>
                            </div>
                            <div id="collapse14" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <div class="answer">To solve this situation:</div>
                                    <ul>
                                        <li>Do not drink too much non-caffeinated drinks as your replenish fluids</li>
                                        <li>Try to keep your work station away from heat sources.</li>
                                        <li>Go to cooler area for rest rather than stay in the same place</li>
                                    </ul>
                                    <div class="answer">The Most Common Injuries:</div>
                                    <ul>
                                        <li><a href="<?php echo site_url('Welcome/newPage/burn'); ?>">Burns</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                   href="#collapse12">
                                    How to prevent the injury when you are facing the chemicals in café or restaurants?
                                </a>
                            </div>
                            <div id="collapse12" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <div class="answer">To solve this problem:</div>
                                    <ul>
                                        <li>Store chemicals in approved containers, do not use old drink or food
                                            containers.
                                        </li>
                                        <li>Do a risk assessment for all hazardous substances to determine how to use
                                            the chemicals safely.
                                        </li>
                                        <li>Post emergency numbers, including poison information numbers, beside the
                                            telephone.
                                        </li>
                                        <li>Make the MSDS and risk assessments available to people who use the chemicals
                                            at all times so they can refer to them.
                                        </li>
                                    </ul>
                                    <div class="answer">The Most Common Injuries:</div>
                                    <ul>
                                        <li><a href="<?php echo site_url('Welcome/newPage/chemical-burn'); ?>">Chemical
                                                Burns</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                   href="#collapse13">
                                    Knives and sharp tools safety.
                                </a>
                            </div>
                            <div id="collapse13" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <div class="answer">To improve protection and avoid this problem, Please:
                                    </div>
                                    <ul>
                                        <li>Knives should be sharp, maintained and in a good working condition.</li>
                                        <li>Ensure slicing machines and butchers’ steels for knife sharpening have hand
                                            guards.
                                        </li>
                                        <li>Provide the correct knife for the task and only use knives for cutting
                                            purposes.
                                        </li>
                                        <li>Provide mesh gloves and use them when working with knives.</li>
                                        <li>Train and instruct workers to use and sharpen knives safely. Provide workers
                                            with training first aid.
                                        </li>
                                    </ul>
                                    <div class="answer">The Most Common Injuries:</div>
                                    <ul>
                                        <li><a href="<?php echo site_url('Welcome/newPage/cut'); ?>">Cut</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h3>High-risk Situation</h3>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                   href="#collapse21">
                                    Fire issue
                                </a>
                            </div>
                            <div id="collapse21" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <div class="answer">To improve protection and avoid fire issue, Please:</div>
                                    <ul>
                                        <li>Put gas equipment in a well-lit and draught-free area and install a gas
                                            shutoff valve so the supply can be stopped if necessary.
                                        </li>
                                        <li>Install, use and maintain electrical appliances properly.</li>
                                        <li>Inspect and maintain gas equipment and the fuel supply system regularly. The
                                            switch for the gas supply should be accessible and clearly labelled.
                                        </li>
                                        <li>Fire safety installations (sprinkler systems and re alarms) should be
                                            regularly maintained by quali ed personnel.
                                        </li>
                                        <li>Emergency plans should include a procedure to provide prompt treatment for
                                            burns and smoke inhalation.
                                        </li>
                                    </ul>
                                    <div class="answer">The Most Common Injuries:</div>
                                    <ul>
                                        <li><a href="<?php echo site_url('Welcome/newPage/burn'); ?>">Burns</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                   href="#collapse22">
                                    How to prevent the injury from electrical equipment?
                                </a>
                            </div>
                            <div id="collapse22" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <div class="answer">To improve protection and avoid this problem, Please:</div>
                                    <ul>
                                        <li>Remove faulty electrical equipment immediately from service and attach a
                                            warning label to it.
                                        </li>
                                        <li>Install safety switches to guard against electric shock.</li>
                                        <li>Always hire a licensed electrical contractor to install or repair electrical
                                            equipment. It’s dangerous, illegal and could be fatal to attempt this work
                                            yourself.
                                        </li>
                                        <li>Provide enough power points for each work area. Only use power boards tted
                                            with overload protection. The use of extension leads or double adaptors is
                                            not recommended.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        <!-- Related Projects -->
        <h3>Treatment of Related Injury</h3>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="#"><img src="img/cut.png" alt="Project Name"></a>
                    </div>
                    <div class="portfolio-info-fade">
                        <ul>
                            <li class="portfolio-project-name">Cut Injury</li>
                            <li class="read-more"><a href="http://localhost/project1/cut.php" class="btn">Read more</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="#"><img src="img/burn.png" alt="Project Name"></a>
                    </div>
                    <div class="portfolio-info-fade">
                        <ul>
                            <li class="portfolio-project-name">Burn Injury</li>
                            <li class="read-more"><a href="http://localhost/project1/burn.php" class="btn">Read more</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="#"><img src="img/fall.png" alt="Project Name"></a>
                    </div>
                    <div class="portfolio-info-fade">
                        <ul>
                            <li class="portfolio-project-name">Fall Injury</li>
                            <li class="read-more"><a href="http://localhost/project1/fall.php" class="btn">Read more</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Related Projects -->
    </div>
</div>


<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" style="width: 550px">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <div style="height:400px; width:500px;" id="statistic">
                </div>
            </div>
            <div class="modal-footer text-muted ">
                <div class="row">
                    <a href="<?php echo site_url('Welcome/newPage/statistics'); ?>" class="btn btn-default" >
                        More Statistic Details
                    </a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="salaryModal" role="dialog">
    <div class="modal-dialog" style="width: 550px">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <div style="height:400px; width:500px;" id="statistic1">
                </div>
            </div>
            <div class="modal-footer text-muted ">
                <div class="row">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 style="line-height: 150%; text-align:justify;"><span class="label label-warning" id="qid">1</span>
                    One of the <b>best</b> case practices to prevent trips and falls is</h3>
            </div>
            <div class="modal-body">
                <div id="Q1">
                    <div class="quiz" id="quiz1" data-toggle="buttons">
                        <p id="correctAnswer1" style="display: none;">2</p>
                        <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="1">1 Avoiding
                            slip / trip prone areas completely </label>
                        <label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="2">2 Wearing
                            appropriate safety boots </label>

                        <label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="3">3
                            Working in bare feet</label>
                        <label class="element-animation4 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="4">4
                            I don't know</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-muted ">
                <div class="row" style="padding: 10px 15px;">

                    <span id="answer1I" style="float: left; text-align:justify;"><b>Incorrect!</b> The correct answer is <b>2</b>. <br/> Slip and trip safety in wet, oily, and waxed areas begins with proper safety boots. For example, wearing stripping shoes while working with waxed floors can minimize slips and trips. It is essential to know that no footwear has anti-slip properties to suit all kinds of risky conditions. Consulting the shoe manufacturer can help you choose suitable ones. Properly-fitted footwear also prevents fatigue and stress, improves comfort, and adds to the overall health and safety of the employee.	</span>
                    <span id="answer1C" style="float: left; text-align:justify;"><b>Correct!</b> <br/>Slip and trip safety in wet, oily, and waxed areas begins with proper safety boots. For example, wearing stripping shoes while working with waxed floors can minimize slips and trips. It is essential to know that no footwear has anti-slip properties to suit all kinds of risky conditions. Consulting the shoe manufacturer can help you choose suitable ones. Properly-fitted footwear also prevents fatigue and stress, improves comfort, and adds to the overall health and safety of the employee.		</span>
                    <span id="answer1K" style="float: left; text-align:justify;">The correct answer is <b>2</b>. <br/> Slip and trip safety in wet, oily, and waxed areas begins with proper safety boots. For example, wearing stripping shoes while working with waxed floors can minimize slips and trips. It is essential to know that no footwear has anti-slip properties to suit all kinds of risky conditions. Consulting the shoe manufacturer can help you choose suitable ones. Properly-fitted footwear also prevents fatigue and stress, improves comfort, and adds to the overall health and safety of the employee.	</span>

                </div>
                <div class="row">
                    <button type="button" class="btn btn-default btn-next">Next</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 style="line-height: 150%; text-align:justify;"><span class="label label-warning" id="qid">2</span>
                    Which of the following is a <b>bad</b> example of proper workplace cleanliness?</h3>
            </div>
            <div class="modal-body">
                <div id="Q1">

                    <div class="quiz" id="quiz2" data-toggle="buttons">
                        <p id="correctAnswer2" style="display: none;">2</p>
                        <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="1">1 Cleaning
                            and organizing passageways, service rooms, storerooms and places of employment
                        </label>
                        <label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="2">2 Keeping
                            equipment on stairways where they can be easily located
                            yourself </label>

                        <label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="3">3
                            Maintaining drainage, false floors, mats, platforms or dry standing places where there are
                            wet or oily processes</label>
                        <label class="element-animation4 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="4">4
                            I don't know</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-muted ">
                <div class="row" style="padding: 10px 15px;">

                    <span id="answer2I" style="float: left; text-align:justify;"><b>Incorrect!</b> The correct answer is <b>2</b>. <br/>  All areas in the workplace must be kept clean and orderly. Furthermore, “The floor of every workroom shall be maintained in a clean and, so far as possible, a dry condition. Where wet processes are used, drainage shall be maintained and false floors, platforms, mats, or other dry standing places should be provided where practicable.	</span>
                    <span id="answer2C" style="float: left; text-align:justify;"><b>Correct!</b><br/> All areas in the workplace must be kept clean and orderly. Furthermore, “The floor of every workroom shall be maintained in a clean and, so far as possible, a dry condition. Where wet processes are used, drainage shall be maintained and false floors, platforms, mats, or other dry standing places should be provided where practicable.	</span>
                    <span id="answer2K" style="float: left; text-align:justify;">The correct answer is <b>2</b>. <br/>All areas in the workplace must be kept clean and orderly. Furthermore, “The floor of every workroom shall be maintained in a clean and, so far as possible, a dry condition. Where wet processes are used, drainage shall be maintained and false floors, platforms, mats, or other dry standing places should be provided where practicable.	</span>
                </div>
                <div class="row">
                    <button type="button" class="btn btn-default btn-prev">Back</button>
                    <button type="button" class="btn btn-default btn-next">Next</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 style="line-height: 150%; text-align:justify;"><span class="label label-warning" id="qid">3</span>
                    When falling, it is <b>best</b> practice to break your fall with your hands.</h3>
            </div>
            <div class="modal-body">
                <div id="Q1">
                    <div class="quiz" id="quiz3" data-toggle="buttons">
                        <p id="correctAnswer3" style="display: none;">2</p>
                        <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="1">1 True
                        </label>
                        <label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="2">2 False
                        </label>

                        <label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="4">3
                            I don't know</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-muted ">
                <div class="row" style="padding: 10px 15px;">

    <span id="answer3I" style="float: left; text-align:justify;"><b>Incorrect!</b> The correct answer is <b>2</b>. <br/>  Should you fall, you must:
 <ul><li>Tuck in your chin and turn your head.</li><li>Twist or roll your body to the side.
</li><li>Keep wrists, knees, and elbows bent.</li><li>Protect your head with your arm.</li>
     <li>Land on as much of your body as possible, to distribute the weight of the fall.</li>
 <li>Never try to break or soften the fall with your hands</li>
 <li>Falling correctly requires adequate training.</li></ul></span>
                    <span id="answer3C" style="float: left; text-align:justify;"><b>Correct!</b> <br/> Should you fall, you must:
 <ul><li>Tuck in your chin and turn your head.</li><li>Twist or roll your body to the side.
</li><li>Keep wrists, knees, and elbows bent.</li><li>Protect your head with your arm.</li>
     <li>Land on as much of your body as possible, to distribute the weight of the fall.</li>
 <li>Never try to break or soften the fall with your hands</li>
 <li>Falling correctly requires adequate training.</li></ul></span>
                    <span id="answer3K" style="float: left; text-align:justify;">The correct answer is <b>2</b>. <br/>  Should you fall, you must:
 <ul><li>Tuck in your chin and turn your head.</li><li>Twist or roll your body to the side.
</li><li>Keep wrists, knees, and elbows bent.</li><li>Protect your head with your arm.</li>
     <li>Land on as much of your body as possible, to distribute the weight of the fall.</li>
 <li>Never try to break or soften the fall with your hands</li>
 <li>Falling correctly requires adequate training.</li></ul></span>


                </div>
                <div class="row">
                    <button type="button" class="btn btn-default btn-prev">Back</button>
                    <button type="button" class="btn btn-default btn-next">Next</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 style="line-height: 150%; text-align:justify;"><span class="label label-warning" id="qid">4</span>
                    Your employers need to provide <b>portable fire extinguishers.</b></h3>
            </div>
            <div class="modal-body">
                <div id="Q1">

                    <div class="quiz" id="quiz4" data-toggle="buttons">
                        <p id="correctAnswer4" style="display: none;">2</p>
                        <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="1">1 True
                        </label>
                        <label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="2">2 False
                        </label>

                        <label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="4">3
                            I don't know</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-muted ">
                <div class="row" style="padding: 10px 15px;">

    <span id="answer4I" style="float: left; text-align:justify;"><b>Incorrect!</b> The correct answer is <b>2</b>. <br/> According to Worksafe Victoria, “employers are not required to provide portable fire extinguishers in the office. But if they do, they must set up an educational program to acquaint employees with the general principles of fire extinguisher use”.
		</span>
                    <span id="answer4C" style="float: left; text-align:justify;"><b>Correct!</b>  <br/>According to Worksafe Victoria, “employers are not required to provide portable fire extinguishers in the office. But if they do, they must set up an educational program to acquaint employees with the general principles of fire extinguisher use”.
		</span>
                    <span id="answer4K" style="float: left; text-align:justify;">The correct answer is <b>2</b>. <br/> According to Worksafe Victoria, “employers are not required to provide portable fire extinguishers in the office. But if they do, they must set up an educational program to acquaint employees with the general principles of fire extinguisher use”.
		</span>

                </div>
                <div class="row">
                    <button type="button" class="btn btn-default btn-prev">Back</button>
                    <button type="button" class="btn btn-default btn-next">Next</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 style="line-height: 150%; text-align:justify;"><span class="label label-warning" id="qid">5</span>
                    Below is a list of fire extinguisher types matched with surfaces on which they can be used. Which is
                    the <b>incorrect</b> option?</h3>
            </div>
            <div class="modal-body">
                <div id="Q1">

                    <div class="quiz" id="quiz5" data-toggle="buttons">
                        <p id="correctAnswer5" style="display: none;">2</p>
                        <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="1">1 Class A -
                            Cloth, wood, paper, and rubber
                        </label>
                        <label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="2">2 Class B -
                            Plastics, oils, grease, gasoline, solvents, and other flammable liquids
                        </label>

                        <label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="3">3 Class C -
                            Wiring, fuse boxes, electrical equipment, and computers</label>

                        <label class="element-animation4 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="4">4
                            I don't know</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-muted ">
                <div class="row" style="padding: 10px 15px;">


                        <span id="answer5I" style="float: left; text-align:justify;"><b>Incorrect!</b> The correct answer is <b>2</b>. <br/> Class B fire extinguishers use carbon dioxide as the fire-fighting agent and can extinguish oils, paints, lacquers, grease, solvents, and flammable liquids. Fires on plastic surfaces can be put out via a Class A fire extinguisher, which uses water.
</span>
                    <span id="answer5C" style="float: left; text-align:justify;"><b>Correct!</b> <br/>  Class B fire extinguishers use carbon dioxide as the fire-fighting agent and can extinguish oils, paints, lacquers, grease, solvents, and flammable liquids. Fires on plastic surfaces can be put out via a Class A fire extinguisher, which uses water.
</span>

                    <span id="answer5K" style="float: left; text-align:justify;">The correct answer is <b>2</b>. <br/> Class B fire extinguishers use carbon dioxide as the fire-fighting agent and can extinguish oils, paints, lacquers, grease, solvents, and flammable liquids. Fires on plastic surfaces can be put out via a Class A fire extinguisher, which uses water.
</span>


                </div>
                <div class="row">
                    <button type="button" class="btn btn-default btn-prev">Back</button>

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- loading footer -->
<?php $this->load->view('footer'); ?>
