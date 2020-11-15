 if(sessionStorage.getItem('chat')=='close'){
  closeNav();
 }
 else if(sessionStorage.getItem('chat')=='open'){
  openNav();
 }
 else{
openNav();
}
      function openNav() {
        if(window.innerWidth<='768'){
          $('.chat_icon').css("right", "-100px");
        sessionStorage.setItem('chat', 'open');
        document.getElementById("mySidenav").style.width = "300px";
        document.getElementById("mySidenav").style.right = "0px";
        //document.getElementById("mainn").style.marginRight = "300px";
        document.getElementById("mySidenav").style.border = "1px solid #ccc";
        }
        else{
          sessionStorage.setItem('chat', 'open');
          $('.chat_icon').css("right", "-100px");
        document.getElementById("mySidenav").style.width = "300px";
        document.getElementById("mySidenav").style.right = "0px";
        document.getElementById("mainn").style.marginRight = "300px";
        document.getElementById("mySidenav").style.border = "1px solid #ccc";
        }

      }

      function closeNav() {
        sessionStorage.setItem('chat', 'close');
        $('.chat_icon').css("right", "8px");
        document.getElementById("mySidenav").style.right = "-300px";
        document.getElementById("mySidenav").style.border = "0";
        document.getElementById("mainn").style.marginRight = "0";
      } 

      // ====================
      setInterval(function() {
        var hei = $(window).height() - 230;
        var heig = hei + "px";
        $('.chat-history').css("height", heig);
    }, 10);

    $('.send_msg').click(function() {
        var mm = '<hr><div class="chat-message ">';
        mm +='<img src="http://gravatar.com/avatar/2c0ad52fc5943b78d6abe069cc08f320?s=32" alt="" width="32" height="32">';
        mm +='<div class="chat-message-content  "><span class="chat-time">13:37</span><h5><strong>Marco Biedermann</strong></h5>' + $('.msg').val(); + '</div></div>';
        $('.chat_con').append(mm);
        $('.chat-history').animate({
            scrollTop: $('.chat-history')[0].scrollHeight
        }, 700);
        $('.msg').html('');
    });
    // 