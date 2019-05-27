<div class="container message-space shadow">
    <div class="row header">
        <div class="col col-12"><button class="btn" id="close-dialog-form"><span class="fa fa-arrow-left fa-fw"aria-hidden="true"></span></button><img class="rounded-circle  avatar"
                src="https://bootdey.com/img/Content/avatar/avatar1.png" id="dialog_user_photo">
            <p id="dialog-sender"></p>
        </div>
    </div>
    <div class="row history">
        <div class="container-fluid dialog-history">            
        </div>
    </div>
    <div class="row input-dialog-reply input-reply">
        <form action="javascript:void(null);" onsubmit="sendDialogMessage()" id="dialogReplyForm" method="POST">
            <div class="input-group">
                <input type="text" class="form-control input-message" name="dialogReply" id="dialogReply"
                    placeholder="Введите ваше сообщение..." autocomplete="off" >
                <div class="input-group-append">
                    <button class="btn form-control send-chat" type="submit" name="send-dialog-chat" id="send-dialog-chat"
                        data-touserid="" disabled><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
                </div>
            </div>
        </form>
    </div>
</div>