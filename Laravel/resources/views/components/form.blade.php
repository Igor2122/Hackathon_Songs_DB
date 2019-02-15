

<form action="/" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name">
    </div>

    <div class="form-group">
      <label for="author">Author</label>
        <input type="text" class="form-control" name="author" id="author">
    </div>

    <div class="form-group">
      <label for="link">Link</label>
        <input type="text" class="form-control" name="link" id="link">
    </div>

    <div class="form-group">
      <label for="genre">Genre</label>
      <select class="form-control" id="genre" name="genre">
        <option>Hip Hop</option>
        <option>Rock</option>
        <option>Country</option>
        <option>Classic</option>
        <option>Jazz</option>
      </select>
    </div>

    {{-- <div class="form-group">
        <label for="created_at">Created at</label>
          <input type="text" class="form-control" name="created_at" id="created_at">
      </div> --}}

    <input type="submit" value="Add">
  </form>