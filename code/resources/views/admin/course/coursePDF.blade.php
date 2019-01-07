<!DOCTYPE html>
<html>
<body>
<h1>Courses List   </h1>

<table border="1">
                <thead>
                  <tr>
                    <th style="width: 40px" color="solid black">Course ID</th>
                    <th width="100">Category Name</th>
                    <th width="200">Course Name</th>
                    <th width="200">Sub Title</th>
                    <!--<th>Cover Image</th>
                    
                    <th>updated_at</th> -->
               
                  
                  </tr>
                  </thead>
                  <tbody id="myTable">
                  
                  @foreach($courses as $course)
                   
                   <tr>
                    <td><b>{{$course->id}}</b></td>
                    <td><b>{{$course->category->title}}</b></td>
                    <td><b>{{$course->title}}</b></td>
                    <td><b>{{$course->subtitle}}</b></td>
                  

                    @endforeach

</body>
</html>