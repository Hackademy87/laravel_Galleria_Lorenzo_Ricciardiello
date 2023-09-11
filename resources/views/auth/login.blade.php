<x-layout>

<br>
<br>

<video class="video-bg" src="/pittura2.mp4" autoplay muted loop></video>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">

            <div class="add">
                <div class="add-body">
        <h1 class="text-center">Loggati</h1>


<form action="{{route('login')}}" method="POST" class="my-form">
@csrf
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" name="email" value="{{old('email')}}"class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" name="password" value="{{old('password')}}" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Accedi</button>
</form>
 </div>
</div>
</div>
</div>
</div>
</div>




</x-layout>
