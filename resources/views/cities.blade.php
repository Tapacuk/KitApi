@extends('home')

@section('content')
		<table class="table">
		 <thead>
				 <tr>
						 <th>ID</th>
						 <th>Name</th>
						 <th>Country</th>
						 <th>TZONEID</th>
						 <th>Region</th>
						 <th>TZONE</th>
						 <th>SR</th>
						 <th>OC</th>
						 <th>TP</th>
						 <th>SP</th>
				 </tr>
		 </thead>
			@foreach($cities as $city)
		 <tbody>
		 <tr>
				 <td>{{ $city->ID }}</td>
				 <td>{{ $city->NAME }}</td>
				 <td>{{ $city->COUNTRY }}</td>
				 <td>{{ $city->TZONEID }}</td>
				 <td>{{ $city->REGION }}</td>
				 <td>{{ $city->TZONE }}</td>
				 <td>{{ $city->SR }}</td>
				 <td>{{ $city->OC }}</td>
				 <td>{{ $city->TP }}</td>
				 <td>{{ $city->SP }}</td>
		 </tr>
		 </tbody>
		 @endforeach
 	</table>
@endsection