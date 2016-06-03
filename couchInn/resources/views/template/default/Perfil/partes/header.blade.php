
<div class="container-fluid">

            <div class="row col-lg-4 col-lg-offset-4">
                    <div class="thumbnail " style="border:transparent">
                    @if(Auth::User()->foto == null )
                        <img src="../images/user.png" width="50%" class="img-circle img-responsive " alt="">
                    @else
                        <img src="{{'../images/'.Auth::User()->foto}}" width="50%" class="img-circle img-responsive " alt="">
                    @endif
                    <div class="caption text-center">
                        <h1 class=" text-capitalize ">{{Auth::User()->nombre }}</h1>

                    </div>
                    </div>
                </div>




</div>