<style>
#message-alert
{
  position: fixed;
    top: 10px;
    right: 15%;
    margin-right: 50px;
    margin-left: 40%;
    width: 40rem;
    z-index: 9999;
}
</style>

  <div class="container" id="message-alert">
    @if(count($errors) > 0)
    <div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    </ul>
    </div>
    @endif
    @if(\Session::has('success'))
    <div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <p>{{ \Session::get('success') }}</p>
    </div>
    @endif
    @if(\Session::has('error'))
    <div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <p>{{ \Session::get('error') }}</p>
    </div>
    @endif
</div>

<script>    window.setTimeout(function() {
  $(".alert").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove(); 
  });
  }, 60000);
  </script>