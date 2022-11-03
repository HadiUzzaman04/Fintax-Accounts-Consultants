@extends('layouts.master')
@section('content')

<div id="main">
    <div class="inner">
        <h1>Accounting</h1>

        <div class="image main">
            <img src="images/SERVICES.jpg" class="img-fluid" alt="" />
        </div>

        <h2 class="m-n">Accounting</h2>
        <p>Accouting services integrate advice in the face of changes, either when we talk about transactions, reorganizations, debts, equity or bankruptcy. The experience we gathered in our 5 years of activity highlights in the way we help you manage this complex events</p>
        <p>For a successful business, we provide you the following services:</p>
        <ul>
            <li> Bookkeeping and Financial accounting</li>
            <li> Preparation of the Financial Statements according to the Romanian Accounting Standards</li>
            <li> Preparation of management reports</li>
            <li> Consultancy services on accounting and financial topics</li>
            <li> Optimization of financial and business processes (e.g. design and implementation of procedures)</li>
            <li> “Fast clean-up” services and reconciliation of general ledger accounts</li>
            <li> Tailored professional in-house trainings</li>
            <li> Administrative assistance for annual inventory process</li>
        </ul>
        <div>
            <a href="{{route('taxadvisory')}}"><input type="submit" value="Tax Advisory" class="primary" /></a>
            <a href="{{route('hra')}}"><input type="submit" value="HR Adminstration" class="primary" /></a>
            <a href="{{route('payroll')}}"><input type="submit" value="Payroll Service" class="primary" /></a>
            <a href="{{route('taxreturn')}}"><input type="submit" value="Tax Return" class="primary" /></a>
            <a href="{{route('smsf')}}"><input type="submit" value="SMSF" class="primary" /></a>
        </div>
    </div>
</div>
<br>

@endsection