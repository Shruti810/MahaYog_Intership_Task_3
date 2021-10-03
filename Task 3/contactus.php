<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
       input[type=text],[type=email],textarea
       {
           width: 100%;
           padding: 12px;
           border: 1px solid #ccc;
           margin-top: 6px;
           margin-bottom: 16px;
           box-sizing: border-box;
       }
       input[type=submit]
       {
           background-color: #23f2Eb;
           color: white;
           padding: 12px 2opx;
           border: none;
           
       }
       .contactform
       {
           position: relative;
           border-radius: 50px;
           background-color: #f2f2f2;
           padding: 5px;
           display: block;
           margin-left: auto;
           margin-right: auto;
           margin-bottom: auto;
           margin-top: 3%;
           animation: stiky;
           animation-iteration-count: infinite;
           width: 50%;
           animation-duration: 3s;
       }
       .column
       {
           float: center;
           margin-top: 6px;
           padding: 20px;
           display: block;
       }
    </style>
    <title>Apply Now Form</title>
</head>
<body>
    <div class="contactform">
        <div style="text-align: center;">
        <h1>Apply now</h1>
    </div>
    <div class="row">
        <div class="column">
            <form action="store.php" method="post">
                <label for="First Name">First Name</label>
                <input type="text" name="firstname">

                <label for="Last Name">Last Name</label>
                <input type="text" name="lastname">

                <label for="Email">Email</label>
                <input type="email" name="email">

                <label for="Subject">Subject</label>
                <input type="text" name="subject">

                <label for="First Name">Message</label>
                <textarea name="message" style="height: 170px;"></textarea>
                <input type="submit" name="submit" value="submit">
            </form>
        </div>
    </div>
    </div>
</body>
</html>