
<!------ Include the above in your HEAD tag ---------->
<style>
  .cont{
    position: absolute;
    left: 25%;
    
     width: 50%;
     height: 50%;
  }
  .panel-default{
    border-radius: 10px;
    border-color: black;
  }
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

.panel-body { padding: 0px; }

.panel-heading { background-color: #ffffff !important; color: rgb(40, 105, 133) !important; }
.floating-button {
  text-decoration: none;
  display: inline-block;
  width: 140px;
  height: 45px;
  line-height: 45px;
  border-radius: 45px;
  margin: 10px 20px;
  font-family: 'Montserrat', sans-serif;
  font-size: 11px;
  text-transform: uppercase;
  text-align: center;
  letter-spacing: 3px;
  font-weight: 600;
  color: #524f4e;
  background: white;
  box-shadow: 0 8px 15px rgba(0, 0, 0, .1);
  transition: .3s;
}
.floating-button:hover {
  background: #2EE59D;
  box-shadow: 0 15px 20px rgba(46, 229, 157, .4);
  color: white;
  transform: translateY(-7px);
}
.text-field {
  margin-bottom: 1rem;
}
/* стили для label */
.text-field__label {
  display: block;
  margin-bottom: 0.25rem;
}
/* стили для input */
.text-field__input {
  
  width: 80%;
  height: calc(2.25rem + 2px);
  padding: 0.375rem 0.75rem;
  font-family: inherit;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #bdbdbd;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.test{
  font-size: 14px;
 color: #fff;
 background: #00b4ef;
 border-radius: 30px;
 padding: 10px 25px;
 border: none;
 text-transform: capitalize;
 transition: all 0.5s ease 0s;
}
</style>
<body class="cont" style="border-radius: 10px solid black;">
<div class="container" >
    <div class="row" >
        <div class="panel panel-default">
          <div><div style="position: absolute; "><a href="/logout" class="test" style="position: absolute; margin-left: 700px; margin-top: 10px; background-color: rgb(48, 59, 57); color: cornsilk;">logout</a></div>
          <div class="panel-heading" style="text-align: center; height: 30px; padding-top: 10px;">My chat </div>
        </div>
          <div class="panel-body">
            <div id="container" class="container1">
                

            </div>
            <form action="/" id="form">
              {{ method_field('PUT') }}
              {{ csrf_field() }}
            <div class="panel-footer">
                 <div class="input-group" >
                  
                  <input name="message_text" class="text-field__input"  id="text" type="text" placeholder="text" >
                  <span class="input-group-btn" style="float: right;">
                    <button type="submit"  class="floating-button">Button</button>
                  </span>
                </div>
            </div>
          </form>
          </div>
        </div>
    </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    let elem
    function loadFromServer() {
        $.get( "/mess", function( data ) {
            elem.html( data )
        });
    }
    $(document).ajaxError(function(event,xhr,options,exc) {
        alert("something went wrong")
    })
    function refreshTicker() {
        loadFromServer()
    }
    $( document ).ready(function() {
        elem = $( "#container" )
        setInterval(loadFromServer, 500)
        loadFromServer();
    });
 

    $( "#form" ).submit(function( event ) {
 
     event.preventDefault();
     
     $.post( "/", $( "#form" ).serialize() );

     document.getElementById("text").value = "";
     refreshTicker()
     
    });
    

</script>