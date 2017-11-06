<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>REPORTE COBRANZA</title>
  <link rel="stylesheet" href="style.css" media="all" />
  <style>
  .clearfix:after {
    content: "";
    display: table;
    clear: both;
  }

  a {
    color: #5D6975;
    text-decoration: underline;
  }

  body {
    position: relative;
    width: 21cm;  
    height: 29.7cm; 
    margin: 0 auto; 
    color: #001028;
    background: #FFFFFF; 
    font-family: Arial, sans-serif; 
    font-size: 12px; 
    font-family: Arial;
  }

  header {
    padding: 10px 0;
    margin-bottom: 30px;
  }

  #logo {
    text-align: center;
    margin-bottom: 10px;
  }

  #logo img {
    width: 250px;
  }

  h1 {
    border-top: 1px solid  #5D6975;
    border-bottom: 1px solid  #5D6975;
    color: #5D6975;
    font-size: 2.4em;
    line-height: 1.4em;
    font-weight: normal;
    text-align: center;
    margin: 0 0 20px 0;
    background: url(dimension.png);
  }

  #project {
    float: left;
  }

  #project span {
    color: #5D6975;
    text-align: right;
    width: 52px;
    margin-right: 10px;
    display: inline-block;
    font-size: 0.8em;
  }

  #company {
    float: right;
    text-align: right;
  }

  #project div,
  #company div {
    white-space: nowrap;        
  }

  table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px;
  }

  table tr:nth-child(2n-1) td {
    background: #F5F5F5;
  }

  table th,
  table td {
    text-align: center;
  }

  table th {
    padding: 5px 20px;
    color: #5D6975;
    border-bottom: 1px solid #C1CED9;
    white-space: nowrap;        
    font-weight: normal;
  }

  table .service,
  table .desc {
    text-align: left;
  }

  table td {
    padding: 20px;
    text-align: right;
  }

  table td.service,
  table td.desc {
    vertical-align: top;
  }

  table td.unit,
  table td.qty,
  table td.total {
    font-size: 1.2em;
  }

  table td.grand {
    border-top: 1px solid #5D6975;;
  }

  #notices .notice {
    color: #5D6975;
    font-size: 1.2em;
  }

  footer {
    color: #5D6975;
    width: 100%;
    height: 30px;
    position: absolute;
    bottom: 0;
    border-top: 1px solid #C1CED9;
    padding: 8px 0;
    text-align: center;
  }
</style>
</head>
<body>
  @php
  $expenditures = App\Models\Expenditure::all();

  $now = Carbon\Carbon::now()->toDateString();
  $collection_payments = App\Models\IncomePayment::all();
  $payments = $collection_payments->where('date', $now);
  @endphp
  <header class="clearfix">
    <div id="logo">
      <img src="{{ asset('img/c.png') }}">
    </div>
    <h1>REPORTE COBRANZA</h1>
    <div id="project">
      <div><span>FECHA</span> {{ Carbon\Carbon::now()->toDateTimeString() }}</div>
      <div><span>SOLICITA</span> {{ Auth::user()->name }} {{ Auth::user()->father_last_name }} {{ Auth::user()->mother_last_name }}</div>
    </div>
  </header>
  <main>
    <table>
      <thead>
        <tr>
          <th class="desc">CONCEPTO</th>
          <th class="desc">FOLIO CRÉDITO</th>
          <th class="desc">CLIENTE</th>
          <th class="desc">PROMOTOR</th>
          <th class="desc">FECHA/HORA</th>
          <th>IMPORTE</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($payments as $payment)
        @php
        // $vault = $expenditure->vault;
        // $user = DB::table('users')->where('id', '=', $vault->user_id)->first();
        $debt = $payment->debt;
        $credit = $debt->credit;
        @endphp
        <tr>
          <td class="service">{{ $payment->concept }}</td>
          <td class="desc">{{ $credit->folio }}</td>
          <td class="desc">{{ $credit->firts_name }} {{ $credit->last_name }} {{ $credit->mothers_last_name }}</td>
          <td class="desc">{{ $credit->adviser }}</td>
          <td class="desc">{{ $payment->created_at }}</td>
          <td class="total">${{ number_format($payment->ammount,2) }}</td>
        </tr>
        @endforeach
        <tr>
          <td colspan="5" class="grand total">TOTAL</td>
          <td class="grand total">${{ number_format($payments->sum('ammount'),2) }}</td>
        </tr>
      </tbody>
    </table>
    <div id="notices">
      <div>NOTA:</div>
      <div class="notice">Este reporte puede variar segun el tiempo.</div>
    </div>
  </main>
  <footer>
    El reporte fue creado en el sistema de credifem.mx.
  </footer>
</body>
</html>