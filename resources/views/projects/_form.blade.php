@csrf

<label for="">
	Título del proyecto <br>
	<input type="text" name="title" value="{{ old('title', $project->title) }}">
</label> <br>
<label for="">
	Descripción del proyecto <br>
	<textarea name="description" id="" cols="30" rows="10">{{ old('description', $project->description) }}</textarea>
</label> <br>
<label for="">
	URL del proyecto <br>
	<input type="text" name="url" value="{{ old('url', $project->url) }}">
</label> <br>

<button>{{ $btnText }}</button>