@extends('user.dashboard.layout')
@section('profile_active', 'active')
@section('content')



    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Profile</h4>

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bx bx-bell me-1"></i>
                            Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bx bx-link-alt me-1"></i> Connections</a>
                    </li>
                </ul>
                <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <!-- Account -->
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="../assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded" height="100"
                                width="100" id="uploadedAvatar" />
                            <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                    <span class="d-none d-sm-block">Upload new photo</span>
                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                    <input type="file" id="upload" class="account-file-input" hidden
                                        accept="image/png, image/jpeg" />
                                </label>
                                <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                    <i class="bx bx-reset d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Reset</span>
                                </button>

                                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST" onsubmit="return false">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input class="form-control" type="text" id="firstName" name="firstName"
                                        value="{{ Auth::user()->first_name }}" disabled />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input class="form-control" type="text" name="lastName" id="lastName"
                                        value="{{ Auth::user()->last_name }}" disabled />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input class="form-control" type="text" id="email" name="email"
                                        value="{{ Auth::user()->email }}" disabled />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="organization" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="organization" name="username"
                                        value="{{ Auth::user()->username }}" disabled />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="phoneNumber" name="phoneNumber" class="form-control"
                                            value="{{ Auth::user()->phone }}" disabled />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="address" class="form-label">Total Group</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        value="{{ Auth::user()->total_group }}" disabled />
                                </div>
                            </div>
                            {{-- <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                            </div> --}}
                        </form>
                    </div>

                    <!-- /Account -->
                    <?php
                    $url = base64_encode(Auth::user()->username);
                    ?>
                    <div class="card-body text-center">
                        <h1 for="address" class="form-label ">Share Your Link</h1>
                        <input type="text" class="form-control" id="copyurl" name="address"
                            value="{{ route('refferal.reg', $url) }}" disabled />
                        <br>

                        <div class="form-control">
                            <a class="btn btn-success"
                                href="https://api.whatsapp.com/send?text={{ route('refferal.reg', $url) }}"><i
                                    class="fa fa-whatsapp p-2" style="font-size:48px;"></i></a>
                            <a class="btn btn-success"
                                href="https://www.facebook.com/sharer.php?u={{ route('refferal.reg', $url) }}"><i
                                    class="fa fa-facebook p-2" style="font-size:48px;"></i></a>
                            <button class="btn btn-success" onclick="myFunction()"><i class="fa fa-copy p-2"
                                    style="font-size:48px;"></i></button>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <h5 class="card-header">Delete Account</h5>
                    <div class="card-body">
                        <div class="mb-3 col-12 mb-0">
                            <div class="alert alert-warning">
                                <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                                <p class="mb-0">Once you delete your account, there is no going back. Please be certain.
                                </p>
                            </div>
                        </div>
                        <form id="formAccountDeactivation" onsubmit="return false">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="accountActivation"
                                    id="accountActivation" />
                                <label class="form-check-label" for="accountActivation">I confirm my account
                                    deactivation</label>
                            </div>
                            <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- / Content -->
    {{-- copy clipboard code  --}}
    <script>
        function myFunction() {
            var copyText = document.getElementById("copyurl");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
        }
    </script>
    {{-- copy clipboard code  --}}





@endsection()
