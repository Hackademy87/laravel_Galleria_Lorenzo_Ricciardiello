<x-layout>

    <br>
    <br>

<video class="video-bg" src="/pittura2.mp4" autoplay muted loop></video>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">

            <div class="add">
                <div class="add-body">
<h1 class="text-center mb-4">Registrati</h1>
@if($errors->any())
@foreach ($errors->all() as $error)
    <div class="alert alert-danger">
      <p>{{$error}}</p>
    </div>
@endforeach
@endif


<form action="{{route('register')}}" method="POST" class="my-form">

  @csrf
<div class="mb-3">
    <label class="form-label">nome</label>
    <input type="text" name="name" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" name="email" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" name="password"  class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Conferma Password</label>
    <input type="password" name="password_confirmation" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Registrati</button>
</form>
 </div>
</div>
</div>
</div>

</div>
</div>


</x-layout>
