<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/conflict-detection.min.js" integrity="sha512-7GbltvPUq7IRdFGoi+LQVL+KNVnVDfWcyxz9BfsGXwpOuqBysP/kPOYut4RfSipXadO8CL9oT4SzzN9aPMmeYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="https://kit.fontawesome.com/d39888f038.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('animation.css')}}">

  </head>
  <body class="">
     @yield('main')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

<script>
     const text = document.querySelector('.koko');
 const textload = () => {
     setTimeout(() => {
         text.textContent = "Order now ...";
     }, 0);
     setTimeout(() => {
         text.textContent = "Deliver fast ...";
     }, 4000);
     setTimeout(() => {
         text.textContent = "Fresh & clean ...";
     }, 8000);
 }
 textload();
 setInterval(textload, 12000);
</script>

</html>
