<form action="{{ isset($income) ? route('income.update', $income->id) : route('income.store') }}" method="POST" autocomplete="off" id="regForm">
    @csrf
    @if(isset($income))
        @method('PUT') <!-- Add this for the update method -->
    @endif

    <div class="row">
        <div class="col-xl-8 m-auto">
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="text-center font-weight-bold">
                        {{ isset($income) ? 'Edit Income' : 'Add Income' }}
                    </h4>
                </div>

                <div class="card-body pl-4 pr-4">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="form-group">
                                <label for="bank">Bank <span class="text-danger">*</span></label>
                                <select class="form-control" name="bank_id" id="bank">
                                    <option selected value="" disabled>Select</option>
                                    @foreach($banks as $bank)
                                        <option value="{{ $bank->id }}" {{ isset($income) && $income->bank_id == $bank->id ? 'selected' : '' }}>
                                            {{ $bank->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group">
                                <label for="account_holder">Account holder <span class="text-danger">*</span></label>
                                <select class="form-control" name="user_id" id="account_holder">
                                    <option selected value="" disabled>Select</option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" {{ isset($income) && $income->user_id == $user->id ? 'selected' : '' }}>
                                            {{ $user->firstName }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="form-group">
                                <label for="amount"> Amount <span class="text-danger">*</span> </label>
                                <input type="text" name="amount" id="amount" class="form-control" placeholder="Enter amount" value="{{ isset($income) ? $income->amount : '' }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 offset-lg-6 text-right">
                            <button type="submit" class="btn btn-success">
                                {{ isset($income) ? 'Update' : 'Add' }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
