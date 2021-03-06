<div class="top_nav">

    <div class="nav_menu">
        <nav class="" role="navigation">
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                       aria-expanded="false">
                        <img src="{{ asset('assets/admin/images/img.jpg') }}" alt="">{{ Auth::user()->name }}
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                        <li>
                            <a href="javascript:;"> Profile</a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#changePasswordModal">
                                <span>Change Password</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out pull-right"></i> Log Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>

</div>

@push('before-body-end')
<!-- Change Password Modal Begins -->
<div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form class="form-horizontal form-label-left" action="{{ route('admin.change_password') }}" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Change Password</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group" id="changePasswordCurrentPassword">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Current Password</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="password" class="form-control" name="current_password">
                        </div>
                    </div>
                    <div class="form-group" id="changePasswordNewPassword">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">New Password</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="password" class="form-control" name="new_password">
                        </div>
                    </div>
                    <div class="form-group" id="changePasswordConfirmNewPassword">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Confirm New Password</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="password" class="form-control" name="new_password_confirmation">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Change Password Modal Ends -->
<script>
    setupChangePassword('{{ route('admin.change_password') }}');
</script>
@endpush