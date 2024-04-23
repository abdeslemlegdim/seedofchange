<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 How To Integrate Stripe Payment Gateway</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body> 
<div>
    
    <div class="card-body">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Environmental Place</th>
            <th>Date</th>
            <th>Donation Amount</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <img src="{{ asset('images/bc.jpg') }}" alt="Beach Cleanup" width="100" height="100">
                <h4>Beach Cleanup</h4>
            </td>
            <td>May 10, 2024</td>
            <td>$10</td>
            <td>
            <form action="{{ route('session') }}" method="POST">
    @csrf
    <input type="hidden" name="productname" value="Beach Cleanup">
    <input type="hidden" name="total" value="10">
    <button type="submit" class="btn btn-primary">Donate</button>
</form>

            </td>
        </tr>
        <tr>
            <td>
                <img src="{{ asset('images/tp.jpg') }}" alt="Tree Planting Campaign" width="100" height="100">
                <h4>Tree Planting Campaign</h4>
            </td>
            <td>June 20, 2024</td>
            <td>$20</td>
            <td>
                <form action="{{ route('session') }}" method="POST">
                    @csrf
                    <input type="hidden" name="productname" value="Tree Planting Campaign">
                    <input type="hidden" name="total" value="20">
                    <button type="submit" class="btn btn-primary">Donate</button>
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <img src="{{ asset('images/rw.jpg') }}" alt="Recycling Awareness Workshop" width="100" height="100">
                <h4>Recycling Awareness Workshop</h4>
            </td>
            <td>July 5, 2024</td>
            <td>$15</td>
            <td>
                <form action="{{ route('session') }}" method="POST">
                    @csrf
                    <input type="hidden" name="productname" value="Recycling Awareness Workshop">
                    <input type="hidden" name="total" value="15">
                    <button type="submit" class="btn btn-primary">Donate</button>
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <img src="{{asset('images/wc.jpg') }}" alt="Wildlife Conservation" width="100" height="100">
                <h4>Wildlife Conservation</h4>
            </td>
            <td>August 15, 2024</td>
            <td>$25</td>
            <td>
                <form action="{{ route('session') }}" method="POST">
                    @csrf
                    <input type="hidden" name="productname" value="Wildlife Conservation">
                    <input type="hidden" name="total" value="25">
                    <button type="submit" class="btn btn-primary">Donate</button>
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <img src="{{ asset('images/ef.jpg') }}" alt="Eco-friendly Seminar" width="100" height="100">
                <h4>Eco-friendly Seminar</h4>
            </td>
            <td>September 5, 2024</td>
            <td>$12</td>
            <td>
                <form action="{{ route('session') }}" method="POST">
                    @csrf
                    <input type="hidden" name="productname" value="Eco-friendly Seminar">
                    <input type="hidden" name="total" value="12">
                    <button type="submit" class="btn btn-primary">Donate</button>
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <img src="{{ asset('images/of.jpg') }}" alt="Organic Farming Project" width="100" height="100">
                <h4>Organic Farming Project</h4>
            </td>
            <td>October 10, 2024</td>
            <td>$18</td>
            <td>
                <form action="{{ route('session') }}" method="POST">
                    @csrf
                    <input type="hidden" name="productname" value="Organic Farming Project">
                    <input type="hidden" name="total" value="18">
                    <button type="submit" class="btn btn-primary">Donate</button>
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <img src="{{ asset('images/wcc.jpg') }}" alt="Water Conservation Campaign" width="100" height="100">
                <h4>Water Conservation Campaign</h4>
            </td>
            <td>November 15, 2024</td>
            <td>$22</td>
            <td>
                <form action="{{ route('session') }}" method="POST">
                    @csrf
                    <input type="hidden" name="productname" value="Water Conservation Campaign">
                    <input type="hidden" name="total" value="22">
                    <button type="submit" class="btn btn-primary">Donate</button>
                </form>
            </td>
        </tr>
    </tbody>
</table> 
</div>
</body>
</html>

