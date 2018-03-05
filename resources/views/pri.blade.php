@extends('home')

@section('content')
		<form role="form" method="get" action="{{ action('CitiController@price_order') }}">
			 <div class="form-group">
			  <label for="DELIVER">DELIVER</label>
			  <input type="text" class="form-control" id="DELIVER" placeholder="Введите DELIVER" name="DELIVER">
			 </div>
			 <div class="form-group">
			  <label for="PICKUP">PICKUP</label>
			  <input type="text" class="form-control" id="PICKUP" placeholder="PICKUP" name="PICKUP">
			 </div>
			 <div class="form-group">
			  <label for="WEIGHT">WEIGHT</label>
			  <input type="text" class="form-control" id="WEIGHT" placeholder="WEIGHT" name="WEIGHT">
			 </div>
			 <div class="form-group">
			  <label for="VOLUME">VOLUME</label>
			  <input type="text" class="form-control" id="VOLUME" placeholder="VOLUME" name="VOLUME">
			 </div>
			 <div class="form-group">
			  <label for="LENGTH">LENGTH</label>
			  <input type="text" class="form-control" id="LENGTH" placeholder="LENGTH" name="LENGTH">
			 </div>
			 <div class="form-group">
			  <label for="Width">Width</label>
			  <input type="text" class="form-control" id="Width" placeholder="Width" name="Width">
			 </div>
			 <div class="form-group">
			  <label for="SLAND">SLAND</label>
			  <input type="text" class="form-control" id="SLAND" placeholder="SLAND" name="SLAND">
			 </div>
			 <div class="form-group">
			  <label for="szone">SZONE</label>
			  <input type="text" class="form-control" id="szone" placeholder="szone" name="szone">
			 </div>
			 <div class="form-group">
			  <label for="SCODE">SCODE</label>
			  <input type="text" class="form-control" id="SCODE" placeholder="SCODE" name="SCODE">
			 </div>
			 <div class="form-group">
			  <label for="SREGIO">SREGIO</label>
			  <input type="text" class="form-control" id="SREGIO" placeholder="SREGIO" name="SREGIO">
			 </div>
			 <div class="form-group">
			  <label for="RLAND">RLAND</label>
			  <input type="text" class="form-control" id="RLAND" placeholder="RLAND" name="RLAND">
			 </div>
			 <div class="form-group">
			  <label for="RZONE">RZONE</label>
			  <input type="text" class="form-control" id="RZONE" placeholder="RZONE" name="RZONE">
			 </div>
			 <div class="form-group">
			  <label for="RCODE">RCODE</label>
			  <input type="text" class="form-control" id="RCODE" placeholder="RCODE" name="RCODE">
			 </div>
			 <div class="form-group">
			  <label for="RREGIO">RREGIO</label>
			  <input type="text" class="form-control" id="RREGIO" placeholder="RREGIO" name="RREGIO">
			 </div>
			 <div class="form-group">
			  <label for="PRICE">PRICE</label>
			  <input type="text" class="form-control" id="PRICE" placeholder="PRICE" name="PRICE">
			 </div>
			 
			 
 			<button type="submit" class="btn btn-success">Войти</button>
</form>
@endsection