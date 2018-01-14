<div id="register" class="animate form">
    <section class="login_content">
        <form action="{{ route('register') }}" method="post">
            {{ csrf_field() }}
            <h1>Create Account</h1>
            <div>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Name"
                       required=""/>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div>
                <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" required=""/>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required=""/>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation" required=""/>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div>
                <button type="submit" class="btn btn-default submit">Submit</button>
            </div>
            <div class="clearfix"></div>
            <div class="separator">

                <p class="change_link">Already a member ?
                    <a href="#tologin" class="to_register"> Log in </a>
                </p>
                <div class="clearfix"></div>
                <br/>
            </div>
        </form>
        <!-- form -->
    </section>
    <!-- content -->
</div>