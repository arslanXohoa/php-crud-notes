<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Notes Update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/notes(copy)/index.php/" method="post">
  <div class="mb-3">
    <input type="hidden" name="idEdit" id="idEdit">
    <label for="exampleInputTitle" class="form-label">Title</label>
    <input type="text" class="updTitle form-control" name="updTitle" id="exampleInputTitle" value="" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputDesc" class="form-label">Description</label>
    <input type="text" class="updDesc form-control" name='updDesc' value="" id="exampleInputDesc">
  </div>
  <button type="submit" name="update" class="btn btn-primary">Update</button>
</form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update changes</button>
      </div> -->
    </div>
  </div>
</div>