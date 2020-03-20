@extends('fashion.header')

@section('title')
    Profile
@stop

@section('banner')
	<!-- inner banner -->
	<div class="ibanner_w3 pt-sm-5 pt-3">
		<h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
			<span>f</span>ashion
			<span>h</span>ub</h4>
	</div>
	<!-- //inner banner -->
@stop
@section('breadcrumbs')
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
@stop
@section('content')
   
      <section class="wthree-row pt-3 pb-sm-5 w3-contact" >
        <div class="container py-sm-5 pb-5"> 
        <h5 class="head_agileinfo text-center text-capitalize pb-5">
                <span>P</span>rofile</h5>  
             <div class="row">
                <div class="col-md-6 align-self-center">
                    <img src="{{ asset('images/p3.png') }}" class="img-fluid" alt="login_image" />
                </div>
                <div class="col-md-6" >
                      <?php //print_r(Auth::user()); ?>
                    <form action="" method="post">
                        
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name</label>
                            <input id="name" type="name" class="form-control" name="name" value="{{ Auth::user()->name }}"  autocomplete="name" disabled="" >
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Your Email</label>
                            <input id="email" type="email" class="form-control" value="{{ Auth::user()->email }}"  autocomplete="email" disabled="">
                        </div>
                        <div class="form-group">
                        
                      
                        <!-- <div class="right-w3l">
                            <input type="button" id="profile_edit" class="form-control" value="Edit" style="background:#f0475f;color: #fff" onclick="enable()">
                        </div> -->

                        
                    </p>

                    </form>
                    <br>
                </div>
            </div>
        </div>
    </section>
@stop
@section('script')
<script>
    function enable() {
        document.getElementById("name").disabled = false;
        document.getElementById("name").focus();
        

    }
</script>
@stop
    