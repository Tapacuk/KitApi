@extends('home')

@section('content')
		<table class="table">
		 <thead>
				 <tr>
						 <th>Pickup</th>
						 <th>UAH</th>
						 <th>Days</th>
						 <th>Waers</th>
						 <th>{{ $price->PRICE->EXTRA[0]->name }}</th>
						 <th>{{ $price->PRICE->EXTRA[1]->name }}</th>
						 <th>{{ $price->PRICE->EXTRA[2]->name }}</th>
				 </tr>
		 </thead>
		 <tbody>
		 <tr>
				 <td>{{ $price->PRICE->PICKUP }}</td>
				 <td>{{ $price->E_RATE->UAH }}</td>
				 <td>{{ $price->DAYS }}</td>
				 <td>{{ $price->E_WAERS }}</td>
				 <td>{{ $price->PRICE->EXTRA[0]->price }}</td>
				 <td>{{ $price->PRICE->EXTRA[1]->price }}</td>
				 <td>{{ $price->PRICE->EXTRA[2]->price }}</td>
		 </tr>
		 </tbody>
 </table>
@endsection