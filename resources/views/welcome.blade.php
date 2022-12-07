<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=l">
    <title>Form Login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
</head>
<body>
<div class="container">
        <div class=" text-center mt-5 ">
            <h2>Peminjaman Laptop</h2>
        </div>
        

    
    <div class="row ">
     
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
            <div class = "container">
                <form id="contact-form" role="form">
            <div class="landing py-3 "><b>Laptop Landing</b></div>
            <p class="py-0">New data</p>
            <hr>
            <div class="landing py-2"><b>Please fill all the input with the right value</b></div>
            <p class="mt-4">Form Input</p>
            <hr>
            
            <div class="controls">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_name">Name *</label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your name" required="required" data-error="Firstname is required.">
                            
                        </div>
                    </div>
                </div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="form_message">Purpose</label>
            <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea>
            </div>
</div>
<div class="col-md-12">
    <div class="form-group">
            <label for="form_message">Keterangan</label>
            <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea>
            </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">NIS</label>
                            <input id="form_email" type="number" name="number" class="form-control" placeholder="Please enter your NIS" required="required" data-error="Valid email is required.">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">Rayon</label>
                            <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                <option value="" selected disabled>--Select Your Rayon--</option>
                                <option >Ciawi 1</option>
                                <option >Ciawi 2</option>
                                <option >Ciawi 3</option>
                                <option >Ciawi 4</option>
                                <option >Ciawi 5</option>
                                <option >Cibedug 1</option>
                                <option >Cibedug 2</option>
                                <option >Cibedug 3</option>
                                <option >Cicurug 1</option>
                                <option >Cicurug 2</option>
                                <option >Cicurug 3</option>
                                <option >Cicurug 4</option>
                                <option >Cicurug 5</option>
                                <option >Cicurug 6</option>
                                <option >Cicurug 7</option>
                                <option >Cisarua 1</option>
                                <option >Cisarua 2</option>
                                <option >Cisarua 3</option>
                                <option >Cisarua 4</option>
                                <option >Cisarua 5</option>
                                <option >Cisarua 6</option>
                                <option >Tajur 1</option>
                                <option >Tajur 2</option>
                                <option >Tajur 3</option>
                                <option >Tajur 4</option>
                                <option >Tajur 5</option>
                                <option >Sukasari 1</option>
                                <option >Sukasari 2</option>
                                <option >Sukasari 3</option>
                                <option >Wikrama 1</option>
                                <option >Wikrama 2</option>
                            </select>
                    </div>
                </div>
                    <div class="row">
                 </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-dark btn-send  pt-2 btn-block" value="Send Message" >                    
                </div>
                </div>
                </div>         
            </form>
        </div>
            </div>
    </div>
    </div>
</div>
</div>

   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>