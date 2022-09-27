<div class="modal fade" id="mdl_resume" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width:830px;">
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title">{{__('modals.cv.title')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                    <embed src="{{URL::asset('files/cv-'.Config::get('app.locale')). '.pdf'}}" width="800" height="375" frameborder="0">
                    </embed>

            </div>
        </div>
    </div>
</div>
