<!DOCTYPE html>
<html>
<style>
table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
}
</style>
<body>
<h1>Enroll List For Course </h1>
@foreach($courses as $course)


       Course ID:{{$course->id}}  || Category Name: {{$course->category->title}}  ||  Course Name :{{$course->title}}
    
        <br>
        <br>
      
       <table>
         <thead>
            <tr>
              <th style="width: 40px" color="solid black">User Id</th>
              <th style="width: 100px">Name</th>
              <th style="width: 100px">Email</th>
              <th style="width: 100px">NIC</th>
              <th>Address</th>
              <th>city</th>
            </tr>
         </thead>
          <tbody id="myTable">
                
                 
          @foreach($course->users as $user)    
            <tr>
              <td><b>{{$user->id }}</b></td>
              <td><b>{{$user->name}}</b></td>
              <td><b>{{$user->email}}</b></td>
              <td><b>{{$user->nic}}</b></td>
              <td><b>{{$user->address1}},{{$user->address2}}</b></td>
              <td><b>{{$user->city}}</b></td>
            </tr>
            @endforeach
            </tbody>
     
     
         <table>
     
    @endforeach  
                   

</body>
</html>