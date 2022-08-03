<div class="modal fade" id="DeleteModal<?= $row['no']; ?>">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">


      <!-- Modal body -->
            <div class="modal-body">
                <div class="row jarak-modal">
                    <div class="col-12">
                        <h5 class="text-center modal-del">Are you sure?</h5>
                    </div>
                    <div class="col-12 text-center">
                        <button type="button" class="btn btn-light lebar-but" data-dismiss="modal">No</button>
                        &nbsp;&nbsp;&nbsp;
              <!--lengkapi onclick pada button yes untuk redirect ke kepegawaian/deletemebel/'.$a['id_mebel']  -->
                    <input type="submit" class="btn btn-dark lebar-but" onclick="location.href='<?= site_url('Home/delete/'.$row['no']);?> '" value="Yes" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>