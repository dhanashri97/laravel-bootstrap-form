<table border="1">
    <tr>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Mobile Number</td>
        <td>Email</td>

    </tr>
    @foreach ($data as $customer)
        <tr>
        <td>{{$customer->firstname}}</td>
        <td>{{$customer->lastname}}</td>
        <td>{{$customer->mobilenumber}}</td>
        <td>{{$customer->email}}</td>

        </tr>
    @endforeach

</table>
