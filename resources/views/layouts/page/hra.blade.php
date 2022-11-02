@extends('layouts.master')
@section('content')

<div id="main">
    <div class="inner">
        <h1>Human Resourdes Adminstration</h1>

        <div class="image main">
            <img src="images/banner-image-5-1920x500.jpg" class="img-fluid" alt="" />
        </div>

        <h2 class="m-n">Human Resourdes Adminstration</h2>
        <p>Due to the fact that people are the most important component of an organization, our services include payroll management and activity mobilization in the sight of an efficient professional and individual development.</p>
        <ul>
            <li> Payroll services</li>
            <li> Data collection</li>
            <li> Monthly payroll</li>
            <li> Payroll statements</li>
            <li> Payroll reports</li>
            <li> Preparation and submittal of the Electronic register of employees (Revisal)</li>
            <li> Preparation of mandatory reporting for statistical purposes</li>
        </ul>
        <h2>HR Administration services</h2>
        <ul>
            <li> Preparation and administration of the employees data base, organizational structure and job classification</li>
            <li> Administration of labor agreements</li>
            <li> Preparation of certificates and various declarations for employees (upon request)</li>
        </ul>
        <ul class="actions">
            <li><input type="submit" value="Accounting" class="primary" /></li>
            <li><input type="submit" value="HR Adminstration" class="primary" /></li>
            <li><input type="submit" value="Payroll Service" class="primary" /></li>
            <li><input type="submit" value="Tax Return" class="primary" /></li>
            <li><input type="submit" value="SMSF" class="primary" /></li>

        </ul>
    </div>
</div>

@endsection