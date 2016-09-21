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
					<h1 id="title">Delivery driver</h1>
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
								<a href="#"><img src="img/delivery-driver.png" alt="Project Name"></a>
							</div>
						</div>
					</div>
					<!-- End Image Column -->
					<!-- Project Info Column -->
					<div class="portfolio-item-description col-sm-6" style="text-align:justify;">
						<h3>Deliver Driver Description</h3>
						<p>
							Nowadays, many young school leavers and international students are tend to choose delivery driver as a part-time job because most of the delivery jobs are causal working time that suitable for their life. According to Transport Accident Commission (TAC), young drivers in Victoria are almost four times more likely to be involved in a fatal or serious injury crash than more experienced drivers. From 2003 to 2010, 843 workers ages 16 to 24 died in motor vehicle crashes at work. These incidents accounted for 22% of all workplace fantail in this age group. In 67% of these incidents, the young worker was driving the vehicle involved in the crash.
						</p>
						<ul class="no-list-style">

					<!--li class="portfolio-visit-btn"><a href="http://localhost/project/prevent-injury.php" class="btn">Visit More Jobs</a></li-->
					<button type="button" class="btn btn-default btn-lg" id="myBtn">Statistic</button>
					<button type="button" class="btn btn-default btn-lg" id="myBtn1-driver">Wage</button>
					<button type="button" class="btn btn-default btn-lg" id="myBtn2">self-evaluation</button>
				</ul>
					</div>
					<!-- End Project Info Column -->
				</div>
				<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 faq-wrapper">
						<div class="panel-group" id="accordion2">
							<h3>General Situation</h3>
							<div class="panel panel-default">
								<div class="panel-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse11">
										Make sure you understand the contract with your employer before you signed on.
									</a>
								</div>
								<div id="collapse11" class="accordion-body collapse in">
									<div class="accordion-inner">
										<div class="answer">Before Working, Part-time worker should know: </div>
										<ul>
										<li>
										Before you start to work, you should ask your employer about the tasks they will perform at work.
										</li>
										<li>
										Ask for employer whether has written policies and procedures for the safe opera on of motor vehicles, what happen if I got accident, do I have a compensation from employer?
										</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse12">
										Beware your car condition and driving style.

									</a>
								</div>
								<div id="collapse12" class="accordion-body collapse">
									<div class="accordion-inner">
										<div class="answer">Before Working, Part-time worker should know:</div>
										<ul>
										<li>
										Make sure your car in proper operating condition.
										</li>
										<li>
										Reinforce the importance of using seat belts, obeying speed limits, and maintaining a safe following distance.
										</li>
										<li>
										Keep calm when you are driving, do not rush to finish your job.
										</li>
										<li>
										Stop the vehicle before using a cell phone.
										</li>
										<li>
										Use detailed maps to determine your route and find the destination before you leave, or use a GPS.
										</li>
										</ul>
									</div>
								</div>

							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse13">
										Limited your working time.

									</a>
								</div>
								<div id="collapse13" class="accordion-body collapse">
									<div class="accordion-inner">
										<div class="answer">Before Working, Part-time worker Should: </div>
										<p>
										Try to minimize your working time into maximum 20 hours per week as driver is.
										</p>
									</div>
								</div>
								
							</div>
							<h3>Law and Regulation</h3>

							<div class="panel panel-default">
								<div class="panel-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse21">
										Ensure you understand the law of regulation for delivery driver before you start to work.
									</a>
								</div>
								<div id="collapse21" class="accordion-body collapse">
									<div class="accordion-inner">
										<p>The specific requirements of the road safety laws also have to be met and they cover matters such as vehicle roadworthiness, driver licensing and road rules (eg speed limits).						
										</p>
										</ul>
										<div class="answer">These requirements would be supported in an employers OHS program by:</div>
										<ul>
										<li>
										Purchasing and maintaining a safe and roadworthy fleet.
										</li>
										<li>
										Ensuring employees have the relevant appropriate driver licenses.
										</li>
										<li>
										Scheduling work to account for speed limits and managing fatigue.
										</li>
										<li>
										Providing appropriate information and training on work related driving safety.
										</li>
										<li>
										Monitoring and supervision of the work related driving safety program.
										</li>
										</ul>
										<p>An employer’s duties also extend to an independent contractor engaged by the employer and any employees of the contractor. This duty is limited by the extent of control the employer has over the contractor’s activities.						
										</p>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse22">
										Responsibility followed by some legislation
									</a>
								</div>

								<div id="collapse22" class="accordion-body collapse">
									<div class="accordion-inner">
										</ul>
										<div class="answer">Under Section 25 of the OHS Act, employees also have a duty to cooperate with the measures that an employer has developed to eliminate or reduce risks. Applied to work related driving, the employee duties would include:</div>
										<ul>
										<li>
										Holding a current, valid drivers license.
										</li>
										<li>
										Abiding by all road rules (eg speed limits).
										</li>
										<li>
										Refraining from driving if impaired by tiredness or medication.
										</li>
										<li>
										Reporting any incidents required by the employer’s program.
										</li>
										<li>
										Reporting any incidents required by the employer’s program.
										</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse30">
										Falling loads (especially for moving company)
									</a>
								</div>

								<div id="collapse30" class="accordion-body collapse">
									<div class="accordion-inner">
										<ul>
										<li>
										Stabilise loads (e.g. by segmenting with cages, stillages, pallets and mezzanines, or link with skips or bins).
										</li>
										<li>
										Ensure packaging is sturdy and does not stick out or catch. Use powered tightening of load binders.
										</li>
										<li>
										Untie and unload at the same level to avoid working below the load.
										</li>
										<li>
										Use exclusion zones (e.g. at least three times the load fall distance away from freight).
										</li>
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
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse31">
										Falls from the cabin, rear of vehicle or load.
									</a>
								</div>

								<div id="collapse31" class="accordion-body collapse">
									<div class="accordion-inner">
										<ul>
										<li>
										Ensure the design of vehicle, load and procedures eliminates the need to climb on top of the load or tray (e.g. containerise the load, use mechanical aids, and apply load restraints and tarps from ground level).
										</li>
										<li>
										When working at height, use appropriate equipment (e.g. gantries, drop-down work platforms or travel restraints to prevent falls).
										</li>
										<li>
										Use appropriate equipment when loading docks (e.g. retractable steps, harnesses or restraints when unloading).
										</li>
										<li>
										Use appropriate equipment when loading docks (e.g. retractable steps, harnesses or restraints when unloading).
										</li>
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
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse32">
										Load adjustment
									</a>
								</div>

								<div id="collapse32" class="accordion-body collapse">
									<div class="accordion-inner">
										<ul>
										<li>
										Ensure vehicles have load binder systems that can be tightened from ground level.
										</li>
										<li>
										Regularly check the condition of load restraints and replace when necessary. Slips, trips and falls around the vehicle.
										</li>
										<li>
										Train employees on safe loading and unloading (e.g. park in a way that permits safe and easy access to the vehicle for loading, unloading or load adjustment).
										</li>
										<li>
										Ensure employees wear appropriate footwear (e.g. robust, non-slip).
										</li>

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
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse34">
										Vehicle accidents
									</a>
								</div>

								<div id="collapse34" class="accordion-body collapse">
									<div class="accordion-inner">
										<ul>
										<li>
										Ensure vehicles have load binder systems that can be tightened from ground level.
										</li>
										<li>
										Minimise in-cabin distractions (e.g. loud music) and vibration (e.g. uncomfortable seating).
										</li>
										<li>
										Ensure drivers are not impaired by drugs, alcohol or fatigue and discourage speeding, tailgating, etc.
										</li>
										<li>
										Ensure drivers are not impaired by drugs, alcohol or fatigue and discourage speeding, tailgating, etc.
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
				<h3>Related Injury</h3>
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="#"><img src="img/fall.png" alt="Project Name"></a>
							</div>
							<div class="portfolio-info-fade">
								<ul>
									<li class="portfolio-project-name">Fall Injury</li>
									<li class="read-more"><a href="<?php echo site_url('Welcome/newPage/fall'); ?>" class="btn">Read more</a></li>
								</ul>
							</div>
						</div>
					</div>
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
						Which of the following should you avoid to reduce strain on your spine when sitting for long hours?</h3>
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
							<p id="correctAnswer1" style="display: none;">2</p>
							<label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
										class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
																									 name="q_answer"
																									 value="1">1 Adjust your chair such that your feet are on the floor </label>
							<label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
										class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
																									 name="q_answer"
																									 value="2">2 Cross your legs at the knee </label>

							<label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
										class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
																									 name="q_answer"
																									 value="3">3
								Place a seat wedge or a folded pillow under you</label>
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

    <span id="answer1I" style="float: left; text-align:justify;"><b>Incorrect!</b> Explanation: Crossing your legs at the knee changes the natural pelvic position and puts all the pressure on to just one of your hip muscles and stresses the sciatic nerve- both attached to your lower back. This can cause long term nerve irritation and back pain.
		</span>
							<span id="answer1C" style="float: left; text-align:justify;"><b>Correct!</b> Explanation: Crossing your legs at the knee changes the natural pelvic position and puts all the pressure on to just one of your hip muscles and stresses the sciatic nerve- both attached to your lower back. This can cause long term nerve irritation and back pain.
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
						What among the following is NOT a reason behind the rising injury rate among young workers?</h3>
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
							<p id="correctAnswer2" style="display: none;">3</p>
							<label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
										class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
																									 name="q_answer"
																									 value="1">1 Inexperience and lack of safety training
							</label>
							<label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
										class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
																									 name="q_answer"
																									 value="2">2  Lack of biological and physical fitness
								 </label>

							<label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
										class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
																									 name="q_answer"
																									 value="3">3
								Laziness and unwillingness to work</label>
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

    <span id="answer2I" style="float: left; text-align:justify;"><b>Incorrect!</b> Explanation: Occupational injury rates are higher among youth workers. The parts of brain that control hazard identification and decision making are still growing in young workers. Lack of experience also contributes to injury rates.

		</span>
							<span id="answer2C" style="float: left; text-align:justify;"><b>Correct!</b> Explanation: Occupational injury rates are higher among youth workers. The parts of brain that control hazard identification and decision making are still growing in young workers. Lack of experience also contributes to injury rates.
	</span>

						</div>
						<div class="col-md-2">
							<button type="button" class="btn btn-default btn-lg" id="finish1">Finish</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

            <!-- loading footer -->
<?php $this->load->view('footer'); ?>