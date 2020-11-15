<!-- side nav -->
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="container-fluid " style="height: 50px;  padding-top: 10px; background-color:rgb(236, 238, 239)">
        <div class="online-dot"></div><span style="color: black; font-size: .8125rem; font-weight: 400;">290 Online</span>
        <div class="chat-history">
            <div class="chat_con"></div>
        </div>
        <div class="container-fluid eem">
            <form action="#" method="post">

                <div class="input-group mb-3">

                    <input data-emojiable="true" style="height: 60px" type="text" class="form-control msg" placeholder="Message..." aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <br>
                <!-- Example single danger button -->
                <div class="row">
                    <div class="col-8">

                        <select class=" form-control-sm btn-primary">
                            <option selected>Main Room</option>
                            <option selected>Turkish Room</option>
                            <option selected>Italy Room</option>
                            <option selected>England Room</option>
                            <option selected>Usa Room</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <input type="button" value="send" class="btn btn-primary btn-sm send_msg">
                    </div>
                </div>

            </form>
        </div>
    </div>

</div>
<div class="chat_icon shadow"  onclick="openNav()"><i  class="fa fa-wechat " style="font-size:14px;"></i><b>Chat</b></div>
<!-- side nav End -->