<div id="login" class="animate form">
    <section class="login_content">
        <form action="{{ route('login') }}" method="post">
            {{ csrf_field() }}
            <h1>Login Form</h1>
            <div>
                <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Username"
                       required=""/>
            </div>
            @if ($errors->has('email'))
                <div>
                <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
                </div>
            @endif
            <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required=""/>
            </div>
            @if ($errors->has('password'))
                <div>
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                </div>
            @endif
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label>
            </div>
            <div>
                <button type="submit" class="btn btn-default submit">Log in</button>
                <a class="reset_pass" href="{{ route('password.request') }}">Lost your password?</a>
            </div>
            <div class="clearfix"></div>
            <div class="separator">

                <p class="change_link">New to site?
                    <a href="#toregister" class="to_register"> Create Account </a>
                </p>
                <div class="clearfix"></div>
                <br/>
            </div>
        </form>
        <!-- form -->
    </section>
    <!-- content -->
</div>