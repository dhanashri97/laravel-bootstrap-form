<table border="1">
    <tr>
        <td>First Nmae</td>
        <td>Last Name</td>
        <td>Mobile Number</td>
        <td>Email</td>
        
    </tr>
    @foreach ($collection as $customer)
        <tr>
        <td>{{$submit['first-name']}}</td>
        <td>{{$submit['last-name']}}</td>
        <td>{{$submit['mobile-number']}}</td>
        <td>{{$submit['email']}}</td>
            
        </tr>
    @endforeach
   
</table>