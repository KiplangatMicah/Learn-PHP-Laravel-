<div>
    <h1>List Images</h1>

    <a href="upload/">Upload more files</a><br><br>
    @foreach ($imageData as $img)
    <img src="{{ url('storage/images/' . $img->path) }}" alt="Image">
    @endforeach


</div>
