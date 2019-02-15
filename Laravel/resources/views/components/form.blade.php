

<form method="POST">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name">
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

    <div class="form-group">
        <label for="created_at">Created at</label>
          <input type="text" class="form-control" name="created_at" id="created_at">
      </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">Example textarea</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  </form>