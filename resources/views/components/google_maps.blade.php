<div class="modal fade bd-example-modal-lg" id="google_maps" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-covid m-0" role="document">
    <div class="modal-content ">
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
            <div class="googleMap  ">
                    <h2 class="py-4">Google maps location</h2>
                <iframe src="https://www.google.com/maps/embed/v1/place?q={{$property->street}}&key=AIzaSyBxKQ25JRZ3zkWcgJ5mTfmSG85CxvYtcYs"  frameborder="0" style="border:1px solid #08338F;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>