@extends('layouts.master')
@section('content')

<div id="main">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/slider-image-1-1920x700.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slider-image-2-1920x700.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slider-image-3-1920x700.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <br>
    <br>

    <div class="inner">
        <!-- About Us -->
        <header id="inner">
            <h1>About Us</h1>
            <p>Consisting of the most educated and dedicated team of professionals in the industry, Fintax Accountants pride ourselves on utilising financial experts that possess a diverse background in the world of accounting. With a team of experts in the fields of Cost and Management Accounting, Bookkeeping, Financial Accounting and Tax Accounting, there isn’t one specific aspect of your businesses financial operation that we can’t handle. Our dedicated team will manage everything from your basic tax needs, to complicated financial accounting.</p>
        </header>
        <p class="text-center"><a href="{{route('aboutus')}}">Read More <i class="fa fa-long-arrow-right"></i></a></p>

        <br>

        <h2 class="h2">Packages</h2>

        <!-- Packages -->
        <section class="tiles">
            <article class="style1">
                <span class="image">
                    <img src="images/product-1-720x480.jpg" alt="" />
                </span>
                <a href="{{route('taxadvisory')}}">
                    <h2>Tax Advisory</h2>
                    <p>
                        <small>
                            Our team of experienced tax specialists can provide high-quality tax advisory services....
                        </small>
                    </p>
                </a>
            </article>
            <article class="style2">
                <span class="image">
                    <img src="images/product-2-720x480.jpg" alt="" />
                </span>
                <a href="{{route('accounting')}}">
                    <h2>Accounting</h2>
                    <p>
                        <small>
                        Accounting services imply supply of advice in the face of changes, either when we talk about impact on day....
                        </small>
                    </p>
                </a>
            </article>
            <article class="style3">
                <span class="image">
                    <img src="images/product-3-720x480.jpg" alt="" />
                </span>
                <a href="{{route('hra')}}">
                    <h2>Human Resourdes Adminstration</h2>
                    <p>
                        <small>
                        Due to the fact that people are the most important component of an organization, our services include....
                        </small>
                    </p>
                </a>
            </article>

            <article class="style4">
                <span class="image">
                    <img src="images/product-4-720x480.jpg" alt="" />
                </span>
                <a href="{{route('payroll')}}">
                    <h2>Payroll Service</h2>
                    <p>
                        <small>
                        Fintax Accountants provides outsourced payroll services to small and mediums business.We have team of....
                        </small>
                    </p>
                </a>
            </article>

            <article class="style5">
                <span class="image">
                    <img src="images/product-5-720x480.jpg" alt="" />
                </span>
                <a href="{{route('taxreturn')}}">
                    <h2>Tax Return</h2>
                    <p>
                        <small>
                        With a business model based on honesty and integrity, our team of accountants and consultants....
                        </small>
                    </p>
                </a>
            </article>

            <article class="style6">
                <span class="image">
                    <img src="images/product-6-720x480.jpg" alt="" />
                </span>
                <a href="{{route('smsf')}}">
                    <h2>Self Managed Super Funds (SMSF)</h2>
                    <p>
                        <small>
                        Making sure that your retirement is a good one, a self-managed super fund is a way of providing....
                        </small>
                    </p>
                </a>
            </article>
        </section>

        <p class="text-center"><a href="{{route('service')}}">View More <i class="fa fa-long-arrow-right"></i></a></p>

        <br>

        <h2 class="h2">Testimonials</h2>

        <div class="row">
            <div class="col-sm-6 text-center">
                <p class="m-n"><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt delectus mollitia, debitis architecto recusandae? Quidem ipsa, quo, labore minima enim similique, delectus ullam non laboriosam laborum distinctio repellat quas deserunt voluptas reprehenderit dignissimos voluptatum deleniti saepe. Facere expedita autem quos."</em></p>

                <p><strong> - John Doe</strong></p>
            </div>

            <div class="col-sm-6 text-center">
                <p class="m-n"><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt delectus mollitia, debitis architecto recusandae? Quidem ipsa, quo, labore minima enim similique, delectus ullam non laboriosam laborum distinctio repellat quas deserunt voluptas reprehenderit dignissimos voluptatum deleniti saepe. Facere expedita autem quos."</em></p>

                <p><strong>- John Doe</strong> </p>
            </div>
        </div>
        <p class="text-center"><a href="blog.html">Read More <i class="fa fa-long-arrow-right"></i></a></p>
    </div>
</div>

@endsection