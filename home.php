<?php
require_once 'assets/php/header.php';
 ?>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
       <?php if($verified=='Not Verified!'): ?>
         <div class="alert alert-danger alert-dismissible text-center mt-2 m-0">
           <button type="button" class="close" data-dismiss="alert">&times;</button>
           <strong>Your E-mail is not verified! we have sent you an email verification link on your email, check and verify now</strong>
         </div>
      <?php endif; ?>
      <h4 class="text-center text-primary mt-2">Write your notes here and access Anytime anywhere</h4>
    </div>

  </div>
  <div class="card border-primary">
    <h5 class="card-header bg-primary d-flex justify-content-between">
      <span class="text-light lead align-self-center">All notes</span>
      <a href="#" class="btn btn-light" data-toggle='modal' data-target="#addNoteModal"><i class="fas fa-plus-circle fa-lg"></i>&nbsp;Add New note</a>
    </h5>
    <div class="card-body">
      <div class="table-responsive" id="showNote">
      </div>
    </div>
  </div>

</div>

<!-- Start add new Note model  -->
<div class="modal fade" id="addNoteModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title text-light">Add New Note</h4>
        <button type="button"class="close text-light" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body">
        <form id="add-note-form" action="#" method="post" class="px-3">
          <div class="form-group">
            <input type="text" name="title" class="form-control form-control-lg" placeholder="Enter title" required>
          </div>
          <div class="form-group">
            <textarea name="note" class="form-control form-control-lg" rows="6" placeholder="Write your note here....." required></textarea>

          </div>
          <div class="form-group">
            <input type="submit" name="addNote" value="Add Note" id="AddNoteBtn" class="btn btn-success btn-block btn-lg">
          </div>

        </form>


      </div>

    </div>

  </div>

</div>

<!-- End edit model -->

<!-- Start add new Note model -->
<div class="modal fade" id="editNoteModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h4 class="modal-title text-light">Edit Note</h4>
        <button type="button"class="close text-light" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body">
        <form id="edit-note-form" action="#" method="post" class="px-3">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <input type="text" name="title" class="form-control form-control-lg" id="title" placeholder="Enter title" required>
          </div>
          <div class="form-group">
            <textarea name="note" id="note" class="form-control form-control-lg" rows="6" placeholder="Write your note here....." required></textarea>

          </div>
          <div class="form-group">
            <input type="submit" name="editNote" value="Update Note" id="editNoteBtn" class="btn btn-info btn-block btn-lg">
          </div>

        </form>


      </div>

    </div>

  </div>

</div>

<!-- End Edit modal -->

<script type="text/javascript" src="extensions/jquery-3.5.1.min.js">
</script>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"> -->
<script type="text/javascript" src="extensions/bootstrap-4.5.2-dist/js/bootstrap.bundle.min.js">
</script>
<script src="extensions/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
<!-- <script type="text/javascript" src="extensions/DataTables/datatables.min.js"></script> -->
<script type="text/javascript">
  $(document).ready(function(){

  // Add new note ajax request
  $("#AddNoteBtn").click(function(e){
    if ($("#add-note-form")[0].checkValidity()) {
      e.preventDefault();
       $("#AddNoteBtn").val('Please wait....');
       $.ajax({
         url:'assets/php/process.php',
         method:'post',
         data:$("#add-note-form").serialize()+'&action=add_note',
         success:function(response){
           $("#AddNoteBtn").val('Add Note');
           $("#add-note-form")[0].reset();
           $('#addNoteModal').modal('hide');
           swal.fire({
             title: 'Note added successfully!',
             type: 'success'
           });
displayAllNotes();
         }
       });

    }
  });

  // Edit note of a user ajax request
  $("body").on("click",".editBtn",function(e){
    e.preventDefault();
    edit_id=$(this).attr('id');
    $.ajax({
      url:'assets/php/process.php',
      method:'post',
      data:{ edit_id:edit_id},
      success:function(response){
        data=JSON.parse(response);
      $("#id").val(data.id);
      $("#title").val(data.title);
      $("#note").val(data.note);
      }
    });
  });
  // Update note of a user ajax request
  $("#editNoteBtn").click(function(e){
    if($("#edit-note-form")[0].checkValidity()){
      e.preventDefault();

      $.ajax({
        url:'assets/php/process.php',
        method:'post',
        data: $("#edit-note-form").serialize()+"&action=update_note",
        success:function(response){
          console.log(response);
        }
      }),

    }
  });

  displayAllNotes();
  // Display all notes of a user
  function displayAllNotes(){
    $.ajax({
      url:'assets/php/process.php',
      method:'post',
      data:{
        action: 'display_notes'},
        success:function(response){
      $('#showNote').html(response);
      }
    });
}

  });
</script>


     </body>
     </html>
