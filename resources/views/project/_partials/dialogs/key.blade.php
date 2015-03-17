<div class="modal fade" id="key">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="fa fa-key"></i> Public SSH Key</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning">
                    <p>This key must be added to the server's <strong>.ssh/authorized_keys</strong> for each user you wish to run commands as.</p>
                    <p>The key must also be added to the <strong>Deploy Key</strong> section for the project in Gitlab.</p>
                </div>

                <pre>{{ $project->public_key }}</pre>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>