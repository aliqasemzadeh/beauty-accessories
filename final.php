<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $postCode = $_POST['postCode'];

    if(strlen($postCode) != 10){
        echo "Bad Code Posti";
        return 0;
    }
}
?>

<html>
<body>
<button>Connect To Gateway</button>
</body>
</html>
