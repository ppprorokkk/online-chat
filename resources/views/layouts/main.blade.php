
<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<title>@yield('title')</title>

<style>
/* Demo Background */
body{background:url(/images/bg/bg-6.png)}

/* Form Style */
.form-horizontal{
 background: #fff;
 padding-bottom: 40px;
 border-radius: 15px;
 text-align: center;
}
.form-horizontal .heading{
 display: block;
 font-size: 35px;
 font-weight: 700;
 padding: 35px 0;
 border-bottom: 1px solid #f0f0f0;
 margin-bottom: 30px;
}
.form-horizontal .form-group{
 padding: 0 40px;
 margin: 0 0 25px 0;
 position: relative;
}
.form-horizontal .form-control{
 background: #f0f0f0;
 border: none;
 border-radius: 20px;
 box-shadow: none;
 padding: 0 20px 0 45px;
 height: 40px;
 transition: all 0.3s ease 0s;
}
.form-horizontal .form-control:focus{
 background: #e0e0e0;
 box-shadow: none;
 outline: 0 none;
}
.form-horizontal .form-group i{
 position: absolute;
 top: 12px;
 left: 60px;
 font-size: 17px;
 color: #c8c8c8;
 transition : all 0.5s ease 0s;
}
.form-horizontal .form-control:focus + i{
 color: #00b4ef;
}
.form-horizontal .fa-question-circle{
 display: inline-block;
 position: absolute;
 top: 12px;
 right: 60px;
 font-size: 20px;
 color: #808080;
 transition: all 0.5s ease 0s;
}
.form-horizontal .fa-question-circle:hover{
 color: #000;
}
.form-horizontal .main-checkbox{
 float: left;
 

}
.form-horizontal .main-checkbox label{
 width: 20px;
 height: 20px;
 position: absolute;
 top: 0;
 left: 0;
 cursor: pointer;
}
.form-horizontal .main-checkbox label:after{
 content: "";
 width: 10px;
 height: 5px;
 position: absolute;
 top: 5px;
 left: 4px;
 border: 3px solid #fff;
 border-top: none;
 border-right: none;
 background: transparent;
 opacity: 0;
 -webkit-transform: rotate(-45deg);
 transform: rotate(-45deg);
}
.form-horizontal .main-checkbox input[type=checkbox]{
 visibility: hidden;
}
.form-horizontal .main-checkbox input[type=checkbox]:checked + label:after{
 opacity: 1;
}
.form-horizontal .text{
 float: left;
 margin-left: 7px;
 line-height: 20px;
 padding-top: 5px;
 text-transform: capitalize;
}
.form-horizontal .btn{
 
 font-size: 14px;
 color: #fff;
 background: #00b4ef;
 border-radius: 30px;
 padding: 10px 25px;
 border: none;
 text-transform: capitalize;
 transition: all 0.5s ease 0s;
}
@media only screen and (max-width: 479px){
 .form-horizontal .form-group{
 padding: 0 25px;
 }
 .form-horizontal .form-group i{
 left: 45px;
 }
 .form-horizontal .btn{
 padding: 10px 20px;
 }
}
</style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.1/examples/sign-in/signin.css" rel="stylesheet">
</head>
<body class="text-center">
@yield('main')
</body>
</html>
