<?php
/**
 * Created by PhpStorm.
 * User: zhangzhaoying
 * Date: 20/09/2016
 * Time: 10:19 PM
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
                <h1 id="title">Waiter</h1>
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
                        <a href="#"><img src="img/waiter.png" alt="Project Name"></a>
                    </div>
                </div>
            </div>
            <!-- End Image Column -->
            <!-- Project Info Column -->
            <div class="portfolio-item-description col-sm-6">
                <h3>Waiter Description</h3>
                <p>
                    Manual handling tasks are part of the job for waiters, but in certain circumstances they can be
                    hazardous and cause injuries. Employers must take action to eliminate or reduce the risk of manual
                    handling activities being hazardous to workers, usually by modifying the way a task is performed, or
                    by providing aids and equipment that make tasks safer.
                </p>
                <ul class="no-list-style">


                    <button type="button" class="btn btn-default btn-lg" id="myBtn">Statistic</button>
                    <button type="button" class="btn btn-default btn-lg" id="myBtn1">Wage</button>
                    <button type="button" class="btn btn-default btn-lg" id="myBtn2">self-evaluation</button>
                </ul>
            </div>
            <!-- End Project Info Column -->
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 faq-wrapper">
                    <div class="panel-group" id="accordion2">
                        <h3>General Situation</h3>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                   href="#collapse11">
                                    Cleaning broken dishes or bowls.
                                </a>
                            </div>
                            <div id="collapse11" class="accordion-body collapse in">
                                <div class="accordion-inner">
                                    <div class="answer">To improve protection and avoid wounds, provide:</div>
                                    <ul>
                                        <li>Tools with a long handle or extended pole.</li>
                                        <li>Broom and dustpan.</li>
                                        <li>Never use hand to collect them which may cut your fingers.</li>
                                    </ul>
                                    <div class="answer">The Most Common Injuries:</div>
                                    <ul>
                                    <li><a href="<?php echo site_url('Welcome/newPage/cut'); ?>">Cuts and Scrapes</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                   href="#collapse12">
                                    Handling Boiling water or hot soup.
                                </a>
                            </div>
                            <div id="collapse12" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <div class="answer">To improve protection and avoid burn, provide:</div>
                                    <ul>
                                        <li>Kitchen gloves or hand protection.</li>
                                        <li>Tools with a long handle or extended pole.</li>
                                        <li>Tray to hold dishes.</li>
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
                                   href="#collapse13">
                                    Slipped to the ground.
                                </a>
                            </div>
                            <div id="collapse13" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <div class="answer">To improve protection and avoid fall down, Please:
                                    </div>
                                    <ul>
                                        <li>Watch steps and be careful.</li>
                                        <li>Non-slip shoes.</li>
                                        <li>Cleaning ground frequently especially water place.</li>
                                    </ul>
                                    <div class="answer">The Most Common Injuries:</div>
                                    <ul>
                                        <li><a href="<?php echo site_url('Welcome/newPage/fall'); ?>">Fall</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                   href="#collapse14">
                                    Musculoskeletal disorders including sprains and strains.
                                </a>
                            </div>
                            <div id="collapse14" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <div class="answer">To improve protection and avoid this situation, Please:</div>
                                    <ul>
                                        <li>Use mechanical aids where practicable.</li>
                                        <li>Keep heavy items on lower shelves.</li>
                                        <li>Encourage team lifting where appropriate.</li>
                                    </ul>
                                    <div class="answer">Preventative Action Part-time workers Can Take:</div>
                                    <ul>
                                        <li>Follow instructions and training.</li>
                                        <li>Use mechanical aids, stepladders where provided.</li>
                                        <li>Seek help when you think a team lift is required.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                   href="#collapse29">
                                    Injuries caused by <b>repetitive work</b>
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
                        <h3>Special Situation</h3>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                   href="#collapse21">
                                    Abuse, assualt, robbery.
                                </a>
                            </div>
                            <div id="collapse21" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <div class="answer">To improve protection and avoid this situation, Please:</div>
                                    <ul>
                                        <li>Use mechanical aids where practicable.</li>
                                        <li>Keep heavy items on lower shelves.</li>
                                        <li>Encourage team lifting where appropriate.</li>
                                    </ul>
                                    <br>
                                    <div class="answer">Preventative Action Part-time workers Can Take:</div>
                                    <ul>
                                        <li>Follow procedures regarding security and contact with the public.</li>
                                        <li>Report any concerns immediately.</li>
                                    </ul>
                                    <div class="answer">The Most Common Injuries:</div>
                                    <ul>
                                        <li><a href="<?php echo site_url('Welcome/newPage/cut'); ?>">Cuts and Scrapes</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>



                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                   href="#collapse32">
                                    Sexual harassment, work place bullying.
                                </a>
                            </div>
                            <div id="collapse32" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <div class="answer">Possible Action to Prevent Injury:</div>
                                    <ul>
                                        <li>Establish work place policy.</li>
                                        <li>Provide staff briefings or training.</li>
                                    </ul>
                                    <div class="answer">Preventative Action Waiters Can Take:</div>
                                    <ul>
                                        <li>Report any concerns immediately.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Related Projects -->
        <h3>During the work, you may meet the following injuries.</h3>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="#"><img src="img/cut.png" alt="Project Name"></a>
                    </div>
                    <div class="portfolio-info-fade">
                        <ul>
                            <li class="portfolio-project-name">Cut Injury</li>
                            <li class="read-more"><a href="<?php echo site_url('Welcome/newPage/cut'); ?>" class="btn">Read
                                    more</a>
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
                            <li class="read-more"><a href="<?php echo site_url('Welcome/newPage/burn'); ?>" class="btn">Read
                                    more</a>
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
                            <li class="read-more"><a href="<?php echo site_url('Welcome/newPage/fall'); ?>" class="btn">Read
                                    more</a>
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
    <div class="modal-dialog">
        <!-- Modal content-->
        <button type=”button” class=”close” id="close" data-trigger="hover"><span>&times;</span></button>
        <div class="modal-content" style="height:450px; width:510px;" id="statistic">
        </div>
    </div>
</div>

<div class="modal fade" id="salaryModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <button type=”button” class=”close” id="close1" data-trigger="hover"><span>&times;</span></button>
        <div class="modal-content" style="height:450px; width:510px;" id="statistic1">
        </div>
    </div>
</div>


<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 style="line-height: 150%; text-align:justify;"><span class="label label-warning" id="qid">1</span>
                    Boiling hot water is a near-constant presence in any busy kitchen; one wrong turn can cause a
                    serious burn injury at work. If that really happen, what thing you should <b>NEVER</b> do
                    immediately?</h3>
            </div>
            <div class="modal-body">
                <div id="Q1">
                    <div class="col-xs-3 col-xs-offset-5">
                        <div id="loadbar1" style="display: none;">
                            <div class="blockG" id="rotateG_01"></div>
                            <div class="blockG" id="rotateG_02"></div>
                            <div class="blockG" id="rotateG_03"></div>
                            <div class="blockG" id="rotateG_04"></div>
                            <div class="blockG" id="rotateG_05"></div>
                            <div class="blockG" id="rotateG_06"></div>
                            <div class="blockG" id="rotateG_07"></div>
                            <div class="blockG" id="rotateG_08"></div>
                        </div>
                    </div>
                    <div class="quiz" id="quiz1" data-toggle="buttons">
                        <p id="correctAnswer1" style="display: none;">3</p>
                        <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="1">1 Put the
                            burnt area under cool running water </label>
                        <label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="2">2 Use a
                            hydrogel </label>

                        <label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="3">3
                            Use Butter or flour</label>
                        <label class="element-animation4 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="4">4
                            I don't know</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-muted ">
                <div class="row">
                    <div class="col-md-10">

    <span id="answer1I" style="float: left; text-align:justify;"><b>Incorrect!</b> Explanation: First, make sure the area is safe and there is no risk of further injury to yourself. Secondly, Treat the burn under running water for 20 minutes. Do this straight away. This treatment is still useful up to three hours after the burn. if the burn is the size of a 20-cent piece or larger, or if it’s deep, go to hospital straight away.
		</span>
                        <span id="answer1C" style="float: left; text-align:justify;"><b>Correct!</b> Explanation: First, make sure the area is safe and there is no risk of further injury to yourself. Secondly, Treat the burn under running water for 20 minutes. Do this straight away. This treatment is still useful up to three hours after the burn. if the burn is the size of a 20-cent piece or larger, or if it’s deep, go to hospital straight away.
		</span>

                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-default btn-lg" id="myBtn3">Next</button>
                    </div>
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
                    What is the <b>most important</b> thing at work in a restaurant to prevent injury?</h3>
            </div>
            <div class="modal-body">
                <div id="Q1">
                    <div class="col-xs-3 col-xs-offset-5">
                        <div id="loadbar2" style="display: none;">
                            <div class="blockG" id="rotateG_01"></div>
                            <div class="blockG" id="rotateG_02"></div>
                            <div class="blockG" id="rotateG_03"></div>
                            <div class="blockG" id="rotateG_04"></div>
                            <div class="blockG" id="rotateG_05"></div>
                            <div class="blockG" id="rotateG_06"></div>
                            <div class="blockG" id="rotateG_07"></div>
                            <div class="blockG" id="rotateG_08"></div>
                        </div>
                    </div>
                    <div class="quiz" id="quiz2" data-toggle="buttons">
                        <p id="correctAnswer2" style="display: none;">1</p>
                        <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="1">1 Training
                        </label>
                        <label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="2">2 Analysis
                            yourself </label>

                        <label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="3">3
                            Listen to your employer</label>
                        <label class="element-animation4 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="4">4
                            I don't know</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-muted ">
                <div class="row">
                    <div class="col-md-10">

    <span id="answer2I" style="float: left; text-align:justify;"><b>Incorrect!</b> Explanation: One of the key weapons in the battle to stay safe at work in a restaurant is training. From food hygiene and using the kitchen tools to manual handling and dealing with hazards, training can nip a lot of potential accidents at work in the bud.

		</span>
                        <span id="answer2C" style="float: left; text-align:justify;"><b>Correct!</b> Explanation: One of the key weapons in the battle to stay safe at work in a restaurant is training. From food hygiene and using the kitchen tools to manual handling and dealing with hazards, training can nip a lot of potential accidents at work in the bud.
	</span>

                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-default btn-lg" id="myBtn4">Next</button>
                    </div>
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
                    Fire doors should be locked <b>at all times</b>.</h3>
            </div>
            <div class="modal-body">
                <div id="Q1">
                    <div class="col-xs-3 col-xs-offset-5">
                        <div id="loadbar3" style="display: none;">
                            <div class="blockG" id="rotateG_01"></div>
                            <div class="blockG" id="rotateG_02"></div>
                            <div class="blockG" id="rotateG_03"></div>
                            <div class="blockG" id="rotateG_04"></div>
                            <div class="blockG" id="rotateG_05"></div>
                            <div class="blockG" id="rotateG_06"></div>
                            <div class="blockG" id="rotateG_07"></div>
                            <div class="blockG" id="rotateG_08"></div>
                        </div>
                    </div>
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
                                                                                                 value="3">3
                            I don't know</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-muted ">
                <div class="row">
                    <div class="col-md-10">

    <span id="answer3I" style="float: left; text-align:justify;"><b>Incorrect!</b> Explanation: Fire doors are often blocked open for the convenience of visitors and employees. However, this can create a break in the fire barrier leading to a fire hazard. A fire doors must not be held open or tied open by devices such as blocks, door wedges etc. They must also never be locked or blocked when employees are inside. Fire doors can only be held open by a device that automatically releases when the fire alarm is activated.
</span>
                        <span id="answer3C" style="float: left; text-align:justify;"><b>Correct!</b> Explanation: Fire doors are often blocked open for the convenience of visitors and employees. However, this can create a break in the fire barrier leading to a fire hazard. A fire doors must not be held open or tied open by devices such as blocks, door wedges etc. They must also never be locked or blocked when employees are inside. Fire doors can only be held open by a device that automatically releases when the fire alarm is activated.
</span>

                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-default btn-lg" id="myBtn5">Next</button>
                    </div>
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
                    <b>All slips, trips, and falls </b> should be reported even when no one is hurt.</h3>
            </div>
            <div class="modal-body">
                <div id="Q1">
                    <div class="col-xs-3 col-xs-offset-5">
                        <div id="loadbar4" style="display: none;">
                            <div class="blockG" id="rotateG_01"></div>
                            <div class="blockG" id="rotateG_02"></div>
                            <div class="blockG" id="rotateG_03"></div>
                            <div class="blockG" id="rotateG_04"></div>
                            <div class="blockG" id="rotateG_05"></div>
                            <div class="blockG" id="rotateG_06"></div>
                            <div class="blockG" id="rotateG_07"></div>
                            <div class="blockG" id="rotateG_08"></div>
                        </div>
                    </div>
                    <div class="quiz" id="quiz4" data-toggle="buttons">
                        <p id="correctAnswer4" style="display: none;">1</p>
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
                                                                                                 value="3">3
                            I don't know</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-muted ">
                <div class="row">
                    <div class="col-md-10">

    <span id="answer4I" style="float: left; text-align:justify;"><b>Incorrect!</b> Explanation: Reporting such “no-victim” accidents will allow management to make changes to procedure and compliance in order to avoid the incident from reoccurring, and hurting people in future.
		</span>
                        <span id="answer4C" style="float: left; text-align:justify;"><b>Correct!</b> Explanation: Reporting such “no-victim” accidents will allow management to make changes to procedure and compliance in order to avoid the incident from reoccurring, and hurting people in future.
		</span>

                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-default btn-lg" id="myBtn6">Next</button>
                    </div>
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
                    Which of the following can cause <b>slips, trips, and falls </b>?</h3>
            </div>
            <div class="modal-body">
                <div id="Q1">
                    <div class="col-xs-3 col-xs-offset-5">
                        <div id="loadbar5" style="display: none;">
                            <div class="blockG" id="rotateG_01"></div>
                            <div class="blockG" id="rotateG_02"></div>
                            <div class="blockG" id="rotateG_03"></div>
                            <div class="blockG" id="rotateG_04"></div>
                            <div class="blockG" id="rotateG_05"></div>
                            <div class="blockG" id="rotateG_06"></div>
                            <div class="blockG" id="rotateG_07"></div>
                            <div class="blockG" id="rotateG_08"></div>
                        </div>
                    </div>
                    <div class="quiz" id="quiz5" data-toggle="buttons">
                        <p id="correctAnswer5" style="display: none;">2</p>
                        <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="1">1 Cautiousness
                        </label>
                        <label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="2">2 Poor vision
                        </label>

                        <label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="3">3
                            I don't know</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-muted ">
                <div class="row">
                    <div class="col-md-10">

    <span id="answer5I" style="float: left; text-align:justify;"><b>Incorrect!</b> Explanation: Poor vision can greatly increase one’s chances of falling. Moreover, distractions can cause slips, trips, or falls as a result of a step, crack, or hole in the floor, ground, road etc.</span>
                        <span id="answer5C" style="float: left; text-align:justify;"><b>Correct!</b> Explanation: Poor vision can greatly increase one’s chances of falling. Moreover, distractions can cause slips, trips, or falls as a result of a step, crack, or hole in the floor, ground, road etc.</span>

                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-default btn-lg" id="finish">Finish</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- loading footer -->
<?php $this->load->view('footer'); ?>
