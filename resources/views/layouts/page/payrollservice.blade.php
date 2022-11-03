@extends('layouts.master')
@section('content')

<div id="main">
    <div class="inner">
        <h1>Payroll Service</h1>

        <div class="image main">
            <img src="images/SERVICES.jpg" class="img-fluid" alt="" />
        </div>

        <h2 class="m-n">Payroll Service</h2>
        <p>Fintax Accountants provides outsourced payroll services to small and mediums business.We have team of experienced payroll professionals ready to deliver cost effective and reliable payroll services to your business.</p>
        <p>Payroll processing can be a time consuming burden, but by outsourcing it to the dedicated and highly experienced team at Fintax Accountants you can refocus back on your core business activities. We are trained in the leading financial management systems including MYOB, Xero and QuickBooks so we can meet your needs regardless of which system you choose, or are already set up with.</p>
        <p>Our team is eager and capable of catering to your ever-changing business needs. We are able to provide the services both onsite; where an experienced Fintax member will come to your business and process your payroll at that time, and offsite; where your required work will be completed at one of our local offices. Also, should your situation require, we are able to timely process your payroll on a temporary basis.</p>
        <p>We are skilled at providing the following services:</p>
        <ul>
            <li> Preparation, management and issuing of pay slips (weekly, fortnightly, monthly)</li>
            <li> Administration of employee entitlements and payments (annual leave, sick leave, long service leave, superannuation, overtime, rostered days off, bonuses, commissions, etc.)</li>
            <li> Annual PAYG Payment Summaries / Group Certificates for employees</li>
            <li> Preparation and lodgement of PAYG Payment Summaries with the ATO</li>
            <li> Lodgement of Taxable Payments annual report for contractors with the ATO</li>
            <li> Continual assurance of payroll compliance</li>
            <li> Termination payment calculations and processing</li>
            <li> Reconciliation of wages to financial and activity statements</li>
            <li> Liaising with staff members with reference to any payroll matters</li>
        </ul>
        <h2>HR Administration services</h2>
        <ul>
            <li> Preparation and administration of the employees data base, organizational structure and job classification</li>
            <li> Administration of labor agreements</li>
            <li> Preparation of certificates and various declarations for employees (upon request)</li>
        </ul>
        <div>
            <a href="{{route('taxadvisory')}}"><input type="submit" value="Tax Advisory" class="primary" /></a>
            <a href="{{route('accounting')}}"><input type="submit" value="Accounting" class="primary" /></a>
            <a href="{{route('hra')}}"><input type="submit" value="HR Adminstration" class="primary" /></a>
            <a href="{{route('taxreturn')}}"><input type="submit" value="Tax Return" class="primary" /></a>
            <a href="{{route('smsf')}}"><input type="submit" value="SMSF" class="primary" /></a>
        </div>
    </div>
</div>
<br>

@endsection