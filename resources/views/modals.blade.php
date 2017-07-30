<!-- Modal -->
<div id="modal-edit" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit</h4>
      </div>
      <div class="modal-body">
        <form class="form-group">
          <label for="id">ID</label>
          <input type="text" class="form-control" id="state-id" disabled>
          <label for="name">Name</label>
          <input type="text" class="form-control" id="state-name">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="update btn btn-success" data-dismiss="modal">Update</button>
      </div>
    </div>
  </div>
</div>

<div id="modal-delete" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete</h4>
      </div>
      <div class="modal-body">
        <p>Sure you want to delete this data with ID : <strong><span id="del-id"></span></strong>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="delete btn btn-danger" data-dismiss="modal">Delete</button>
      </div>
    </div>
  </div>
</div>