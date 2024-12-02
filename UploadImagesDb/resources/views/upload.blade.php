<div>
    <h1>Upload Images</h1>

    <form action="uploadimage" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <br>
        <button>Upload</button>
    </form>
</div>
