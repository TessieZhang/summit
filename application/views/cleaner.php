<?php
/**
 * Created by PhpStorm.
 * User: zhangzhaoying
 * Date: 21/09/2016
 * Time: 3:33 AM
 */
?>
<!-- loading header -->
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
                <h1 id="title">Cleaner</h1>
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
                           <img src="img/cleaner.png" alt="Project Name">
                        </div>
                    </div>
                </div>
                <!-- End Image Column -->
                <!-- Project Info Column -->
                <div class="portfolio-item-description col-sm-6" style="text-align:justify;">
                    <h3>Cleaner</h3>
                    <p style="text-align: justify">
                        A cleaner is a type of industrial or domestic worker who cleans homes or commercial premises for
                        payment. Cleaners may specialise in cleaning particular things or places, such as window cleaners.
                        Cleaners often work when the people who otherwise occupy the space are not around. They may clean
                        offices at night or houses during the workday.
                    </p>
                    <p style="text-align: justify">
                        Manual handling tasks are part of the job for cleaners, but in certain circumstances they can be
                        hazardous and cause injuries. Employers must take action to eliminate or reduce the risk of manual
                        handling activities being hazardous to workers, usually by modifying the way a task is performed, or
                        by providing aids and equipment that make tasks safer. To compare the safe situation with other six
                        part-time jobs, click the button 'statistic' to see details.
                    </p>
                    <ul class="no-list-style">

                        <!--li class="portfolio-visit-btn"><a href="http://localhost/project/prevent-injury.php" class="btn">Visit More Jobs</a></li-->
                        <button type="button" class="btn btn-default btn-lg" id="myBtn">Statistics</button>
                        <button type="button" class="btn btn-default btn-lg" id="myBtn1-cleaner">Wages</button>
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
                                            <b>Slippery floors</b>
                                        </a>
                                    </div>
                                    <div id="collapse11" class="accordion-body collapse in">
                                        <div class="accordion-inner">
                                            <div class="answer">Before Working, Part-time worker Should Be Provided:</div>
                                            <ul>
                                                <li>
                                                    floor mats
                                                </li>
                                                <li>
                                                    non-slip shoes
                                                </li>
                                                <li>
                                                    bucket, mop, detergent for quick clean-up of spills
                                                </li>
                                            </ul>
                                            <div class="answer">Part-time worker Can Take:</div>
                                            <ul>
                                                <li>
                                                    Wear non-slip shoes
                                                </li>
                                                <li>
                                                    Clean up spills quickly
                                                </li>
                                            </ul>
                                            <div class="answer">The Most Common Injuries:</div>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo site_url('Welcome/newPage/fall'); ?>">Fall</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapse12">
                                            <b>Dishwashing products, sanitisers Cleaning products</b>

                                        </a>
                                    </div>
                                    <div id="collapse12" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="answer">Before Working, Part-time worker Should Be Provided:</div>
                                            <ul>
                                                <li>
                                                    The least hazardous product for each job to use
                                                </li>
                                                <li>
                                                    labels and Material Safety Data Sheet (MSDS) to read
                                                </li>
                                                <li>
                                                    appropriate PPE
                                                </li>
                                            </ul>
                                            <div class="answer">Part-time worker Can Take:</div>
                                            <ul>
                                                <li>
                                                    Use personal protective equipment (PPE) when provided – this could
                                                    include rubber gloves, eye protection
                                                </li>
                                                <li>
                                                    Read safety information on MSDS
                                                </li>
                                            </ul>
                                            <div class="answer">The Most Common Injuries:</div>
                                            <ul>
                                                <li><a href="<?php echo site_url('Welcome/newPage/chemical-burn'); ?>">Chemical Burns</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapse13">
                                            <b>Manual handling (bending, reaching, stretching, pulling, lifting, repetitive
                                                motions)</b>

                                        </a>
                                    </div>
                                    <div id="collapse13" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="answer">Before Working, Part-time worker Should:</div>
                                            <ul>
                                                <li>
                                                    Be provided mechanical aids where practicable to use
                                                </li>
                                                <li>
                                                    Keep heavy items on lower shelves
                                                </li>
                                                <li>
                                                    Encourage team lifting where appropriate
                                                </li>
                                            </ul>
                                            <div class="answer">Part-time worker Can Take:</div>
                                            <ul>
                                                <li>
                                                    Follow instructions and training
                                                </li>
                                                <li>
                                                    Use mechanical aids, stepladders where provided
                                                </li>
                                                <li>
                                                    Seek help when you think a team lift is required
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <h3>High-risk Situation</h3>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapse29">
                                            General solution for <b>repetitive work</b> caused damage
                                        </a>
                                    </div>

                                    <div id="collapse29" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            </ul>
                                            <div class="answer">To improve this situation, please:</div>
                                            <ul>
                                                <li>
                                                    Provide appropriate mechanical aids and equipment (e.g. food processors, electric can openers) and ensure they are used properly and maintained in accordance with manufacturer specifications.
                                                </li>
                                                <li>
                                                    Reduce repetitive movements (e.g. purchase prepared food such as peeled potatoes and sliced cheese).
                                                </li>
                                                <li>
                                                    Design food preparation and customer service areas to limit twisting, bending and over-reaching (e.g. position frequently used equipment, food and supplies between shoulder and mid-thigh height, use sliding trays to improve access in display cases).
                                                </li>
                                                <li>
                                                    Ensure employees are not exposed to repetitive work (e.g. operating espresso machines) or static positions (e.g. standing at service counter for) long periods (e.g. by using job rotation, work variation, providing sit-stand stools and anti-fatigue mats), or work that requires a significant amount of high force.
                                                </li>
                                                <li>
                                                    Train young workers in the selection and use of any mechanical equipment and aids and safe handling methods (e.g. work is done between shoulder and mid-thigh height and with the elbows close to the body, work upright where possible).
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapse21">
                                            Repetitive or sustained awkward postures, such as <b>cleaning toilets or
                                                urinals</b> by bending the back.
                                        </a>
                                    </div>
                                    <div id="collapse21" class="accordion-body collapse">
                                        <div class="accordion-inner">

                                            </ul>
                                            <div class="answer">To improve postures and avoid kneeling, provide:</div>
                                            <ul>
                                                <li>
                                                    Tools with a long handle or extended pole
                                                </li>
                                                <li>
                                                    A cleaning head frame that can flex to clean both contoured and flat
                                                    surfaces, for example, a frame that fits in both the rounded corner
                                                    between the base and sides of a bathtub, and curved surfaces of the
                                                    bathtub.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapse22">
                                            Using high force, such as <b>moving or lifting heavy furniture,</b> large and
                                            long rugs or mats for cleaning.
                                        </a>
                                    </div>

                                    <div id="collapse22" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            </ul>
                                            <div class="answer">To reduce high force, ensure:</div>
                                            <ul>
                                                <li>
                                                    A 'no lift' policy is followed
                                                </li>
                                                <li>
                                                    Cleaning equipment has handles with sufficient length so the cleaning
                                                    heads can be pushed under furniture
                                                </li>
                                                <li>
                                                    Rugs and mats are rolled out to expose the surface requiring cleaning
                                                </li>
                                                <li>
                                                    Furniture is arranged to allow access around four sides (or at least
                                                    three sides)
                                                </li>
                                                <li>
                                                    Furniture is mobile and easy to move
                                                </li>
                                                <li>
                                                    Furniture has lockable castors or glides to prevent lifting
                                                </li>
                                                <li>
                                                    mechanical aids are provided, where possible, to reduce the force needed
                                                    to perform the task, for example, trolleys, slides and hand trucks.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapse23">
                                            Repetitive or sustained movements, such as <b>wringing mops</b> using hand
                                            squeeze mop buckets by bending and positioning the elbow away from the body
                                        </a>
                                    </div>

                                    <div id="collapse23" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            </ul>
                                            <div class="answer">To reduce high force, ensure:</div>
                                            <ul>
                                                <li>
                                                    Provide mechanised floor-cleaning machines
                                                </li>
                                                <li>
                                                    Provide tall mop buckets, or raise the mop bucket off the floor to
                                                    reduce the bending force required to wring water
                                                </li>
                                                <li>
                                                    Train workers in safe work procedures, for example, keeping elbows close
                                                    to the body.
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
                            <a href="#"><img src="img/fall.png" alt="Project Name"></a>
                        </div>
                        <div class="portfolio-info-fade">
                            <ul>
                                <li class="portfolio-project-name">Fall Injury</li>
                                <li class="read-more"><a href="<?php echo site_url('Welcome/newPage/fall'); ?>" class="btn">Read more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <a href="#"><img src="img/chemical-burn.png" alt="Project Name"></a>
                        </div>
                        <div class="portfolio-info-fade">
                            <ul>
                                <li class="portfolio-project-name">Chemical Burns Injury</li>
                                <li class="read-more"><a href="<?php echo site_url('Welcome/newPage/chemical-burn'); ?>" class="btn">Read
                                        more</a></li>
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
                        What is a <b>good time</b> to conduct new cleaning staff’s training?</h3>
                </div>
                <div class="modal-body">
                    <div id="Q1">

                        <div class="quiz" id="quiz1" data-toggle="buttons">
                            <p id="correctAnswer1" style="display: none;">2</p>
                            <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                        class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                     name="q_answer"
                                                                                                     value="1">1 One month into the job </label>
                            <label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                        class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                     name="q_answer"
                                                                                                     value="2">2 Right after hiring </label>

                            <label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                        class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                     name="q_answer"
                                                                                                     value="3">3
                                They will learn on-the-job</label>
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

    <span id="answer1I" style="float: left; text-align:justify;"><b>Incorrect!</b> The correct answer is <b>2</b>. <br/> It is best to conduct safety orientation programs for the employees when they are first hired. Prior knowledge of hazards is the best preventive measure. For old employees, regular training sessions can be conducted to encourage safety, and whenever new products are introduced.	</span>
                            <span id="answer1C" style="float: left; text-align:justify;"><b>Correct!</b> <br/> It is best to conduct safety orientation programs for the employees when they are first hired. Prior knowledge of hazards is the best preventive measure. For old employees, regular training sessions can be conducted to encourage safety, and whenever new products are introduced.	</span>
                            <span id="answer1K" style="float: left; text-align:justify;">The correct answer is <b>2</b>. <br/> It is best to conduct safety orientation programs for the employees when they are first hired. Prior knowledge of hazards is the best preventive measure. For old employees, regular training sessions can be conducted to encourage safety, and whenever new products are introduced.	</span>

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
                        Which of the following actions should be <b>avoided</b> while cleaning to prevent injuries to the shoulders, neck, back, and arms?</h3>
                </div>
                <div class="modal-body">
                    <div id="Q1">

                        <div class="quiz" id="quiz2" data-toggle="buttons">
                            <p id="correctAnswer2" style="display: none;">3</p>
                            <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                        class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                     name="q_answer"
                                                                                                     value="1">1 Making small movements
                            </label>
                            <label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                        class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                     name="q_answer"
                                                                                                     value="2">2 Keeping hands between shoulders
                                yourself </label>

                            <label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                        class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                     name="q_answer"
                                                                                                     value="3">3
                                Overreaching</label>
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

    <span id="answer2I" style="float: left; text-align:justify;"><b>Incorrect!</b> The correct answer is <b>3</b>. <br/> Reaching out or stretching repeatedly may cause pain and stiffness in the shoulders, neck, back and arms. Though it’s impossible to reach surfaces at a height while keeping the arms at your sides, it is essential for ergonomic safety to avoid stretching beyond the recommended limit. Instead, tools such as lightweight extension rods and long-handled mop poles should be employed to reach the required areas.
		</span>
                            <span id="answer2C" style="float: left; text-align:justify;"><b>Correct!</b> <br /> Reaching out or stretching repeatedly may cause pain and stiffness in the shoulders, neck, back and arms. Though it’s impossible to reach surfaces at a height while keeping the arms at your sides, it is essential for ergonomic safety to avoid stretching beyond the recommended limit. Instead, tools such as lightweight extension rods and long-handled mop poles should be employed to reach the required areas.
	</span>
                            <span id="answer2K" style="float: left; text-align:justify;">The correct answer is <b>3</b>. <br/> Reaching out or stretching repeatedly may cause pain and stiffness in the shoulders, neck, back and arms. Though it’s impossible to reach surfaces at a height while keeping the arms at your sides, it is essential for ergonomic safety to avoid stretching beyond the recommended limit. Instead, tools such as lightweight extension rods and long-handled mop poles should be employed to reach the required areas.
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

    <div class="modal fade" id="myModal3" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 style="line-height: 150%; text-align:justify;"><span class="label label-warning" id="qid">3</span>
                        Providing cleaning staff with Personal Protective Equipment (PPE) is <b>optional</b>.</h3>
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

    <span id="answer3I" style="float: left; text-align:justify;"><b>Incorrect!</b> The correct answer is <b>2</b>. <br/>It is the employer’s duty to provide all necessary PPE to the cleaning staff free of charge. Face shields, goggles, gloves, aprons, safety shoes, and glasses are all part of PPE. In some cases, respiratory protection, which calls for additional training, may also be required.</span>
                            <span id="answer3C" style="float: left; text-align:justify;"><b>Correct!</b> <br /> It is the employer’s duty to provide all necessary PPE to the cleaning staff free of charge. Face shields, goggles, gloves, aprons, safety shoes, and glasses are all part of PPE. In some cases, respiratory protection, which calls for additional training, may also be required.</span>
                            <span id="answer3K" style="float: left; text-align:justify;">The correct answer is <b>2</b>. <br/>It is the employer’s duty to provide all necessary PPE to the cleaning staff free of charge. Face shields, goggles, gloves, aprons, safety shoes, and glasses are all part of PPE. In some cases, respiratory protection, which calls for additional training, may also be required.</span>

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
                        Mixing cleaning chemicals <b>increases</b> their effectiveness.</h3>
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

    <span id="answer4I" style="float: left; text-align:justify;"><b>Incorrect!</b> The correct answer is <b>2</b>. <br/> Mixing chemicals (unless specifically stated on the product) can be potentially dangerous for the cleaning staff and others exposed to these chemicals. They can release explosive or toxic fumes which can be harmful. For example, mixing bleach with a cleaning product containing ammonia releases lung-irritating toxic gases.
		</span>
                            <span id="answer4C" style="float: left; text-align:justify;"><b>Correct!</b> <br/>Mixing chemicals (unless specifically stated on the product) can be potentially dangerous for the cleaning staff and others exposed to these chemicals. They can release explosive or toxic fumes which can be harmful. For example, mixing bleach with a cleaning product containing ammonia releases lung-irritating toxic gases.
		</span>
                        <span id="answer4K" style="float: left; text-align:justify;">The correct answer is <b>2</b>. <br/> Mixing chemicals (unless specifically stated on the product) can be potentially dangerous for the cleaning staff and others exposed to these chemicals. They can release explosive or toxic fumes which can be harmful. For example, mixing bleach with a cleaning product containing ammonia releases lung-irritating toxic gases.
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
                        Which of the following is a <b>good practice</b> to follow when working with cleaning products?</h3>
                </div>
                <div class="modal-body">
                    <div id="Q1">

                        <div class="quiz" id="quiz5" data-toggle="buttons">
                            <p id="correctAnswer5" style="display: none;">3</p>
                            <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                        class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                     name="q_answer"
                                                                                                     value="1">1 Dilute highly concentrated cleansing products, if recommended
                            </label>
                            <label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                        class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                     name="q_answer"
                                                                                                     value="2">2 Always read the instruction labels regarding application and emergency steps very carefully
                            </label>

                            <label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                        class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                     name="q_answer"
                                                                                                     value="3">3 All of the above
                            </label>

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

                            <span id="answer5I" style="float: left; text-align:justify;"><b>Incorrect!</b> The correct answer is <b>3</b>. <br/>It’s not just common sense, it’s law that an employer must inform and train employees, including cleaning staff, about the presence and use of hazardous chemicals. SDSs, signs, and labels must be made available at all times to help workers prepare for any emergency. Employing innovative equipment like dispensing stations that mix chemicals in the proper amounts to eliminate contact risks is a good practice.</span>
                            <span id="answer5C" style="float: left; text-align:justify;"><b>Correct!</b><br/>It’s not just common sense, it’s law that an employer must inform and train employees, including cleaning staff, about the presence and use of hazardous chemicals. SDSs, signs, and labels must be made available at all times to help workers prepare for any emergency. Employing innovative equipment like dispensing stations that mix chemicals in the proper amounts to eliminate contact risks is a good practice..</span>
                            <span id="answer5K" style="float: left; text-align:justify;">The correct answer is <b>3</b>. <br/>It’s not just common sense, it’s law that an employer must inform and train employees, including cleaning staff, about the presence and use of hazardous chemicals. SDSs, signs, and labels must be made available at all times to help workers prepare for any emergency. Employing innovative equipment like dispensing stations that mix chemicals in the proper amounts to eliminate contact risks is a good practice.</span>

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