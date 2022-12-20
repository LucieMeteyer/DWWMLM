
<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$email = $mdp = $roles = "";
$email_err = $mdp_err = $roles_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate email
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Veuillez entrer un email valide.";
    } else{
        $email = $input_email;
    }
    
    // Validate mdp
    $input_mdp = trim($_POST["mdp"]);
    if(empty($input_mdp)){
        $mdp_err = "Veuillez entre un mot de passe correcte.";     
    } else{
        $mdp = $input_mdp;
    }
    
    // Validate roles
    $input_roles = trim($_POST["roles"]);
    if(empty($input_roles)){
        $roles_err = "Entrez un rôle correcte.";     
    } else{
        $roles = $input_roles;
    }
    
    // Check input errors before inserting in database
    if(empty($email_err) && empty($mdp_err) && empty($roles_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO users (email, motdepasse, role) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_email, $param_mdp, $param_roles);
            
            // Set parameters
            $param_email = $email;
            $param_mdp = $mdp;
            $param_roles = $roles;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Quelque chose ne va pas, veuillez réessayer ultérieurement.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Création User</h2>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $email_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Mot de Passe</label>
                            <input type="text" name="mot de passe" class="form-control <?php echo (!empty($mdp_err)) ? 'is-invalid' : ''; ?> "value="<?php echo $mdp; ?>">
                            <span class="invalid-feedback"><?php echo $address_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>

