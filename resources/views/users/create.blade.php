@extends('welcome')

@section('content')

   <div class="container mt-5">

       <form method="" action="">
           <div class="form-group">
               <label for="exampleInputEmail1">Name</label>
               <input type="text" name="name" class="form-control name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
           </div>

           <div class="form-group">
               <label for="exampleInputEmail1">Email address</label>
               <input type="email" name="email" class="form-control email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
               <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
           </div>
           <div class="form-group">
               <label for="exampleInputPassword1">Password</label>
               <input type="password" name="password" class="form-control password" id="exampleInputPassword1" placeholder="Password">
           </div>

           <button  class="btn btn-primary save">Save</button>
       </form>

   </div>

@endsection



@section('script')

   <script>

       $(document).on('click','.save',function (e){
           e.preventDefault();
           var name=$('.name').val();
           var email=$('.email').val();
            var password=$('.password').val();

           $.ajax({
               type:'post',
               url:'{{route('userStore')}}',
               data:{
                   '_token':"{{csrf_token()}}",
                   name:name,
                   email:email,
                   password:password,
               },
               success: function() {
                   console.log('done');
                   window.location.href = "{{route('index')}}";
               },

           });

           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });
       });
   </script>

@endsection
