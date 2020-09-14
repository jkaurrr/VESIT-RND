@extends('boilerplate')
@section('page')
<style>
    .invalid-feedback{
        display:block;
    }
    .blue-bg {
	background-color: #224C83;
}
.yellow-bg {
	background-color: #FFAE27;
}
.contact-form-wrap {
    padding: 86px 40px;
    
}
.contact-title {
	font-size: 30px;
	line-height: 40px;
	font-weight: 900;
	color: #fff;
	margin-bottom: 40px;
}
.contact-form-style > input {
	background: #f2f2f2;
	border: none;
	height: 46px;
	padding-left: 15px;
	width: 100%;
}
.contact-form-style > textarea {
	border: none;
	background: #f2f2f2;
	border-radius: 0;
	height: 135px;
	padding: 15px;
	margin-bottom: 20px;
	width: 100%;
}
/* .form-messege.success {
	color: #1dbc51;
	font-weight: 700;
}
.form-messege.error {
	color: #ff1313;
} */

.contact-form-style .button-default {
	border: 0;
	border-radius: 50px;
	font-weight: 600;
	cursor: pointer;
}
.contact-form-style .button-default:hover {
	color: #FFAE27;
	background-color: #1F3971;
}
</style>
<div class="container col-md-12 col-lg-6 yellow-bg">
                                <div class="contact-form-wrap">
                                    @if(Session::has('flash_message'))
                                    <div class="alert alert-success">{{Session::get('flash_message')}}</div> 
                                    @endif
                                    <h2 class="contact-title">SEND US YOUR MESSAGE</h2>
                                    <form id="contact-form" action="{{ route('contact.store')}}" method="post">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="contact-form-style mb-20">
                                                    <input name="name" placeholder="Name*" type="text">
                                                    @if($errors->has('name'))
                                                        <small class="form-text invalid-feedback">{{ $errors->first('name') }} </small>
                                                    @endif
                                                </div>
                                            </div>
                                            <br/><br/><br/>
                                            <div class="col-12">
                                                <div class="contact-form-style mb-20">
                                                    <input name="phone" placeholder="Phone*" type="text">
                                                    @if($errors->has('phone'))
                                                        <small class="form-text invalid-feedback">{{ $errors->first('phone') }} </small>
                                                    @endif
                                                </div>
                                            </div>
                                            <br/><br/><br/>
                                            <div class="col-12">
                                                <div class="contact-form-style mb-20">
                                                    <input name="email" placeholder="Email*" type="email">
                                                    @if($errors->has('email'))
                                                        <small class="form-text invalid-feedback">{{ $errors->first('email') }} </small>
                                                    @endif
                                                </div>
                                            </div>
                                            <br/><br/><br/>
                                            <div class="col-md-12">
                                                <div class="contact-form-style">
                                                    <textarea name="message" placeholder="Type your message here.."></textarea>
                                                    @if($errors->has('message'))
                                                        <small class="form-text invalid-feedback">{{ $errors->first('message') }} </small>
                                                    @endif
                                                    <button class="button-default" type="submit"><span>Send Email</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </div>
@endsection