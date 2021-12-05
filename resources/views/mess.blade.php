<style>
  /* Chat containers */
  .text-muted
{

    border-radius: 10px ;
    border-color: black;
}

.message-bubble:nth-child(even) { background-color: #ebd7d7; }

.message-bubble 
{
    padding-left: 10px;    
    
}

  
  </style>
  
  
  
      
  @foreach ($messages as $message)
    @if(Illuminate\Support\Facades\Auth::user()->email === $message->email)
      <div class="row message-bubble" style="background-color: rgb(207, 207, 248);">
    @else
      <div class="row message-bubble" style="background-color: #ebd7d7;">
    @endif
      <p class="text-muted" style="padding-top: 10px;">{{ $message->email }} {{$message->date}}</p>
      <span >{{ $message->message }}</span>
      </div>
  @endforeach
    

  