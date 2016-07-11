<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>File Upload Manager</title>
    <link rel="stylesheet" href="css/app.css" charset="utf-8">
  </head>
  <body>
    <div class = "container">
      <h3>File Upload Manager</h3>
      <form action="/newfile" enctype="multipart/form-data" method="post">
        <div class = "form-group"><input type="file" class = "form-control" name="fileUpload"></div>
        <div class = "form-group"><input type="submit" class = "btn btn-primary" value="Upload new file"></div>
        {{csrf_field()}}
      </form>
      <hr>
      <h4>Uploaded File(s)</h4>
      <table class = "table table-hover">
        <tr>
          <td>File Name</td>
          <td>Download Link</td>
        </tr>

        @foreach($Files as $file)
          <tr>
            <td>{{$file}}</td>
            <td><a href="/download/{{$file}}">Download</a></td>
          </tr>
        @endforeach
      </table>
    </div>
  </body>
</html>
