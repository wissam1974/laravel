<?php
//echo "welcome";
?>
 @extends('HeaderFooter')
 @section('content')

  <div class="wrapper create-pizza">
  <h1>Delete  Pizza</h1>

  <form action="/funcDelete" method="POST">
    @csrf
    <label for="id">Your ID:</label>
    <input type="text" name="id" id="id" required>       
    <input type="submit" value="Delete Order Pizza">
  </form>
</div>

@endsection








