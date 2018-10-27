
<!-- Footer Scripts
============================================= -->
<script src="assets/frontend/js/jquery-2.2.4.min.js"></script>
<script src="assets/frontend/js/plugins.js"></script>
<script src="assets/frontend/js/functions.js"></script>
<!-- RS5.0 Core JS Files -->
<script type="text/javascript" src="assets/frontend/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
<script type="text/javascript" src="assets/frontend/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>

<script type="text/javascript" src="assets/frontend/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="assets/frontend/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="assets/frontend/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="assets/frontend/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="assets/frontend/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="assets/frontend/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="assets/frontend/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="assets/frontend/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/frontend/js/rsconfig.js"></script>
 <script>
        $(document).ready(function(){

            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("#messageForm").on("submit",function(e){
                e.preventDefault();
                var frmData = $(this).serialize();
                $.ajax({
                    url:"{{route('user.message')}}",
                    type:"POST",
                    data:frmData,
                })
                .done(function(data){
                    toastr.success("Thanks..  Your Message is Submitted....");
                    setTimeout(function(){
                        $("#messageForm #name").val('');
                  $("#messageForm #messageMail").val('');
                  $("#messageForm #message").val('');
                    },2000)
                })
                .fail(function(error){
                  var errors = error.responseJSON;
                  var data = errors.errors;
                  console.log(data);
                  $("#messageForm #errName").empty().append(data.name);
                  $("#messageForm #msgMail").empty().append(data.email);
                  $("#messageForm #errMessage").empty().append(data.message);
                });
            });
            
            $("#subscriberForm").on("submit",function(e){
                e.preventDefault();
                var frmData = $(this).serialize();
                $.ajax({
                    url:"{{route('subscriber.mail')}}",
                    type:"POST",
                    data:frmData,
                })
                .done(function(daat){
                    toastr.success('Thanks..  For subscribed...');
                    setTimeout(function(){
                        $("#subscriberForm #subscriberMail").val('');
                    },2000)
                })
                .fail(function(error){
                    var errors = error.responseJSON;
                    var data = errors.errors;
                    console.log(data);
                    $("#subscriberForm #subEmail").empty().append(data.email);
                    setTimeout(function(){
                        location.reload();
                        $("#subscriberForm #subEmail").empty();
                        $("#subscriberForm #subscriberMail").val('');
                    },2000)
                });
            });


        });
    </script>
</body>
</html>