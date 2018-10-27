{{-- To access this file or set of alert components use code below. Note that its been registered in the app\providers\appserviceprovider.php boot method

@alerts(['type' => 'error or success or warning or info ','title'=>'What should replace your title variable'])
    You are not allowed to access this resource!
@endalerts

--}}

<!--info-->

          @if ($type == 'error')

              <!--danger-->
                  <div class="alert danger-dark" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <i class="fa fa-times-circle"></i> {{ $title }}: {{ $slot }}
                  </div>

          @elseif ($type == 'success')
             
              <!--success-->
                  <div class="alert success-dark" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <i class="fa fa-thumbs-o-up"></i> {{ $title }}: {{ $slot }}
                  </div>

          @elseif ($type == 'warning')
             
              <!--warning-->
                  <div class="alert warning-dark" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <i class="fa fa-warning"></i>{{ $title }}: {{ $slot }}
                  </div>


          @elseif ($type == 'info')
             
             <div class="alert info-dark" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <i class="fa fa-check-circle-o"></i> {{ $title }}: {{ $slot }}
                  </div>

          @else
              I don't have any alerts for you
          @endif
                  

                 

                 
                 