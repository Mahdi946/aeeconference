<html>

<body>

    <h1>The form enctype attribute</h1>

    <form action="{{ route('ArticleFiles.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" id="ArticleID" name="ArticleID" placeholder="ArticleID"><br><br>

        <input type="text" id="FileType" name="FileType" placeholder="FileType"><br><br>

        <input type="text" id="Description" name="Description" placeholder="Description"><br><br>

        <input type="file" name="File">

        <input type="submit" value="Submit">
    </form>

    {{-- in baraye namyesh articlefiles hast --}}
    {{--
    @foreach ($articlefiles as $articlefile)
        <div>
            <p>Description: {{ $articlefile->Description }}</p>
            <p>Type: {{ $articlefile->FileType }}</p>
            <p>Location: <a href="{{ Storage::url($articlefile->Location) }}">Download</a></p>
        </div>
    @endforeach
 --}}




    {{-- in baraye delete articlefiles hast --}}
    {{-- <form action="{{ route('ArticleFiles.destroy', $file->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this file?');">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
    </form> --}}

    

</body>

</html>
