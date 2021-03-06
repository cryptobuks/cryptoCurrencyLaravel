@extends('master')
@section('title')
Contact Us
@endsection
@section('content')
<section id="sp-page-title">
	<div class="row">
		<div id="sp-title" class="col-sm-12 col-md-12">
			<div class="sp-column "></div>
		</div>
	</div>
</section>
<section id="sp-main-body">
	<div class="row">
		<div id="sp-component" class="col-sm-12 col-md-12">
			<div class="sp-column ">
				<div id="system-message-container"></div>
				<div id="sp-page-builder" class="sp-page-builder  page-5">
					<div class="page-content">
						<!-- <div id="section-id-1516019284667" class="sppb-section ">
							<div class="sppb-container-inner">
								<div class="sppb-row">
									<div class="sppb-col-md-12">
										<div id="column-id-1516019284666" class="sppb-column" >
											<div class="sppb-column-addons">
												<div id="sppb-addon-1516019284670" class="clearfix" >
													<div id="sppb-addon-map-1516019284670" class="sppb-addon sppb-addon-gmap ">
														<div class="sppb-addon-content">
															<div id="sppb-addon-gmap-1516019284670" class="sppb-addon-gmap-canvas" data-lat="40.754326" data-lng="-73.976209" data-maptype="ROADMAP" data-mapzoom="18" data-mousescroll="false" data-infowindow="QnVzaW5lc3MgQ2VudGVy"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>  -->
						<section id="section-id-1516019284671" class="sppb-section ">
							<div class="sppb-row-container">
								<div class="sppb-row">
									<div class="sppb-col-md-12">
										<div id="column-id-1516019284714" class="sppb-column">
											<div class="sppb-column-addons">
												<div id="sppb-addon-1516019284715" class="clearfix">
													<div class="sppb-addon sppb-addon-text-block 0 sppb-text-center content_border">
														<h3 class="sppb-addon-title">Get In Touch</h3>
														<div class="sppb-addon-content">with {{ config('app.name') }}</div>
													</div>
												</div>
												<div id="section-id-1516019284688" class="sppb-section ">
													<div class="sppb-container-inner">
														<div class="sppb-row">
															<div class="sppb-col-md-9">
																<div id="column-id-1516019284689" class="sppb-column">
																	<div class="sppb-column-addons">
																		<div id="sppb-addon-1516019284683" class="clearfix">
																			<div class="sppb-addon sppb-addon-ajax-contact ">
																				<div class="sppb-ajax-contact-content">
																					<form class="sppb-ajaxt-contact-form">
																						<div class="sppb-row">
																							<div class="sppb-form-group  sppb-col-sm-6">
																								<input type="text" name="name" class="sppb-form-control" placeholder="Name" required="required">
																							</div>
																							<div class="sppb-form-group  sppb-col-sm-6">
																								<input type="email" name="email" class="sppb-form-control" placeholder="Email" required="required">
																							</div>
																							<div class="sppb-form-group  sppb-col-sm-12">
																								<input type="text" name="subject" class="sppb-form-control" placeholder="Subject" required="required">
																							</div>
																							<!-- <div class="sppb-form-group  sppb-col-sm-12">
																								<input type="text" name="captcha_question" class="sppb-form-control" placeholder="3 + 4 = ?" required="required">
																							</div> -->
																							<div class="sppb-form-group  sppb-col-sm-12">
																								<textarea name="message" rows="5" class="sppb-form-control" placeholder="Message" required="required"></textarea>
																							</div>
																						</div>
																						<input type="hidden" name="recipient" value="b2ZmaWNlMjAxMThAd2Vic2l0ZTAwOC5jb20=">
																						<input type="hidden" name="from_email" value="">
																						<input type="hidden" name="from_name" value="">
																						<input type="hidden" name="captcha_answer" value="8f14e45fceea167a5a36dedd4bea2543">
																						<input type="hidden" name="captcha_type" value="default">
																						<button type="submit" id="btn-1516019284683" class="sppb-btn sppb-btn-primary sppb-btn-rounded sppb-btn-flat"><i class="fa"></i> Send Message</button>
																					</form>
																					<div style="display:none;margin-top:10px;" class="sppb-ajax-contact-status"></div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="sppb-col-md-3">
																<div id="column-id-1516019284694" class="sppb-column" >
																	<div class="sppb-column-addons">
																		<div id="sppb-addon-1516019284710" class="clearfix" >
																			<div class="sppb-addon sppb-addon-text-block 0 sppb-text-left ">
																				<div class="sppb-addon-content">Details Details Details Details Details Details Details <br />Details Details Details Details Details Details Details Details .<br /><br />
																					<strong>Phone</strong>: Phone Number <br />
																					<strong>Email</strong>: contact@yourmail.com<a href="mailto:contact@yourmail.com"><br /></a>
																					<strong>Working</strong>: Mon - Fri: 8:00 - 17:30<br /><br />
																					<strong>Address</strong>: Port Harcourt
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
