<form action="{{route('bank-account.store')}}" method="POST" autocomplete="off" id="regForm">
            @csrf
            <div class="row">
                <div class="col-xl-8 m-auto">
                    <div class="card shadow">
                       <div class="card-header">
                            <h4 class="text-center font-weight-bold"> Create your bank account </h4>
                       </div>

                       <div class="card-body pl-4 pr-4">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="firstName"> First Name <span class="text-danger">*</span> </label>
                                        <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First Name">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="lastName"> Last Name <span class="text-danger">*</span> </label>
                                        <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="email"> Email <span class="text-danger">*</span> </label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="phone"> Phone <span class="text-danger">*</span> </label>
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="gender"> Gender <span class="text-danger">*</span> </label>
                                        <select class="form-control" name="gender" id="gender">
                                            <option selected value="" disabled>Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="dateOfBirth"> Date of Birth <span class="text-danger">*</span> </label>
                                        <input type="date" name="dateOfBirth" id="dateOfBirth" class="form-control" placeholder="Date of Birth">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="address"> Address <span class="text-danger">*</span></label>
                                        <input type="text" name="address" id="address" class="form-control" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="city"> City <span class="text-danger">*</span></label>
                                        <input type="text" name="city" id="city" class="form-control" placeholder="City">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="state"> State <span class="text-danger">*</span> </label>
                                        <input type="text" name="state" id="state" class="form-control" placeholder="State">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="balance"> Opening balance <span class="text-danger">*</span> </label>
                                        <input type="text" name="opening_balance" id="balance" class="form-control" placeholder="Enter opening balance">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label for="bank">Bank <span class="text-danger">*</span></label>
                                            <select class="form-control" name="bank_id" id="bank">
                                                <option selected value="" disabled>Select</option>
                                                    @foreach($banks as $bank)
                                                    <option value="{{ $bank->id }}">{{ $bank->name }}</option>
                                                    @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6 offset-lg-6 text-right">
                                    <button type="submit" class="btn btn-success"> Create your account </button>
                                </div>
                            </div>

                       </div>
                    </div>
                </div>
            </div>
          </form>