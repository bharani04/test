<?php
    $conc = new mysqli("localhost", "root", "", "form1");
    error_reporting(0);
    $id = $_GET['id'];
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $mobile = $_GET['mobile'];
    $gender = $_GET['gender'];
    $state = $_GET['state'];

   
?>

<h3>Update form</h3>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <style>
        fieldset{
           margin-right: 800px;
           padding: 30px;
           background-color: #EE867C;
           width: 50%;
           
        }

       input{
            margin: 20px;
            border-radius: 2px;
            padding: 0px 60px 0px 5px;
        }

       label{
            padding: 5px;
            
       }
       .btn{
            padding: 4px;
            background-color: grey;
            border-radius: 10px;
            float: right;
            margin: 10px;
            padding: 8px;
       }
    </style>
    <script>
        $(document).ready(function() {
            $("#information").validate({
                rules: {
                    name: "required",
                    mail: {
                    required: true,
                    mail: true
                    },
                    mobile: {
                    required: true,
                    minlength: 5
                    },
                    gender: {
                    required: true,
                    },
                    state: {
                    required: true,
                    }
                },
                messages: {
                    name: "Please enter your name",
                    email: "Please enter a valid email address",
                    mobile: {
                        required: "Please provide a mobile number",
                        minlength: "Your number must be 10 number long"
                    },
                    gender: "Please enter your gender",
                    state: "Please enter your state",
                },
            });
        });


    </script>
</head>
<body>
    <div class="container">
        <form action=" " method="GET">
            <fieldset>
                <input type="hidden" name="ID" value="<?php echo $id ?>">  
                <label for="name">Name :</label>
                <input type="text" name="name" value="<?php echo $name?>"placeholder="Name"><br>
                <label for="mail">Email :</label>
                <input type="text" name="mail" value="<?php echo $mail ?>"placeholder="Email"><br>
                <label for="mobile">Mobile :</label>
                <input type="text" name="mobile" value="<?php echo $mobile ?>"placeholder="Mobile No."><br>
                <label for="gender">Gender :</label>
                <input type="radio" name="gender"  <?php echo ($gender =='Male')? 'checked':'' ?> value="Male">Male
                <input type="radio" name="gender" <?php echo ($gender =='Female')? 'checked':'' ?> value="Female" >Female<br>
                <label for="State">State :</label>
                <select name="place" id="">
                    <option>--Select state--</option>
                    <option value="Tamil nadu" <?php echo ($state=="Tamil nadu")? 'selected':'' ?>>Tamil nadu</option>
                    <option value="Delhi" <?php echo ($state=="Delhi")? 'selected':'' ?>>Delhi</option>
                    <option value="Karnataka" <?php echo ($state=="Karnataka")? 'selected':'' ?>>Karnataka</option>
                    <option value="Kerala" <?php echo ($state=="Kerala")? 'selected':'' ?>>Kerala</option>
                </select><br>
                <input type="submit" class="btn" name="update" value="Update">
            </fieldset>

        </form>
    </div>
</body>
</html>

<?php
if($_GET['update']){
    $id = $_GET['ID'];
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $mobile = $_GET['mobile'];
    $gender = $_GET['gender'];
    $state = $_GET['place'];
    $query = "UPDATE info SET id = '$id', name = '$name', mail ='$mail', mobile = '$mobile', gender ='$gender', state='$state' WHERE id='$id'"; 
    $data = mysqli_query($conc, $query);
    header('location:index.php');
}
?>
