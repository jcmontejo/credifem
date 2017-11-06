	<table class="table" id="pagoss">
		<thead class="thead-inverse">
			<th style="width: 15px;">No. Cuota</th>
			<th>Fecha</th>
			<th>Total</th>
			<th>Monto</th>
			<th>Mora</th>
			<th>Pagado</th>
			<th>Adeudo</th>				
			<th>Estatus</th>
		</thead>
		<tbody>
			@foreach($payments as $payment)
			@include('credits.payment')
			@if ($payment->status == "Pendiente")
			<tr class="active">
				<td>{{ $payment->number }}</td>
				<td>{{$payment->date->format('d F Y')}}</td>
				<td> 
					@if ($payment->date == $date_now)
					<button type="button" class="btn btn-success btn-lg disabled">$ {{ number_format($payment->total, 2) }}
					</button>
					@else
					<button type="button" class="btn bg-yellow btn-lg disabled">$ {{ number_format($payment->total, 2) }}
					</button>
					@endif
					
				</td>
				<td>$ {{ number_format($payment->ammount, 2) }}</td>
				<td>$ {{ number_format($payment->moratorium, 2) }}</td>
				<td>${{ number_format($payment->payment, 2)}}</td>
				<td>${{ number_format($payment->balance, 2) }}</td>
				<td><p style="color:gray;">{{$payment->status}}</p></td>
			</tr>
			@elseif($debt->credit->periodicity == "CREDISEMANA" && $payment->status == "Parcial")
			<tr class="warning">
				<td>{{ $payment->number }}</td>
				<td>{{$payment->date->format('d F Y')}}</td>
				<td> <button type="button" class="btn btn-primary btn-lg disabled">$ {{ number_format($payment->total, 2) }}</button></td>
				<td>$ {{ number_format($payment->ammount, 2) }}</td>
				<td>$ {{ number_format($payment->moratorium, 2) }}</td>
				<td>${{ number_format($payment->payment, 2)}}</td>
				<td style="color: blue;">${{ number_format($payment->balance, 2) }}</td>
				<td><p style="color:blue;">{{$payment->status}}</p></td>
			</tr>
			@elseif($payment->status == "Parcial")
			<tr class="warning">
				<td>{{ $payment->number }}</td>
				<td>{{$payment->date->format('d F Y')}}</td>
				<td> <button type="button" class="btn btn-primary btn-lg disabled">$ {{ number_format($payment->total, 2) }}</button></td>
				<td>$ {{ number_format($payment->ammount, 2) }}</td>
				<td>$ {{ number_format($payment->moratorium, 2) }}</td>
				<td>${{ number_format($payment->payment, 2)}}</td>
				<td style="color: blue;">${{ number_format($payment->balance, 2) }}</td>
				<td><p style="color:blue;">{{$payment->status}}</p></td>
			</tr>
			@elseif($payment->status == "Vencido")
			<tr class="danger">
				<td>{{ $payment->number }}</td>
				<td>{{$payment->date->format('d F Y')}}</td>
				<td> <button type="button" class="btn btn-danger btn-lg disabled">$ {{ number_format($payment->total, 2) }}</button></td>
				<td>$ {{ number_format($payment->ammount, 2) }}</td>
				<td>$ {{ number_format($payment->moratorium, 2) }}</td>
				<td>${{ number_format($payment->payment, 2)}}</td>
				<td style="color: red;">${{ number_format($payment->balance, 2) }}</td>
				<td><p style="color:red;">{{$payment->status}}</p></td>
			</tr>
			@elseif($payment->status == "Pagado")
			<tr class="success">
				<td>{{ $payment->number }}</td>
				<td>{{$payment->date->format('d F Y')}}</td>
				<td> <button type="button" class="btn bg-default btn-lg disabled">$ {{ number_format($payment->total, 2) }}</button></td>
				<td>$ {{ number_format($payment->ammount, 2) }}</td>
				<td>$ {{ number_format($payment->moratorium, 2) }}</td>
				<td>${{ number_format($payment->payment, 2)}}</td>
				<td>${{ number_format($payment->balance, 2) }}</td>
				<td><p style="color:green;">{{$payment->status}}</p></td>
			</tr>
			@endif
			@endforeach
		</tbody>
	</table>