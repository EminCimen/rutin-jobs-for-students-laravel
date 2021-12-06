@extends('layouts.master')
@section('title', 'Ana Sayfa')

@section('content')
<!-- Slider Section Start -->
<div class="slider-section section">
    <div class="slide-item-2 bg-parallax" data-bg-image="assets/images/slider/slider-2.jpg" data-overlay="50">
        <div class="container">
            <div class="slider-content-2 text-left">
                <h2 class="title">Find Your Next Job</h2>
                <p>More then <span>1,524</span> job listed here.</p>
            </div>

            <!-- Job Search Form Start -->
            <div class="job-search-form-2">
                <form action="#">
                    <div class="row no-gutters mb-n2 mb-sm-n0">

                        <div class="col-lg-auto col-sm-6 col-12 flex-grow-1 mb-2 mb-sm-0">
                            <input type="text" placeholder="e.g. web design">
                        </div>

                        <div class="col-lg-auto col-sm-6 col-12 flex-grow-1 mb-2 mb-sm-0">
                            <input type="text" placeholder="Location">
                        </div>

                        <div class="col-lg-auto col-sm-6 col-12 flex-grow-1 mb-2 mb-sm-0">
                            <select>
                                <option value="1">Any category</option>
                                <option value="2">Web Designer</option>
                                <option value="3">Web Developer</option>
                                <option value="4">Graphic Designer</option>
                                <option value="5">App Developer</option>
                                <option value="6">UI &amp; UX Expert</option>
                            </select>
                        </div>

                        <div class="col-lg-auto col-sm-6 col-12 flex-grow-1 mb-2 mb-sm-0">
                            <button class="btn btn-primary">Search</button>
                        </div>

                    </div>
                </form>
            </div>
            <!-- Job Search Form End -->

        </div>
    </div>
</div>
<!-- Slider Section End -->

<!-- Popular Categories Section Start -->
<div class="section section-padding pb-0">
    <div class="container">
        <div class="section-title">
            <h3 class="title">Popular Categories</h3>
            <p>Here's the categories getting most view on the website.</p>
        </div>

        <!-- Category Slider Start -->
        <div class="job-category-slider row">

            <div class="col">
                <a href="#" class="job-category badge-primary">
                    <div class="inner">
                        <i class="flaticon-development"></i>
                        <h6 class="title">Development</h6>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="#" class="job-category badge-secondary">
                    <div class="inner">
                        <i class="flaticon-design"></i>
                        <h6 class="title">Design</h6>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="#" class="job-category badge-success">
                    <div class="inner">
                        <i class="flaticon-multimedia"></i>
                        <h6 class="title">Multimedia</h6>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="#" class="job-category badge-danger">
                    <div class="inner">
                        <i class="flaticon-finance"></i>
                        <h6 class="title">Finance</h6>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="#" class="job-category badge-warning">
                    <div class="inner">
                        <i class="flaticon-networking"></i>
                        <h6 class="title">Networking</h6>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="#" class="job-category badge-info">
                    <div class="inner">
                        <i class="flaticon-photography"></i>
                        <h6 class="title">Photography</h6>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="#" class="job-category badge-primary">
                    <div class="inner">
                        <i class="flaticon-education"></i>
                        <h6 class="title">Education</h6>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="#" class="job-category badge-secondary">
                    <div class="inner">
                        <i class="flaticon-research"></i>
                        <h6 class="title">Research</h6>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="#" class="job-category badge-success">
                    <div class="inner">
                        <i class="flaticon-medical"></i>
                        <h6 class="title">Medical</h6>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="#" class="job-category badge-danger">
                    <div class="inner">
                        <i class="flaticon-government"></i>
                        <h6 class="title">Government</h6>
                    </div>
                </a>
            </div>

        </div>
        <!-- Category Slider End -->

    </div>
</div>
<!-- Popular Categories Section End -->

<!-- Recent Jobs Start -->
<div class="section section-padding">
    <div class="container">
        <div class="section-title">
            <h2 class="title">Latest Jobs</h2>
            <p>Here's the most recent job listed on the website.</p>
        </div>

        <!-- Job List Wrap Start -->
        <div class="job-list-wrap">

            <!-- Job List Start -->
            <a href="job-single.html" class="job-list">
                <div class="company-logo col-auto">
                    <img src="assets/images/companies/company-1.png" alt="Company Logo">
                </div>
                <div class="salary-type col-auto order-sm-3">
                    <span class="salary-range">$5000 - $8000</span>
                    <span class="badge badge-success">Full Time</span>
                </div>
                <div class="content col">
                    <h6 class="title">Full Stack Backend Developer</h6>
                    <ul class="meta">
                        <li><strong class="text-primary">Envato</strong></li>
                        <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                    </ul>
                </div>
            </a>
            <!-- Job List Start -->

            <!-- Job List Start -->
            <a href="job-single.html" class="job-list">
                <div class="company-logo col-auto">
                    <img src="assets/images/companies/company-2.png" alt="Company Logo">
                </div>
                <div class="salary-type col-auto order-sm-3">
                    <span class="salary-range">$7000 - $13000</span>
                    <span class="badge badge-warning">Part Time</span>
                </div>
                <div class="content col">
                    <h6 class="title">Product UI & UX Expert</h6>
                    <ul class="meta">
                        <li><strong class="text-primary">Astha</strong></li>
                        <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                    </ul>
                </div>
            </a>
            <!-- Job List Start -->

            <!-- Job List Start -->
            <a href="job-single.html" class="job-list">
                <div class="company-logo col-auto">
                    <img src="assets/images/companies/company-3.png" alt="Company Logo">
                </div>
                <div class="salary-type col-auto order-sm-3">
                    <span class="salary-range">$5000 - $8000</span>
                    <span class="badge badge-danger">Freelance</span>
                </div>
                <div class="content col">
                    <h6 class="title">Full Stack Backend Developer</h6>
                    <ul class="meta">
                        <li><strong class="text-primary">Github</strong></li>
                        <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                    </ul>
                </div>
            </a>
            <!-- Job List Start -->

            <!-- Job List Start -->
            <a href="job-single.html" class="job-list">
                <div class="company-logo col-auto">
                    <img src="assets/images/companies/company-4.png" alt="Company Logo">
                </div>
                <div class="salary-type col-auto order-sm-3">
                    <span class="salary-range">$7000 - $13000</span>
                    <span class="badge badge-success">Full Time</span>
                </div>
                <div class="content col">
                    <h6 class="title">Product UI & UX Expert</h6>
                    <ul class="meta">
                        <li><strong class="text-primary">Medicore</strong></li>
                        <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                    </ul>
                </div>
            </a>
            <!-- Job List Start -->

            <!-- Job List Start -->
            <a href="job-single.html" class="job-list">
                <div class="company-logo col-auto">
                    <img src="assets/images/companies/company-5.png" alt="Company Logo">
                </div>
                <div class="salary-type col-auto order-sm-3">
                    <span class="salary-range">$5000 - $8000</span>
                    <span class="badge badge-success">Full Time</span>
                </div>
                <div class="content col">
                    <h6 class="title">Full Stack Backend Developer</h6>
                    <ul class="meta">
                        <li><strong class="text-primary">GreenSoul</strong></li>
                        <li><i class="fa fa-map-marker"></i> 2020 Willshire Glen, GA-30009</li>
                    </ul>
                </div>
            </a>
            <!-- Job List Start -->

        </div>
        <!-- Job List Wrap Start -->

        <div class="text-center mt-4 mt-lg-5">
            <a href="job-list.html" class="btn btn-primary">View All Jobs</a>
        </div>

    </div>
</div>
<!-- Recent Jobs End -->

<!-- Funfact Section Start -->
<div class="section section-padding bg-parallax" data-bg-image="assets/images/bg/bg-1.jpg" data-overlay="50">
    <div class="container">
        <div class="funfact-wrap row">

            <!-- Funfact Start -->
            <div class="funfact col-md-3 col-sm-6 col-12">
                <span class="counter">1354</span>
                <span class="title">Job Post</span>
            </div>
            <!-- Funfact Start -->

            <!-- Funfact Start -->
            <div class="funfact col-md-3 col-sm-6 col-12">
                <span class="counter">1741</span>
                <span class="title">Members</span>
            </div>
            <!-- Funfact Start -->

            <!-- Funfact Start -->
            <div class="funfact col-md-3 col-sm-6 col-12">
                <span class="counter">1204</span>
                <span class="title">Resume</span>
            </div>
            <!-- Funfact Start -->

            <!-- Funfact Start -->
            <div class="funfact col-md-3 col-sm-6 col-12">
                <span class="counter">142</span>
                <span class="title">Company</span>
            </div>
            <!-- Funfact Start -->

        </div>
    </div>
</div>
<!-- Funfact Section End -->

<!-- Blog Section Start -->
<div class="section section-padding">
    <div class="container">

        <div class="section-title">
            <h3 class="title">Our Blog</h3>
            <p>Get more tips & tricks from out blog post.</p>
        </div>

        <!-- Blog Slider Start -->
        <div class="blog-slider row">

            <!-- Blog Start -->
            <div class="col">
                <div class="blog">
                    <div class="media">
                        <a href="blog-single.html"><img src="assets/images/blog/blog-1.jpg" alt=""></a>
                    </div>
                    <div class="content">
                        <h6 class="title"><a href="blog-single.html">The Top 5 Job Interview Questions For IT Professional</a></h6>
                        <ul class="meta">
                            <li>Posted on 25 Jan, 2019</li>
                            <li><a href="#">3 Comments</a></li>
                        </ul>
                        <div class="desc">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugiat fugit voluptates ut rem vitae.</p>
                        </div>
                        <a href="blog-single.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Blog End -->

            <!-- Blog Start -->
            <div class="col">
                <div class="blog">
                    <div class="media">
                        <a href="blog-single.html"><img src="assets/images/blog/blog-2.jpg" alt=""></a>
                    </div>
                    <div class="content">
                        <h6 class="title"><a href="blog-single.html">7 Careers To Consider If You Love Traveling</a></h6>
                        <ul class="meta">
                            <li>Posted on 25 Jan, 2019</li>
                            <li><a href="#">3 Comments</a></li>
                        </ul>
                        <div class="desc">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugiat fugit voluptates ut rem vitae.</p>
                        </div>
                        <a href="blog-single.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Blog End -->

            <!-- Blog Start -->
            <div class="col">
                <div class="blog">
                    <div class="media">
                        <a href="blog-single.html"><img src="assets/images/blog/blog-3.jpg" alt=""></a>
                    </div>
                    <div class="content">
                        <h6 class="title"><a href="blog-single.html">When the Perfect Candidate Turns Out To Be an Imperfect Fit</a></h6>
                        <ul class="meta">
                            <li>Posted on 25 Jan, 2019</li>
                            <li><a href="#">3 Comments</a></li>
                        </ul>
                        <div class="desc">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugiat fugit voluptates ut rem vitae.</p>
                        </div>
                        <a href="blog-single.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Blog End -->

        </div>
        <!-- Blog Slider End -->

    </div>
</div>
<!-- Blog Section End -->
@endsection
