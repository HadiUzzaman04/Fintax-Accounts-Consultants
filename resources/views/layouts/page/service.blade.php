@extends('layouts.master')
@section('content')

<div id="main">
    <div class="inner">
        <h1>FINTAX Services</h1>

        <div class="image main">
            <img src="images/bannae.jpg" class="img-fluid" alt="" />
        </div>

        <!-- Packages -->
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
    </div>
</div>

@endsection