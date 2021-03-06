@section('content')
<div class='container'>
    <div class='col-sm-8 col-sm-offset-2' >
        <div class='row'>
            <div class="well">
                <h2>Already Registered? Please log in below.</h2>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            Forget your password
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">login</button>
                </form>
            </div>
        </div>
    </div>


    <div class='col-sm-8 col-sm-offset-2' >
        <div class='row'>
            <div class="well">
                <h2>Registered Form. Please Register in below.</h2>
                {!! Form::open(['url' => '/save-customer','method'=>'post']) !!}
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" name="first_name"  aria-describedby="emailHelp" placeholder="Full Name">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" class="form-control"  name="last_name"  aria-describedby="emailHelp" placeholder="Last Name">

                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input type="text" class="form-control"   name="company_name" aria-describedby="emailHelp" placeholder="Company Name">

                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control"  name="email_address" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"> Address</label>
                    <textarea type="text" class="form-control cleditor "  name="address"  aria-describedby="emailHelp" row="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Country</label>
                    <select class="form-control"  name="country">
                        <option>Country Name</option>
                        <option>Bangladesh</option>
                        <option>India</option>
                        <option>Nepal</option>
                        <option>Bhutan</option>
                    </select>

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <input type="text" class="form-control"  name="city"  aria-describedby="emailHelp" placeholder="City">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">State</label>
                    <input type="text" class="form-control"  name="state" aria-describedby="emailHelp" placeholder="State">

                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Zip/Postal code</label>
                    <input type="text" class="form-control"   name="post_zip_code" aria-describedby="emailHelp" placeholder="Zip/Postal code">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile Number</label>
                    <input type="text" class="form-control"  name="mobile_number" aria-describedby="emailHelp" placeholder="Mobile Number">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control"  name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confrim Password</label>
                    <input type="password" class="form-control"  name="confirm_password" id="exampleInputPassword1" placeholder="Confrim Password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Continue</button>

                </div>
                {!! Form::close() !!}
            </div>
        </div>



    </div>
</div>
@endsection
