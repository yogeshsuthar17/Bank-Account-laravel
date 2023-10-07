<!doctype html>
<html lang="en">
  <head>
    <title> Bank Account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container pt-3">
      <div class="container">
    <h1>All Bank Accounts</h1>
    <div>
        <div class="col ">
          <a class="btn btn-sm btn-success" href={{ route('bank-account.create') }}>Add account</a>
          <a class="btn btn-sm btn-success" href={{ route('income.index') }}>Income</a>
          <a class="btn btn-sm btn-danger" href={{ route('logout') }}>Logout</a>
        </div>
      </div>

    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Bank</th>
                <th>Opening Balance</th>
                <th>Closing Balance</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bankAccounts as $account)
            <tr>
                <td>{{ $account->id }}</td>
                <td>{{ $account->firstName }} {{ $account->lastName }}</td>
                <td>{{ $account->email }}</td>
                <td>{{ $account->phone }}</td>
                <td>{{ $account->gender }}</td>
                <td>{{ $account->address }}</td>
                <td>{{ $account->bank->name }}</td>
                <td>{{ $account->opening_balance }}</td>
                <td>{{ $account->closing_balance }}</td>
                <td>{{ $account->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
      </div>
      
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

