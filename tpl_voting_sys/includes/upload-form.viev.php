          <!-- one form -->
<div class="col-12 separator mt-lg-3"></div>
<div class="col-12 border bg-white my-5 py-5">
  <div class="container-lg mt-3">
    <div class="row gx-5 gy-3">

      <div class="col-12 py-5 text-center">
      <h5><?=$data['form-title']?></h5>
      </div>

      <div class="col-md-6 py-md-3">
        <p id="<?=$data['prefix']?>-croppie-instruction" class="">Uploading instruction if needed.</p>
        <div id="<?=$data['prefix']?>-croppie-view" class="d-none" style="">
        </div>

      </div>


      <div class="col-md-6">
        <div class="row g-0 d-flex h-100">



          <div class="col-md-6 align-self-end mb-3">
            <div class="input-group custom-file-button">
              <label class="input-group-text" for="<?=$data['prefix']?>-croppie_upload">Dodaj plik</label>
              <input type="file" class="form-control" id="<?=$data['prefix']?>-croppie_upload">
            </div>
          </div>

          <div class="col-md-6 align-self-end mb-3 px-md-3">
          <button id="<?=$data['prefix']?>-croppie_crop" class="btn btn-sm btn-primary d-none">zaakceptuj</button>
          </div>


        </div>
      </div> <!-- col 6 ends-->

    </div>
  </div>
</div>

          <!-- Modal -->
<div class="modal fade" id="<?=$data['prefix']?>-croppie_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
    <form method="POST" action="users-inc/contest-image.inc.php" enctype="application/x-www-form-urlencoded" id="upload" >
    <input type="text" id="<?=$data['prefix']?>-image_value" class="form-control form-control-sm" name="image" value="">
    <input type="hidden" class="form-control form-control-sm" name="prefix" value="<?=$data['prefix']?>">
    <input type="hidden" class="form-control form-control-sm" name="back_page" value="$this->back_page">
    <input type="hidden" class="form-control form-control-sm" name="contest_u_id" value="$this->contest_u_id">
    <input type="hidden" class="form-control form-control-sm" name="u_id" value="$this->u_id">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tak b??dzie to wygl??da??o:</h5>
      </div>
      <div class="modal-body">
        <div class="row">
            <div id="<?=$data['prefix']?>-croppie_preview" class="col-md-6">
            </div>
            <div class="col-md-6">
            <h4>Opis</h4>
              <div class="input-group">
                    <label for="photo_title" class="form-label w-100 ps-1">Tytu??
                    </label>
                    <textarea type="text" name="photo_title" class="form-control ps-1" aria-label="With textarea" rows="1" required></textarea>
              </div>
              <div class="input-group mt-md-3">
                    <label for="photo_description" class="form-label w-100 ps-1">Kr??tki opis
                    </label>
                    <textarea type="text" name="photo_description" class="form-control ps-1" aria-label="With textarea" rows="4" required></textarea>
              </div>

            </div>


        </div>   

      </div><!-- modal body ends-->
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">jeszcze nie</button>
        <button class="btn btn-sm btn-danger">zaakceptuj</button>
      </div><!-- footer-->

    </form>
    </div><!-- content-->
  </div>
</div>

          <!-- Modal -->



          <!-- one form -->