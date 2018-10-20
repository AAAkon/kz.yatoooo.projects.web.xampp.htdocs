<form action="/users" method="post">
    {!! csrf_field() !!}
	<div>
		<label for="name">Name Input:</label>
		<input type="text" name="name" id="name" value="" tabindex="1" />
	</div>
	<br>
	<div>
		<label for="email">E-mail Input:</label>
		<input type="email" name="email" id="name" value="" tabindex="1" />
	</div>
	<br>
	<div>
		<label for="password">Password Input:</label>
		<input type="password" name="password" id="name" value="" tabindex="1" />
	</div>
	<br>
	<div>
		<input type="submit" value="Create" />
	</div>
</form>