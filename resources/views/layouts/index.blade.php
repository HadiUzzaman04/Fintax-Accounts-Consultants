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
                <img class="d-block w-100" src="images/slider1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slider2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slider3.png" alt="Third slide">
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

    <div class="inner">
        <!-- About Us -->
        <header id="inner">
            <h1>About Us</h1>
            <p>Consisting of the most educated and dedicated team of professionals in the industry, Fintax Accountants pride ourselves on utilising financial experts that possess a diverse background in the world of accounting. With a team of experts in the fields of Cost and Management Accounting, Bookkeeping, Financial Accounting and Tax Accounting, there isn’t one specific aspect of your businesses financial operation that we can’t handle. Our dedicated team will manage everything from your basic tax needs, to complicated financial accounting.</p>
        </header>
        <p class="text-center"><a href="{{route('aboutus')}}">Read More <i class="fa fa-long-arrow-right"></i></a></p>

        <h2 class="h2">Services</h2>

        <section class="tiles">
            <article class="style1">
                <span class="image">
                    <img style="width: 362px; height: 250px" src="images/taxadvisory.jpg" alt="" />
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
                    <img style="width: 362px; height: 250px" src="images/accounting.jpg" alt="" />
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
                    <img style="width: 362px; height: 250px" src="images/hra.jpg" alt="" />
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
                    <img style="width: 362px; height: 250px" src="images/Payroll.jpg" alt="" />
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
                    <img style="width: 362px; height: 250px" src="images/taxreturn.jpg" alt="" />
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
                    <img style="width: 362px; height: 250px" src="images/smsf.jpg" alt="" />
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

        <h2 class="h2">Testimonials</h2>

        <div class="row">
            <div class="col-sm-6 text-center">
                <p class="m-n"><em>"Fintax accounting has provided a high level bookkeeping service at a time in our business when it was sorely needed."</em></p>

                <p><strong> - John Smith</strong></p>
            </div>

            <div class="col-sm-6 text-center">
                <p class="m-n"><em>"I have been very satisfied with the MYOB bookkeeping services they have provided for my business."</em></p>

                <p><strong>- John Snow</strong> </p>
            </div>
        </div>
        <p class="text-center"><a href="{{route('testimonials')}}">Read More <i class="fa fa-long-arrow-right"></i></a></p>
    </div>
</div>

@endsection