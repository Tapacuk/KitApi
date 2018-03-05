@extends('home')

@section('content')
	<table class="table">
		 <thead>
				 <tr>
						 <th>ZA</th>
						 <th>NM</th>
				 </tr>
		 </thead>
			@foreach($services as $service)
		 <tbody>
		 <tr>
				 <td>{{ $service->ZA }}</td>
				 <td>{{ $service->NM }}</td>
		 </tr>
		 </tbody>
		 @endforeach
 </table>
@endsection