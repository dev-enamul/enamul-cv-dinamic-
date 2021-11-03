@extends('fontend.layout.master')

@section('mainContent')
<div class="col-md-7 right_site">
			<div class="wow fadeInUp about_page tabcontent" id="about">
				<h1 class="title border-left"><span class="first_later">About</span> me</h1>
				<div class="row">
					<div class="col-md-6">
						<p class=""><strong class="title">Hello! I'm Md Enamul Haque.</strong> <br> web developer  with a strong passion. I have build several project for e-Commerch, Shop, Corporate Office  using PHP, Laravel, Wordpress. I want to obtain a full time job working as a Software Engineer to develop, maintain and design software</p>
					</div>
					<div class="col-md-6 pr-0">
						<ul>
							<li class="border-center"><p>Age: <span>23</span></p></li>
							<li class="border-center"><p>Residence:  <span>Bangladesh</span></p></li>
							<li class="border-center"><p>Freelance: <span>Avalable</span></p> </li>
							<li><p>Address: <span>Gorai,Tangail</span></p> </li>
						</ul>
					</div>
				</div>
				<div class="service_section">
					<h1 class="title service_title"> <span class="first_later">My </span>Services</h1>
					<div class="row">
						<div class="col-md-6 service">
							<div class="box">
								<i class="service_icon fa fa-code"></i>
								<h6 class="title"> <strong>Software Development</strong></h6>
								<p>Mordern and mobile-ready website that will help you all of your business</p>
								<a href="#"><span>Read More</span></a>
							</div>
						</div>
						<div class="col-md-6 service">
							<div class="box">
								<i class="service_icon fa fa-users"></i>
								<h6 class="title"> <strong>Portfolio Website </strong></h6>
								<p>Mordern and mobile-ready website that will help you all of your business</p>
								<a href="#"><span>Read More</span></a>
							</div>
						</div>

						<div class="col-md-6 service">
							<div class="box">
								<i class="service_icon fa fa-cart-arrow-down"></i>
								<h6 class="title"> <strong>eCommerce Website</strong></h6>
								<p>Mordern and mobile-ready website that will help you all of your business</p>
								<a href="#"><span>Read More</span></a>
							</div>
						</div>

						<div class="col-md-6 service">
							<div class="box">
								<i class="service_icon fa fa-briefcase"></i>
								<h6 class="title"> <strong>Corporate WebSite</strong></h6>
								<p>Mordern and mobile-ready website that will help you all of your business</p>
								<a href="#"><span>Read More</span></a>
							</div>
						</div>

						<div class="col-md-6 service">
							<div class="box">
								<i class="service_icon fa fa-paint-brush"></i>
								<h6 class="title"> <strong>Graphic Design</strong></h6>
								<p>Mordern and mobile-ready website that will help you all of your business</p>
								<a href="#"><span>Read More</span></a>
							</div>
						</div>

						<div class="col-md-6 service  ">
							<div class="box">
								<i class="service_icon fa fa-android"></i>
								<h6 class="title"> <strong>Android App Development</strong></h6>
								<p>Mordern and mobile-ready website that will help you all of your business</p>
								<a href="#"><span>Read More</span></a>
							</div>
						</div>

					</div>
				</div>
			</div>

			<!-- =======================================================================
			About Page
			======================================================================= -->

			<div class="wow fadeInUp tabcontent resume_page" id="resome">
				<div class="edu_skill">
					<div class="row sub_title">
						<div class="col-sm-6">
							<h1 class=" title"><i class="fa fa-briefcase first_later pr-2"></i>EXPERIANCE</h1>
							<div class="job_info box">
								<div class="job_company_info">
									<div class="active_job_date ">
										<span class="first_later">2020 - Present</span>
									</div>
									<div class="job_company mt-2">
										<h6 class="title mb-0">Uniglory Packaging</h6>
									</div>

									<div class="job_post">
										<small>Design Officer</small>
									</div>
									<div class="job_company_logo">
										<img src="{{asset('fontend/images')}}/upil.png"></img>
									</div>
								</div>
								<div class="job_des">
									<p>Uniglory is a Packaging Company. printing Section, Design Shipping Mark and look After </p>
								</div>
							</div>

							<div class="job_info box">
								<div>
									<div class="job_date ">
										<span>2018 - 2020</span>
									</div>
									<div class="job_company mt-2">
										<h6 class="title mb-0">Info Computer</h6>
									</div>

									<div class="job_post">
										<small>Trainer</small>
									</div>
									<div class="job_company_logo">
										<img src="{{asset('fontend/images')}}/ita.png"></img>
									</div>
								</div>
								<div class="job_des">
									<p>Uniglory is a Packaging  printing Section, Design Shipping Mark and look After </p>
								</div>
							</div>


						</div>
						<div class="col-sm-6">
							<h1 class="title"><i class="fa fa-graduation-cap first_later pr-2" aria-hidden="true"></i>EDUCATION</h1>
							<div class="education_info box">
								<div class="job_company_info">
									<div class="job_date ">
										<span class="">2020 - Present</span>
									</div>
									<div class="job_company mt-2">
										<h6 class="title mb-0">Dhaka Collage</h6>
									</div>

									<div class="job_post">
										<small>BSc in CSE</small>
									</div>
									<div class="school_logo">
										<img src="{{asset('fontend/images')}}/dc.png"></img>
									</div>
								</div>
								<div class="job_des">
									<p>Uniglory i.Carton Layout Design as Section, Design Shipping Mark and look After </p>
								</div>
							</div>
							<div class="education_info box">
								<div class="job_company_info">
									<div class="job_date ">
										<span class="">2016 - 2020</span>
									</div>
									<div class="job_company mt-2">
										<h6 class="title mb-0">Naogaon Polytechnic</h6>
									</div>

									<div class="job_post">
										<small>Diploma in Computer</small>
									</div>
									<div class="school_logo">
										<img src="{{asset('fontend/images')}}/himaloy.png"></img>
									</div>
								</div>
								<div class="job_des">
									<p>Uniglory is a Packaginon Layout Design Design Shipping Mark and look After </p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row skill ">
					<div class="col-md-6">
					<h1 class="border-center text-center title"><i class="fa fa-paint-brush first_later pr-2" aria-hidden="true"></i>Skill</h1>
						<div class="design">
							<ul>
								<li>
									<h6>Web Design</h6>
									<div class="progress">
										<div class="percentage" style="width:70%"></div>
									</div>
								</li>

								<li>
									<h6>Web Development</h6>
									<div class="progress">
										<div class="percentage" style="width:50%"></div>
									</div>
								</li>

								<li>
									<h6>Graphic Design</h6>
									<div class="progress">
										<div class="percentage" style="width:90%"></div>
									</div>
								</li>
								<li>
									<h6>Video Editing</h6>
									<div class="progress">
										<div class="percentage" style="width:60%"></div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<h1 class=" border-center text-center title"><i class="fa fa-flag first_later pr-2" aria-hidden="true"></i>Language</h1>
						<div class="language">
							<ul>
								<li>
									<h6>Bangla</h6>
									<img src="{{asset('fontend/images')}}/banlan.png" />
								</li>
								<li>
									<h6>English</h6>
									<img src="{{asset('fontend/images')}}/englan.png" />
								</li>
								<li>
									<h6>Hindi</h6>
									<img src="{{asset('fontend/images')}}/hindilan.png" />
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<!-- ===========================================================================
			Work Page 
			=========================================================================== -->
			<div class="wow fadeInUp tabcontent works_page" id="work">
				<div class="border-left ">
					<ul class="work_menu_section">
					  <li class="work_menu" data-filter="all" onclick="work_menu(0)">All</li>
					  <li class="work_menu" data-filter="laravel"  onclick="work_menu(1)">Laravel</li>
					  <li class="work_menu" data-filter="php"  onclick="work_menu(2)">PHP</li>
					  <li class="work_menu" data-filter="static"  onclick="work_menu(3)">Static</li>
					  <li class="work_menu" data-filter="wordpress"  onclick="work_menu(4)">Wordpress</li>
					  <li class="work_menu" data-filter="graphic"  onclick="work_menu(5)">Graphic</li>
					</ul>
				</div>

				<div class="work_product">
					<div class="row">
						<div class="col-md-6 itemwork wordpress">
							<div class="box work">
								<img src="{{asset('fontend/images')}}/protfolio/w1.jpg" />
								 <div class="work_content">
									 <div class="work_text">
										<h3>E-Commerce</h3>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas id beatae in nulla expedita facere tenetur enim</p>
										<button class="btn btn-outline-light">Live Preview</button>
									
									 </div>
								 </div>
							</div>
						</div>
						<div class="col-md-6 pb-4 itemwork graphic">
							<div class="work">
								<img src="{{asset('fontend/images')}}/protfolio/t1.jpg" />

								<div class="work_content">
									<div class="work_text">
									   <h3>T-Shirt</h3>
									   <p>Dolor sit amet consectetur adipisicing elit. Quas id beatae in nulla expedita facere tenetur enim</p>
									   <button class="btn btn-outline-light">Live Preview</button>
									</div>
								</div>
								 
							</div>
						</div>
						<div class="col-md-6 pb-4 itemwork graphic">
							<div class="work">
								<img src="{{asset('fontend/images')}}/protfolio/t2.jpg" />

								<div class="work_content">
									<div class="work_text">
									   <h3>Logo Design</h3>
									   <p>Orem ipsum dolor sit amet consectetur adipisicing elit. Quas id beatae in nulla expedita facere tenetur enim</p>
									   <button class="btn btn-outline-light">Live Preview</button>
									</div>
								</div>
								 
							</div>
						</div>
						<div class="col-md-6 pb-4 itemwork graphic">
							<div class="work">
								<img src="{{asset('fontend/images')}}/protfolio/p1.jpg" />

								<div class="work_content">
									<div class="work_text">
									   <h3>E-Commerce</h3>
									   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas id beatae in nulla expedita facere tenetur enim</p>
									   <button class="btn btn-outline-light">Live Preview</button>
									</div>
								</div>
								 
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- ===============================================================================
			Blog Page 
			=============================================================================== -->
			<div class="wow fadeInUp tabcontent blog_page" id="blog">
				<h1> Blog
				</h1>
			</div>

			<!-- ===============================================================================
			Tutorial Page 
			=============================================================================== -->

			<div class="wow fadeInUp tabcontent blog_page" id="tutorial">
				<h1> Tutorial
				</h1>
			</div>

			<!-- ===============================================================================
			Gallery Page 
			=============================================================================== -->

			<div class="wow fadeInUp tabcontent blog_page" id="gallery">
				<h1> GALLERY
				</h1>
			</div>
			
			<!-- ===============================================================================
			Contact Page 
			=============================================================================== -->
			<div class="wow fadeInUp tabcontent contact_page" id="contact">
				 
				<div class="contact_info about_page">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3191.6362465915972!2d90.42207158717481!3d23.820770586508537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7b75b7a7e9f%3A0xf90036ea49963ba6!2sInfo%20Computer%20Tech!5e1!3m2!1sen!2sbd!4v1613218828675!5m2!1sen!2sbd" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					<div class="row">
						<div class="col-md-6">
							<ul>
								<li><p>Address: <span>Gorai,Tangail</span></p> </li>
								<li><p>Mobile: <span>+8801796351081</span></p> </li>

							</ul>
						</div>
						<div class="col-md-6">
							<ul>
								<li class="border-center"><p>E-mail: <span>info@enamul.com</span></p></li>
								<li class="border-center"><p>Freelance: <span>Avalable</span></p> </li>

							</ul>
						</div>
					</div>
					
					<div class="contact_form">
					<h1 class="title service_title"> <span class="first_later">Get</span> In Touhch</h1>
					 <form class="form">
						<div class="row">
							<div class="col-sm-6">
								<input class="form-control" type="text" placeholder="First Name"/>
							</div>
							<div class="col-sm-6">
								<input class="form-control" type="text" placeholder="Last Name"/>
							</div>
							<div class="col-sm-12">
								<input class="form-control" type="text" placeholder="Last Name"/>
							</div>
							<div class="col-sm-12">
								 <textarea placeholder="Your Massage" class="form-control" rows="4" > </textarea>
								 <button class="form-control" type="submit"> <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
							</div>
							
								
						</div>
					 </form>
					</div>
				</div>
			</div>
		</div>
@endsection