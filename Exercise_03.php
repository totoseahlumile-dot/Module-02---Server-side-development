<?php 

// Task 1 - Simple budget calculator

$totalBudget = 10000;
$expenses = array("Groceries" => 2000,
    "Transportation" => 1000,
    "Entertainment" => 500);

$balance = $totalBudget - array_sum($expenses);
echo "Your remaining balance is: R" . $balance . "<br>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
    
    $age = 20;
    if ($age <= 12) {
        echo "You are a Child";
    } elseif ($age <= 17) {
        echo "You are a Teenager";
    } elseif ($age <= 64) {
        echo "You are an Adult";
    } else {
        echo "You are a Senior";
    }


// Task 3 - Simple Interest Calculator

 $principalAmount = 10000;
 $interestRate = 0.05; // 5% interest rate
 $timeInYears = 3;

 $simpleInterest = $principalAmount * $interestRate * $timeInYears;
 echo "<br> The simple interest is: R" . $simpleInterest;

 $totalAmount = $principalAmount + $simpleInterest;
 echo "<br> The total amount after " . $timeInYears . " years is: R" . $totalAmount;

 // Task 4 -Logical Operators

 $age = 18;
 $registered = true; 

 if (($age>=18 & $age <= 35) && $registered === true)
    echo "<br> Eligible to vote";

 else 
    echo "<br> Not eligible to vote";

   // Task 5
?>
 <form method="POST"> Enter your amount:
    <input type="number" name="amount" placeholder = "Enter your amount">
    <button type="submit">Submit</button>
<?php 

// Task 5 - Dynamic Discount

if ($_POST['amount']) {
    $amount = $_POST['amount'];
    $discount = 0;

    if ($amount > 1000) {
        $discount = 0.1; // 10% discount
    } elseif ($amount >= 500 && $amount <= 999) {
        $discount = 0.05; // 5% discount
    } elseif ($amount >= 250 && $amount <= 499) {
        $discount = 0.02; // 2% discount
    } else {
        $discount = 0; 
    }


    $finalAmount = $amount - ($amount * $discount);
    echo "<br> The final amount to pay after discount is: R" . $finalAmount;
}

?>
</form>
</body>
</html>