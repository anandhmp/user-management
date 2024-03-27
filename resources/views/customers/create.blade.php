<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
</head>
<body>
    <nav>
    <a href="{{route('customers.index')}}" style="text-decoration:none; color:white">List of Customers</a>
    <a href="{{route('dashboard')}}" style="text-decoration:none; color:white">Back to Dashboard</a>
    </nav>
<div class="container">
        <h2>Create Customer</h2>
        <form method="POST" action="{{ route('customers.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="phonenumber">Phone Number:</label>
                <input type="text" name="phonenumber" id="phonenumber" class="form-control" value="{{ old('phonenumber') }}">
                @error('phonenumber')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}">
                @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create Customer</button>
            <button class="btn btn-success" >
          <a href="{{route('customers.index')}}" style="text-decoration:none; color:white">List of Customers</a>
            </button>
            <button class="btn btn-secondary" >
          <a href="{{route('dashboard')}}" style="text-decoration:none; color:white">Back to Dashboard</a>
            </button>
        </form>
    </div>

</body>
</html>