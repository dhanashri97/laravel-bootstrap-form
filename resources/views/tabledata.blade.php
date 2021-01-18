<table border="1">
    <tr>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Mobile Number</td>
        <td>Email</td>

    </tr>
    @foreach ($data as $customer)
        <tr>
        <td>{{$customer->firstName}}</td>
        <td>{{$customer->lastName}}</td>
        <td>{{$customer->mobileNumber}}</td>
        <td>{{$customer->email}}</td>

        </tr>
    @endforeach

</table>
